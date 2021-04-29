class StateMachine {

    ArraySprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]
    ArraySprintTitle = ["Stress Test", "Business Model Patterns", "Blue Ocean Strategy", "Digital Drivers", "Business Model Test", "Metrics"]
    ArraySprintEslogan = ["Undestanding the competitive environment", 
			 "New business models ahead", "Creating new market space", 
			 "targeting value with new digital skils", "Testing innovations", 
			 "implementing business model innovation"]

    ArraySprintTypeCards = ["Trends", "Patterns", "Blue Ocean", "Digital", "Test", "Metrics"]

    GameDataControl;
    MenuBarControl;
    Steps = 0;
    
    // Process Order:
    EsloganSprint;
    ProcessOrderN;

    constructor(_GameDataControl, _MenuBarControl /*,_ArrayColores*/){

        /*this.ArrayCarteles = _ArrayCarteles;*/
        this.GameDataControl = _GameDataControl
        this.MenuBarControl = _MenuBarControl
        /*this.ArrayColores = _ArrayColores*/

    }

    ProcessOrder(Type, Order){

        switch(type){
            case "Sprint":
                switch(this.Steps){

                    case 0:
                        // Cartel de Métricas;

                    break;
                    case 1:
                        // Muestra de Canvas / Tablero;
                    break;
                    case 1:
                        // Confirmación;
                    break;

                }
            break;
            case "FiveForces":

                switch(Order){

                    case 0:
                        // Mostrar Fuerza de Porter;


                    break;
                    case 1:
                        // Cartel de Espera; 

                    break;

                }
            break;

        }
    }


    CheckSprints(){

        // Si hay Cambio de Sprint;
        
        //DataControlGame.IdPartidaActiva.SprintAct = DataControlGame.RealtimeData[1][0].Sprint

        if (DataControlGame.IdPartidaActiva.SprintAct != parseInt(DataControlGame.RealtimeData[1][0].Sprint))
        
        {
            DataControlGame.IdPartidaActiva.SprintAct = DataControlGame.RealtimeData[1][0].Sprint;
            console.log("Cambio Sprint")
            this.MenuBarControl.CartelSprint("", "", "", "", "");
            
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
}
