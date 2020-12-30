const FondoFlotante = document.getElementById("WEb3fedc9296");
   
   const Panel_NuevaPartida = document.getElementById("WE1d9633bfbd");
   const CargarJugadores = document.getElementById("WE24c55489b7");
   const Conf_Grupos = document.getElementById("WEd7ff5e23d3");
   const Design_Cartas = document.getElementById("WEc6cfc950fe");
   const SprinrVig = document.getElementsByName('SprintVigente')[0];
   
   const LoadingIcon = FondoFlotante.children[0].children[0].children[4];
   
   SprinrVig.setAttribute("onChange", "CambiarSprint(0);")
   
   
   
   FondoFlotante.setAttribute("style","z-index:3050;")
   
   function Panel(Pan){
   	switch(Pan){
   		case 0:
   			FondoFlotante.style.visibility = "hidden";
   			Panel_NuevaPartida.style.visibility = "hidden";
   			CargarJugadores.style.visibility = "hidden";
   			Conf_Grupos.style.visibility = "hidden";
   			Design_Cartas.style.visibility = "hidden";
   			LoadingIcon.style.visibility = "hidden";
   		break;
   		case 1:
   			FondoFlotante.style.visibility = "visible";
   			Panel_NuevaPartida.style.visibility = "visible";
   		break;
   		case 2:
   			FondoFlotante.style.visibility = "visible";
   			CargarJugadores.style.visibility = "visible";
   		break;
   		case 3:
   			FondoFlotante.style.visibility = "visible";
   			Conf_Grupos.style.visibility = "visible";
   		break;
   		case 4:
   			FondoFlotante.style.visibility = "visible";
   			Design_Cartas.style.visibility = "visible";
   		break;
   			case 5:
   			Panel_NuevaPartida.style.visibility = "hidden";
   			CargarJugadores.style.visibility = "hidden";
   			Conf_Grupos.style.visibility = "hidden";
   			Design_Cartas.style.visibility = "hidden";
   			FondoFlotante.style.visibility = "visible";
   			LoadingIcon.style.visibility = "visible";
   		break;
   	}
   }
   	
   Panel(5)
   
   
   //Flotante.style.visibility = "visible";
   // Referencia a paneles de listas:
   
   const _ListaJugadoresDOM = document.getElementById("WE0b84d7f491").children[0].children[0].children[0];
   const _ListaGruposDOM = document.getElementById("WE19a713c7d5").children[0].children[0].children[0];
   const _ListaCardsDOM = document.getElementById("WEf83c264b63").children[0].children[0].children[0];
   const _ListaPartidasDOM = document.getElementById("WEedf83e3863").children[0].children[0].children[0].children[0].children[0].children[0];
   
   // input de nombres:
   const PlayerInputHTML = '<div id="WE37e0d9eb98" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE37e0d9eb98">'+
              '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
               '<div id="WEcf8d922c3d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:2">'+
                '<div class="OESZ OESZ_DivContent OESZG_WEcf8d922c3d">'+
                 '<a href="javascript:AgregarJugador(_IputNomb.value)">'+
                  '<img src="../Images/icon_add-WEcf8d922c3d.png" class="OESZ OESZ_Img OESZG_WEcf8d922c3d" alt="" />'+
                 '</a>'+
                '</div>'+
               '</div>'+
               '<div id="WE4770c7dcf7" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE4770c7dcf7">'+
                 '<img src="../Images/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE4770c7dcf7" alt="" />'+
                '</div>'+
               '</div>'+
               '<div id="WEde4cbb2a2c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">'+
                '<div class="OESZ OESZ_DivContent OESZG_WEde4cbb2a2c">'+
                 '<input name="AddPlayer" type="text" class="OESZ OESZ_TextBox OESZG_WEde4cbb2a2c OEDynTag0" />'+
                '</div>'+
               '</div>'+ 
              '</div>'+
             '</div>'+
            '</div>';
   
   var _IputNomb = document.createElement('div');
   		_IputNomb.innerHTML = PlayerInputHTML;		
   		_IputNomb = _IputNomb.firstChild;
   
   // Boton de guardado:
   const _BtnGuardarCambios = document.getElementById("WE1a39ae8516");
   _BtnGuardarCambios.style.visibility = "hidden";
   
   
   // Data Inputs:
   
   
   var IdPartidaActiva = {id:'1', titulo: 'Partida Demo', desde: '23/07/2020', hasta: '23/07/2020', maxsprints: 6, estado: 'on', MovLimit:"4,3,4,2,3,2"};
   GrupoSelecto = 0;
   IdPartidaActiva.id = _phpid;
   
   var EstadoGrupos = [
   				{id:'0', titulo:'Equipo A', sprint:'1', puntos: '0', estado: 'off', passw: 'g1', obj: ''},
   				{id:'1', titulo:'Equipo B', sprint:'1', puntos: '0', estado: 'off', passw: 'g2', obj: ''},
   				{id:'2', titulo:'Equipo C', sprint:'2', puntos: '0', estado: 'off', passw: 'g3', obj: ''},
   				{id:'3', titulo:'Equipo D', sprint:'1', puntos: '0', estado: 'off', passw: 'g4', obj: ''},
   				{id:'4', titulo:'Equipo E', sprint:'1', puntos: '0', estado: 'off', passw: 'g5', obj: ''},
   				{id:'5', titulo:'Equipo F', sprint:'1', puntos: '0', estado: 'off', passw: 'g6', obj: ''},
   				{id:'6', titulo:'Equipo G', sprint:'1', puntos: '0', estado: 'off', passw: 'g7', obj: ''},
   			 
   			 ]
   var RandonCards = [];
   
   var Partidas = [
   	{id:'1', titulo: 'Partida Demo', desde: '23/07/2020', hasta: '23/07/2020', maxsprints: '6', estado: 'on'},
   	{id:'9', titulo: 'Partida Demo ya Jugada', desde: '23/07/2020', hasta: '23/07/2020', maxsprints: '4', estado: 'off'}
   	];
   
   var Jugadores = [[], [],[],[],[],[],[],[]];
   var cards = [[],[],[],[],[],[],[], [], []];
   
   
   // Emparentar Objetos iniciales:
   // 		Jugadores:
   
   
   for (z=0; z<Jugadores.length; z++){
   	try {
   		for (i=0; i<Jugadores[z].length; i++){
   			Jugadores[z][i].obj = CrearStiquerNombre(Jugadores[z][i].nombre, Jugadores[z][i].hash);
   		}
   		
   	}
   	
   	catch (e){
   		
   	}
   }
   
   // 		Card:
   try {
   for (x=0; x<cards.length; x++){ // distribuye por grupo
   	try {
   		for (i=0; i<cards[x].length; i++){
   			cards[x][i].obj = CrearCardsSprints(cards[x][i].titulo, cards[x][i].tipo);
   		}
   		
   	}
   	
   	catch (e){
   		
   	}
   }} catch (e) {}
   
   // 		Grupos:
   // 		
   	for(y=0; y<EstadoGrupos.length; y++) 
   		{
   		EstadoGrupos[y].obj = CrearItemGrupos(
   			EstadoGrupos[y].estado, 
   			EstadoGrupos[y].titulo, 
   			EstadoGrupos[y].puntos, 
   			EstadoGrupos[y].sprint,
   			Jugadores[y].length,
   			y)	
   		}
   
   // Agregar Elementos:
   CanvasSelect = 1;
   
   CanvasSelectF = (f)=> {
   	
   	
   	if (f!=null){
   		Canvas = ["WE66ca06422e", "WEd9e91999b4", "WEe2bd6d3a0a"]
   		Canvas.forEach((s, value)=>{
   			document.getElementById(s).style.opacity = "0.2";
   			if ((f-1) == value){
   				document.getElementById(s).style.opacity = "0.9";
   				CanvasSelect = f;
   			}
   		})
   	}
   	return CanvasSelect;
   }
   
   
   
   function AgregarPartida(){
   	
   	var vals = document.getElementsByName('Partidas');
   	hoy = numeral(IdPartidaActiva.hoy);
   	desde = numeral(vals[1].value);
   	hasta = numeral(vals[2].value);
   	
   	if (vals[1].value != "" && vals[2].value != ""){
   		
   		if (hoy._value > desde._value){
   			alert('No puede comenzar un día anterior a hoy')		
   		} else {
   			if (hoy._value > hasta._value){
   				alert('No puede terminar un día anterior a hoy')
   			} else {
   				if (hasta._value < desde._value){
   					alert('No puede terminar antes que comenzar.')
   				} else {
   					
   					Paquete = {MovLimit: "",
   						canvas: CanvasSelect,
   						desde: vals[1].value,
   						estado: vals[4].value,
   						hasta: vals[2].value,
   						SprintAct: "1",
   						id: "x",
   						lang: vals[5].value,
   						maxsprints: vals[3].value,
   						titulo: vals[0].value}
   					
   					EnviarPartida("n", Paquete);
   					
   					Panel(0)
   					Panel(5)
   					//setTimeout(()=>{this.location.href = "/Administrador.php?id="+1}, 3000)
   					Partidas.push(Paquete);
   					
   					//emparentar();
   					//ImprimirPartidas();
   			
   	
   				}
   			}
   			
   		}
   	} else {
   		alert('datos incompletos')
   	}
   	
   	
   	
   }
   
   function CambioPartida(t_id){
   
   			// Cortamos Tiempo
   			TransursoCheckPoint = numeral(0);
   			clearInterval(TimeOutCheckPoint)
   			document.getElementById('WEb41c8f437a').innerText = TransursoCheckPoint.format('00:00:00')
   			document.getElementById('WE004b175b7f').style.visibility = "visible";
   			// cargamos partida:
   			_phpid = t_id;
   			IdPartidaActiva.id = t_id;
   			CargarConf();
   			Panel(5)
   			
   	
   		//this.location.href = "Administrador.php?id="+t_id;
   	}
   
   function AgregarJugador(){
   	
   	if (condiciones("PartidaCurso")){
   	if (document.getElementsByName("AddPlayer")[0].value != ""){
   		Jugadores[GrupoSelecto].push(
   			{
   				nombre:document.getElementsByName("AddPlayer")[0].value, 
   			 	obj:CrearStiquerNombre(document.getElementsByName("AddPlayer")[0].value)
   									   }
   			);
   		document.getElementsByName("AddPlayer")[0].value = "";
   			
   		ImprimirJugadores();		
   		EstadoGrupos[GrupoSelecto].obj.children[0].children[1].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[GrupoSelecto].titulo+" ("+Jugadores[GrupoSelecto].length+")";
   		
   		_BtnGuardarCambios.style.visibility = "visible";
   		document.getElementsByName("AddPlayer")[0].focus();
   		return Jugadores;
   		
		   }
		}	   
   }
   
   // Quitar elementos:
   
   function QuitarPartida(id){
   	delete Partidas[id];
   }
   
   function QuitarJugador(NombJug){
   	Jugadores[GrupoSelecto] = Jugadores[GrupoSelecto].filter(function(item){return item.nombre !== NombJug});
   	ImprimirJugadores();
   	EstadoGrupos[GrupoSelecto].obj.children[0].children[1].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[GrupoSelecto].titulo+" ("+Jugadores[GrupoSelecto].length+")";
   	return Jugadores;
   }
   
   // Imprimir listas:
   // 
   
   function ImprimirPartidas(){
   	
   	_ListaPartidasDOM.innerHTML = "";
   	
   	for (b=0; b < Partidas.length; b++){
   		
   		_ListaPartidasDOM.appendChild(Partidas[b].obj);
   		
   		//marcarSelecto:
   		if (IdPartidaActiva.id == Partidas[b].id){
   		Partidas[b].obj.setAttribute('style','background:#4CA7E4');
   		}
   		
   	}
   	
   	
   }
   
   function ImprimirJugadores(){
   	
   	
   	//ImprimirGrupos();
   	
   	_ListaJugadoresDOM.innerHTML = "";
   	
   	for (i=0; i < Jugadores[GrupoSelecto].length; i++){
   	 	_ListaJugadoresDOM.appendChild(Jugadores[GrupoSelecto][i].obj);
   		
   	}
   	if (EstadoGrupos.filter((item)=>{return item.estado == "on" }).length > 0){  // si hay equipos activos
   		_ListaJugadoresDOM.appendChild(_IputNomb);
   		}
   	
   	// Marcar selecto:
   	for (a=0; a < EstadoGrupos.length; a++){
   	if(a == GrupoSelecto){
   		EstadoGrupos[GrupoSelecto].obj.setAttribute('style','background:#4CA7E4');
   		} else {
   		EstadoGrupos[a].obj.setAttribute('style','');
   		}
   	}
   	
   	OE.CssEvents.initialize()
   	
   }
   
   
   
   
   
   function ImprimirGrupos(){
   	
   	_ListaGruposDOM.innerHTML = "";
   	
   	for (i=0; i< EstadoGrupos.length; i++){
   		
   		_ListaGruposDOM.appendChild(EstadoGrupos[i].obj);
   
	   }
	   
	   FinalDash = document.getElementsByName("finaldash")

	   if (IdPartidaActiva.SprintAct != IdPartidaActiva.maxsprints){
		FinalDash.forEach((s)=>{s.style.display = "none"})
	   } else {
		FinalDash.forEach((s)=>{s.style.display = "initial"})
	   }
   	
   	
   }
   
   
   function condiciones(i){

		CorriendoSprint = ()=>{
			if (parseInt(document.getElementsByName('SprintVigente')[0].value) > 1){
				return false
			} else {
				return true
			}
		}
		Guardado = () => {
			if (document.getElementById('WE1a39ae8516').style.visibility == "visible")
			{ return false}
			else 
			{return true}
		}

		GruposActivos = EstadoGrupos.filter((s)=>{return s.estado == "on"}).length;
		TotalJugadores = () => {
			n = 0;
			Counts = EstadoGrupos.filter((s)=>{return s.estado == "on"})
			Counts.forEach((x)=>{
				
					if (Jugadores[parseInt(x.id)].length > 0){
						n += 1;}
			});

			if (Counts.length == n)
			return true;
			else 
			return false
		};

		TotalCards = () =>{
			xn = cards.filter((x)=>{return x.length > 0}).length
			if (xn > 0){
				return true
			} else {
				return false
			}

		}

	   switch (i){
		   case "Guardado":
				if (GruposActivos >= 1 && CorriendoSprint() && TotalJugadores()){
					return true
				} else {
					alert("- Debe tener al menos un grupo activo y con jugadores, \n- La partida no debe estar en curso");
					return false
					
				}
			break;
			case "CargarJugadores":
					if (GruposActivos >= 1 && CorriendoSprint()){
						return true
					} else {
						alert("- Debe tener al menos un grupo activo \n la partida no debe estar en curso");
						return false
					}
			break;
			case "AsignarCartas":
				if(GruposActivos >= 1 && CorriendoSprint()){
					return true
				} else {
					alert("-Debe tener al menos un grupo activo \n- La partida no debe estar en curso")
				}

			break;
			case "CorrerTiempo":
					if(Guardado() && GruposActivos >= 1 && TotalCards()){
						return true
					} else {
						alert("- Cambios sin guardar \n- Debe tener al menos un grupo activo \n- No hay cartas asignadas")
					}
			break;
			case "PartidaCurso":
					if(CorriendoSprint()){
						return true
					} else {
						alert("- La partida no debe estar en curso")
					}
			break;

	   	}
		
   }


   function ActivarGrupo(id, std){
	if (condiciones("PartidaCurso")){
   	EstadoGrupos[id].estado = std;
   	
   	EstadoGrupos[id].obj = CrearItemGrupos(
   			EstadoGrupos[id].estado, 
   			EstadoGrupos[id].titulo, 
   			EstadoGrupos[id].puntos, 
   			EstadoGrupos[id].sprint,
   			Jugadores[id].length,
   			id)	
   	
   	if (std == "off"){
   		Jugadores[id] = [];
   		GrupoSelecto = 0;
   		_BtnGuardarCambios.style.visibility = "visible";
   	} else {
   		GrupoSelecto = id;	
   		_BtnGuardarCambios.style.visibility = "visible";
   	}
   	
   	ImprimirGrupos();
   	ImprimirJugadores();
   	ImprimirCards();
   	
   	// Limpiamos cartas designadas;
   	for (a=0; a < cards.length; a++){
   	cards[a] = [];
   	} 
   	
}
   }
   
   function ImprimirCards(filtro){
   	
   	_ListaCardsDOM.innerHTML = "";
   	tim = 0;
   	
   	for (i=0; i<cards[GrupoSelecto].length;i++){
   		
   		
   			if (cards[GrupoSelecto][i].tipo <= IdPartidaActiva.maxsprints){
   				setTimeout(rapidelay, tim, i);
   				tim += 20;
   				
   			
   		}
   	} 
   }
   
   function rapidelay(i){
   	_ListaCardsDOM.appendChild(cards[GrupoSelecto][i].obj);
   }
   
   
   function ActualizarGrupos(){
   	EstadoGrupos[0].titulo = document.getElementsByName("Grups")[0].value;
   	EstadoGrupos[0].passw = document.getElementsByName("Grups")[1].value;
   	
   	EstadoGrupos[1].titulo = document.getElementsByName("Grups")[2].value;
   	EstadoGrupos[1].passw = document.getElementsByName("Grups")[3].value;
   	
   	EstadoGrupos[2].titulo = document.getElementsByName("Grups")[4].value;
   	EstadoGrupos[2].passw = document.getElementsByName("Grups")[5].value;
   	
   	EstadoGrupos[3].titulo = document.getElementsByName("Grups")[6].value;
   	EstadoGrupos[3].passw = document.getElementsByName("Grups")[7].value;
   	
   	EstadoGrupos[4].titulo = document.getElementsByName("Grups")[8].value;
   	EstadoGrupos[4].passw = document.getElementsByName("Grups")[9].value;
   	
   	EstadoGrupos[5].titulo = document.getElementsByName("Grups")[10].value;
   	EstadoGrupos[5].passw = document.getElementsByName("Grups")[11].value;
   	
   	EstadoGrupos[6].titulo = document.getElementsByName("Grups")[12].value;
   	EstadoGrupos[6].passw = document.getElementsByName("Grups")[13].value;
   	
   	
   	Panel(0);
   	
   	
	   GuardarCambios();
	  
	   par = 0
   	for(y=0; y<EstadoGrupos.length; y++) 
   		{
   		EstadoGrupos[y].obj = CrearItemGrupos(
   			EstadoGrupos[y].estado, 
   			EstadoGrupos[y].titulo, 
   			EstadoGrupos[y].puntos, 
   			EstadoGrupos[y].sprint,
   			Jugadores[y].length,
   			y)	
   		try{
   		document.getElementsByName("Grups")[par].value = EstadoGrupos[y].titulo;
   		document.getElementsByName("Grups")[par+1].value = EstadoGrupos[y].passw;
   		par+=2;
   		}catch (e){}
		   }
		   

	   ImprimirGrupos();

	   //ActualizarGrupos();
   	
   	;
   }
   
   
   // Creación de elementos visuales:
   
   function CrearStiquerNombre(Titulo, hash){

	icon = ["_usr_1-WEd91f42829d.png","_usr_2-WE22e243359b.png","_usr_3-WE3defa2e960.png","_usr_4-WEdb351f375a.png","Usr_5-WE954e4f061f.png","Usr_6-WEdd4dd2387a.png","Usr_7-WE473bed634b.png","Usr_8-WEb1b195d5e7.png","Usr_9-WE7e191f76ae.png","Usr_10-WE8ad6ddfc15.png","Usr_10-WE8ad6ddfc15.png","Usr_11-WE9dff58ac24.png","Usr_12-WE58ee3f227f.png"];

	avtar = (hash == undefined) ? "default_user-WE5c6dcd07de.png" : icon[hash];
	
   	Printer = '<div id="WE52271ac670" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE52271ac670">'+
              '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
               '<div id="WE4c9350319d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:3">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE4c9350319d">'+
                 '<a href="javascript:EliminarJugador(\''+Titulo+'\')">'+
                  '<img src="../Images/icon_delete-WE4c9350319d.png" class="OESZ OESZ_Img OESZG_WE4c9350319d" alt="" />'+
                 '</a>'+
                '</div>'+
               '</div>'+
               '<div id="WE5c6dcd07de" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE5c6dcd07de">'+
                 '<img src="../Images/'+avtar+'" class="OESZ OESZ_Img OESZG_WE5c6dcd07de" alt="" />'+
                '</div>'+
               '</div>'+
               '<div id="WE080a872104" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE080a872104">'+
                 '<span class="OESZ OESZ_Text OESZG_WE080a872104 ContentBox">'+Titulo+'</span>'+
                '</div>'+
               '</div>'+
              '</div>'+
             '</div>'+
            '</div>';
   		
   		var obj = document.createElement('div');
   		obj.innerHTML = Printer;
   		
   		return obj.firstChild;
   }
   
   function CrearCardsSprints(Titulo, i){
   
	Titulo = (Titulo.length > 15) ? Titulo.substring(0,15) +"..." :  Titulo;

   	Printer = '<div id="WEd799e6d791" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1;;background-color:'+SprintColors[i-1]+'">'+
             '<div class="OESZ OESZ_DivContent OESZG_WEd799e6d791">'+
              '<main id="Card1">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                '<div id="WE1dd1884d4f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE1dd1884d4f">'+
                  '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                   '<div id="WE1a5b467b37" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE1a5b467b37">'+
                     '<a href="javascript:alert(\''+Titulo+'\');">'+
                      '<img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1a5b467b37" alt="" />'+
                     '</a>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE8ea6a60fb1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE8ea6a60fb1">'+
                     '<span class="OESZ OESZ_Text OESZG_WE8ea6a60fb1 ContentBox">'+Titulo+'<br /></span>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</div>'+
             '</main>'+
             '</div>'+
            '</div>';
   	
   		var obj = document.createElement('div');
   		obj.innerHTML = Printer;
   		
   		return obj.firstChild;
   	
   }
   
   function CrearItemGrupos(std, nombre, puntos, sprint, initNumJugad, id){
	   


   	if (std == "on"){
   		
   		Printer = '<div id="WEf132d9e24b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">'+
             '<div class="OESZ OESZ_DivContent OESZG_WEf132d9e24b">'+
              '<a href="javascript:GrupoSelecto='+id+' ;ImprimirJugadores(); ImprimirCards();">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                '<div id="WE5cd2b5baed" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE5cd2b5baed">'+
                  '<img src="../Images/icon_on-WE5cd2b5baed.png" class="OESZ OESZ_Img OESZG_WE5cd2b5baed" alt="" onClick="javascript:DesactivarGrupo(\''+nombre+'\', '+id+');"/>'+
                 '</div>'+
                '</div>'+
                '<div id="WE2c53145f95" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE2c53145f95">'+
                  '<span class="OESZ OESZ_Text OESZG_WE2c53145f95 ContentBox">Puntos: '+puntos+'</span>'+
                 '</div>'+
                '</div>'+
                '<div id="WE281ef99d4d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE281ef99d4d">'+
                  '<span class="OESZ OESZ_Text OESZG_WE281ef99d4d ContentBox">'+nombre+' ('+initNumJugad+')</span>'+
				 '</div></div>'+
				 
				 // agregado del Dashboard final:

				 '<div id="WEbfb7b2585e" name="finaldash" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:4">'+
              '<div class="OESZ OESZ_DivContent OESZG_WEbfb7b2585e">'+
               '<a href="finaldash.php?g='+id+'&c='+IdPartidaActiva.canvas+'"><img src="../Images/go_icon-WEbfb7b2585e.png" class="OESZ OESZ_Img OESZG_WEbfb7b2585e" alt="" /></a>'+
              '</div>'+
			 '</div>'+
			 

				 '</div></a></div></div>';	
   			
   		} else {
   			Printer = '<div id="WE97997a5457" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE97997a5457">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                '<div id="WE78a8524a2f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE78a8524a2f">'+
                  '<img src="../Images/icon_off-WE78a8524a2f.png" class="OESZ OESZ_Img OESZG_WE78a8524a2f" alt="" onClick="javascript:ActivarGrupo('+id+', \'on\');"/>'+
                 '</div>'+
                '</div>'+
                '<div id="WE1929716113" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE1929716113">'+
                  '<span class="OESZ OESZ_Text OESZG_WE1929716113 ContentBox">'+nombre+'</span>'+
                 '</div></div></div></div></div>';
   		}
   	
   		var obj = document.createElement('div');
   		obj.innerHTML = Printer;
   		
   		return obj.firstChild;
   }
   
   function CambiarSprint(op){
   	
   	if (op == 0){
   		//console.log('Adelantar un Sprint')
   	}
   	if (op == 1){
   		
   		if (document.getElementsByName("SprintVigente")[0].value < IdPartidaActiva.maxsprints){
   			document.getElementsByName("SprintVigente")[0].value = parseInt(document.getElementsByName("SprintVigente")[0].value) + 1;
   		} else {
   			alert('Ya estás en el último Sprint')
   		}
   		
   	}
   }
   
   
   function CrearPartidaItem (id, estado, hasta, desde, maxSprint, titulo){
   
   	if (estado == "on"){
   		printer_part = '<div id="WE98d8f8898e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE98d8f8898e">'+
                 '<a href="javascript:CambioPartida('+id+');">'+
                  '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                   '<div id="WEc233f5d892" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:7">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEc233f5d892">'+
                     '<img src="../Images/delete_big-WEc233f5d892.png" onClick="EliminarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEc233f5d892" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE123c1f5899" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:6">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE123c1f5899">'+
                     '<img src="../Images/icon_on-WE123c1f5899.png" onClick="DesactivarPartida('+id+')" class="OESZ OESZ_Img OESZG_WE123c1f5899" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEbb824f9f32" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEbb824f9f32">'+
                     '<span class="OESZ OESZ_Text OESZG_WEbb824f9f32 ContentBox">Desde: '+desde+'</span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE6f9a39ccee" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE6f9a39ccee">'+
                     '<span class="OESZ OESZ_Text OESZG_WE6f9a39ccee ContentBox">'+titulo+'</span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEedfc04245d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEedfc04245d">'+
                     '<span class="OESZ OESZ_Text OESZG_WEedfc04245d ContentBox">'+maxSprint+'<br /></span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE1906526d4e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE1906526d4e">'+
                     '<span class="OESZ OESZ_Text OESZG_WE1906526d4e ContentBox">Max. Sprints:</span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEfa6ff4fb4b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEfa6ff4fb4b">'+
                     '<span class="OESZ OESZ_Text OESZG_WEfa6ff4fb4b ContentBox">Hasta: '+hasta+'</span>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</a>'+
                '</div>'+
               '</div>';
   		} else {
   		
   			printer_part = '<div id="WE4e4fc4f76c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE4e4fc4f76c">'+
                 '<a href="javascript:CambioPartida('+id+');">'+
                  '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                   '<div id="WEfce8160f10" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:5">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEfce8160f10">'+
                      '<img src="../Images/delete_big-WEfce8160f10.png" onClick="EliminarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEfce8160f10" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEc9446d2cb9" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEc9446d2cb9">'+
                      '<img src="../Images/icon_off-WEc9446d2cb9.png" onClick="ActivarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEc9446d2cb9" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEedbff9d85f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEedbff9d85f">'+
                     '<span class="OESZ OESZ_Text OESZG_WEedbff9d85f ContentBox">Desde: '+desde+'</span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE9db4469a0c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE9db4469a0c">'+
                     '<span class="OESZ OESZ_Text OESZG_WE9db4469a0c ContentBox">'+titulo+'</span>'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEe4f0c7be66" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEe4f0c7be66">'+
                     '<span class="OESZ OESZ_Text OESZG_WEe4f0c7be66 ContentBox">Hasta: '+hasta+'</span>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</a>'+
                '</div>'+
               '</div>';
   		}
   	
    
   	
   	var obj = document.createElement('div');
   		obj.innerHTML = printer_part;
   		
   		return obj.firstChild;
   }
   /*
   // Lanzadores:
   // 
   ImprimirGrupos();
   ImprimirJugadores();
   ImprimirCards();
   
   */
   
   
   ;
   const serv_xlsx = '../xlsx_players.php?f=ok"';
   const serv_cards_rand = '../cards.php?f=designar';
   const serv_conf_save = '../conf_save.php?f=save&id=';
   const serv_conf_carg = '../conf_save.php?f=load&id=';
   const serv_nuevPart = '../conf_save.php?f=partidas&o=';
   const serv_cont_tiempo = '../realtime-canvas.php?f=Get_Timestamp&p=';
   
   
   ProcesarXLSX = () => {
	if(condiciones('CargarJugadores')){
   	Panel(5);
   	
   	var data = new FormData()
   	data.append('file', document.getElementsByName('file')[0].files[0])
   	data.append('user', 'hubot')
   
   	fetch(serv_xlsx+' enctype="multipart/form-data', {
   	  method: 'POST',
   	  body: data
   	})
   	
   	.then(response => response.json())
     	.then(data => {
       
   		
   		// console.log(data[0].tipo)
   		// console.log(data.error)
   		// 
   		if(data[0].tipo == "error"){
   			alert("Error :"+ data[0].error);
   		} else {
   			
   			
   			// No Concatenar 	
   
   			if (document.getElementById("WEb012289847").children[0].children[0].value != 0 ){
   			
   				for (i=0; i< data.length; i++){
   
   					Jugadores[data[i].grupo-1] = [];
   				}
   				
   			}
   			
   			
   			// Cargar Nombres de Grupos:
   			
   			for (i=0; i< data.length; i++){
   				
   				//console.log("g: "+data[i].grupo+" j: "+data[i].jugador);
   
   				if (EstadoGrupos[(data[i].grupo-1)].estado == "on"){
   				
   				Jugadores[data[i].grupo-1].push(
   						{
   							nombre:data[i].jugador, 
   							obj:CrearStiquerNombre(data[i].jugador)
   						}
   					);
   				
   				EstadoGrupos[(data[i].grupo-1)].obj.children[0].children[1].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[(data[i].grupo-1)].titulo+" ("+Jugadores[(data[i].grupo-1)].length+")";
   				
   				}
   			} 
   			
   			ImprimirJugadores();
   			Panel(0);
   			_BtnGuardarCambios.style.visibility = "visible";
   			
   		}
   		
   		
   	  })
   	  .catch(error => {
   		
   		alert(error);
   		console.error(error)
		 })
	}
   }
   
   //TotalesPorSprint_Cards = []
   
   CargarCartas = () => {
	if (condiciones('AsignarCartas')) {
   	Panel(5);
   	
   	fetch(serv_cards_rand, {
   	 
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		//console.log(data)
   		
   		RandonCards = data;
   		Panel(4);
   		
   		// contamos Grupos
   		
   		totalgrupos = 0;
   	
   		for (n=0; n< EstadoGrupos.length; n++){
   			if(EstadoGrupos[n].estado == "on"){
   
   				totalgrupos += 1;
   				//cards[n] = [];
   			}
   		}
   		
   		TotalesPorSprint_Cards = [];
   		for (i=0; i<RandonCards.length; i++){
   			TotalesPorSprint_Cards.push(RandonCards[i].length)	
   		}	
   		
   		TotalesPorSprint_Cards.forEach((s, value)=>{
   			document.getElementsByName('TotCart')[value].value = parseInt(s/totalgrupos);
   			document.getElementsByName('TotCart')[value].setAttribute('onChange', 'ValidacionFormRandoCards(event, '+parseInt(s/totalgrupos)+', '+value+')')
   		});
   		
   		Mvs = document.getElementsByName('movs');
   		
   		xx = IdPartidaActiva.MovLimit.split(",")
   		
   		Mvs.forEach((s, value)=>{
   			Mvs[value].value = xx[value]
   		});
   		
   	}) 
   	.catch(error => {
   		
   		alert(error);
   		console.error(error)
   	  })
   		
	   //console.log("OK")
	}
   }
   
   DesignarCartas = () => {
   	
   	// Limpiamos cartas designadas;
   	for (a=0; a < cards.length; a++){
   	cards[a] = [];
   	} 
   	
   	Sp1 = document.getElementsByName('TotCart');
   	Mvs = document.getElementsByName('movs');
   
   	for (a=1; a <= IdPartidaActiva.maxsprints; a++){
   		Asignarporsprint(a, parseInt(Sp1[a-1].value));
   		//console.log("asignado a: "+ a +" con: "+Sp1[a-1].value);
   	}
   	
   	st = "";
   	Mvs.forEach((s)=>{
   		
   		st += s.value +",";
   		
   	});
   	
   	IdPartidaActiva.MovLimit = st.slice(0,-1);
   	
   	
   	Panel(0);
   	ImprimirCards();
   }
   
   Asignarporsprint = (sprint, num) => {
   	
   	// busco grupos activos:
   	
   	totalgrupos = 0;
   	
   	for (n=0; n< EstadoGrupos.length; n++){
   		if(EstadoGrupos[n].estado == "on"){
   			
   			totalgrupos += 1;
   			//cards[n] = [];
   		}
   	}
   	
   	t = 0
   	
   	if ((RandonCards[sprint-1].length/totalgrupos) >= num){
   		
   	for (i=0; i< EstadoGrupos.length; i++)
   		{
   		
   		t_num = t+num
   		
   		// console.log("tope:"+t_num);
   			
   		if(EstadoGrupos[i].estado == "on"){
   			
   			
   			
   				for (t; t < t_num; t++){
   	
   					//console.log("actual:"+t);
   
   					cards[i].push({
   						tipo:sprint, 
   						id:	RandonCards[sprint-1][t].ID,
   						titulo: RandonCards[sprint-1][t].ntarj +" "+ RandonCards[sprint-1][t].titulo,
   						obj:null,
   						value:null
   
   
   				});
   					 //RandonCards[sprint-1].shift();
   
   				}
   				
   				
   			
   			
   		}
   	
   		
   	}
   		_BtnGuardarCambios.style.visibility = "visible";
   		
   		} else {
   				alert("Sprint:"+sprint +" - "+num + ", son demaciadas cartas para dividir en " + totalgrupos + " grupos, Total: "+RandonCards[sprint-1].length+" cartas disponibles")
   				//Panel(4);
   				_BtnGuardarCambios.style.visibility = "visible";
   			}
   	
   	try {
   		for (x=0; x<cards.length; x++){ // distribuye por grupo
   			try {
   				for (i=0; i<cards[x].length; i++){
   					cards[x][i].obj = CrearCardsSprints(cards[x][i].titulo, cards[x][i].tipo);
   				}
   
   			}
   
   			catch (e){
   
   			}
   		}} catch (e) {}
   	
   	
   }
   
   
   ValidacionFormRandoCards = (e, v, t) => {
   	p = ["WE19b79f106b", "WE7a08a0797f", "WE886d9d5223", "WEe795284d89", "WEc5e8fdb403", "WE9a3d46dc8f"]	
   	if (parseInt(e.target.value) > parseInt(v)){
   	//alert('Cartas Fuera de Rango');
   		e.target.value = v;
   		document.getElementById(p[t]).style.background="#c00000";
   		document.getElementById(p[t]).innerText="NO"
   		
   		setTimeout(()=>{
   			document.getElementById(p[t]).style.background="#92d050";
   			document.getElementById(p[t]).innerText="OK"	
   		}, 1530)
   	} else {
   		document.getElementById(p[t]).style.background="#92d050";
   		document.getElementById(p[t]).innerText="OK"
   	}
   }
   
   GuardarCambios = () => {
   	if (condiciones('Guardado')){
   	Panel(5);
   	
   	var data = new FormData()
   	data.append('Partida', JSON.stringify(IdPartidaActiva)),
   	data.append('Jugadores', JSON.stringify(Jugadores)),
   	data.append('Cards', JSON.stringify(cards)),
   	data.append('Grupos', JSON.stringify(EstadoGrupos))
   	
   
   	fetch(serv_conf_save+_phpid, {
   	  method: 'POST',
   	  body: data
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		//console.log(data)
   		
   		if (data[0].status == "ok"){
   			_BtnGuardarCambios.style.visibility = "hidden";
   			Panel(0);
   		}
   		// Respuesta;
   		
   		SprinrVig.innerHTML = "";
   		for (i=parseInt(IdPartidaActiva.SprintAct)+1; i< parseInt(IdPartidaActiva.maxsprints)+1; i++){
   		SprinrVig.innerHTML += '<option value="'+i+'" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint '+i+'</option>'}
   		
   	}).catch(error => {
   		
   		alert(error);
   		Panel(0);
   		//console.error(error)
   	  })
   	
	}
   }
   
   EnviarPartida = (m, pr, id)=> {  //EnviarPartida(x, false, 15)
   	
   	var data = new FormData()
   
   	//console.log()
   	
   	switch (m){
   		case "n":
   			URL = serv_nuevPart + 1;
   		break;
   		case "x":
   			URL = serv_nuevPart + 2 + "&id="+id;
   			pr = {"false":"false"};
   		break;
   		case "e":
   			URL = serv_nuevPart + 3 + "&id="+id;
   		break;
   			
   	}
   	data.append('partida', JSON.stringify(pr))
   	//console.log(URL)
   	
   	fetch(URL, {
   	  method: 'POST',
   	  body: data
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		Panel(0);
   		
   		//console.log(data)
   		
   		if (data[0].status == "ok"){
   			_BtnGuardarCambios.style.visibility = "hidden";
   			
   			if(m == "x"){
   				
   			}
   			
   			if (m != "x"){
   				_phpid = data[0].id;
   				CargarConf();
   				Panel(5);
   			} else {
   				Partidas = Partidas.filter(function(item){return item.id !== id.toString()});
   				ImprimirPartidas()
   				if (Partidas.length <= 0){
   					Panel(1);
   				}
   			}
   		}
   		// Respuesta;
   		
   	}).catch(error => {
   		//console.log(error)
   		Panel(0);
   		//console.error(error)
   	  })
   	
   }
   
   var ls_error;
   err_time = 0;
   
   CargarConf = () => {
   	fetch(serv_conf_carg+_phpid, {
   	 
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		//console.log(data)
   		
   		IdPartidaActiva = data[0];
   		EstadoGrupos = data[2];
   		Partidas = data[1];
   		Jugadores = data[3];
   		cards = data[4];
   		
   		Panel(0);
   		
   		if (Partidas.length == 0 ){
   			Panel(1);	
   			document.getElementById('WE5f2fd50e89').children[0].children[0].href="javascript:alert('Necesita una partida')"
   		}
   		
   		
   		emparentar();
   		ImprimirGrupos();
   		ImprimirCards();
   		ImprimirPartidas();
   		ImprimirJugadores();
   		
   		SprinrVig.innerHTML = "";
   		for (i=parseInt(IdPartidaActiva.SprintAct)+1; i< parseInt(IdPartidaActiva.maxsprints)+1; i++){
   		SprinrVig.innerHTML += '<option value="'+i+'" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint '+i+'</option>'
		   }
   		if (IdPartidaActiva.estado == "on"){
			   
			if (IdPartidaActiva.maxsprints == IdPartidaActiva.SprintAct)
			{
				console.log("el fin")
				 document.getElementById('WE004b175b7f').style.visibility = "hidden";   
			} else {
				console.log("no fin")
				 document.getElementById('WE004b175b7f').style.visibility = "visible";
			}
   			
   			
   			a = numeral(IdPartidaActiva.tm_desde)
   			b = numeral(IdPartidaActiva.tm_hasta)
   		
   			if (a._value < b._value){
   
   				b.subtract(a._value)
   				CheckPoint.hasta = b.format("00:00:00");
   				RunCheck()
   				document.getElementById('WE004b175b7f').style.visibility = "hidden";
   
   			}
   			
   		} else {
   			document.getElementById('WE004b175b7f').style.visibility = "hidden";
   		} 
   		// si hay tiempo por correr:
   		
   		
   		
   		
   	}) 
   	.catch(error => {
   		
   		//alert(error);
   		ls_error = error
   		
   		if (ls_error = "TypeError"){
   			
   			 setTimeout(()=>{CargarConf()}, 3200)
   			 err_time++
   			if (err_time > 2){
   				alert("Error de conexión con el servidor.")
   				this.location.href = "/"
   			}
   		   }
   		
   		console.error(error)
   		
   		
   		
   	  })
   		
   //	console.log("OK")
   }

   if (_phpid != "9000000000000000000009901"){
  	 CargarConf();
	} else {
		Panel(1);	
		document.getElementById('WE5f2fd50e89').children[0].children[0].href="javascript:alert('Necesita una partida')"
	}
   
   function emparentar(){
   	// Emparentar Objetos iniciales:
   // 		Jugadores:
   
   for (z=0; z<Jugadores.length; z++){
   	try {
   		for (i=0; i<Jugadores[z].length; i++){
   			Jugadores[z][i].obj = CrearStiquerNombre(Jugadores[z][i].nombre, Jugadores[z][i].hash);
   		}
   		
   	}
   	
   	catch (e){
   		
   	}
   }
   
   // 		Card:
   try {
   for (x=0; x<cards.length; x++){ // distribuye por grupo
   	try {
   		for (i=0; i<cards[x].length; i++){
   			cards[x][i].obj = CrearCardsSprints(cards[x][i].titulo, cards[x][i].tipo);
   		}
   		
   	}
   	
   	catch (e){
   		
   	}
   }} catch (e) {}
   
   // 		Grupos:
    		par = 0
   	for(y=0; y<EstadoGrupos.length; y++) 
   		{
   		EstadoGrupos[y].obj = CrearItemGrupos(
   			EstadoGrupos[y].estado, 
   			EstadoGrupos[y].titulo, 
   			EstadoGrupos[y].puntos, 
   			EstadoGrupos[y].sprint,
   			Jugadores[y].length,
   			y)	
   		try{
   		document.getElementsByName("Grups")[par].value = EstadoGrupos[y].titulo;
   		document.getElementsByName("Grups")[par+1].value = EstadoGrupos[y].passw;
   		par+=2;
   		}catch (e){}
   		}
   			
   		
   	
   	for(z=0; z<Partidas.length; z++) 
   		{
   		Partidas[z].obj = CrearPartidaItem(
   			Partidas[z].id, 
   			Partidas[z].estado, 
   			Partidas[z].hasta, 
   			Partidas[z].desde,
   			Partidas[z].maxsprints,
   			Partidas[z].titulo);
   			
   			
   		}
   
   
   }
   
   CorrerTiempo = () =>{
	   
	if (condiciones("CorrerTiempo")){
   	
   	Min_ = document.getElementsByName("AjusTime")[0].value
   	Seg_ = document.getElementsByName("AjusTime")[1].value
   	
   	Tiemp = numeral("00:"+Min_+":"+Seg_)
   	Tiemp = Tiemp.format("00:00:00")
   	Panel(5);
   	
   	Spr = SprinrVig.value
   	
   	fetch("../realtime-canvas.php?f=Set_Timestamp&p="+_phpid+"&t="+Tiemp+"&sp="+Spr)
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		//console.log(data)
   		
   		a = numeral(data.desde)
   		b = numeral(data.hasta)
   		
   		if (a._value < b._value){
   		
   			b.subtract(a._value)
   			CheckPoint.hasta = b.format("00:00:00");
   			RunCheck(i)
   			document.getElementById('WE004b175b7f').style.visibility = "hidden";
   			
		   }
		   document.getElementsByName('SprintVigente')[0].value = parseInt(document.getElementsByName('SprintVigente')[0].value) + 1
   		
   		Panel(0);
   		
   		
   		
   	}).catch(error => {
   		
   		alert(error);
   		Panel(0);
   		//console.error(error)
   	  })
	}
   }
   
   
   TransursoCheckPoint = numeral(CheckPoint.hasta);
   var TimeOutCheckPoint = 0;
   
   function RunCheck(i){
   	clearInterval(TimeOutCheckPoint)
   	TransursoCheckPoint = numeral(CheckPoint.hasta);
   	
   	TimeOutCheckPoint = setInterval(()=>{
   	
   	TransursoCheckPoint.subtract(1);
   	//console.log(TransursoCheckPoint.format('00:00:00'));
   	document.getElementById('WEb41c8f437a').innerText = TransursoCheckPoint.format('00:00:00')
   	
   	if (TransursoCheckPoint._value <= 0){
		   clearInterval(TimeOutCheckPoint)
		   
		   
   		
   		IdPartidaActiva.SprintAct = (SprinrVig.value != "") ? parseInt(SprinrVig.value) : IdPartidaActiva.maxsprints;
		   
		   if (IdPartidaActiva.maxsprints == IdPartidaActiva.SprintAct)
		   {
				document.getElementById('WE004b175b7f').style.visibility = "false";   
		   } else {
				document.getElementById('WE004b175b7f').style.visibility = "visible";
		   }

   			SprinrVig.innerHTML = "";
   			for (i=parseInt(IdPartidaActiva.SprintAct)+1; i< parseInt(IdPartidaActiva.maxsprints)+1; i++){
   			SprinrVig.innerHTML += '<option value="'+i+'" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint '+i+'</option>'
   			}
			   
			   fetch('../conf_save.php?f=resetTime&id='+_phpid).then(response => {
				CambioPartida(_phpid);   
			   })
			   


   		//IdPartidaActiva.SprintAct = SprinrVig.value;     // (parseInt(IdPartidaActiva.SprintAct) + 1).toString();
   		//GuardarCambios();
   	}
   	
   },1000)
   	
   }