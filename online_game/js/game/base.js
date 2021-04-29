//document.getElementById('WE3001148426').setAttribute('style', 'z-index:5000;position:fixed')

//document.getElementById('WE2df3a0ab3b').setAttribute('style', 'z-index:5000;position:fixed')
//document.getElementById('WE979a2ce6ec').setAttribute('style', 'z-index:5000;position:fixed')
//document.getElementById('WE0bf2c0b2ff').setAttribute('style', 'z-index:5000;position:fixed')
//const AlerMensaje = document.getElementById('WEb254cc085e')
//AlerMensaje.setAttribute('style', 'z-index:5000;position:fixed');

//document.getElementById('WE92894735fc').setAttribute('style', 'z-index:5000;position:fixed')
//document.getElementById('WE8c6ea1e6c8').setAttribute('style', 'z-index:6000;position:fixed')

const FondoBasPan = document.getElementById('WE8c6ea1e6c8');
//const UsrSelect = document.getElementById('WE1589ee12d7');
const Loader = document.getElementById('WE8bd892b41c');

//const MiniRunners = document.getElementById("WEa0f2c39db6");
//MiniRunners.style.display = "none";

/*function Mensaje(e, m){
    AlerMensaje.style.display = "initial"
    
    AlerMensaje.className = (e) ? "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  wobble-ver-right" : "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default slide-out-right"
    if (e){
        document.getElementById('WE1065bd7931').innerText = m;
        setTimeout(()=>{Mensaje(false)}, 3000)}
    //slide-out-right
}*/

if (Pantalla == 1){
    //BajarCartas();
    }

/*up_avCrds = document.getElementById("WE60794dcfe8");
up_avCrds.setAttribute('OnMouseOver','CartasDisponibles(true);');
up_avCrds.setAttribute('OnClick','CartasDisponibles(true);');*/

//BajarCartas();

/*
document.getElementById("WEae0bf99d71").addEventListener("click", ()=>{
    // pantalla Wins
    
});
*/

screen.orientation.lock('landscape');
window.scrollTo(0,document.body.scrollHeight);

window.addEventListener("orientationchange", function() {
    CheckScreen();
    window.scrollTo(0,document.body.scrollHeight);
}, false);

window.addEventListener('focus', function () {
    CheckScreen();
  })


CheckScreen = () =>{
    
    if (screen.orientation.type == "portrait-primary" || screen.orientation.type == "portrait"){
        if (screen.orientation.angle != 90 || screen.orientation.angle != -90){
    
        
        document.getElementById('XBody').style.display = "none";
        document.getElementById('WE4d28880578').style.display = "";
        //if (init){BasePanel(2)}else{BasePanel(0)};  // Quita el Menu si está en modo Vertical
        
        //alert("Turn the Screen");
    } else {
        
        document.getElementById('XBody').style.display = "none";
        document.getElementById('WE4d28880578').style.display = "";
    }
    } else {
        document.getElementById('XBody').style.display = "";
        document.getElementById('WE4d28880578').style.display = "none";
        //if (init){BasePanel(2)}else{BasePanel(0)}; // Quita el Menu si está en modo Vertical
    }
}
CheckScreen();
  

  function fulls(){
      document.body.requestFullscreen()
     window.scrollTo(0,1);
    screen.orientation.lock('landscape');
    
  }

/*
avtSlct = 8;
function UsrSlct(us){

    
    Avatars = ["WEd91f42829d", "WE22e243359b", "WE3defa2e960", "WEdb351f375a", "WE954e4f061f", "WEdd4dd2387a", "WE473bed634b", "WEb1b195d5e7", "WE7e191f76ae", "WE8ad6ddfc15", "WE9dff58ac24", "WE58ee3f227f"]
    
    Avatars.forEach((s, value)=>{
        document.getElementById(s).style.opacity = "0.2"
        if (value == us)
            document.getElementById(s).style.opacity = "1.0"
    })

    
    if (us=="ok"){

        if (document.getElementsByName('WE85e1e4be37')[0].value != ""){
        
        ico = document.getElementById('WE95f488f8df').children[0].children[0]
        selIco = document.getElementById(Avatars[avtSlct]).children[0].children[0].children[0]
        Nmb = document.getElementById('WE3ddb4ed614').children[0].children[0]
        
        ico.src = selIco.src;
        Nmb.innerText = (document.getElementsByName('WE85e1e4be37')[0].value).slice(0, 23);
        //BasePanel(0)

        init = false;

        BasePanel(1)

        fetch("../back/routes.php?f=SetJugador&n="+document.getElementsByName('WE85e1e4be37')[0].value+"&ic="+avtSlct)
        .then(response => response.text())
        .then (data => {
            console.log(data);
            BasePanel(0)

            if(parseInt(IdPartidaActiva.SprintAct) == 0){
                SeccionDashBoard.Activar();// pn(2);
            } else {
                SeccionCanvas.Activar()(); //pn(1);
            }
            
        })

    } else {
        this.location.href = "../logout"
    }

    } else {
        avtSlct = us;
    }
}
UsrSlct(avtSlct);
*/


BasePanel(1)

