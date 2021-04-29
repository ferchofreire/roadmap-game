    class SeccionVisible{

        IdElement;
        IdBoton;
        click;
        
        ArraySwitch;

        constructor(_idElement, _idBoton, _click){

            this.Switch = false;
            this.IdElement = document.getElementById(_idElement);
            this.IdBoton =  _idBoton;
            this.click = _click;
            
            //this.idElement.style.display="none";

            document.getElementById(this.IdBoton).addEventListener("click", s => {
                
                
                this.ArraySwitch.forEach(element => {
                    element.turnoff();
                });

                this.IdElement.style.display="initial";

                _click();
            });

        }

        turnoff(){
            this.IdElement.style.display="none";
        }

        Activar(){
            this.ArraySwitch.forEach(element => {
                element.turnoff();
            });

            this.IdElement.style.display="initial";

            this.click();
        }

    }
    
    