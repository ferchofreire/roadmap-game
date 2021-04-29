class DataControl{

        GameCards;
        IdPartidaActiva; // Partida ID
        MaxSprints;//":"6",
        tm_desde;//":"19:26:12",
        tm_hasta;//":"19:22:20",
        timestamp;//":"19:02:20",s
        limit_time;//":"00:20:00",
        SprintAct;//":"2",
        MovLimit;//":"4,4,4,4,4,4",
        RealTimeData; // SincroData
        Sprint;

        constructor(_RealTimeData){
            this.RealTimeData = _RealTimeData;
        }
    
}


class Sincronizacion{

    ObjDataControl;
    EventSync;
    StateMachineControl;
    Cronometro;
    MenuControl;

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
            this.ObjDataControl.Sprint = parseInt(IdPartidaActiva.SprintAct);
            BasePanel(0);

            this.TickSincro (this.StateMachineControl, this.ObjDataControl);
            this.Cronometro.StartCrono() // Start Crono

        })
    }

    TickSincro (_statemachine, _datacontrol) {

            // Tick de Sincronización de Cartas:
            
            this.EventSync = new EventSource("../back/routes.php?f=tick&p="+_partid+"&g="+_phpid);

                this.EventSync.onmessage = function(event) {
            
                    _datacontrol.RealtimeData = JSON.parse(event.data);
                    _datacontrol.IdPartidaActiva.tm_desde = _datacontrol.RealtimeData[2].desde
                    _datacontrol.IdPartidaActiva.tm_hasta = _datacontrol.RealtimeData[2].hasta
                    
            // Actualizamos Cartas:

               //CanvasHandler.ActualziarCards();

               _statemachine.CheckSprints();

        }
    
    }
}