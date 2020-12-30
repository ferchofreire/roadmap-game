game_cards = [
	
	
	];

IdPartidaActiva = {"id":"55","titulo":"demox","desde":"2020-08-21","hasta":"2020-08-22","maxsprints":"6","estado":"on","lang":"es","hoy":"2020-08-21","obj":"","tm_desde":"19:26:12","tm_hasta":"19:22:20","canvas":"1","timestamp":"19:02:20","limit_time":"00:20:00","SprintAct":"2","MovLimit":"4,4,4,4,4,4","GrupoSelecto":"0"}
IdGrupoActivo = {"id":"", "Puntos":""}


Sprint = 1;
Puntos = 0;

/*_phpid=1;
_partid=0;*/

Pantalla = 0;

SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]
SprintTitle = ["Stress Test", "Business Model Patterns", "Blue Ocean Strategy", "Digital Drivers", "Business Model Test", "Metrics"]
SprintLeg = ["Undestanding the competitive environment", 
			 "New business models ahead", "Creating new market space", 
			 "targeting value with new digital skils", "Testing innovations", 
			 "implementing business model innovation"]

SprintTypeCards = ["Trends", "Patterns", "Blue Ocean", "Digital", "Test", "Metrics"]

CartasDisponibles = (a) =>{
	
	elm  = document.getElementById('WE2bd87c9368');
	
	if (a){
		elm.classList.remove("animate__slideOutRight")
		elm.classList.add("animate__slideInRight")	
		
	} else {
		elm.classList.remove("animate__slideInRight")
		elm.classList.add("animate__slideOutRight")
	}
	
	elm.addEventListener('animationend', () => {
	
		console.log('Otro');	

		elm.classList.remove("animate__slideInRight")
	   });
						 
}


_st_menu = false;

Menu = ()=> {
	elm = document.getElementById('WE0bf2c0b2ff');
	
	if (_st_menu){
		elm.classList.remove("animate__bounceOutDown")
		elm.classList.add("animate__bounceInUp")	
		setTimeout(Sender, 500)
		
	} else {
		elm.classList.remove("animate__bounceInUp")
		elm.classList.add("animate__bounceOutDown")
		setTimeout(Sender, 500)
	}
	_st_menu = !_st_menu
}


Sender = () =>{
	if (Pantalla == 1){
		elms = document.getElementById('WE979a2ce6ec');

		if (!_st_menu){
			elms.classList.remove("animate__bounceOutDown")
			elms.classList.add("animate__bounceInUp")	

		} else {
			elms.classList.remove("animate__bounceInUp")
			elms.classList.add("animate__bounceOutDown")
		}
	} else {
		elms = document.getElementById('WE979a2ce6ec');
		elms.classList.remove("animate__bounceInUp")
		elms.classList.add("animate__bounceOutDown")
	}
}

_tmp = "";
SprintStates = () =>{
	
	if (Sprint>0){
		var barra = document.getElementById('WE3001148426')
		var Titulo = document.getElementById('WE45106f887f').children[0].children[0]
			barra.style.setProperty("background-color", SprintColors[Sprint-1])
			Titulo.innerText = "Sprint "+Sprint + " - " + SprintTypeCards[Sprint-1];


			var Stage = document.getElementById('WE92894735fc')
	
				

				Stage.classList.remove("animate__backOutUp")
				Stage.style.visibility = "visible";
				Stage.style.setProperty("background-color", SprintColors[Sprint-1])

					Stage.classList.add("animate__tada") // animate__rotateIn

					MiniRunners.style.display = "initial"; // muestra animacion corriendo;

				var Titulo = document.getElementById('WE56afc4b9ec').children[0].children[0]
				var SprinTit = document.getElementById('WE4005d8dfae').children[0].children[0]
				var Leg = document.getElementById('WE894745cf0d').children[0].children[0]
				var CardType = document.getElementById("WEf07cd3261e").children[0].children[0]

					Titulo.innerText = "Sprint "+Sprint;
					SprinTit.innerText = SprintTitle[Sprint-1];
					Leg.innerText = SprintLeg[Sprint-1];
					CardType.innerText = SprintTypeCards[Sprint-1];
				setTimeout(()=>{
					Stage.classList.remove("animate__tada")
					Stage.classList.add("animate__backOutUp")
					//Stage.style.visibility = "hidden";
					pn(1)
				}, 4000)
		
		}
	
}



