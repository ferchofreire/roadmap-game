class StateMachine {

    ArraySprintColors  // _SprintColor
    ArraySprintTipo  // _SprintsTipo
    ArraySprintLeyenda // _SprintLeyenda

    ArraySprintCardsTipo  // _CardsTipo 
    ArraySprintMecanicsOrder

    GameDataControl;
    MenuBarControl;
    Steps = -1;
    
    // Process Order:
    EsloganSprint;
    ProcessOrderN; 

    constructor(_GameDataControl, _MenuBarControl, _ArraySprintColor, _ArraySprintTipo, _ArraySprintLeyenda, _ArraySprintCardsTipo, _ArraySprintMecanicsOrder){

        
        this.GameDataControl = _GameDataControl
        this.MenuBarControl = _MenuBarControl

        this.ArraySprintColors = _ArraySprintColor
        this.ArraySprintTipo = _ArraySprintTipo
        this.ArraySprintLeyenda = _ArraySprintLeyenda
        this.ArraySprintCardsTipo = _ArraySprintCardsTipo
        this.ArraySprintMecanicsOrder = _ArraySprintMecanicsOrder
        

    }

    ProcessOrder(){

        var type = this.ArraySprintMecanicsOrder[parseInt(DataControlGame.RealtimeData[1][0].Sprint)]

        console.log("cambio de step en mecanica: " + type + " orden: "+ this.Steps)
        switch(type){
            case "Canvas":

                switch(this.Steps){

                    case 0:
                        // Cartel de Métricas

                        setTimeout(()=>{

                            NotificPopUp.ShowMessage("Metricas", "Metricas Correspondiente al Sprint en Curso.", ()=>SeccionCanvas.Activar());

                        }, 6000)
                        

                    break;
                    case 1:                        
                        // Muestra de Canvas / Tablero
                        SeccionCanvas.turnoff();
                        NotificPopUp.ShowMessage("Canvas", "El canvas ya fue enviado, espere al próximo sprint para continuar. \n Puede Visualizarlo presionando sobre \"Canvas Bussines Model\"", 
                        ()=>{
                            SeccionDashBoard.Activar();
                        });
                        

                    break;
                    case 2:
                        // Confirmación

                        
                    break;

                }
            break;

            case "5Forces":

                switch(this.Steps){

                    case 0:
                        // Mostrar Fuerza de Porter;
                        Seccion5Forces.Activar();
                        FuerzasPoter.SyncData();

                    break;
                    case 1:
                        // Cartel de Espera; 
                        Seccion5Forces.turnoff();
                        NotificPopUp.ShowMessage("Su Promedio", "Su grupo ingresa con un promedio de 10 \n\n Pronto Iniciarán Los Sprint, Aguarde.");
                    break;

                }
            break;

        }
    }

    
    CargarTitulo(){ // se usa al iniciar la sesión;

        this.MenuBarControl.SprintTitulo(
            this.ArraySprintColors[DataControlGame.IdPartidaActiva.SprintAct], 
            this.ArraySprintTipo[DataControlGame.IdPartidaActiva.SprintAct],
            this.ArraySprintLeyenda[DataControlGame.IdPartidaActiva.SprintAct]
            );
    }

    CheckOrderStepsChange(){

        if (this.Steps != parseInt(DataControlGame.RealtimeData[1][0].step))
        {
            console.log("Cambio de Step")
            this.Steps = parseInt(DataControlGame.RealtimeData[1][0].step);
            this.ProcessOrder()
        }
    }

    CheckSprints(){

        // Si hay Cambio de Sprint;
        
        
        //DataControlGame.IdPartidaActiva.SprintAct = DataControlGame.RealtimeData[1][0].Sprint

        if (DataControlGame.IdPartidaActiva.SprintAct != parseInt(DataControlGame.RealtimeData[1][0].Sprint))
        
        {
            this.ProcessOrder()

            DataControlGame.IdPartidaActiva.SprintAct = DataControlGame.RealtimeData[1][0].Sprint;
            console.log("Cambio Sprint")

            this.MenuBarControl.CartelSprint(
                this.ArraySprintColors[DataControlGame.IdPartidaActiva.SprintAct],  // _color 
                "Sprint "+ DataControlGame.IdPartidaActiva.SprintAct + " - " + this.ArraySprintTipo[DataControlGame.IdPartidaActiva.SprintAct], // _tituloBarra
                "Sprint "+ DataControlGame.IdPartidaActiva.SprintAct, // _Sprint
                this.ArraySprintLeyenda[DataControlGame.IdPartidaActiva.SprintAct], // _Eslogan
                this.ArraySprintLeyenda[DataControlGame.IdPartidaActiva.SprintAct]); // _tipoCarta


            TiempoControl.StartCrono();
            
        }

        // Si llega Al Ultimo Sprint 

        if (DataControlGame.IdPartidaActiva.maxsprints == DataControlGame.IdPartidaActiva.SprintAct){
            console.log("Partida Terminada");
            //CargarTabla();

            setTimeout(()=>{

                var Winner = document.getElementById('WEe2ca2a3b27')
                Winner.setAttribute("style", "z-index:5000;visibility:none")
                this.location.href="../admin/finaldash.php?g="+_phpid;

            }, 2500)
            
                var Winner = document.getElementById('WEe2ca2a3b27')
                Winner.setAttribute("style", "z-index:5000;visibility:visible")

                VariableCompetitiva = 0;
                EstadosResultado(game_cards);
                
            pn(1);

    }

    }

    GetSprintColor(_Sprint){
        return this.ArraySprintColors[_Sprint] 
    }
}
