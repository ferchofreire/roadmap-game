class MenusBars{

    GrupoIcons = ["../Images/G1-WE2164b83b07.png", "../Images/G_2-WE97b04467a0.png","../Images/G_3-WE6f1f3ba49f.png","../Images/G_4-WE1c0a0e1467.png ","../Images/G_5-WE24adfee543.png ","../Images/G_6-WEbb596c0c0d.png","../Images/G7-WE7489823c1b.png",]
    GrupoIconView;


    MenuState = false;
    SenderState = true;
    MenuCardsState = false;

    SpinnerObj;
    FondoBlack;

    MenuBotton;
    SecctionMenuBar;
    LogOutBotton;
    AvatarImage;

    CardsListbar;
    CardsListbarButton;
    SprintTittle;
    RunnerAnimation;
    TimeViewer;
    SenderButton;
    CardsListbarCloseBotton;

    BarraTituloColor;
    SprintTypeCards;
    SprintTypeCardsText;
    NombreTitul;
    StageCartel;


    GrupoActivo;

    SenderButton_call = null;

    constructor(  _MenuBotton,_SecctionMenuBar,_LogOutBotton,_AvatarImage,_NombreTitul,_CardsListbar,_CardsListbarButton,_SprintTittle,_RunnerAnimation,_TimeViewer, _SenderButton, _CardsListbarCloseBotton, _Spinner, _FondoBlack, _GrupoIconView, _GrupoActivo, _SprintTypeCards, _SprintTypeCardsText, _BarraTituloColor, _StageCartel){
        
        this.MenuBotton = _MenuBotton;
        this.SecctionMenuBar = document.getElementById(_SecctionMenuBar);
        this.LogOutBotton = _LogOutBotton;
        this.AvatarImage = document.getElementById(_AvatarImage);
        this.NombreTitul = document.getElementById(_NombreTitul);
        this.CardsListbar = document.getElementById(_CardsListbar);
        this.CardsListbarButton = _CardsListbarButton;
        
        this.RunnerAnimation = document.getElementById(_RunnerAnimation);
        this.TimeViewer = document.getElementById(_TimeViewer);
        this.SenderButton = document.getElementById(_SenderButton);
        this.CardsListbarCloseBotton = _CardsListbarCloseBotton;
        this.SpinnerObj = document.getElementById(_Spinner);
        this.FondoBlack = document.getElementById(_FondoBlack);

        this.GrupoIconView = document.getElementById(_GrupoIconView);
        this.GrupoActivo = _GrupoActivo;
        this.SprintTypeCards = _SprintTypeCards;
        this.SprintTypeCardsText = document.getElementById(_SprintTypeCardsText);


        // BotonSender:
        this.SenderButton.addEventListener("click", ()=>{this.CallSender();});

        // Barra De Título
        this.BarraTituloColor = document.getElementById(_BarraTituloColor);
        this.SprintTittle = document.getElementById(_SprintTittle);

        //Stages Cartel:
        this.StageCartel = document.getElementById(_StageCartel);

        // Desactiba Runners
        this.RunnerAnimation.style.display = "none";
        
        // Inserta Logo de grupo:
        this.GrupoIconView.children[0].children[0].src = "../Images/"+this.GrupoIcons[this.GrupoActivo];

        // Boton Menu

        document.getElementById(this.MenuBotton).addEventListener("click", ()=>{
            this.Menu();
            this.MenuCartasDisponibles(false);
        })

        // Boton LogOut

        document.getElementById(this.LogOutBotton).addEventListener("click", ()=>{

            document.location.href="../back/routes.php?f=logout"

        })

        // Barra de CardsDisponibles:

        document.getElementById(this.CardsListbarButton).addEventListener("mouseover", ()=>{
            this.MenuCartasDisponibles(true);
        });
        document.getElementById(this.CardsListbarButton).addEventListener("click", ()=>{
            this.MenuCartasDisponibles(true);
        });
        document.getElementById(this.CardsListbarCloseBotton).addEventListener("click", ()=>{
            this.MenuCartasDisponibles(false);
        });


    }


    VisibleMenuCards(x){
        if (x){
            this.CardsListbar.style.display = "initial";
            document.getElementById(this.CardsListbarButton).style.display = "initial";
        } else {
            this.CardsListbar.style.display = "none";
            document.getElementById(this.CardsListbarButton).style.display = "none";
        }
    }

    Menu(){
        
        if (this.MenuState){
            this.SecctionMenuBar.classList.remove("animate__bounceOutDown")
            this.SecctionMenuBar.classList.add("animate__bounceInUp")	
            setTimeout(this.BotonSender.bind(this), 500)
            
        } else {
            this.SecctionMenuBar.classList.remove("animate__bounceInUp")
            this.SecctionMenuBar.classList.add("animate__bounceOutDown")
            setTimeout(this.BotonSender.bind(this), 500)
        }
        this.MenuState = !this.MenuState;
        
    }
    
    BotonSender(){

        if (this.SenderState){
            
            if (!this.MenuState){
                this.SenderButton.classList.remove("animate__bounceOutDown")
                this.SenderButton.classList.add("animate__bounceInUp")	
    
            } else {
                this.SenderButton.classList.remove("animate__bounceInUp")
                this.SenderButton.classList.add("animate__bounceOutDown")
            }
        } else {
            
            this.SenderButton.classList.remove("animate__bounceInUp")
            this.SenderButton.classList.add("animate__bounceOutDown")
        }
    }

    MenuCartasDisponibles(a) {
	
        if (a){
            this.CardsListbar.classList.remove("animate__slideOutRight")
            this.CardsListbar.classList.add("animate__slideInRight")	
            
        } else {
            this.CardsListbar.classList.remove("animate__slideInRight")
            this.CardsListbar.classList.add("animate__slideOutRight")
        }
        
        this.CardsListbar.addEventListener('animationend', () => {
        
            console.log('Otro');	
    
            this.CardsListbar.classList.remove("animate__slideInRight")
           });
                             
    }

    Spinner(a){

        if (a){
            this.FondoBlack.style.visibility = "visible"
			this.SpinnerObj.style.visibility = "visible"
        } else {
            this.FondoBlack.style.visibility = "hidden"
			this.SpinnerObj.style.visibility = "hidden"
        }

    }

    AnimacionRunners(e){

        if (e){
            this.RunnerAnimation.style.display = "initial";
        } else {
            this.RunnerAnimation.style.display = "none";
        }
        
    }

    ActualizarTipoDeCards(Sprint){

        this.SprintTypeCardsText.children[0].children[0].innerText = SprintTypeCards[Sprint];

    }

    CartelSprint(_color, _tituloBarra, _Sprint, _Eslogan, _tipoCarta){

        this.StageCartel.classList.remove("animate__backOutUp")
        this.StageCartel.style.visibility = "visible";
        this.StageCartel.style.setProperty("background-color", _color);
        this.StageCartel.classList.add("animate__tada") // animate__rotateIn


        this.BarraTituloColor.style.setProperty("background-color", _color);
        this.SprintTittle.children[0].children[0].innerText = _tituloBarra;
        this.SprintTypeCardsText.children[0].children[0].innerText = _tipoCarta;


        this.StageCartel.children[0].children[0].children[3].innerText = _Sprint;
        this.StageCartel.children[0].children[0].children[4].innerText = _Eslogan;
        this.StageCartel.children[0].children[0].children[6].innerText = _tipoCarta;

        setTimeout(()=>{
            this.StageCartel.classList.remove("animate__tada")
            this.StageCartel.classList.add("animate__backOutUp")
            //Stage.style.visibility = "hidden";
            
        }, 4000)

        
    }

    SprintTitulo(_Color, _TituloBarra, _tipoCarta){

        this.BarraTituloColor.style.setProperty("background-color", _Color);
        this.SprintTittle.children[0].children[0].innerText = _TituloBarra;
        this.SprintTypeCardsText.children[0].children[0].innerText = _tipoCarta;

    }

    CallSender(){
        if (this.SenderButton_call != null){
            this.SenderButton_call();
        }
    }

    

}