BasePanel = (p) => {
	FondoBasPan.style.visibility = "hidden"
	UsrSelect.style.visibility = "hidden"
	Loader.style.visibility = "hidden"
	
	switch(p){
		case 0:
			FondoBasPan.style.visibility = "hidden"
			UsrSelect.style.visibility = "hidden"
			Loader.style.visibility = "hidden"
		break;
		case 1:
			FondoBasPan.style.visibility = "visible"
			Loader.style.visibility = "visible"
		break;
		case 2:
			FondoBasPan.style.visibility = "visible"
			UsrSelect.style.visibility = "visible"
		break;
	}
}






;
CheckPoint = {desde:'00:00:00', hasta:'00:20:00'}
var TimeOutCheckPoint = "";
TransursoCheckPoint = "";

RunCheck = () => { 
	
	Look = false;
	CartasDisponibles(true);
	
	clearInterval(TimeOutCheckPoint)
	TransursoCheckPoint = numeral(CheckPoint.hasta);
	
	TimeOutCheckPoint = setInterval(()=>{
	
	TransursoCheckPoint.subtract(1);
	document.getElementById('WE48442240f5').innerText =TransursoCheckPoint.format('00:00:00')
	
	if (RealtimeData[1][0].confirmacion != "ok") {MiniRunners.style.display = "initial"; } // Mostramos runners}

	if (TransursoCheckPoint._value <= 0){
		clearInterval(TimeOutCheckPoint)
		TransursoCheckPoint = "";
		Look = true;
		Menu();
		CartasDisponibles(false);

		VariableCompetitiva = 0

		MiniRunners.style.display = "none"; // quita animacion mini runners;


		fetch('../conf_save.php?f=resetTime&id='+_phpid);
			 // (parseInt(IdPartidaActiva.SprintAct) + 1).toString();
		fetch("../realtime-canvas.php?f=confirm&g="+_phpid+"&p="+_partid+"&s="+IdPartidaActiva.SprintAct)
			 
			 
			 if (IdPartidaActiva.maxsprints == IdPartidaActiva.SprintAct){
				 console.log("Partida Terminada");
				 CargarTabla();

				 setTimeout(()=>{

					var Winner = document.getElementById('WEe2ca2a3b27')
					Winner.setAttribute("style", "z-index:5000;visibility:none")
					this.location.href="../admin/finaldash.php?g="+_phpid;

				 }, 2500)
				 
					var Winner = document.getElementById('WEe2ca2a3b27')
					Winner.setAttribute("style", "z-index:5000;visibility:visible")

					VariableCompetitiva = 0;
					EstadosResultado(game_cards);
					
				 pn(1);
				 
			 } else {
				EstadosResultado(game_cards);
			 }
		}
		
		
	},1000)
	
		
	
}



BajarCartas = () => {
	
	BasePanel(1);
	fetch('../realtime-canvas.php?f=carga&g='+_phpid+'&p='+_partid, {
	 
	})
	
	.then(response => response.json())
	  .then(data => { 
	
		console.log(data);

	game_cards=data[0];
	IdPartidaActiva=data[1][0];
	Sprint = parseInt(IdPartidaActiva.SprintAct);
	
		for (a=0; a < game_cards.length; a++){
			
			game_cards[a].obj = CrearItemCards(game_cards[a].tipo, game_cards[a].id, game_cards[a].titulo, a)

			Limpieza();
			setTimeout(() => {ColocarCards()}, 150); 
			
		}
		
		a = numeral(IdPartidaActiva.tm_desde)
		b = numeral(IdPartidaActiva.tm_hasta)
		
			if (a._value < b._value){

				b.subtract(a._value)
				CheckPoint.hasta = b.format("00:00:00");
				RunCheck()
				BasePanel(0);

			}
		
		TickRealtime();
		BasePanel(0);
		if (init){
			BasePanel(2);
			//init = false;
		}
		
		SprintStates();
	
	})
	
}