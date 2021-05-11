class DataControl{

        GameCards;
        IdPartidaActiva; // Partida ID
        RealtimeData; // SincroData
        Sprint;

        constructor(_RealTimeData){
            this.RealtimeData = _RealTimeData;
        }
    
}

class Sincronizacion{

    ObjDataControl;
    EventSync;
    StateMachineControl;
    Cronometro;
    MenuControl;

    CallEvents = null;

    constructor(_DataControl, _StateMachineControl, _Cronometro, _MenuControl){

        this.ObjDataControl = _DataControl
        this.StateMachineControl = _StateMachineControl
        this.Cronometro = _Cronometro;
        this.MenuControl = _MenuControl;

        // Bajamos las Primeras Cartas:

        fetch('../back/routes.php?f=tick_carga&g='+_phpid+'&p='+_partid, {
	 
        })
        
        .then(response => response.json())
          .then(data => { 
        
            console.log(data);
    
            this.ObjDataControl.GameCards=data[0];
            this.ObjDataControl.IdPartidaActiva=data[1][0];
            this.ObjDataControl.Sprint = parseInt(this.ObjDataControl.IdPartidaActiva.SprintAct);
            this.MenuControl.Spinner(false); //BasePanel(0);

            this.TickSincro (this.StateMachineControl, this.ObjDataControl, this.Cronometro, null);
            this.Cronometro.StartCrono() // Start Crono
            
            this.StateMachineControl.CargarTitulo() // Revisamos Que el titulo sea correcto
            
            

        })
    }

    Call(){
        
        if (this.CallEvents != null) {
           return this.CallEvents()
        } else {
            return "NO"
        }
        
    }


    TickSincro (_statemachine, _datacontrol, _Crono, _call) {

            // Tick de Sincronización de Cartas:

            
            
            this.EventSync = new EventSource("../back/routes.php?f=tick&p="+_partid+"&g="+_phpid);


                this.EventSync.onmessage = function(event) {

                    console.log("tick -- control")
            
                    _datacontrol.RealtimeData = JSON.parse(event.data);
                    _datacontrol.IdPartidaActiva.tm_desde = _datacontrol.RealtimeData[2].desde
                    _datacontrol.IdPartidaActiva.tm_hasta = _datacontrol.RealtimeData[2].hasta
                    
            // Actualizamos Cartas:

                 // Llamamos Funcines Variables (Mecanicas)
                 if( _call != null ){ _call(); }

               _statemachine.CheckSprints(); // Chequeamos Cambios de Sprints
               _statemachine.CheckOrderStepsChange(); // Chequeamos Cambios de Steps en Mecánicas

               _Crono.StartCrono(); // Chequeamos Tiempo.
               

        }

        
    
    }


}