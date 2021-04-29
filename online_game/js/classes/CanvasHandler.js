class CanvasHandler{

    DataControlGame;
    constructor(_DataControlGame){
        this.DataControlGame = _DataControlGame;
    }


    ActualizarCards(){

        this.DataControlGame.game_cards.map((d)=>{
                        
            carta = d.id;
            
            if (this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta})){
                if(RealtimeData[0].find((s)=>{return s.card === carta}).pos != d.pos){
                    d.pos = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).pos;

                    d.opcion = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).opcion;
                    
                    console.log(d.opcion + "---> " +  d.pos)
                    } else {d.opcion = this.DataControlGame.RealtimeData[0].find((s)=>{return s.card === carta}).opcion;}
            } else {
                d.pos = "0";
        
            }
            
        });
    }
}