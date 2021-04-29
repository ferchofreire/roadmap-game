SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]

const FondoFlotante = document.getElementById("WE113e4bd6d1");

const Panel_Matriz = document.getElementById("WEbeb55d28ad");
const PreviewCards = document.getElementById("WE884ce09680");
var idcard;

const LoadingIcon = FondoFlotante.children[0].children[0].children[1];

FondoFlotante.setAttribute("style","z-index:3050;")
document.getElementById("WEe6bfb78a20").setAttribute("onChange","OpTipo()");

function Panel(Pan){
    switch(Pan){
        case 0:
            FondoFlotante.style.visibility = "hidden";
            Panel_Matriz.style.visibility = "hidden";			
            LoadingIcon.style.visibility = "hidden";
            PreviewCards.style.visibility = "hidden";
        break;
        case 1:
            FondoFlotante.style.visibility = "visible";
            Panel_Matriz.style.visibility = "visible";
        break;	
        case 2:
            Panel_Matriz.style.visibility = "hidden";
            FondoFlotante.style.visibility = "visible";
            LoadingIcon.style.visibility = "visible";
        break;	
        case 3:
            Panel(0);
            FondoFlotante.style.visibility = "visible";
            PreviewCards.style.visibility = "visible";
            previewCardView()
        break;
}
}



OpTipo = () => {
        
        document.getElementById("WE724ea9636b").style.visibility = (document.getElementById("WEe6bfb78a20").children[0].children[0].value != 0) ? "visible" : "hidden";
}
Panel(0)

OpLang = () => {
        
        ContentCard[lang] = quill.container.firstChild.innerHTML;
        if (ContentCard != null){
            lang = document.getElementById('WE952b7e18e8').children[0].children[0].value
            quill.container.firstChild.innerHTML = ContentCard[lang];
        }
}

function previewCardView(){

    //document.getElementById('WE10102d8768')
    
    document.getElementById('WE5685210222').children[0].children[0].innerText = document.getElementById('WE0104cb32f9').children[0].children[0].value
    document.getElementById('WEd6f9cb823b').children[0].children[0].innerHTML = quill.container.firstChild.innerHTML;
    document.getElementById('WEd294d44ec0').children[0].children[0].innerText = document.getElementById('WE5ef0d9a6d9').children[0].children[0].value

    
    // Titulo: WE5685210222
    // // contenido: WEd6f9cb823b
    // // Numero Tarj: WEd294d44ec0
        
        
}


//Flotante.style.visibility = "visible";
// Referencia a paneles de listas:

const _ListaCardsDOM = document.getElementById("WE2604866d5d").children[0].children[0].children[0];
const _ListaPartidasDOM = document.getElementById("WE432d40d352").children[0].children[0].children[0];

// Boton de guardado:
const _BtnGuardarCambios = document.getElementById("WE724ea9636b");
_BtnGuardarCambios.style.visibility = "hidden";


// Data Inputs:

// Agregar Elementos:


function ImprimirCards(filtro){
    
    _ListaCardsDOM.innerHTML = "";
    tim = 0;
    
    for (i=0; i<Cards.length;i++){
        for (x=0; x< Cards[i].length; x++){
            setTimeout(rapidelay, tim, i, x);
                tim += 20;
            }
                
            
        }
    Cards[4].forEach((s)=>{

    document.getElementsByName('testc')[0].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
    document.getElementsByName('testc')[1].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
    document.getElementsByName('testc')[2].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
    
    });
    
    } 


function rapidelay(i,x){
    _ListaCardsDOM.appendChild(Cards[i][x].obj);
}

function CrearCardsSprints(Titulo, i, id){

    Titulo = (Titulo.length > 15) ? Titulo.substring(0,15) +"..." :  Titulo;
    
        Printer = '<div id="WE24ac5fb449" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1; background-color:'+SprintColors[parseInt(i)-1]+'">'+
          '<div class="OESZ OESZ_DivContent OESZG_WE24ac5fb449">'+
          '<a href="javascript:cargar('+i+', '+id+' )">'+
            '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
             '<div id="WE9501e057ab" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE9501e057ab">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                '<div id="WE439beceeaa" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE439beceeaa">'+
                  '<img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE439beceeaa" alt="" />'+
                ' </div>'+
                '</div>'+
                '<div id="WE964b5a4de4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE964b5a4de4">'+
                  '<span class="OESZ OESZ_Text OESZG_WE964b5a4de4 ContentBox">'+Titulo+'<br /></span>'+
                 '</div>'+
                '</div>'+
               '</div>'+
              '</div>'+
             '</div>'+
            '</div>'+
           '</a>'+
          '</div>'+
        '</div>';
                
                 
         
    
        var obj = document.createElement('div');
        obj.innerHTML = Printer;
        
        return obj.firstChild;
    
}


