// Requiere Numeral.js

class Cronometro{

    Look = false;

    CheckPoint = {desde:'00:00:00', hasta:'00:20:00'}
    TimeOutCheckPoint;
    TransursoCheckPoint;

    MenuBarControl;
    Grupo;
    Partida;

    DataControl;

    constructor(_MenuBarControl, _Grupo, _Partida, _DataControl){

        this.MenuBarControl = _MenuBarControl
        this.Grupo = _Grupo;
        this.Partida = _Partida;
        this.DataControl = _DataControl;

    }

    RunningCheck(){

    	this.Look = false;
        this.MenuBarControl.MenuCartasDisponibles(true);
        this.MenuBarControl.AnimacionRunners(true);
	
	    clearInterval(this.TimeOutCheckPoint)
	    this.TransursoCheckPoint = numeral(this.CheckPoint.hasta);
	
         this.TimeOutCheckPoint = setInterval(()=>{
                
                    this.TransursoCheckPoint.subtract(1);
                    this.MenuBarControl.TimeViewer.children[0].children[0].children[1].innerText = this.TransursoCheckPoint.format('00:00:00')
                
                    if (this.DataControl.RealtimeData[1][0].confirmacion != "ok") {

                        this.MenuBarControl.AnimacionRunners(true);  // Mostramos runners
                    
                    } 

                    if (this.TransursoCheckPoint._value <= 0){
                        clearInterval(this.TimeOutCheckPoint)
                        this.TransursoCheckPoint = "";
                        this.Look = true;
                        this.MenuBarControl.Menu();
                        this.MenuBarControl.MenuCartasDisponibles(false);

                        //VariableCompetitiva = 0

                        this.MenuBarControl.AnimacionRunners(false); // quita animacion mini runners;


                        fetch('../back/routes.php?f=resetTime&id='+this.Partida);
                        // (parseInt(IdPartidaActiva.SprintAct) + 1).toString();
                        fetch("../back/routes.php?f=ConfirmarCanvas&g="+this.Grupo+"&p="+this.Partida+"&s="+this.DataControl.IdPartidaActiva.SprintAct)
                        
                        
                        if (this.DataControl.IdPartidaActiva.maxsprints == this.DataControl.IdPartidaActiva.SprintAct){
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
                                //EstadosResultado(game_cards);
                                
                            //pn(1);
                            
                        } else {
                            //EstadosResultado(game_cards);
                        }
                    }
                    
                    
                },1000)
	
		
	
        }

    StartCrono(){
        var a = numeral(DataControlGame.IdPartidaActiva.tm_desde)
		var b = numeral(DataControlGame.IdPartidaActiva.tm_hasta)
		
			if (a._value < b._value){

				b.subtract(a._value)
				this.CheckPoint.hasta = b.format("00:00:00");
				this.RunningCheck();
				
			}
        }
}