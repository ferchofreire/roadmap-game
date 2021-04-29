class Notification{
    
    visible = false;

    Cartel;
    ZonaTexto;
    Mensaje;

    constructor (_Cartel, _ZonaTexto){

        this.Cartel = document.getElementById(_Cartel);
        this.ZonaTexto = document.getElementById(_ZonaTexto);

    }
    
    Show(m){
        this.visible = true;
        this.Cartel.style.display = "initial"
    
        this.Cartel.className = (this.visible) ? "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  wobble-ver-right" : "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default slide-out-right"
        if (this.visible){

            this.ZonaTexto.innerText = m;
            setTimeout(()=>{this.Hide()}, 3000)}

    }
    Hide(){
        this.visible = false;
        this.Cartel.className = (this.visible) ? "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  wobble-ver-right" : "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default slide-out-right"
    }
}

class PopUpMensaje{

    ObjPoPup;
    MenuBarControl;
    Titulo;
    Mensaje;
    CloseBotton;

    constructor (_ObjPoPup, _MenuBarControl, _CloseBotton){

        this.ObjPoPup = document.getElementById(_ObjPoPup);
        this.MenuBarControl = _MenuBarControl;
        this.CloseBotton = document.getElementById(_CloseBotton);

        this.CloseBotton.addEventListener("click", ()=>{
            this.ObjPoPup.style.display = "none";
        })

    }

    ShowMessage(titulo, mensaje){
        
        this.ObjPoPup.style.display = "initial";
        this.ObjPoPup.children[0].children[0].children[2].innerText = titulo;
        this.ObjPoPup.children[0].children[0].children[3].innerText = mensaje;
    }


}

class PopUpPregunta {

    ObjPoPup;
    MenuBarControl;
    Titulo;
    Mensaje;
    CloseBotton;
    CancelBotton;
    OkBotton;

    LlamadaAccion;

    constructor(_ObjPoPup, _MenuBarControl, _CloseBotton, _CancelBotton, _OkBotton){
        
        this.ObjPoPup = document.getElementById(_ObjPoPup);
        this.MenuBarControl = _MenuBarControl
        this.CloseBotton = document.getElementById(_CloseBotton);
        this.OkBotton = document.getElementById(_OkBotton);
        this.CancelBotton = document.getElementById(_CancelBotton);
        
        this.CloseBotton.addEventListener("click", ()=>{
            this.MenuBarControl.FondoBlack.style.visibility = "hidden"
            this.ObjPoPup.style.display = "none";   
        });
        this.CancelBotton.addEventListener("click", ()=>{
            this.MenuBarControl.FondoBlack.style.visibility = "hidden"
            this.ObjPoPup.style.display = "none";   
        })
        
        this.OkBotton.addEventListener("click", ()=> {

            this.MenuBarControl.FondoBlack.style.visibility = "hidden"
            this.ObjPoPup.style.display = "none";   
            this.LlamadaAccion()
        
        });

    }

        ShowQuestion(titulo, mensaje, _LlamadaAccion){

            this.LlamadaAccion = _LlamadaAccion;

            this.MenuBarControl.FondoBlack.style.visibility = "visible";

            this.ObjPoPup.style.display = "initial";
            this.ObjPoPup.children[0].children[0].children[2].innerText = titulo;
            this.ObjPoPup.children[0].children[0].children[3].innerText = mensaje;

        }


    
}

