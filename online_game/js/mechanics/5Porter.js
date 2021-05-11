FuerzasPoter = new ForcesPorterHandler(

    "factor1", // Array de Valores de Slices
    "WE7e6b2544b9", // Campo de Texto Nombre Factor 8

    MenuBar, // Control del Menu Bar
    DataControlGame // DataControlGame
)

function ranger (event, id) {
	//console.log(event.value);
	document.getElementById(id).children[0].children[0].innerText = parseInt(event.value);
	
}