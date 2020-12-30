document.getElementById('WE60794dcfe8').style.visibility = "hidden";
   
   
Opt = [];

Banderines = ['WEcbfe14b9f5', 'WE9f5770acc5', 'WE6a295aca67', 'WE1fe54d9a37', 
              'WE8473682f9c', 'WE553b2a9ca3', 'WE3133f83fb9']




htmls = document.getElementById('WE4f0eef962c').children[0].children[0].children[0]

for (i=0; i< htmls.childElementCount ;i++){
    Opt.push(htmls.children[i].cloneNode(true));
}
htmls.innerHTML = "";


Sec = ["WEe4a695a8e9", "WE4f0eef962c", "WE3133f83fb9", "WE8473682f9c", "WE9f5770acc5", "WEcbfe14b9f5"]

SecuenciaInicial = () =>{

    setTimeout(ActivadorSecuencia, 1800, Sec[0]);
    setTimeout(ActivadorSecuencia, 2200, Sec[1]);
    setTimeout(ShowList, 2200);
    setTimeout(redimencionar, 2200);
    
    tx = 2600
    Puestos.forEach((s, value)=>{
        setTimeout(()=>{
            ActivadorSecuencia(Banderines[value])
            tx+=300
        }, tx, );	
    });
    
    
}
function ActivadorSecuencia (i) {
    document.getElementById(i).style.display = "initial";
}

Passarela = "";
function ShowList(){
    BandOrder = []
    
    Orden=[];
    Paus = ["p", "p", "r"]
    
    
    Orden = Orden.concat(Paus);
    for (z = 0; z<htmls.childElementCount;z++){
        if (z==4){
            Orden = Orden.concat(Paus);
        }
        Orden.push(z);
    }
    
    t = 0;

        Passarela = setInterval(()=>{
        if (Orden[t] != "p"){
            if (Orden[t] == "r") {
                for (x = 0; x < htmls.childElementCount; x++){
                    htmls.children[x].style.display = "none"

                } 
                    t = (t>=Orden.length-1) ? 0 : t+1	
                } 

            else {

                    htmls.children[Orden[t]].style.display = ""
                    t = (t>=Orden.length-1) ? 0 : t+1	
                }
            
        } else {
            t = (t>=Orden.length-1) ? 0 : t+1
        }
            
            
    }, 800);
}



Banderines.forEach((s)=>{
    document.getElementById(s).style.display = "none";
})
document.getElementById('WEe4a695a8e9').style.display = "none";

// Reposicionar Banderines:
let resizeObserver2 = new ResizeObserver(() => { 
    
    ReposManual();
    
});

ReposManual = () => {
    repos = document.getElementById('WEe4ed354889').offsetLeft;
    
    BandPosit = [510,480,460,390,320,290,260]
    Puestos.forEach((s, value)=>{
        if (s.Puntos > 0){
        document.getElementById(Banderines[value]).setAttribute("style", "left:"+(repos+BandPosit[value])+"px;z-index:1007");	
            } else {
                document.getElementById(Banderines[value]).setAttribute("style", "left:"+(repos+260)+"px;z-index:1007");	
            }
    })
    
    document.getElementById('WEe4a695a8e9').setAttribute("style", "left:"+(repos+550)+"px;z-index:1007"); //230
}

function redimencionar () {
    resizeObserver2.observe(document.body); 
}

   
;
// realtime-canvas.php?f=GetPuntos&p=7
function CargarTabla (){
    
    BasePanel(1)
    
fetch('../realtime-canvas.php?f=GetPuntos&p='+_partid, {
     
    })
    
    .then(response => response.json())
      .then(data => { 

    console.log(data);
    Puestos = data;
    
    Puestos.forEach((s, value)=>{
    Opt[s.id].style.visibility = "visible";
    Opt[s.id].children[0].children[0].children[2].innerText = (s.Puntos > 0) ? (value+1) : "X";
    Opt[s.id].children[0].children[0].children[4].innerText = numeral(s.Puntos).format("0,0")
    Opt[s.id].children[0].children[0].children[5].innerText = s.Team
    htmls.appendChild(Opt[s.id]);
    
    document.getElementById(Banderines[value]).children[0].children[0].children[1].children[0].children[0].innerText = s.Team

    
                 
});

    document.getElementById('WEe2ca2a3b27').children[0].children[0].children[2].innerText = Puestos[0].Team;
    document.getElementById('WEe2ca2a3b27').children[0].children[0].children[5].innerText = numeral(Puestos[0].Puntos).format("0,0") + " pts";

    SecuenciaInicial();
    BasePanel(0)
    giroTablero();
});
    
}


var GiroTim;
var Rodado = 60;
var _Giro = 0;
var FinalGiro = (Rodado*Sprint)-60; // +1
var TableroDibujo = document.getElementById("WEe4ed354889")

function giroTablero(){

    if (Sprint != 0){
        _tiem = FinalGiro / 200;
        FinalGiro = (Rodado*Sprint)-60;

        TableroDibujo.style.transform = "rotate(-"+_Giro+"deg)";
        
        if (_Giro >= FinalGiro){
            _Giro = 0;

        } else {
            
            GiroTim = setTimeout(giroTablero,_tiem, FinalGiro);
            _Giro += _tiem;
        }
    }

}

limpiezaTableroResultados = () =>{
    
    Sec.forEach((i)=>{
        document.getElementById(i).style.display = "none";
        })

}