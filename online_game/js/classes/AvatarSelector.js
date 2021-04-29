class UserAvatarSelector{

    Avatars = ["WEd91f42829d", "WE22e243359b", "WE3defa2e960", "WEdb351f375a", "WE954e4f061f", "WEdd4dd2387a", "WE473bed634b", "WEb1b195d5e7", "WE7e191f76ae", "WE8ad6ddfc15", "WE9dff58ac24", "WE58ee3f227f"];
    
    AvatarPopup;
    
    AvatarID;
    NombreUsuario;
    
    MenuBarControl;

    OKbutton;
    NombresCombo;

    constructor(_AvatarPopup, _MenuBarControl, _NombreUsuario, _AvatarID, _OKbutton, _NombresCombo){

        
        this.AvatarPopup = document.getElementById(_AvatarPopup);
        this.MenuBarControl = _MenuBarControl;
        
        this.AvatarID = _NombreUsuario;
        this.NombreUsuario = _AvatarID;
        
        this.OKbutton = _OKbutton;
        this.NombresCombo = document.getElementsByName(_NombresCombo)[0];

        if (this.AvatarID == null && this.NombreUsuario == null){

            this.AvatarPopup.style.visibility = "visible";
            this.SeleccionarAvatar(8);
            
        } else {

            this.AplicarUsuario(this.NombreUsuario, this.AvatarID);
        }

        this.Avatars.forEach((av, value) => {
            document.getElementById(av).addEventListener("click", ()=> {
                this.SeleccionarAvatar(value);
            })
        })

        document.getElementById(this.OKbutton).addEventListener("click", ()=>{
            if (this.NombresCombo.value != ""){

                this.NombreUsuario = this.NombresCombo.value;

                this.AplicarUsuario(this.NombreUsuario, this.AvatarID)
                this.MenuBarControl.Spinner(true);

                fetch("../back/routes.php?f=SetJugador&n="+this.NombresCombo.value+"&ic="+this.AvatarID)
                .then(response => response.text())
                .then (data => {
                    console.log(data);
                    this.MenuBarControl.Spinner(false);
                    this.AvatarPopup.style.visibility = "hidden";

                if(parseInt(IdPartidaActiva.SprintAct) == 0){
                    SeccionDashBoard.Activar();// pn(2);
                } else {
                    SeccionCanvas.Activar(); //pn(1);
                }

                })
            }  else {
                document.location.href="../back/routes.php?f=logout";
            }         
        })

    }

    AplicarUsuario(_Nombre, _ID){

        var ico = this.MenuBarControl.AvatarImage.children[0].children[0];
        ico.src = document.getElementById(this.Avatars[_ID]).children[0].children[0].src
        var Nmb = this.MenuBarControl.NombreTitul.children[0].children[0];
        Nmb.innerText = _Nombre.slice(0, 23);

    }

    SeleccionarAvatar(_id){
        this.AvatarID = _id;
        this.Avatars.forEach((s, value)=>{
            document.getElementById(s).style.opacity = "0.2"
            if (value == _id)
                document.getElementById(s).style.opacity = "1.0"
        })
    }

}