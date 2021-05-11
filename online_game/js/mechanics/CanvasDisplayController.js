class CanvasDisplayController{
    Lock = false;

    MenuControl;
    DataControlGame;
    Posiciones = [];
    StateMachine;
    Sincro;


    constructor(_DataControlGame, _ArrayPosiciones, _MenuControl, _StateMachine)
    {

            _ArrayPosiciones.forEach(element => {  this.Posiciones.push(element); });
            this.DataControlGame = _DataControlGame;
            this.MenuControl = _MenuControl;
            this.StateMachine = _StateMachine


            setTimeout(s=>{ // le doy un tiempo a aparecer las cosas;

                for (var a=0; a < this.DataControlGame.GameCards.length; a++) {
        
                    this.DataControlGame.GameCards[a].obj = 
        
                       this.CrearItemCards(
                        this.DataControlGame.GameCards[a].tipo, 
                        this.DataControlGame.GameCards[a].id, 
                        this.DataControlGame.GameCards[a].titulo, 
                           a
                       )
                }  

                this.ColocarCards();

            }, 600);
            
        
    }


    ColocarCards(){

        this.Posiciones[0].innerHTML = "";

        for (var a=0; a < this.DataControlGame.GameCards.length; a++){
            
            if (this.Look){
                this.DataControlGame.GameCards[a].obj.className = "off";
            } else {
                this.DataControlGame.GameCards[a].obj.className = "draggable";
            }
            
            
            if (this.DataControlGame.GameCards[a].pos != 0){ //<= subjetivo -- == exacto
                this.Posiciones[parseInt(this.DataControlGame.GameCards[a].pos)].appendChild(this.DataControlGame.GameCards[a].obj);
                if (this.DataControlGame.GameCards[a].tipo != this.DataControlGame.IdPartidaActiva.SprintAct) 
                {this.DataControlGame.GameCards[a].obj.className = "off"}
            } 
            
            if (this.DataControlGame.GameCards[a].tipo == this.DataControlGame.IdPartidaActiva.SprintAct && this.DataControlGame.GameCards[a].pos == 0){ //<= subjetivo -- == exacto
                
                this.Posiciones[parseInt(this.DataControlGame.GameCards[a].pos)].appendChild(this.DataControlGame.GameCards[a].obj);
            }
            
            
        }

    }

    ActualizarCards(){

        this.DataControlGame.GameCards.map((d)=>{
                        
            var carta = d.id;
            
            if (this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta})){
                if(this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).pos != d.pos){
                    d.pos = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).pos;

                    d.opcion = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).opcion;
                    
                    console.log(d.opcion + "---> " +  d.pos)
                    } else {d.opcion = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).opcion;}
            } else {
                d.pos = "0";
        
            }
            
        });
    }

    CrearItemCards (tipo, id, titulo, i) {
    
        var titulo = (titulo.length > 15) ? titulo.substring(0,15) +"..." :  titulo;

        var Printer = '<div class="draggable" id="'+id+'" style="z-index:3002;background-color:'+this.StateMachine.GetSprintColor([parseInt(tipo)])+'">'+
                      '<div class="interItem" style="z-index:1" style="overflow:hidden">'+
                          '<div class="interIMG">'+
                              '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                                  '<img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEf717d23028" alt="">'+
                              '</a>'+
                          '</div>'+
                          '<div class="interText" style="z-index:1">'+
                              '<span class="">'+titulo+'<br></span>'+
                              '</div>'+
                          '</div>'+
                      '</div>';

  
    var obj = document.createElement('div');
    obj.innerHTML = Printer;
    
    return obj.firstChild
    
    }
}