var Keys = [
    "Personal",
    "Alquileres", 
    "Marketing", 
    "AmortMaquinas",
    "Reparaciones", 
    "Insumos", 
    "GtosOficina",  
    "Otros",
    "RatioCosto", 
    "RatioPrecio", 
    "RatioVenta"
    ]

function LeerMatriz(){
    //{"Insumos": 1, "Personal": 1, "Marketing": 0, "Alquileres": 0, "RatioCosto": 0, "RatioVenta": 0, "GtosOficina": 0, "OtrosGastos": 0, "RatioPrecio": 0, "Reparaciones": 0, "AmortMaquinas": 0}
    /* var key, keys = [];
for (key in _json_lin) {         <-- get keys
  keys.push(key); */

    
    _json_lin = [];
    
    _tmp = {};
    t = 0;
    
    var val = document.getElementsByName('blueocean');
    var testc = document.getElementsByName('testc');
    var testv = document.getElementsByName('testv');
    var grafico = document.getElementsByName('grafico');

    _tmp = {};
    
    _json_lin.push({tipo:parseInt(val[0].value)});
    
    val.forEach((s, value) => {
        
        
        
        if (value != 0){
            if (t < Keys.length){
                _tmp[Keys[t]] = parseFloat(s.value);
                t++
            } else {
                _json_lin.push(_tmp);
                _tmp = {};				
                t=0;
                _tmp[Keys[t]] = parseFloat(s.value);
                t++;
            
                
            }
            
        }
        
    
        
    });

    _json_lin.push(_tmp)
    
    _tstCrds = [];
    _tmp = {}
    
    testc.forEach((s, value)=>{
        _tmp = {}
        if (s.value != "no"){
            
            _tmp['testc'] = parseInt(s.value)
            _tmp['value'] = parseFloat(testv[value].value)
            _tstCrds.push (_tmp);
            
            }
    });
    
    _json_lin.push(_tstCrds)
    
    
    _grapics = [];
    _tmp = {}
        _tmp['standr'] = grafico[0].value
        _tmp['var'] = grafico[1].value
        _grapics.push(_tmp);
        
    _json_lin.push(_grapics)


    return _json_lin
    
}

