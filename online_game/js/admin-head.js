SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]

function EliminarPartida(id){
    var EP_conf = window.confirm("¿Seguro desea eliminar esta partida?");
    if (EP_conf){
        EnviarPartida('x', false, id);
    }

}

function EliminarJugador(nomb){
if (condiciones("PartidaCurso")){
var EJ_Conf = window.confirm("¿Seguro desea eliminar a "+nomb+"?");
    if (EJ_Conf){
         QuitarJugador(nomb);
        _BtnGuardarCambios.style.visibility = "visible";
    } 
}
}

function ActivarPartida(id){
    
    var CPA = window.confirm("¿Cambiar Partida Activa?, recuerde que si ya posee una partida activa, ésta pasara a inactiva");
    if (CPA){
        var jso = {func:"on"}
        EnviarPartida('e', jso, id);
    }
} 
    


function DesactivarPartida(id){
    
    var CPA = window.confirm("¿Desactivar Partida?, recuerde ningún equipo podrá ingresar hasta que tenga una partida activa.");
    if (CPA){
        var jso = {func:"off"}
        EnviarPartida('e', jso, id);
    } 
    
}

function DesactivarGrupo(gr, id){
    if (condiciones("PartidaCurso")){
    var CGA = window.confirm("¿Quiere desactivar \""+gr+"\"?, Se eliminarán todos los registros de jugadores y deberá volver a designar cartas.");
    if (CGA){
         ActivarGrupo(id, 'off');
        _BtnGuardarCambios.style.visibility = "visible";
    } 
}
}

function EditarCards(){
    
}

vis = false;
function passwch(i){
    switch(i){
        case 0:
            document.getElementById('WEdfff164ee5').style.visibility = (vis) ? "visible" : "hidden";
            vis = !vis;
        break;
        case 1:
            document.getElementById('WEdfff164ee5').style.visibility = "hidden";
            vis = !vis;
            Panel(5)

            Dts_FRM = document.getElementsByName("chngpass");

            Data = new FormData();
            Data.append("oldPss", Dts_FRM[0].value)
            Data.append("newPss",  Dts_FRM[1].value)


            fetch("../back/routes.php?f=CambioPassw", {
                method: 'POST',
                body: Data
            })

            .then(Response => Response.json())

            .then(data => {

                    console.log(data);
                    

                    if (data.err == "err"){
                        alert("Error, intente más tarde")
                    }

                    Panel(0)
            });


        break;
        
    }
}