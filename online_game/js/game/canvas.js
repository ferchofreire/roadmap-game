Pantalla = 1;

const _KeyPartner = document.getElementById('WE_KeyPatner')
const _KeyActivities = document.getElementById('WE_KeyActivities')
const _ValueProposition = document.getElementById('WE_ValuePropositions')
const _CustomerRelationchips = document.getElementById('WE_CustomerRelationship')
const _CustomSegments = document.getElementById('WE_CustomersSegments')
const _KeyResources = document.getElementById('WE_KeyResources')
const _Channels = document.getElementById('WE_Channels')
const _CostStructure = document.getElementById('WE_CostStructure')
const _RevenueStreams = document.getElementById('WE_RevenueStreams');

if (SecCanvas == 3){
    var _Intermediearies = document.getElementById('WE_Intermediearies');
    var _Consumer = document.getElementById('WEWE_Consumer');
    var _Influencer = document.getElementById('WE_Influencer');
}

//const _Libres = document.getElementById('WE0b12853407').children[0].children[0].children[1];
const _Libres = document.getElementById('WEDisponibles');


var Look = true;

//screen.orientation.lock('landscape');

// LIMITES DE CARDS por SPRINTS



CheckMovs = (pos) => {
    
    console.log(pos)
    
    LimitMov = IdPartidaActiva.MovLimit.split(",");
    Movs = game_cards.filter((s)=>{return (s.pos !== "0" && s.tipo == IdPartidaActiva.SprintAct)}).length
    
    
    if (pos == 0){
        
        if (Movs >= parseInt(LimitMov[Sprint-1])){
            Mensaje(true, "Solo puedes usar " + LimitMov[Sprint-1] + " Card(s) para este Sprint, mejor reemplaza por otra.");
            //TickRealtime();
            return false;
            
        } else {
            return true;
        }
    } else {
        return true;
    }
}


var _Pos = [_Libres, _KeyPartner, _KeyActivities, _ValueProposition, _CustomerRelationchips, _CustomSegments, _KeyResources, _Channels, _CostStructure, _RevenueStreams];
if (SecCanvas == 3){
     _Pos = [_Libres, _KeyPartner, _KeyActivities, _ValueProposition, _CustomerRelationchips, _CustomSegments, _KeyResources, _Channels, 
        _CostStructure, _RevenueStreams, _Intermediearies, _Consumer, _Influencer ];  
} 


Limpieza = () => {
    for (i=0; i < _Pos.length ;i++){
        //_Pos[i].innerHTML = "";
    }
}

/// Emparentar Objetos:
for (a=0; a < game_cards.length; a++){
    game_cards[a].obj = CrearItemCards(game_cards[a].tipo, game_cards[a].id, game_cards[a].titulo, a)
}

ColocarCards = () => {
    
    _Pos[0].innerHTML = "";

    for (a=0; a < game_cards.length; a++){
        
        if (Look){
            game_cards[a].obj.className = "off";
        } else {
            game_cards[a].obj.className = "draggable";
        }
        
        
        if (game_cards[a].pos != 0){ //<= subjetivo -- == exacto
            _Pos[parseInt(game_cards[a].pos)].appendChild(game_cards[a].obj);
            if (game_cards[a].tipo != IdPartidaActiva.SprintAct) 
            {game_cards[a].obj.className = "off"}
        } 
        
        if (game_cards[a].tipo == Sprint && game_cards[a].pos == 0){ //<= subjetivo -- == exacto
            
            _Pos[parseInt(game_cards[a].pos)].appendChild(game_cards[a].obj);
        }
        
        
    }
    
    
}


Limpieza();
ColocarCards();