function escribirMatriz(m){
    //matej = '[{"tipo":3},{"Personal":1,"Alquileres":2,"Marketing":3,"AmortMaquinas":4,"Reparaciones":5,"Insumos":6,"GtosOficina":7,"Otros":8,"RatioCosto":9,"RatioPrecio":10,"RatioVenta":11},{"Personal":1,"Alquileres":12,"Marketing":312,"AmortMaquinas":2,"Reparaciones":2,"Insumos":2,"GtosOficina":0,"Otros":5,"RatioCosto":0,"RatioPrecio":0,"RatioVenta":0},{"Personal":2,"Alquileres":2,"Marketing":12,"AmortMaquinas":0,"Reparaciones":20,"Insumos":2,"GtosOficina":5,"Otros":4,"RatioCosto":3,"RatioPrecio":5,"RatioVenta":5},{"Personal":3,"Alquileres":0,"Marketing":0,"AmortMaquinas":0,"Reparaciones":0,"Insumos":1,"GtosOficina":50,"Otros":5,"RatioCosto":4,"RatioPrecio":5,"RatioVenta":5},{"Personal":4,"Alquileres":0,"Marketing":2,"AmortMaquinas":3,"Reparaciones":2,"Insumos":1,"GtosOficina":5,"Otros":2,"RatioCosto":0,"RatioPrecio":50,"RatioVenta":5},{"Personal":5,"Alquileres":0,"Marketing":6,"AmortMaquinas":8,"Reparaciones":8,"Insumos":12,"GtosOficina":2,"Otros":3,"RatioCosto":5,"RatioPrecio":4,"RatioVenta":3},{"Personal":6,"Alquileres":2,"Marketing":2,"AmortMaquinas":6,"Reparaciones":8,"Insumos":7,"GtosOficina":2,"Otros":2,"RatioCosto":3,"RatioPrecio":1,"RatioVenta":1},{"Personal":7,"Alquileres":6,"Marketing":3,"AmortMaquinas":0,"Reparaciones":3,"Insumos":0,"GtosOficina":0,"Otros":2,"RatioCosto":2,"RatioPrecio":2,"RatioVenta":2}]'
    matej = m//JSON.parse(m);
    
    val = document.getElementsByName('blueocean');
    testc = document.getElementsByName('testc');
    testv = document.getElementsByName('testv');
    // limpia testcards:
    testc.forEach((s, value)=>{
        s.value = "no"
        testv[value].value = 0;
    })
    
    grafic_v = document.getElementsByName('grafico');

    val[0].value = matej[0].tipo;
    
    x = 0
    
    matej.forEach((s, value) => {
        if (value != 0 && value < 9){
            for (t=0; t < Keys.length; t++){
                val[(t+x)+1].value =matej[value][Keys[t]] /// aumenta uno por el campo de opcines
                //console.log(t+x);
                
            } 
            x+=Keys.length
            
        } else {
            if (value == 9){
                for (i=0; i < matej[value].length; i++){
                    testc[i].value = matej[value][i].testc
                    testv[i].value = matej[value][i].value
                }
                
            }
        }
    });

    grafic_v[0].value = matej[10][0].standr
    grafic_v[1].value = matej[10][0].var
    
}

function NuevaCarta(){
    quill.container.firstChild.innerHTML = "";
    document.getElementById('WE0104cb32f9').children[0].children[0].value = ""
    document.getElementById('WE5ef0d9a6d9').children[0].children[0].value = 0
    document.getElementById('WEe9b469dcd7').children[0].children[0].value = 1
    document.getElementById('WEd10c403a27').children[0].children[0].value = 0
    editID = "n";
    
    document.getElementsByName('blueocean').forEach((s)=>{
        s.value = 0;
    })
    
    document.getElementsByName('testc').forEach((s)=>{
        s.value = "no";
    })
    
        document.getElementsByName('testv').forEach((s)=>{
        s.value = 0;
    })
    
}
/*
// Lanzadores:
// 
ImprimirGrupos();
ImprimirJugadores();
ImprimirCards();

*/


;

const serv_cards = "../back/routes.php?f=CardListar";
//const serv_conf_save = 'http://localhost/roadmap_game/conf_save.php?f=save';
const serv_content_cargCards = '../back/routes.php?f=CardContenido&lang=-all&id=';
const serv_save_Cardscntn = '../back/routes.php?f=CardSaveContent&id=';

var editID = "n";
var lang = "es";

var ContentCard = {es:null, en:null, pr:null};
document.getElementById('WE952b7e18e8').setAttribute("onChange","OpLang()");
    
