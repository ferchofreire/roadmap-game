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

    constructor(_DataControl, _StateMachineControl){

        this.ObjDataControl = _DataControl;
        this.StateMachineControl = _StateMachineControl;


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

            this.TickSincro ();
            TiempoControl.StartCrono()

        })
    }

    TickSincro () {

            // Tick de Sincronización de Cartas:
            
            this.EventSync = new EventSource("../back/routes.php?f=tick&p="+_partid+"&g="+_phpid);

                this.EventSync.onmessage = function(event) {
            
                DataControlGame.RealtimeData = JSON.parse(event.data);
                DataControlGame.IdPartidaActiva.tm_desde = DataControlGame.RealtimeData[2].desde
                DataControlGame.IdPartidaActiva.tm_hasta = DataControlGame.RealtimeData[2].hasta
        
            // Actualizamos Cartas:

               //CanvasHandler.ActualziarCards();

               EstadoGeneral.CheckSprints();


               //DataControlGame.IdPartidaActiva.SprintAct = DataControlGame.RealtimeData[1][0].Sprint
               
               /*if (Sprint != parseInt(RealtimeData[1][0].Sprint))
               {
                   Sprint = 	RealtimeData[1][0].Sprint;
                   console.log("Cambio Sprint")
                   SprintStates();
               
               }*/

        }
    
    }
}