function CrearItemCards (tipo, id, titulo, i) {
    
   
          titulo = (titulo.length > 15) ? titulo.substring(0,15) +"..." :  titulo;

          Printer = '<div class="draggable" id="'+id+'" style="z-index:3002;background-color:'+SprintColors[parseInt(tipo)-1]+'">'+
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




// Nuevo Draggable Pluggin: 

const containers = document.querySelectorAll('.block');
   
   const droppable = new Draggable.Sortable(containers, { //Draggable.Droppable(containers, {
   
   draggable: '.draggable',
   dropzone: '.droppable' // droppable / dropzone
   });

   droppable.on('sortable:stop', (evt) => CardMovimiento(evt.newContainer.id, evt.dragEvent.source.id)); // evt..newContainer.id + "

   function CardMovimiento(entrada, salida){
        
        Block_Id_Pos = _Pos.findIndex((s)=>{return s.id == entrada})

        GameCard = game_cards.find((s)=>{return s.id == salida})
        

    if(CheckMovs(GameCard.pos) == true){
        if (GameCard.tipo == 3 && GameCard.pos == "0" && Block_Id_Pos != 0){
            ActCards.close();
            Panel(2, GameCard);
            GameCard.pos = Block_Id_Pos.toString();
        } else {
            SendCard(salida, Block_Id_Pos, 0)    
            GameCard.pos = Block_Id_Pos.toString();
        }
    } else {
        _Pos[0].appendChild(GameCard.obj)
    }
        

   }

objID = null;
opcionesBlueOcean = (id) => {
    objID = id;
  
    document.getElementById('WEba7a94a14b').style.display = "none"
    document.getElementById('WEe46ebcc55e').style.display = "none"
    document.getElementById('WEd0942271b8').style.display = "none"
    
    switch (id.ValorJson[0].tipo){
        case 0: // create // WEba7a94a14b
            document.getElementById('WEba7a94a14b').style.display = ""
        break; 
        case 1: // create raises / reduces
            document.getElementById('WEe46ebcc55e').style.display = ""
            document.getElementById('WEba7a94a14b').style.display = ""
        break;
        case 2: // raises/reduces // WEe46ebcc55
            document.getElementById('WEe46ebcc55e').style.display = ""
        break;
        case 3: // eliminate //WEd0942271b8
            document.getElementById('WEd0942271b8').style.display = ""
        break;
        case 4: // eliminate . raices/reduces
            document.getElementById('WEe46ebcc55e').style.display = ""
            document.getElementById('WEd0942271b8').style.display = ""
        break;
    }
}
selectOpBlueOcean = (op) => {
    
    game_cards.filter((s)=>{return s.id == objID.id})[0].opcion = op;
    
     send_id = game_cards.filter((s)=>{return s.id == objID.id})[0].id
     send_pos = game_cards.filter((s)=>{return s.id == objID.id})[0].pos
     send_indx = game_cards.findIndex((s)=>{return s.id === objID.id})
     
    SendCard(send_id, send_pos, send_indx)
    
    Panel(0);
}

MostrarTarjeta = (i, id) => {
    
    BasePanel(1) 

	if (id != null){
		
		tipo = game_cards.filter((s)=>{return s.id == id.toString()})[0].tipo
		Tarjetas.children[0].children[0].children[0].children[0].children[0].children[1].setAttribute("style", "Background:"+SprintColors[parseInt(tipo)-1])
	}
	
		BajarContenido(id)
	
}


;
const DragablesPanels = ["WE2bd87c9368", "WE_KeyPatner", "WE_KeyActivities", "WE_KeyResources", "WE_ValuePropositions", "WE_CustomerRelationship", "WE_Channels", "WE_CostStructure",
"WE_RevenueStreams", "WE_CustomersSegments",]


/*for (p=0; p < DragablesPanels.length; p++){
    document.getElementById(DragablesPanels[p]).setAttribute("ondrop", "drop(event)");	
    document.getElementById(DragablesPanels[p]).setAttribute("ondragover", "allowDrop(event)");
    document.getElementById(DragablesPanels[p]).setAttribute("ondragleave", "leaveDrop(event)");
}*/

var Tarjetas = document.getElementById("WEcb32818414");

/*var preloadLink = document.createElement("link");
preloadLink.href = "myscript.js";
preloadLink.rel = "preload";
preloadLink.as = "script";
document.head.appendChild(preloadLink);
*/

var Canvas = document.getElementById('WE_Canvas_1');


let resizeObserver = new ResizeObserver(() => { 
    
    // Centro:
    _tmp = Canvas.offsetWidth / 2;
    document.getElementById('WE_banderin_1').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
    document.getElementById('WE_banderin_2').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
    
    if (SecCanvas == 1){

        // Centro

        document.getElementById('WE_cartel_2').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
        document.getElementById('WE_cartel_4').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
        
        // 1/5
        

        _tmp = (Canvas.offsetWidth / 5) + 10;
        document.getElementById('WE_cartel_1').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
        
        _tmp = (Canvas.offsetWidth / 5*4) + 10;
        document.getElementById('WE_cartel_3').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
    }
    
    // Final
    _tmp = Canvas.offsetWidth;
    document.getElementById('WE_banderin_4').setAttribute("style", "left:"+_tmp+"px;z-index:1007");
}); 
  
resizeObserver.observe(Canvas); 
;




function BajarContenido(id) {
    
    
    fetch('../cards.php?f=contenido&lang=-es&id='+id, {
     
    })
    
    .then(response => response.json())
      .then(data => { 

        BasePanel(0);
        
        console.log(data);
        
        var Numero = document.getElementById('WEc1be16943d').children[0].children[0];
        var Titulo = document.getElementById('WE03baaf7ffe').children[0].children[0];

        var texto = document.getElementById('WEb2b291eb0a').children[0].children[0];
        

        // Actualizar:
        // 
        Numero.innerText = id;
        
        Titulo.innerText = game_cards.filter((s)=>{return s.id == id.toString()})[0].titulo;
        texto.innerHTML = data.content;
            Panel(1);
        
    });
    
    
}

// var Refresh = window.setInterval(() => {TickRealtime();}, 8500);



Act_mov = true;
TickRealtime = () => {

    
    // CONECTANDO (0), ABIERTO (1), o CERRADO (2). ActCards.readyState
    // 
    ActCards = new EventSource("../realtime-canvas.php?f=tick&p="+_partid+"&g="+_phpid);
        ActCards.onmessage = function(event) {
            
    
            //console.log(JSON.parse(event.data))
            
            RealtimeData = JSON.parse(event.data);
            IdPartidaActiva.tm_desde = RealtimeData[2].desde
            IdPartidaActiva.tm_hasta = RealtimeData[2].hasta
        
            // Actualizamos Cartas:
            game_cards.map((d)=>{
                
                carta = d.id;
                
                if (RealtimeData[0].find((s)=>{return s.card === carta})){
                    if(RealtimeData[0].find((s)=>{return s.card === carta}).pos != d.pos){
                        d.pos = RealtimeData[0].find((s)=>{return s.card === carta}).pos;

                        d.opcion = RealtimeData[0].find((s)=>{return s.card === carta}).opcion;
                        
                        console.log(d.opcion + "---> " +  d.pos)
                        } else {d.opcion = RealtimeData[0].find((s)=>{return s.card === carta}).opcion;}
                } else {
                    d.pos = "0";
               
                }
                
            });
            
            // Chequeamos Tiempo:
            
            if (TransursoCheckPoint == ""){
                a = numeral(IdPartidaActiva.tm_desde)
                b = numeral(IdPartidaActiva.tm_hasta)

                MiniRunners.style.display = "none"; // quita animacion mini runners;

            
                if (a._value < b._value){

                    b.subtract(a._value)
                    CheckPoint.hasta = b.format("00:00:00");
                    RunCheck()
                    VariableCompetitiva = 1
                    
                }
            }
            
            
            // ActPartida:
            
            IdPartidaActiva.SprintAct = RealtimeData[1][0].Sprint
            if (Sprint != parseInt(RealtimeData[1][0].Sprint))
            {
                Sprint = 	RealtimeData[1][0].Sprint;
                console.log("Cambio Sprint")
                SprintStates();
            
            }
            
            // Actualizamos
            if (Act_mov){ColocarCards();}

                if (RealtimeData[1][0].confirmacion == "ok"){
                    Look = true;
                    Pantalla = 0;
                    VariableCompetitiva = 0;
                    MiniRunners.style.display = "none"; // quitamos runners
                } else {
                    VariableCompetitiva = 1;
                    
                }
            

            console.log("tick");
        }
        /*MapeoTracking.onopen = function(event) {
            console.log("Evento Abierto");
            console.log(event.data);
        }*/
       /* MapeoTracking.onerror = function(event) {
            console.log("Evento Error");
            console.log(event);
        } */
        

        
}

//TickRealtime();






SendCard = (card, pos, id) => {
    
        console.log(card+pos+id)
    
        if (game_cards[id].tipo != 3){
            
                Post = {id:card, pos:pos, opcion:null}
                
                
                    ChangeCardServer(Post);
                    
            
        } else {
            if (game_cards[id].opcion != ""){

                Post = {id:card, pos:pos, opcion:game_cards[id].opcion}
                
                
                    ChangeCardServer(Post);
                    console.log(JSON.stringify(Post));
            }
        }
    
    Post = {id:card, pos:pos, opcion:game_cards[id].opcion}
}

ChangeCardServer = (pr) =>{
    
    var data = new FormData()
    data.append('card', JSON.stringify(pr))
    
    
    
    fetch('../realtime-canvas.php?f=SetCanvas&p='+_partid, {
      method: 'POST',
      body: data
    })
    
    .then(response => {

        response.json();
                        })
      .then(data => { 
        
        if (ActCards.readyState == 2){
            TickRealtime();
        }
        
    });
}	


;

const bajopanel = document.getElementById("WEcb32818414");
    bajopanel.setAttribute('style', 'z-index:2500;width:99.5vw;height:100vh;top:0;left:0');

const PreviewCard = document.getElementById("WEe1784fd48a")
PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB";
const BlueOceanOpt = document.getElementById("WE8f45c4ac18")

function Panel(i, op){

    switch(i){
        case 0:
            bajopanel.style.display = "initial"
            bajopanel.style.visibility = "hidden";
            PreviewCard.style.visibility = "hidden";
            PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB";
            BlueOceanOpt.style.visibility = "hidden";
            
        break;
        case 1:
                bajopanel.style.display = "initial"
            bajopanel.style.visibility = "visible";
            BlueOceanOpt.style.visibility = "hidden";
            PreviewCard.style.visibility = "visible";
            PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-in-2-cw"
            
        break;
        case 2:
                bajopanel.style.display = "initial"
            bajopanel.style.visibility = "visible";
            PreviewCard.style.visibility = "hidden";
            BlueOceanOpt.style.visibility = "visible";
            opcionesBlueOcean(op)
        break;
        case 3:
        break;
        case 4:
        break;
    }
}