CargarCartas = () => {
    
    Panel(2);
    
    fetch(serv_cards, {
     
    })
    
    .then(response => response.json())
      .then(data => {
        console.log(data)
        
        Cards = data;
        
        
        Panel(0)
        emparentar();
        ImprimirCards();
        
    }) 
    .catch(error => {
        
        alert(error);
        console.error(error)
      })
        
    console.log("OK")
}
CargarContentCard = (id) => {
    editID = id;
    
    Panel(2);
    
    fetch(serv_content_cargCards+id, {
     
    })
    
    .then(response => response.json())
      .then(data => {

        Panel(0)
        console.log(data)
        ContentCard = data
        lang = document.getElementById('WE952b7e18e8').children[0].children[0].value
        quill.container.firstChild.innerHTML = ContentCard[lang]
        editID = id;
        
    }) 
    .catch(error => {
        
        alert(error);
        console.error(error)
      })
        
    console.log("OK")
}
GuardarCambios = () => {

        ContentCard[lang] = quill.container.firstChild.innerHTML
    
    Panel(2);
    
    JsonCard = {
            titulo: null,
            ValorJson: null,
            ntarj: null,
            tipo: null,
            valor: null,
            impact: null,
            }
    
    JsonCard.titulo = document.getElementById('WE0104cb32f9').children[0].children[0].value
    JsonCard.ValorJson = LeerMatriz();
    JsonCard.ntarj = document.getElementById('WE5ef0d9a6d9').children[0].children[0].value
    JsonCard.tipo = document.getElementById('WEe9b469dcd7').children[0].children[0].value
    JsonCard.valor = document.getElementById('WEd10c403a27').children[0].children[0].value
    
    impact = document.getElementsByName("impact")
    impact_tx = "";
    impact.forEach((s, value)=>{
        if (s.checked == true){
            impact_tx+= value + ","
        }
    })

    JsonCard.impact = impact_tx;
        
    console.log(JsonCard.ValorJson);
    
    var data = new FormData()
    data.append('ContentCards', JSON.stringify(ContentCard)),
    data.append('Values', JSON.stringify(JsonCard)),

    fetch(serv_save_Cardscntn+editID, {
      method: 'POST',
      body: data
    })
    
    .then(response => response.json())
      .then(data => {
        
        Panel(0);
        
        console.log(data)
        
        if (data[0].status == "ok"){
            _BtnGuardarCambios.style.visibility = "hidden";
            Panel(0);
        
        }
        // Respuesta;
        
    }).catch(error => {
        
        alert(error);
        Panel(0);
        //console.error(error)
      })
    
    
}
CargarCartas();
function emparentar(){
    // Emparentar Objetos iniciales:
// 		Jugadores:


// 		Card:
try {
for (x=0; x<Cards.length; x++){ // distribuye por grupo
    try {
        for (i=0; i<Cards[x].length; i++){
            Cards[x][i].obj = CrearCardsSprints(Cards[x][i].titulo, Cards[x][i].tipo, i);
        }
        
    }
    
    catch (e){
        
    }
}} catch (e) {}
}
// 		Grupos:
// 		
cargar = (a, b) =>{
    
    elimID = Cards[a-1][b].ID;

    // form:
    // Numero Tarjeta: WE5ef0d9a6d9
    // SPrint: WEe9b469dcd7
    // Valor: WEd10c403a27
    // Tipo Valor: WEe6bfb78a20
    // Titulo: WE0104cb32f9
    
    Card_Refer = ["WE5ef0d9a6d9", "WEe9b469dcd7", "WEd10c403a27", "WEe6bfb78a20", "WE0104cb32f9"]
    Card_info = []
    Card_impact = document.getElementsByName("impact")
    
    Card_Refer.forEach((s, value) => {
        Card_info.push(document.getElementById(Card_Refer[value]));
    });
    
    
    // Solo si es BlueOcean:
    if (a == 3){
        Tipo = 1
        escribirMatriz(Cards[a-1][b].ValorJson);
        //		
    } else {
        // Si no es blue ocean:
        //console.log(Cards[a][b].ID);
        Tipo = 0
    }
    
    Card_info[0].children[0].children[0].value = Cards[a-1][b].ntarj;
    Card_info[1].children[0].children[0].value = parseInt(Cards[a-1][b].tipo);
    Card_info[2].children[0].children[0].value = Cards[a-1][b].valor;
    Card_info[3].children[0].children[0].value = Tipo;
    Card_info[4].children[0].children[0].value = Cards[a-1][b].titulo;
    OpTipo();

    // Impactos Who/How/etc
    
    Card_impact.forEach((s)=>{s.checked=false})

    if (Cards[a-1][b].impact!= null){
        impactos = Cards[a-1][b].impact
        cort = impactos.split(",");
        
        

        cort.forEach((s)=>{
            if (s!= ""){
            Card_impact[parseInt(s)].checked = true;
                console.log("activo "+parseInt(s))
            }

        })
        
    }
    
    CargarContentCard(Cards[a-1][b].ID)
    
}

Elimpack = "x";
elimID = "x";

function eliminar(DeletPack){
    
    var CGA = window.confirm("¿Quiere eliminar ese Card.");
    if (CGA){
       
       if (elimID != "x"){

       fetch("../cards.php?f=eliminar&id="+elimID).then(
           this.location.reload()
       )
    }  else {
        alert("No hay carta abierta")
    }
       
    } 
}