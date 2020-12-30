<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <title>Canvas Model Bussines</title>
  <meta name="viewport" content="width=850, initial-scale=1" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491112400" />
  <link id="OETemplate1" rel="stylesheet" type="text/css" href="Templates/Base.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="Canvas.css?v=50491112400" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/opentip.css?v=50491112400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491112400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"Canvas","Culture":"DEFAULT","LanguageCode":"ES","RelativePath":"","RenderMode":"Export","PageAssociatePath":"Canvas","EditorTexts":null};
  </script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/1.10.2.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/opentip-jquery.min.js?v=50491112400"></script>

  <script type="text/javascript" src="shopiphy/draggable.bundle.js"></script>
  
  

  

  <style id="OEScriptManager" type="text/css">
   ::-webkit-scrollbar{width:5px}::-webkit-scrollbar-track{background:#cccccc;border-radius:50px}::-webkit-scrollbar-thumb{background:#00afdb;border-radius:0px}
   
   /* Animaciones  */
   
   
   .fade-in-bottom{-webkit-animation:fade-in-bottom .6s cubic-bezier(.39,.575,.565,1.000) both;animation:fade-in-bottom .6s cubic-bezier(.39,.575,.565,1.000) both}
   @-webkit-keyframes fade-in-bottom{0%{-webkit-transform:translateY(50px);transform:translateY(50px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes fade-in-bottom{0%{-webkit-transform:translateY(50px);transform:translateY(50px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
   .wobble-ver-right{display:initial:visible;-webkit-animation:wobble-ver-right .8s both;animation:wobble-ver-right .8s both}
   @-webkit-keyframes wobble-ver-right{0%,100%{-webkit-transform:translateY(0) rotate(0);transform:translateY(0) rotate(0);-webkit-transform-origin:50% 50%;transform-origin:50% 50%}15%{-webkit-transform:translateY(-30px) rotate(6deg);transform:translateY(-30px) rotate(6deg)}30%{-webkit-transform:translateY(15px) rotate(-6deg);transform:translateY(15px) rotate(-6deg)}45%{-webkit-transform:translateY(-15px) rotate(3.6deg);transform:translateY(-15px) rotate(3.6deg)}60%{-webkit-transform:translateY(9px) rotate(-2.4deg);transform:translateY(9px) rotate(-2.4deg)}75%{-webkit-transform:translateY(-6px) rotate(1.2deg);transform:translateY(-6px) rotate(1.2deg)}}@keyframes wobble-ver-right{0%,100%{-webkit-transform:translateY(0) rotate(0);transform:translateY(0) rotate(0);-webkit-transform-origin:50% 50%;transform-origin:50% 50%}15%{-webkit-transform:translateY(-30px) rotate(6deg);transform:translateY(-30px) rotate(6deg)}30%{-webkit-transform:translateY(15px) rotate(-6deg);transform:translateY(15px) rotate(-6deg)}45%{-webkit-transform:translateY(-15px) rotate(3.6deg);transform:translateY(-15px) rotate(3.6deg)}60%{-webkit-transform:translateY(9px) rotate(-2.4deg);transform:translateY(9px) rotate(-2.4deg)}75%{-webkit-transform:translateY(-6px) rotate(1.2deg);transform:translateY(-6px) rotate(1.2deg)}}
   
   /* Exits  */
   .slide-out-right{-webkit-animation:slide-out-right .5s cubic-bezier(.55,.085,.68,.53) both;animation:slide-out-right .5s cubic-bezier(.55,.085,.68,.53) both}
   
   @-webkit-keyframes slide-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}}@keyframes slide-out-right{0%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}100%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}}
   @keyframes BanderinTiled {
     100% { background-position: -550px 0; }
   }
   
   @keyframes WinsTiled {
     100% { background-position: -1024px 0; }
   }
   
   @keyframes RunsTiled {
     100% { background-position: -1024px 0; }
   }
   
   
   .slide-in-right{-webkit-animation:slide-in-right .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-right .5s cubic-bezier(.25,.46,.45,.94) both}
   @-webkit-keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}
   
   .rotate-in-2-cw{-webkit-animation:rotate-in-2-cw .5s cubic-bezier(.25,.46,.45,.94) both;animation:rotate-in-2-cw .5s cubic-bezier(.25,.46,.45,.94) both}
   .slide-in-top{-webkit-animation:slide-in-top .5s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-top .5s cubic-bezier(.25,.46,.45,.94) both}
   .slide-in-right{-webkit-animation:slide-in-right 1s cubic-bezier(.25,.46,.45,.94) both;animation:slide-in-right 1s cubic-bezier(.25,.46,.45,.94) both}
   
   /* ----------------------------------------------
    * Generated by Animista on 2020-7-26 17:20:15
    * Licensed under FreeBSD License.
    * See http://animista.net/license for more info. 
    * w: http://animista.net, t: @cssanimista
    * ---------------------------------------------- */
   
   @-webkit-keyframes rotate-in-2-cw{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}100%{-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}@keyframes rotate-in-2-cw{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);opacity:0}100%{-webkit-transform:rotate(0);transform:rotate(0);opacity:1}}
   /* ----------------------------------------------
    * Generated by Animista on 2020-7-26 17:23:45
    * Licensed under FreeBSD License.
    * See http://animista.net/license for more info. 
    * w: http://animista.net, t: @cssanimista
    * ---------------------------------------------- */
   
   @-webkit-keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes slide-in-top{0%{-webkit-transform:translateY(-1000px);transform:translateY(-1000px);opacity:0}100%{-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}
   
   /* ----------------------------------------------
    * Generated by Animista on 2020-7-26 17:25:49
    * Licensed under FreeBSD License.
    * See http://animista.net/license for more info. 
    * w: http://animista.net, t: @cssanimista
    * ---------------------------------------------- */
   
   @-webkit-keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes slide-in-right{0%{-webkit-transform:translateX(1000px);transform:translateX(1000px);opacity:0}100%{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}
  </style>
  <script src="/Files/Other/numeral-min.js"></script>
  <script src="/Files/Other/locales/es-min.js"></script>
  
  <script>
  	numeral.locale('es');
  	
  </script>
  
  <script src="/Files/Other/Chart-min.js"></script>
  
  <script src="/Files/Other/Chart-min.js"></script>
  <style>
  	/* Chart.js */
  @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
  /*
  .body:fullscreen {
      width: 950px;
      height: 100vh;
      /* etc.. */
  }
  	
  /*	@media screen and (orientation:landscape){.doesnt-exist{background:none}}
         @media screen and (min-width: 650px) and (max-width: 950px) and (orientation: portrait) {
            body {
              transform: rotate(-90deg);
              transform-origin: left top;
              width: 100vh;
              height: 100vw;
              overflow-x: hidden;
              position: absolute;
              top: 100%;
              left: 0;
            }
          }*/
  	
  
  </style>
  
  <link rel="stylesheet" href="/Files/Other/animate-min.css"  />
  
  
  
  <link rel="preload" as="image" href="WEFiles/Image/WEImage/logo-WE71cb131790.png">
  
  <link rel="Prefetch" as="image" href="">
  
  <!-- 
  audio
  document
  embed
  fetch
  font
  image
  object
  script
  style
  track
  worker
  video
  -->
  <script type="text/javascript">
   game_cards = [
   	{tipo: 1, id:'1', num: '0', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 1, id:'2', num: '1', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 1, id:'3', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 1, id:'42', num: '3', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 1, id:'43', num: '4', titulo:'Card Sprint1 N61', pos:'2', obj: ''},
   	{tipo: 1, id:'44', num: '5', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 1, id:'41', num: '7', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	
   	{tipo: 2, id:'4', num: '7', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 2, id:'5', num: '5', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 2, id:'6', num: '5', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 2, id:'7', num: '4', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 2, id:'8', num: '5', titulo:'Card Sprint1 N61', pos:'3', obj: ''},
   	{tipo: 2, id:'9', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 2, id:'10', num: '6', titulo:'Card Sprint1 N61',  pos:'2', obj: ''},
   	
   	{tipo: 3, id:'11', num: '4', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'12', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'13', num: '6', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'14', num: '8', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'15', num: '9', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'16', num: '1', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 3, id:'17', num: '15', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	
   	{tipo: 4, id:'18', num: '66', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'19', num: '7', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'20', num: '8', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'21', num: '16', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'22', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'23', num: '36', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 4, id:'24', num: '4', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	
   	{tipo: 5, id:'25', num: '4', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 5, id:'26', num: '5', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 5, id:'27', num: '6', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 5, id:'28', num: '7', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 5, id:'29', num: '9', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 5, id:'30', num: '15', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	
   	{tipo: 6, id:'31', num: '5', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'32', num: '16', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'33', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'34', num: '9', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'35', num: '15', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'36', num: '46', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'37', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'38', num: '4', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'39', num: '2', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	{tipo: 6, id:'40', num: '6', titulo:'Card Sprint1 N61', pos:'0', obj: ''},
   	
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
   			Titulo.innerText = "Sprint "+Sprint;
   
   
   			var Stage = document.getElementById('WE92894735fc')
   				Stage.classList.remove("animate__backOutUp")
   				Stage.style.visibility = "visible";
   				Stage.style.setProperty("background-color", SprintColors[Sprint-1])
   
   					Stage.classList.add("animate__tada") // animate__rotateIn
   
   				var Titulo = document.getElementById('WE56afc4b9ec').children[0].children[0]
   				var SprinTit = document.getElementById('WE4005d8dfae').children[0].children[0]
   				var Leg = document.getElementById('WE894745cf0d').children[0].children[0]
   
   					Titulo.innerText = "Sprint "+Sprint;
   					SprinTit.innerText = SprintTitle[Sprint-1];
   					Leg.innerText = SprintLeg[Sprint-1];
   
   				setTimeout(()=>{
   					Stage.classList.remove("animate__tada")
   					Stage.classList.add("animate__backOutUp")
   					//Stage.style.visibility = "hidden";
   
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
   
   
   
   
   
   
   
   
   
   
   ;
   
   
   
   MostrarTarjeta = (i, id) => {
   	
   	if (id != null){
   		
   		
   		
   	
   
   		color = (a) => {
   
   			switch(a){
   				case 1: return "#c00000"; break;
   				case 2: return "#1e90ff"; break;
   				case 3: return "#32cd32"; break;
   				case 4: return "#c0c000"; break;					
   				case 5: return "#0000cd"; break;					
   				case 6: return "#ff8000"; break;
   
   			}
   
   		}
   
   		tipo = game_cards.filter((s)=>{return s.id == id.toString()})[0].tipo
   		Tarjetas.children[0].children[0].children[0].setAttribute("style", "Background:"+SprintColors[parseInt(tipo)-1])
   	}
   	
   		BajarContenido(id)
   	
   }
   Pantalla = 1;
  </script><?php
  	$IDGet = $_GET['id'];


	$t = base64_decode($IDGet);
	$ts = explode("-", $t, 2);

	echo '<script type="text/javascript">
		_phpid = '.$ts[0].'
		_partid = '.$ts[1].'
	
	function pn(i) {
		switch(i){
		 case 0:
		 	this.location.href="Partida.php?id='.$IDGet.'"
		 break;
		 case 1:
		 	this.location.href="Canvas.php?id='.$IDGet.'"
		 break;
		 case 2:
		 	this.location.href="Dashboard.php?id='.$IDGet.'"
		 break;
		}
		console.log("'.$IDGet.'")
	}
	</script>';


  ?>
  <?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class="RWAuto" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}"><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  

  <div id="XBody" class="BaseDiv RBoth OEPageXbody OESK_XBody_Default" style="z-index:1000">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WE85aa803369" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:9">
      <div class="OESZ OESZ_DivContent OESZG_WE85aa803369">
       <div id="bottom"></div>
      </div>
     </div>
     <div id="WE3001148426" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE3001148426">
       <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:visible">
        <div id="WE47558aa332" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE47558aa332">
          <div class="OESZ OESZ_Top OESZG_WE47558aa332"></div>
          <div class="OESZ OESZ_Content OESZG_WE47558aa332"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE47558aa332"></div>
         </div>
        </div>
        <div id="WE2bd87c9368" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__slideInRight" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE2bd87c9368">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE13d9c2d58b" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE13d9c2d58b">
             <div class="OESZ OESZ_Top OESZG_WE13d9c2d58b"></div>
             <div class="OESZ OESZ_Content OESZG_WE13d9c2d58b"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE13d9c2d58b"></div>
            </div>
           </div>
           <div id="WE7c6db59257" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE7c6db59257">
             <a href="javascript:CartasDisponibles(false)">
              <img src="WEFiles/Image/WEImage/despleg-WE7c6db59257.png" class="OESZ OESZ_Img OESZG_WE7c6db59257" alt="" />
             </a>
            </div>
           </div>
           <div id="WEe8b6c17e09" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WEe8b6c17e09">
             <img src="WEFiles/Image/WEImage/G1-WEe8b6c17e09.png" class="OESZ OESZ_Img OESZG_WEe8b6c17e09" alt="" />
            </div>
           </div>
           <div id="WEf07cd3261e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEf07cd3261e">
             <span class="OESZ OESZ_Text OESZG_WEf07cd3261e ContentBox">Grupo</span>
            </div>
           </div>
           <div id="WEb8d219cbf2" class="BaseDiv RNone OEWECadre OESK_WECadre_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEb8d219cbf2">
             <div class="OESZ OESZ_Top OESZG_WEb8d219cbf2"></div>
             <div class="OESZ OESZ_Content OESZG_WEb8d219cbf2"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEb8d219cbf2"></div>
            </div>
           </div>
           <div id="WE0823abaddd" class="BaseDiv RNone OEWECadre OESK_WECadre_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE0823abaddd">
             <div class="OESZ OESZ_Top OESZG_WE0823abaddd"></div>
             <div class="OESZ OESZ_Content OESZG_WE0823abaddd"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE0823abaddd"></div>
            </div>
           </div>
           <div id="WEc5d80e7d65" class="BaseDiv RHeight OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WEc5d80e7d65">
             <span class="OESZ OESZ_Text OESZG_WEc5d80e7d65 ContentBox">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Cartas disponibles:</span>
            </div>
           </div>
           <div id="WE09b25afd20" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE09b25afd20">
             <img src="WEFiles/Image/WEImage/crdsicons-WE09b25afd20.png" class="OESZ OESZ_Img OESZG_WE09b25afd20" alt="" />
            </div>
           </div>
           <div id="WEDisponibles" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEDisponibles">
             <div class="OECT OECT_Content OECTRel OEDynTag0">
              <div class="OERelLine OEHAlignL OEVAlignT">
               <div id="WE93d81e5199" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE93d81e5199">
                 <main id="Card1" draggable="true" ondragstart="drag(event)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE5347ec5d4d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE5347ec5d4d">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                      <div id="WE22e5e6de63" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE22e5e6de63">
                        <a href="javascript:alert('test');">
                         <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE22e5e6de63" alt="" />
                        </a>
                       </div>
                      </div>
                      <div id="WE2ad28c4a7d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE2ad28c4a7d">
                        <span class="OESZ OESZ_Text OESZG_WE2ad28c4a7d ContentBox">Titulo Card Demo 1<br /></span>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </div>
                 </main>
                </div>
               </div>
              </div>
              <div class="OERelLine OEHAlignL OEVAlignB">
               <div id="WE13d0b2bfce" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default draggable" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE13d0b2bfce">
                 
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE6a847d6daa" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE6a847d6daa">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                      <div id="WEc9c7c94310" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WEc9c7c94310">
                        <a href="javascript:alert('test');">
                         <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEc9c7c94310" alt="" />
                        </a>
                       </div>
                      </div>
                      <div id="WE9ea86bb120" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE9ea86bb120">
                        <span class="OESZ OESZ_Text OESZG_WE9ea86bb120 ContentBox">Titulo Card Demo 1<br /></span>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </div>
                 


                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE60794dcfe8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__slideInRight" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE60794dcfe8">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE1a87c788c5" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE1a87c788c5">
             <div class="OESZ OESZ_Top OESZG_WE1a87c788c5"></div>
             <div class="OESZ OESZ_Content OESZG_WE1a87c788c5"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE1a87c788c5"></div>
            </div>
           </div>
           <div id="WEb2cf86de91" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEb2cf86de91">
             <a href="javascript:CartasDisponibles(true)">
              <img src="WEFiles/Image/WEImage/despleg-WE7c6db59257.png" class="OESZ OESZ_Img OESZG_WEb2cf86de91" alt="" />
             </a>
            </div>
           </div>
           <div id="WE9aeb66f30f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE9aeb66f30f">
             <img src="WEFiles/Image/WEImage/crdsicons-WE09b25afd20.png" class="OESZ OESZ_Img OESZG_WE9aeb66f30f" alt="" />
            </div>
           </div>
           <div id="WE7577796eb8" class="BaseDiv RBoth OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE7577796eb8">
             <span class="OESZ OESZ_Text OESZG_WE7577796eb8 ContentBox">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Cartas disponibles:</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE3ad8c0d37a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE3ad8c0d37a">
          <img src="WEFiles/Image/WEImage/cambas-WE3ad8c0d37a.png" class="OESZ OESZ_Img OESZG_WE3ad8c0d37a" alt="" />
         </div>
        </div>
        <div id="WE9f20acf474" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE9f20acf474">
          <img src="WEFiles/Image/WEImage/company-WE9f20acf474.png" class="OESZ OESZ_Img OESZG_WE9f20acf474" alt="" />
         </div>
        </div>
        <div id="WE45106f887f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE45106f887f">
          <span class="OESZ OESZ_Text OESZG_WE45106f887f ContentBox">Sprint 1</span>
         </div>
        </div>
        <div id="WEd1c966cc84" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WEd1c966cc84">
          <img src="WEFiles/Image/WEImage/road-WEd1c966cc84.png" class="OESZ OESZ_Img OESZG_WEd1c966cc84" alt="" />
         </div>
        </div>
        <div id="WE20dcbb8aab" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAH animate__animated animate__backInDown" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE20dcbb8aab">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WEcefc0eaa85" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEcefc0eaa85">
             <img src="WEFiles/Image/WEImage/icon_chrono-WEcefc0eaa85.png" class="OESZ OESZ_Img OESZG_WEcefc0eaa85" alt="" />
            </div>
           </div>
           <div id="WE48442240f5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE48442240f5">
             <span class="OESZ OESZ_Text OESZG_WE48442240f5 ContentBox">0:00:00</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE71cb131790" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE71cb131790">
          <picture>
           <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/copa-WE71cb131790-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
           <img src="WEFiles/Image/WEImage/copa-WE71cb131790.png" class="OESZ OESZ_Img OESZG_WE71cb131790" alt="" />
          </picture>
         </div>
        </div>
        <div id="WE9917ebf0d3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE9917ebf0d3">
          <img src="WEFiles/Image/WEImage/path4634-WE9917ebf0d3.png" class="OESZ OESZ_Img OESZG_WE9917ebf0d3" alt="" />
         </div>
        </div>
        <div id="WEea12274f31" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WEea12274f31">
          <a href="javascript:Menu();CartasDisponibles(false)">
           <img src="WEFiles/Image/WEImage/menu-WEea12274f31.png" class="OESZ OESZ_Img OESZG_WEea12274f31" alt="" />
          </a>
         </div>
        </div>
        <div id="WE37053e3643" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE37053e3643">
          <div class="OESZ OESZ_Top OESZG_WE37053e3643"></div>
          <div class="OESZ OESZ_Content OESZG_WE37053e3643"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE37053e3643"></div>
         </div>
        </div>
        <div id="WE95f488f8df" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE95f488f8df">
          <img src="WEFiles/Image/WEImage/UserDefault-WE95f488f8df.png" class="OESZ OESZ_Img OESZG_WE95f488f8df" alt="" />
         </div>
        </div>
        <div id="WE88fd7173a7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WE88fd7173a7">
          <a href="../logout">
           <picture>
            <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/logout-WE88fd7173a7-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
            <img src="WEFiles/Image/WEImage/logout-WE88fd7173a7.png" class="OESZ OESZ_Img OESZG_WE88fd7173a7" alt="" />
           </picture>
          </a>
         </div>
        </div>
        <div id="WE3ddb4ed614" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE3ddb4ed614">
          <span class="OESZ OESZ_Text OESZG_WE3ddb4ed614 ContentBox">User</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEb254cc085e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  wobble-ver-right" style="z-index:2">
      <div class="OESZ OESZ_DivContent OESZG_WEb254cc085e">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEbbbe76e4b3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEbbbe76e4b3">
          <img src="WEFiles/Image/WEImage/error-WEbbbe76e4b3.png" class="OESZ OESZ_Img OESZG_WEbbbe76e4b3" alt="" />
         </div>
        </div>
        <div id="WE1065bd7931" class="BaseDiv RNone OEWEText OESK_WEText_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE1065bd7931">
          <span class="ContentBox">Texto&nbsp;Prueba Prueba Prueba Prueba Prueba Preueva Prueba Prueba Prueba Prueba<br /></span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE92894735fc" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAV animate__animated" style="z-index:7">
      <div class="OESZ OESZ_DivContent OESZG_WE92894735fc">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEe2cfd652c8" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEe2cfd652c8">
          <div class="OESZ OESZ_Top OESZG_WEe2cfd652c8"></div>
          <div class="OESZ OESZ_Content OESZG_WEe2cfd652c8"></div>
          <div class="OESZ OESZ_Bottom OESZG_WEe2cfd652c8"></div>
         </div>
        </div>
        <div id="WE7c49a3fb7a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE7c49a3fb7a">
          <div class="OESZ OESZ_Top OESZG_WE7c49a3fb7a"></div>
          <div class="OESZ OESZ_Content OESZG_WE7c49a3fb7a"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE7c49a3fb7a"></div>
         </div>
        </div>
        <div id="WEd869b95dcc" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEd869b95dcc">
          <div class="OESZ OESZ_Top OESZG_WEd869b95dcc"></div>
          <div class="OESZ OESZ_Content OESZG_WEd869b95dcc"></div>
          <div class="OESZ OESZ_Bottom OESZG_WEd869b95dcc"></div>
         </div>
        </div>
        <div id="WE56afc4b9ec" class="BaseDiv RNone OEWELabel OESK_WELabel_Default  animate__animated animate__tada" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE56afc4b9ec">
          <span class="OESZ OESZ_Text OESZG_WE56afc4b9ec ContentBox">Sprint 1</span>
         </div>
        </div>
        <div id="WE894745cf0d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE894745cf0d">
          <span class="OESZ OESZ_Text OESZG_WE894745cf0d ContentBox">Undestanding&nbsp;</span>
         </div>
        </div>
        <div id="WEe28e4453a1" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEe28e4453a1">
          <div class="OESZ OESZ_Top OESZG_WEe28e4453a1"></div>
          <div class="OESZ OESZ_Content OESZG_WEe28e4453a1"></div>
          <div class="OESZ OESZ_Bottom OESZG_WEe28e4453a1"></div>
         </div>
        </div>
        <div id="WE4005d8dfae" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE4005d8dfae">
          <span class="OESZ OESZ_Text OESZG_WE4005d8dfae ContentBox">Metrics</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEe2ca2a3b27" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAV animate__animated" style="z-index:5">
      <div class="OESZ OESZ_DivContent OESZG_WEe2ca2a3b27">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE4511209ef7" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE4511209ef7">
          <div class="OESZ OESZ_Top OESZG_WE4511209ef7"></div>
          <div class="OESZ OESZ_Content OESZG_WE4511209ef7"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE4511209ef7"></div>
         </div>
        </div>
        <div id="WE2a9b73a11c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE2a9b73a11c">
          <img src="Files/Image/anims/cup_wins.png" class="OESZ OESZ_Img OESZG_WE2a9b73a11c" alt="" />
         </div>
        </div>
        <div id="WEe03cfc8114" class="BaseDiv RNone OEWELabel OESK_WELabel_Default  animate__animated animate__tada" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEe03cfc8114">
          <span class="OESZ OESZ_Text OESZG_WEe03cfc8114 ContentBox">Grupo 1</span>
         </div>
        </div>
        <div id="WE0d38b89272" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE0d38b89272">
          <span class="OESZ OESZ_Text OESZG_WE0d38b89272 ContentBox">Ganador</span>
         </div>
        </div>
        <div id="WE9e0df7b77c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAH" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE9e0df7b77c">
          <div class="OESZ OESZ_Top OESZG_WE9e0df7b77c"></div>
          <div class="OESZ OESZ_Content OESZG_WE9e0df7b77c"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE9e0df7b77c"></div>
         </div>
        </div>
        <div id="WEe2727317d2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEe2727317d2">
          <span class="OESZ OESZ_Text OESZG_WEe2727317d2 ContentBox">130 pts</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE8c6ea1e6c8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:10">
      <div class="OESZ OESZ_DivContent OESZG_WE8c6ea1e6c8">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEee718100aa" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-in-2-cw" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEee718100aa">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE270e699dbb" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAV" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE270e699dbb">
             <div class="OECT OECT_Content OECTRel OEDynTag0" style="overflow:auto">
              <div class="OERelLine OEHAlignL OEVAlignB">
               <div id="WE5e4936fbe2" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE5e4936fbe2">
                 <span class="OESZ OESZ_Text OESZG_WE5e4936fbe2 ContentBox">Titulo Tarjeta:</span>
                </div>
               </div>
              </div>
              <div class="OERelLine OEHAlignC OEVAlignT">
               <div id="WEec7393afcd" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEec7393afcd">
                 <span class="ContentBox">Todo el texto que llevaría la tarjeta<br />que no se si es corto<br />o si es largo, no importa, hay que escribir, y escribir, y escribir y escribir<br />My multi-line text<br />My multi-line text<br />My multi-line text<br />My multi-line text<br /></span>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div id="WEf8ef3f627e" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEf8ef3f627e">
             <a href="javascript:Panel(0)">
              <img src="Files/Image/delete_big.png" class="OESZ OESZ_Img OESZG_WEf8ef3f627e" alt="" />
             </a>
            </div>
           </div>
           <div id="WE6c7501b1e5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE6c7501b1e5">
             <span class="OESZ OESZ_Text OESZG_WE6c7501b1e5 ContentBox">10</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE8580aa7392" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE8580aa7392">
          <div class="OECT OECT_Content OECTRel OEDynTag0">
           <div class="OERelLine OEHAlignC OEVAlignM">
            <div id="WE7cb9bcdc4c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE7cb9bcdc4c">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEcf964ae7d5" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEcf964ae7d5">
                 <img src="WEFiles/Image/WEImage/error-WE9191b3224e.png" class="OESZ OESZ_Img OESZG_WEcf964ae7d5" alt="" />
                </div>
               </div>
               <div id="WE0cb16d8541" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE0cb16d8541">
                 <a href="javascript:selectOpBlueOcean(2)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE0b5535f4eb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default OEGo" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE0b5535f4eb">
                     <span class="OESZ OESZ_Text OESZG_WE0b5535f4eb ContentBox">Eliminate<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div><div id="WE8c5da82782" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE8c5da82782">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEc2fb2a299e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEc2fb2a299e">
                 <a href="javascript:selectOpBlueOcean(3)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE127534e0aa" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE127534e0aa">
                     <span class="OESZ OESZ_Text OESZG_WE127534e0aa ContentBox">Raises - Mucho<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEb0da4c2d01" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEb0da4c2d01">
                 <a href="javascript:selectOpBlueOcean(4)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE0b9026e891" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE0b9026e891">
                     <span class="OESZ OESZ_Text OESZG_WE0b9026e891 ContentBox">Raises - Moderado<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEd5e461fb47" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:3">
                <div class="OESZ OESZ_DivContent OESZG_WEd5e461fb47">
                 <a href="javascript:selectOpBlueOcean(5)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE3b22ad4a86" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE3b22ad4a86">
                     <span class="OESZ OESZ_Text OESZG_WE3b22ad4a86 ContentBox">Raises - Poco<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEf54981c720" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4">
                <div class="OESZ OESZ_DivContent OESZG_WEf54981c720">
                 <a href="javascript:selectOpBlueOcean(6)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE43743fc8bf" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE43743fc8bf">
                     <span class="OESZ OESZ_Text OESZG_WE43743fc8bf ContentBox">Reduce - Poco<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEff895e8404" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
                <div class="OESZ OESZ_DivContent OESZG_WEff895e8404">
                 <a href="javascript:selectOpBlueOcean(7)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE292e77b3f7" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE292e77b3f7">
                     <span class="OESZ OESZ_Text OESZG_WE292e77b3f7 ContentBox">Reduce - Moderado<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WE80151065e8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:6">
                <div class="OESZ OESZ_DivContent OESZG_WE80151065e8">
                 <a href="javascript:selectOpBlueOcean(8)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE1b5d57df0f" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE1b5d57df0f">
                     <span class="OESZ OESZ_Text OESZG_WE1b5d57df0f ContentBox">Reduce - Mucho<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div><div id="WE8dc9560b4b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE8dc9560b4b">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE8d353d0146" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE8d353d0146">
                 <img src="WEFiles/Image/WEImage/ok-WE76d67b8270.png" class="OESZ OESZ_Img OESZG_WE8d353d0146" alt="" />
                </div>
               </div>
               <div id="WEae03d91ed0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEae03d91ed0">
                 <a href="javascript:selectOpBlueOcean(1)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEa6116948fa" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WEa6116948fa">
                     <span class="OESZ OESZ_Text OESZG_WEa6116948fa ContentBox">Create<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE8bd892b41c" class="BaseDiv RBoth OEWECodeBlock OESK_WECodeBlock_Default OECenterAB" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE8bd892b41c">
          <style>
          .loader,
          .loader:after {
            border-radius: 50%;
            width: 40px;
            height: 40px;
          }
          .loader {
            margin: 60px auto;
            font-size: 10px;
            position: relative;
            text-indent: -9999em;
            border-top: 1.1em solid rgba(255,247,0, 0.2);
            border-right: 1.1em solid rgba(255,247,0, 0.2);
            border-bottom: 1.1em solid rgba(255,247,0, 0.2);
            border-left: 1.1em solid #fff700;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
            -webkit-animation: load8 1.1s infinite linear;
            animation: load8 1.1s infinite linear;
          }
          @-webkit-keyframes load8 {
            0% {
              -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
            }
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }
          @keyframes load8 {
            0% {
              -webkit-transform: rotate(0deg);
              transform: rotate(0deg);
            }
            100% {
              -webkit-transform: rotate(360deg);
              transform: rotate(360deg);
            }
          }
          </style>
          
          <div class="loader">Loading...</div>
         </div>
        </div>
        <div id="WE1589ee12d7" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE1589ee12d7">
          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:visible">
           <div id="WE245501f632" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE245501f632">
             <img src="Files/Image/crdsicons.png" class="OESZ OESZ_Img OESZG_WE245501f632" alt="" />
            </div>
           </div>
           <div id="WE1ea381cfcf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE1ea381cfcf">
             <span class="OESZ OESZ_Text OESZG_WE1ea381cfcf ContentBox">Bienvenido</span>
            </div>
           </div>
           <div id="WE85e1e4be37" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE85e1e4be37">
             <select name="WE85e1e4be37" class="OESZ OESZ_ListBox OESZG_WE85e1e4be37 OEDynTag0">
              <option value="Nombre" class="OESZ OESZ_Options OESZG_WE85e1e4be37" selected="selected">Nombre</option>
              <option value="Field value" class="OESZ OESZ_Options OESZG_WE85e1e4be37">Field text</option>
             </select>
            </div>
           </div>
           <div id="WEf22adbf27f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WEf22adbf27f">
             <div class="OECT OECT_Content OECTRel OEDynTag0">
              <div class="OERelLine OEHAlignL OEVAlignB">
               <div id="WEd91f42829d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEd91f42829d">
                 <a href="javascript:UsrSlct(0)">
                  <img src="WEFiles/Image/WEImage/_usr_1-WEd91f42829d.png" class="OESZ OESZ_Img OESZG_WEd91f42829d" alt="" />
                 </a>
                </div>
               </div><div id="WE22e243359b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE22e243359b">
                 <a href="javascript:UsrSlct(1)">
                  <img src="WEFiles/Image/WEImage/_usr_2-WE22e243359b.png" class="OESZ OESZ_Img OESZG_WE22e243359b" alt="" />
                 </a>
                </div>
               </div><div id="WE3defa2e960" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
                <div class="OESZ OESZ_DivContent OESZG_WE3defa2e960">
                 <a href="javascript:UsrSlct(2)">
                  <img src="WEFiles/Image/WEImage/_usr_3-WE3defa2e960.png" class="OESZ OESZ_Img OESZG_WE3defa2e960" alt="" />
                 </a>
                </div>
               </div><div id="WEdb351f375a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:4">
                <div class="OESZ OESZ_DivContent OESZG_WEdb351f375a">
                 <a href="javascript:UsrSlct(3)">
                  <img src="WEFiles/Image/WEImage/_usr_4-WEdb351f375a.png" class="OESZ OESZ_Img OESZG_WEdb351f375a" alt="" />
                 </a>
                </div>
               </div><div id="WE954e4f061f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:5">
                <div class="OESZ OESZ_DivContent OESZG_WE954e4f061f">
                 <a href="javascript:UsrSlct(4)">
                  <img src="WEFiles/Image/WEImage/Usr_5-WE954e4f061f.png" class="OESZ OESZ_Img OESZG_WE954e4f061f" alt="" />
                 </a>
                </div>
               </div><div id="WEdd4dd2387a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:6">
                <div class="OESZ OESZ_DivContent OESZG_WEdd4dd2387a">
                 <a href="javascript:UsrSlct(5)">
                  <img src="WEFiles/Image/WEImage/Usr_6-WEdd4dd2387a.png" class="OESZ OESZ_Img OESZG_WEdd4dd2387a" alt="" />
                 </a>
                </div>
               </div><div id="WE473bed634b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:7">
                <div class="OESZ OESZ_DivContent OESZG_WE473bed634b">
                 <a href="javascript:UsrSlct(6)">
                  <img src="WEFiles/Image/WEImage/Usr_7-WE473bed634b.png" class="OESZ OESZ_Img OESZG_WE473bed634b" alt="" />
                 </a>
                </div>
               </div><div id="WEb1b195d5e7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:8">
                <div class="OESZ OESZ_DivContent OESZG_WEb1b195d5e7">
                 <a href="javascript:UsrSlct(7)">
                  <img src="WEFiles/Image/WEImage/Usr_8-WEb1b195d5e7.png" class="OESZ OESZ_Img OESZG_WEb1b195d5e7" alt="" />
                 </a>
                </div>
               </div><div id="WE7e191f76ae" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:9">
                <div class="OESZ OESZ_DivContent OESZG_WE7e191f76ae">
                 <a href="javascript:UsrSlct(8)">
                  <img src="WEFiles/Image/WEImage/Usr_9-WE7e191f76ae.png" class="OESZ OESZ_Img OESZG_WE7e191f76ae" alt="" />
                 </a>
                </div>
               </div><div id="WE8ad6ddfc15" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:10">
                <div class="OESZ OESZ_DivContent OESZG_WE8ad6ddfc15">
                 <a href="javascript:UsrSlct(9)">
                  <img src="WEFiles/Image/WEImage/Usr_10-WE8ad6ddfc15.png" class="OESZ OESZ_Img OESZG_WE8ad6ddfc15" alt="" />
                 </a>
                </div>
               </div><div id="WE9dff58ac24" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:11">
                <div class="OESZ OESZ_DivContent OESZG_WE9dff58ac24">
                 <a href="javascript:UsrSlct(10)">
                  <img src="WEFiles/Image/WEImage/Usr_11-WE9dff58ac24.png" class="OESZ OESZ_Img OESZG_WE9dff58ac24" alt="" />
                 </a>
                </div>
               </div><div id="WE58ee3f227f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:12">
                <div class="OESZ OESZ_DivContent OESZG_WE58ee3f227f">
                 <a href="javascript:UsrSlct(11)">
                  <img src="WEFiles/Image/WEImage/Usr_12-WE58ee3f227f.png" class="OESZ OESZ_Img OESZG_WE58ee3f227f" alt="" />
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div id="WE131c53f5a8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__bounceInUp" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE131c53f5a8">
             <div class="OECT OECT_Content OECTAbs OEDynTag0">
              <div id="WE840aafb985" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
               <div class="OESZ OESZ_DivContent OESZG_WE840aafb985">
                <div class="OESZ OESZ_Top OESZG_WE840aafb985"></div>
                <div class="OESZ OESZ_Content OESZG_WE840aafb985"></div>
                <div class="OESZ OESZ_Bottom OESZG_WE840aafb985"></div>
               </div>
              </div>
              <div id="WEeea48fc535" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2" data-ot="Enviar" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
               <div class="OESZ OESZ_DivContent OESZG_WEeea48fc535">
                <a href="javascript:UsrSlct('ok')">
                 <div class="OECT OECT_Content OECTAbs OEDynTag0">
                  <div id="WE259691897b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
                   <div class="OESZ OESZ_DivContent OESZG_WE259691897b">
                    <img src="WEFiles/Image/WEImage/send_ok-WE254353a11f.png" class="OESZ OESZ_Img OESZG_WE259691897b" alt="" />
                   </div>
                  </div>
                 </div>
                </a>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE4d28880578" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAB" style="z-index:8">
      <div class="OESZ OESZ_DivContent OESZG_WE4d28880578">
       <img src="WEFiles/Image/WEImage/GirarPantalla-WE4d28880578.png" class="OESZ OESZ_Img OESZG_WE4d28880578" alt="" />
      </div>
     </div>
     <div id="WE0bf2c0b2ff" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__bounceInUp" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WE0bf2c0b2ff">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE443509327b" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE443509327b">
          <div class="OESZ OESZ_Top OESZG_WE443509327b"></div>
          <div class="OESZ OESZ_Content OESZG_WE443509327b"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE443509327b"></div>
         </div>
        </div>
        <div id="WEe94ea83c6f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2" data-ot="Estado competencia" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
         <div class="OESZ OESZ_DivContent OESZG_WEe94ea83c6f">
          <a href="javascript:pn(0)">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEf0ce47690d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEf0ce47690d">
              <img src="WEFiles/Image/WEImage/icon_run-WEf0ce47690d.png" class="OESZ OESZ_Img OESZG_WEf0ce47690d" alt="" />
             </div>
            </div>
            <div id="WE96d301db34" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE96d301db34">
              <span class="OESZ OESZ_Text OESZG_WE96d301db34 ContentBox">Estado competencia</span>
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
        <div id="WEb8644db9e4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:3" data-ot="Canvas Model Business" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
         <div class="OESZ OESZ_DivContent OESZG_WEb8644db9e4">
          <a href="javascript:pn(1)">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEf34b654380" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEf34b654380">
              <img src="WEFiles/Image/WEImage/canvas_b-WEf34b654380.png" class="OESZ OESZ_Img OESZG_WEf34b654380" alt="" />
             </div>
            </div>
            <div id="WE394f4cd1a3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE394f4cd1a3">
              <span class="OESZ OESZ_Text OESZG_WE394f4cd1a3 ContentBox">Canvas Model Bussines</span>
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
        <div id="WE2df3a0ab3b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4" data-ot="Estado de empresa." data-ot-delay="0.1" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="bottom center" data-ot-tip-joint="top center">
         <div class="OESZ OESZ_DivContent OESZG_WE2df3a0ab3b">
          <a href="javascript:pn(2)">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE6c2bb04514" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE6c2bb04514">
              <img src="WEFiles/Image/WEImage/company_b-WE6c2bb04514.png" class="OESZ OESZ_Img OESZG_WE6c2bb04514" alt="" />
             </div>
            </div>
            <div id="WE6762df373e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE6762df373e">
              <span class="OESZ OESZ_Text OESZG_WE6762df373e ContentBox">Estado empresa</span>
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE979a2ce6ec" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__bounceInUp" style="z-index:4">
      <div class="OESZ OESZ_DivContent OESZG_WE979a2ce6ec">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE3c883329b3" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE3c883329b3">
          <div class="OESZ OESZ_Top OESZG_WE3c883329b3"></div>
          <div class="OESZ OESZ_Content OESZG_WE3c883329b3"></div>
          <div class="OESZ OESZ_Bottom OESZG_WE3c883329b3"></div>
         </div>
        </div>
        <div id="WEb3c772a596" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2" data-ot="Enviar" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
         <div class="OESZ OESZ_DivContent OESZG_WEb3c772a596">
          <a href="javascript:usersend();">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE254353a11f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE254353a11f">
              <img src="WEFiles/Image/WEImage/send_ok-WE254353a11f.png" class="OESZ OESZ_Img OESZG_WE254353a11f" alt="" />
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE48b96decd9" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1003">
      <div class="OESZ OESZ_DivContent OESZG_WE48b96decd9">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/Canvas_3-WE48b96decd9-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/Canvas_3-WE48b96decd9.png" class="OESZ OESZ_Img OESZG_WE48b96decd9" alt="" />
       </picture>
      </div>
     </div>
     <div id="WE29112dd496" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:6">
      <div class="OESZ OESZ_DivContent OESZG_WE29112dd496">
       <div class="OESZ OESZ_Top OESZG_WE29112dd496"></div>
       <div class="OESZ OESZ_Content OESZG_WE29112dd496"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE29112dd496"></div>
      </div>
     </div>
     <div id="WE95c49d7654" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default  slide-in-top" style="z-index:1002">
      <div class="OESZ OESZ_DivContent OESZG_WE95c49d7654">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignL OEVAlignT">
         <div id="WE55efb95853" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
          <div class="OESZ OESZ_DivContent OESZG_WE55efb95853">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEd05e839764" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WEd05e839764">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE8d36562779" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WE8d36562779">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE996ea2afa6" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE996ea2afa6">
                     <div class="OESZ OESZ_Top OESZG_WE996ea2afa6"></div>
                     <div class="OESZ OESZ_Content OESZG_WE996ea2afa6"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE996ea2afa6"></div>
                    </div>
                   </div>
                   <div id="WE3166385467" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE3166385467">
                     <span class="OESZ OESZ_Text OESZG_WE3166385467 ContentBox">Key Partner</span>
                    </div>
                   </div>
                   <div id="WEd5086cbf57" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WEd5086cbf57">
                     <img src="WEFiles/Image/WEImage/g3343-WEea96b64b3a.png" class="OESZ OESZ_Img OESZG_WEd5086cbf57" alt="" />
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WEae8f68f3a9" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WEae8f68f3a9">
                  <main id="Card10" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE67f9ab85fe" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE67f9ab85fe">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WEf7e6ff33f6" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEf7e6ff33f6">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEf7e6ff33f6" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE23863a3d28" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE23863a3d28">
                         <span class="OESZ OESZ_Text OESZG_WE23863a3d28 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE97669c67bd" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
          <div class="OESZ OESZ_DivContent OESZG_WE97669c67bd">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignL OEVAlignB">
             <div id="WEf72e48d0f8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
              <div class="OESZ OESZ_DivContent OESZG_WEf72e48d0f8">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE6e7db47d76" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE6e7db47d76">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WEa8dcc2df52" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEa8dcc2df52">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WE616cc2f5c8" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WE616cc2f5c8">
                         <div class="OESZ OESZ_Top OESZG_WE616cc2f5c8"></div>
                         <div class="OESZ OESZ_Content OESZG_WE616cc2f5c8"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WE616cc2f5c8"></div>
                        </div>
                       </div>
                       <div id="WEaea857d0c2" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEaea857d0c2">
                         <img src="WEFiles/Image/WEImage/g3331-WE737a6a5bc0.png" class="OESZ OESZ_Img OESZG_WEaea857d0c2" alt="" />
                        </div>
                       </div>
                       <div id="WE0520d30ebe" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE0520d30ebe">
                         <span class="OESZ OESZ_Text OESZG_WE0520d30ebe ContentBox">Key Ativities</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    
                   <div id="WEa481d62530" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default draggable" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEa481d62530">
                   
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WE3a42e37e0e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WE3a42e37e0e">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE449a1a5d7c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE449a1a5d7c">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE449a1a5d7c" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEb128b82751" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEb128b82751">
                             <span class="OESZ OESZ_Text OESZG_WEb128b82751 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div><div id="WE90a387434d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
              <div class="OESZ OESZ_DivContent OESZG_WE90a387434d">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE922086aab5" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE922086aab5">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WE918ece5d94" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WE918ece5d94">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WEa60f35a6c1" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WEa60f35a6c1">
                         <div class="OESZ OESZ_Top OESZG_WEa60f35a6c1"></div>
                         <div class="OESZ OESZ_Content OESZG_WEa60f35a6c1"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WEa60f35a6c1"></div>
                        </div>
                       </div>
                       <div id="WE659a4c1f3c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE659a4c1f3c">
                         <img src="WEFiles/Image/WEImage/g3335-WE68bc5b031c.png" class="OESZ OESZ_Img OESZG_WE659a4c1f3c" alt="" />
                        </div>
                       </div>
                       <div id="WE4b0b55d4b2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE4b0b55d4b2">
                         <span class="OESZ OESZ_Text OESZG_WE4b0b55d4b2 ContentBox">Key Resources</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WE671dc8173a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE671dc8173a">
                      <main id="Card6" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEa4bc17db6a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEa4bc17db6a">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE2219bff5a3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE2219bff5a3">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE2219bff5a3" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEc855d79ca9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEc855d79ca9">
                             <span class="OESZ OESZ_Text OESZG_WEc855d79ca9 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEf80317953e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
          <div class="OESZ OESZ_DivContent OESZG_WEf80317953e">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE336c5ae87b" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE336c5ae87b">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE0cf79b9640" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WE0cf79b9640">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE91395c434d" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE91395c434d">
                     <div class="OESZ OESZ_Top OESZG_WE91395c434d"></div>
                     <div class="OESZ OESZ_Content OESZG_WE91395c434d"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE91395c434d"></div>
                    </div>
                   </div>
                   <div id="WEf9a4f1b5cc" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WEf9a4f1b5cc">
                     <img src="WEFiles/Image/WEImage/g3327-WE64c0c51ee3.png" class="OESZ OESZ_Img OESZG_WEf9a4f1b5cc" alt="" />
                    </div>
                   </div>
                   <div id="WE90ed304120" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE90ed304120">
                     <span class="OESZ OESZ_Text OESZG_WE90ed304120 ContentBox">Value Propositions</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WE97a4b2b4b4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WE97a4b2b4b4">
                  <main id="Card3" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE34627775da" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE34627775da">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE1448bc5e22" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE1448bc5e22">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1448bc5e22" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE6105141ba0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE6105141ba0">
                         <span class="OESZ OESZ_Text OESZG_WE6105141ba0 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEa7abf86fcc" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1004">
          <div class="OESZ OESZ_DivContent OESZG_WEa7abf86fcc">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignL OEVAlignB">
             <div id="WE759dc56a47" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
              <div class="OESZ OESZ_DivContent OESZG_WE759dc56a47">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WEbed4045749" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WEbed4045749">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WEa55818c9b6" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEa55818c9b6">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WEb443fb309c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WEb443fb309c">
                         <div class="OESZ OESZ_Top OESZG_WEb443fb309c"></div>
                         <div class="OESZ OESZ_Content OESZG_WEb443fb309c"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WEb443fb309c"></div>
                        </div>
                       </div>
                       <div id="WE6b8cf6a388" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE6b8cf6a388">
                         <img src="WEFiles/Image/WEImage/g3323-WE5b3fc60b8f.png" class="OESZ OESZ_Img OESZG_WE6b8cf6a388" alt="" />
                        </div>
                       </div>
                       <div id="WE3f5e679183" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE3f5e679183">
                         <span class="OESZ OESZ_Text OESZG_WE3f5e679183 ContentBox">Customer Relationships</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WEfbbe8eae66" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEfbbe8eae66">
                      <main id="Card4" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEfd0dc35d35" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEfd0dc35d35">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE69954597d2" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE69954597d2">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE69954597d2" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEf84e327a0f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEf84e327a0f">
                             <span class="OESZ OESZ_Text OESZG_WEf84e327a0f ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div><div id="WE2fbf035589" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
              <div class="OESZ OESZ_DivContent OESZG_WE2fbf035589">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE18c1a1aafa" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE18c1a1aafa">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WEc7ef65f219" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEc7ef65f219">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WE29e7462437" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WE29e7462437">
                         <div class="OESZ OESZ_Top OESZG_WE29e7462437"></div>
                         <div class="OESZ OESZ_Content OESZG_WE29e7462437"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WE29e7462437"></div>
                        </div>
                       </div>
                       <div id="WEfb5a73974a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEfb5a73974a">
                         <img src="WEFiles/Image/WEImage/g3319-WEd7bc7354d0.png" class="OESZ OESZ_Img OESZG_WEfb5a73974a" alt="" />
                        </div>
                       </div>
                       <div id="WEe29d366535" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WEe29d366535">
                         <span class="OESZ OESZ_Text OESZG_WEe29d366535 ContentBox">Channels</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WE9287e6dfe7" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE9287e6dfe7">
                      <main id="Card7" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEe38291a18b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEe38291a18b">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WEb0efbaa668" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WEb0efbaa668">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEb0efbaa668" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEffecb4c585" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEffecb4c585">
                             <span class="OESZ OESZ_Text OESZG_WEffecb4c585 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEbd7eae4640" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1005">
          <div class="OESZ OESZ_DivContent OESZG_WEbd7eae4640">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE99618ea498" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE99618ea498">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE10a62c939a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WE10a62c939a">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEfb35342c46" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WEfb35342c46">
                     <div class="OESZ OESZ_Top OESZG_WEfb35342c46"></div>
                     <div class="OESZ OESZ_Content OESZG_WEfb35342c46"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WEfb35342c46"></div>
                    </div>
                   </div>
                   <div id="WE50bf20367c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE50bf20367c">
                     <img src="WEFiles/Image/WEImage/g3315-WE994f84a011.png" class="OESZ OESZ_Img OESZG_WE50bf20367c" alt="" />
                    </div>
                   </div>
                   <div id="WEefad9ccc04" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WEefad9ccc04">
                     <span class="OESZ OESZ_Text OESZG_WEefad9ccc04 ContentBox">Customer Segments</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignL OEVAlignB">
                <div id="WE7507b2ab7f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
                 <div class="OESZ OESZ_DivContent OESZG_WE7507b2ab7f">
                  <main id="Card1" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE5abeea4e54" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE5abeea4e54">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WEc508efa5ba" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEc508efa5ba">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEc508efa5ba" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE5309eed220" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE5309eed220">
                         <span class="OESZ OESZ_Text OESZG_WE5309eed220 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEc1a0b100f8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1006">
          <div class="OESZ OESZ_DivContent OESZG_WEc1a0b100f8">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEb2357406e7" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WEb2357406e7">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE9e2d811660" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1003">
                 <div class="OESZ OESZ_DivContent OESZG_WE9e2d811660">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE6939188f9e" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE6939188f9e">
                     <div class="OESZ OESZ_Top OESZG_WE6939188f9e"></div>
                     <div class="OESZ OESZ_Content OESZG_WE6939188f9e"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE6939188f9e"></div>
                    </div>
                   </div>
                   <div id="WE83e971524f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE83e971524f">
                     <img src="WEFiles/Image/WEImage/g3339-WEc7f49bfae9.png" class="OESZ OESZ_Img OESZG_WE83e971524f" alt="" />
                    </div>
                   </div>
                   <div id="WE27aa8a35cb" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE27aa8a35cb">
                     <span class="OESZ OESZ_Text OESZG_WE27aa8a35cb ContentBox">Cost Structure</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WEdcd78ed7b5" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WEdcd78ed7b5">
                  <main id="Card8" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WEe6d25cdec8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WEe6d25cdec8">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE1eb8e38df1" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE1eb8e38df1">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1eb8e38df1" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WEd7e6222a43" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WEd7e6222a43">
                         <span class="OESZ OESZ_Text OESZG_WEd7e6222a43 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE2d50e25290" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1007">
          <div class="OESZ OESZ_DivContent OESZG_WE2d50e25290">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEa71f6a0085" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WEa71f6a0085">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE54e055879e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WE54e055879e">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEe9a9139d41" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WEe9a9139d41">
                     <div class="OESZ OESZ_Top OESZG_WEe9a9139d41"></div>
                     <div class="OESZ OESZ_Content OESZG_WEe9a9139d41"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WEe9a9139d41"></div>
                    </div>
                   </div>
                   <div id="WE2eab671f0c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE2eab671f0c">
                     <img src="WEFiles/Image/WEImage/g3311-WE59cb64135a.png" class="OESZ OESZ_Img OESZG_WE2eab671f0c" alt="" />
                    </div>
                   </div>
                   <div id="WE7968d766da" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE7968d766da">
                     <span class="OESZ OESZ_Text OESZG_WE7968d766da ContentBox">Revenue Streams</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WE5127fda7e1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE5127fda7e1">
                  <main id="Card9" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE93e07bf712" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE93e07bf712">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WEa071919350" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEa071919350">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEa071919350" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE25b8a46825" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE25b8a46825">
                         <span class="OESZ OESZ_Text OESZG_WE25b8a46825 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE3395e00991" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default  slide-in-top" style="z-index:1001">
      <div class="OESZ OESZ_DivContent OESZG_WE3395e00991">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignL OEVAlignT">

         <div id="WE245cf2c7e5" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
          <div class="OESZ OESZ_DivContent OESZG_WE245cf2c7e5">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">


           <div id="WE_KeyPatner" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default block" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE_KeyPatner">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB ">

                <div id="WE78728e7b66" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WE78728e7b66">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE09be91587c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE09be91587c">
                     <div class="OESZ OESZ_Top OESZG_WE09be91587c"></div>
                     <div class="OESZ OESZ_Content OESZG_WE09be91587c"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE09be91587c"></div>
                    </div>
                   </div>
                   <div id="WE902194113e" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE902194113e">
                     <span class="OESZ OESZ_Text OESZG_WE902194113e ContentBox">Key Partner</span>
                    </div>
                   </div>
                   <div id="WEea96b64b3a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WEea96b64b3a">
                     <img src="WEFiles/Image/WEImage/g3343-WEea96b64b3a.png" class="OESZ OESZ_Img OESZG_WEea96b64b3a" alt="" />
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
               
               <div id="WE92a8971e66" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WE92a8971e66">
                  
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE3412181c57" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE3412181c57">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE42ba871ac5" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE42ba871ac5">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE42ba871ac5" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE3b99eeb6de" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE3b99eeb6de">
                         <span class="OESZ OESZ_Text OESZG_WE3b99eeb6de ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  

                 </div>
                </div>
               </div>



              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE3f2ab97132" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
          <div class="OESZ OESZ_DivContent OESZG_WE3f2ab97132">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignL OEVAlignB">

             <div id="WE1591dcf79c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default block" style="z-index:1001">
              <div class="OESZ OESZ_DivContent OESZG_WE1591dcf79c">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">


                <div id="WE_KeyActivities" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default block" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE_KeyActivities">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">

                    <div id="WE1c280e9b2d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WE1c280e9b2d">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WE10fab00a86" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WE10fab00a86">
                         <div class="OESZ OESZ_Top OESZG_WE10fab00a86"></div>
                         <div class="OESZ OESZ_Content OESZG_WE10fab00a86"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WE10fab00a86"></div>
                        </div>
                       </div>
                       <div id="WE737a6a5bc0" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE737a6a5bc0">
                         <img src="WEFiles/Image/WEImage/g3331-WE737a6a5bc0.png" class="OESZ OESZ_Img OESZG_WE737a6a5bc0" alt="" />
                        </div>
                       </div>
                       <div id="WEdd2cfeb230" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WEdd2cfeb230">
                         <span class="OESZ OESZ_Text OESZG_WEdd2cfeb230 ContentBox">Key Ativities</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WE641bddf0ae" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default draggable" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WE641bddf0ae">
                      
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WE0b2158b0cd" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WE0b2158b0cd">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WEe622c5930c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WEe622c5930c">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEe622c5930c" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEb9f8588e1a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEb9f8588e1a">
                             <span class="OESZ OESZ_Text OESZG_WEb9f8588e1a ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div><div id="WE5c711c1dca" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
              <div class="OESZ OESZ_DivContent OESZG_WE5c711c1dca">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">

                <div id="WE_KeyResources" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default block" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE_KeyResources">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    
                   
                   <div id="WE1b8f431b0e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WE1b8f431b0e">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WEa01f121909" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WEa01f121909">
                         <div class="OESZ OESZ_Top OESZG_WEa01f121909"></div>
                         <div class="OESZ OESZ_Content OESZG_WEa01f121909"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WEa01f121909"></div>
                        </div>
                       </div>
                       <div id="WE68bc5b031c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE68bc5b031c">
                         <img src="WEFiles/Image/WEImage/g3335-WE68bc5b031c.png" class="OESZ OESZ_Img OESZG_WE68bc5b031c" alt="" />
                        </div>
                       </div>
                       <div id="WEca771210ef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WEca771210ef">
                         <span class="OESZ OESZ_Text OESZG_WEca771210ef ContentBox">Key Resources</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WEc3f2c2cf10" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WEc3f2c2cf10">
                      <main id="Card6" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEb5109ca568" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEb5109ca568">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE8637d92563" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE8637d92563">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE8637d92563" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WE55f5acb311" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WE55f5acb311">
                             <span class="OESZ OESZ_Text OESZG_WE55f5acb311 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE37a71a9d9e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
          <div class="OESZ OESZ_DivContent OESZG_WE37a71a9d9e">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE_ValuePropositions" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE_ValuePropositions">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WEce9ad384f1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WEce9ad384f1">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE28b68f0122" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE28b68f0122">
                     <div class="OESZ OESZ_Top OESZG_WE28b68f0122"></div>
                     <div class="OESZ OESZ_Content OESZG_WE28b68f0122"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE28b68f0122"></div>
                    </div>
                   </div>
                   <div id="WE64c0c51ee3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE64c0c51ee3">
                     <img src="WEFiles/Image/WEImage/g3327-WE64c0c51ee3.png" class="OESZ OESZ_Img OESZG_WE64c0c51ee3" alt="" />
                    </div>
                   </div>
                   <div id="WE5b63596e93" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE5b63596e93">
                     <span class="OESZ OESZ_Text OESZG_WE5b63596e93 ContentBox">Value Propositions</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WE44652c3461" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WE44652c3461">
                  <main id="Card3" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WEb7e37a5086" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WEb7e37a5086">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WEf3ce9bab33" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEf3ce9bab33">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEf3ce9bab33" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE3f50217d1d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE3f50217d1d">
                         <span class="OESZ OESZ_Text OESZG_WE3f50217d1d ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEaffbe159f1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1004">
          <div class="OESZ OESZ_DivContent OESZG_WEaffbe159f1">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignL OEVAlignB">
             <div id="WE7125614e3c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
              <div class="OESZ OESZ_DivContent OESZG_WE7125614e3c">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE_CustomerRelationship" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE_CustomerRelationship">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WEf744e71eb0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEf744e71eb0">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WE2d5c3bf54a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WE2d5c3bf54a">
                         <div class="OESZ OESZ_Top OESZG_WE2d5c3bf54a"></div>
                         <div class="OESZ OESZ_Content OESZG_WE2d5c3bf54a"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WE2d5c3bf54a"></div>
                        </div>
                       </div>
                       <div id="WE5b3fc60b8f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE5b3fc60b8f">
                         <img src="WEFiles/Image/WEImage/g3323-WE5b3fc60b8f.png" class="OESZ OESZ_Img OESZG_WE5b3fc60b8f" alt="" />
                        </div>
                       </div>
                       <div id="WEd98ff5c1d5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WEd98ff5c1d5">
                         <span class="OESZ OESZ_Text OESZG_WEd98ff5c1d5 ContentBox">Customer Relationships</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WE26a17706ed" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WE26a17706ed">
                      <main id="Card4" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEf5794e0bac" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEf5794e0bac">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE31f5c8f127" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE31f5c8f127">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE31f5c8f127" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WEa774a9dfc2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WEa774a9dfc2">
                             <span class="OESZ OESZ_Text OESZG_WEa774a9dfc2 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div><div id="WE8adbb4d792" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1002">
              <div class="OESZ OESZ_DivContent OESZG_WE8adbb4d792">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE_Channels" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE_Channels">
                  <div class="OECT OECT_Content OECTRel OEDynTag0">
                   <div class="OERelLine OEHAlignC OEVAlignB">
                    <div id="WEa667038531" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                     <div class="OESZ OESZ_DivContent OESZG_WEa667038531">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0">
                       <div id="WEed8af39936" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                        <div class="OESZ OESZ_DivContent OESZG_WEed8af39936">
                         <div class="OESZ OESZ_Top OESZG_WEed8af39936"></div>
                         <div class="OESZ OESZ_Content OESZG_WEed8af39936"></div>
                         <div class="OESZ OESZ_Bottom OESZG_WEed8af39936"></div>
                        </div>
                       </div>
                       <div id="WEd7bc7354d0" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WEd7bc7354d0">
                         <img src="WEFiles/Image/WEImage/g3319-WEd7bc7354d0.png" class="OESZ OESZ_Img OESZG_WEd7bc7354d0" alt="" />
                        </div>
                       </div>
                       <div id="WE60a0062b80" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE60a0062b80">
                         <span class="OESZ OESZ_Text OESZG_WE60a0062b80 ContentBox">Channels</span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                   <div class="OERelLine OEHAlignC OEVAlignT">
                    <div id="WEf3287a53ae" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WEf3287a53ae">
                      <main id="Card7" draggable="true" ondragstart="drag(event)">
                       <div class="OECT OECT_Content OECTAbs OEDynTag0">
                        <div id="WEa6b12d1848" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                         <div class="OESZ OESZ_DivContent OESZG_WEa6b12d1848">
                          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                           <div id="WE2ca2aeca74" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                            <div class="OESZ OESZ_DivContent OESZG_WE2ca2aeca74">
                             <a href="javascript:alert('test');">
                              <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE2ca2aeca74" alt="" />
                             </a>
                            </div>
                           </div>
                           <div id="WE001656da21" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                            <div class="OESZ OESZ_DivContent OESZG_WE001656da21">
                             <span class="OESZ OESZ_Text OESZG_WE001656da21 ContentBox">Titulo Card Demo 1<br /></span>
                            </div>
                           </div>
                          </div>
                         </div>
                        </div>
                       </div>
                      </main>
                     </div>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEf8f77e31af" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1005">
          <div class="OESZ OESZ_DivContent OESZG_WEf8f77e31af">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE_CustomersSegments" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE_CustomersSegments">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WEe839dcfcdd" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1004">
                 <div class="OESZ OESZ_DivContent OESZG_WEe839dcfcdd">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEd2589c78d8" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WEd2589c78d8">
                     <div class="OESZ OESZ_Top OESZG_WEd2589c78d8"></div>
                     <div class="OESZ OESZ_Content OESZG_WEd2589c78d8"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WEd2589c78d8"></div>
                    </div>
                   </div>
                   <div id="WE994f84a011" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE994f84a011">
                     <img src="WEFiles/Image/WEImage/g3315-WE994f84a011.png" class="OESZ OESZ_Img OESZG_WE994f84a011" alt="" />
                    </div>
                   </div>
                   <div id="WEe26293ffc4" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WEe26293ffc4">
                     <span class="OESZ OESZ_Text OESZG_WEe26293ffc4 ContentBox">Customer Segments</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignL OEVAlignB">
                <div id="WE_CARD_demo1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
                 <div class="OESZ OESZ_DivContent OESZG_WE_CARD_demo1">
                  <main id="Card1" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE600431a48a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE600431a48a">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE3871e97495" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE3871e97495">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE3871e97495" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE854a4c6608" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE854a4c6608">
                         <span class="OESZ OESZ_Text OESZG_WE854a4c6608 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE0592da2ead" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1006">
          <div class="OESZ OESZ_DivContent OESZG_WE0592da2ead">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE_CostStructure" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE_CostStructure">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE303dcd4f43" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1003">
                 <div class="OESZ OESZ_DivContent OESZG_WE303dcd4f43">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEed9a393b9a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WEed9a393b9a">
                     <div class="OESZ OESZ_Top OESZG_WEed9a393b9a"></div>
                     <div class="OESZ OESZ_Content OESZG_WEed9a393b9a"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WEed9a393b9a"></div>
                    </div>
                   </div>
                   <div id="WEc7f49bfae9" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WEc7f49bfae9">
                     <img src="WEFiles/Image/WEImage/g3339-WEc7f49bfae9.png" class="OESZ OESZ_Img OESZG_WEc7f49bfae9" alt="" />
                    </div>
                   </div>
                   <div id="WE7b01a55b90" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE7b01a55b90">
                     <span class="OESZ OESZ_Text OESZG_WE7b01a55b90 ContentBox">Cost Structure</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WE3276b6fc78" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WE3276b6fc78">
                  <main id="Card8" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WEcb9e91dbf7" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WEcb9e91dbf7">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE43709d07a3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE43709d07a3">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE43709d07a3" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE9e70740b9e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE9e70740b9e">
                         <span class="OESZ OESZ_Text OESZG_WE9e70740b9e ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEc5f7dd1433" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1007">
          <div class="OESZ OESZ_DivContent OESZG_WEc5f7dd1433">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE_RevenueStreams" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WE_RevenueStreams">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignC OEVAlignB">
                <div id="WE8fd9110707" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:1002">
                 <div class="OESZ OESZ_DivContent OESZG_WE8fd9110707">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE4f73478ff9" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1003">
                    <div class="OESZ OESZ_DivContent OESZG_WE4f73478ff9">
                     <div class="OESZ OESZ_Top OESZG_WE4f73478ff9"></div>
                     <div class="OESZ OESZ_Content OESZG_WE4f73478ff9"></div>
                     <div class="OESZ OESZ_Bottom OESZG_WE4f73478ff9"></div>
                    </div>
                   </div>
                   <div id="WE59cb64135a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                    <div class="OESZ OESZ_DivContent OESZG_WE59cb64135a">
                     <img src="WEFiles/Image/WEImage/g3311-WE59cb64135a.png" class="OESZ OESZ_Img OESZG_WE59cb64135a" alt="" />
                    </div>
                   </div>
                   <div id="WE32f1c6c765" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE32f1c6c765">
                     <span class="OESZ OESZ_Text OESZG_WE32f1c6c765 ContentBox">Revenue Streams</span>
                    </div>
                   </div>
                  </div>
                 </div>
                </div>
               </div>
               <div class="OERelLine OEHAlignC OEVAlignT">
                <div id="WEbd7da0d667" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                 <div class="OESZ OESZ_DivContent OESZG_WEbd7da0d667">
                  <main id="Card9" draggable="true" ondragstart="drag(event)">
                   <div class="OECT OECT_Content OECTAbs OEDynTag0">
                    <div id="WE16a17a03f1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
                     <div class="OESZ OESZ_DivContent OESZG_WE16a17a03f1">
                      <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                       <div id="WE08909abdc4" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                        <div class="OESZ OESZ_DivContent OESZG_WE08909abdc4">
                         <a href="javascript:alert('test');">
                          <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE08909abdc4" alt="" />
                         </a>
                        </div>
                       </div>
                       <div id="WE5f29e4e4e4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1001">
                        <div class="OESZ OESZ_DivContent OESZG_WE5f29e4e4e4">
                         <span class="OESZ OESZ_Text OESZG_WE5f29e4e4e4 ContentBox">Titulo Card Demo 1<br /></span>
                        </div>
                       </div>
                      </div>
                     </div>
                    </div>
                   </div>
                  </main>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEcb32818414" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1011">
      <div class="OESZ OESZ_DivContent OESZG_WEcb32818414">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEe1784fd48a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-in-2-cw" style="z-index:1001">
         <div class="OESZ OESZ_DivContent OESZG_WEe1784fd48a">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE8b9a298b3a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAV" style="z-index:1001">
            <div class="OESZ OESZ_DivContent OESZG_WE8b9a298b3a">
             <div class="OECT OECT_Content OECTRel OEDynTag0" style="overflow:auto">
              <div class="OERelLine OEHAlignL OEVAlignB">
               <div id="WE03baaf7ffe" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1001">
                <div class="OESZ OESZ_DivContent OESZG_WE03baaf7ffe">
                 <span class="OESZ OESZ_Text OESZG_WE03baaf7ffe ContentBox">Titulo Tarjeta:</span>
                </div>
               </div>
              </div>
              <div class="OERelLine OEHAlignC OEVAlignT">
               <div id="WEb2b291eb0a" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1002">
                <div class="OESZ OESZ_DivContent OESZG_WEb2b291eb0a">
                 <span class="ContentBox">Todo el texto que llevaría la tarjeta<br />que no se si es corto<br />o si es largo, no importa, hay que escribir, y escribir, y escribir y escribir<br />My multi-line text<br />My multi-line text<br />My multi-line text<br />My multi-line text<br /></span>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div id="WE2abbafa4c9" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:1003">
            <div class="OESZ OESZ_DivContent OESZG_WE2abbafa4c9">
             <a href="javascript:Panel(0)">
              <img src="Files/Image/delete_big.png" class="OESZ OESZ_Img OESZG_WE2abbafa4c9" alt="" />
             </a>
            </div>
           </div>
           <div id="WEc1be16943d" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1002">
            <div class="OESZ OESZ_DivContent OESZG_WEc1be16943d">
             <span class="OESZ OESZ_Text OESZG_WEc1be16943d ContentBox">10</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE8f45c4ac18" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:1002">
         <div class="OESZ OESZ_DivContent OESZG_WE8f45c4ac18">
          <div class="OECT OECT_Content OECTRel OEDynTag0">
           <div class="OERelLine OEHAlignC OEVAlignM">
            <div id="WEd0942271b8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1001">
             <div class="OESZ OESZ_DivContent OESZG_WEd0942271b8">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE4e9452fb70" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                <div class="OESZ OESZ_DivContent OESZG_WE4e9452fb70">
                 <img src="WEFiles/Image/WEImage/error-WE9191b3224e.png" class="OESZ OESZ_Img OESZG_WE4e9452fb70" alt="" />
                </div>
               </div>
               <div id="WE71cfb9f8fa" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1001">
                <div class="OESZ OESZ_DivContent OESZG_WE71cfb9f8fa">
                 <a href="javascript:selectOpBlueOcean(2)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE61efa2cca2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default OEGo" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE61efa2cca2">
                     <span class="OESZ OESZ_Text OESZG_WE61efa2cca2 ContentBox">Eliminate<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div><div id="WEe46ebcc55e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
             <div class="OESZ OESZ_DivContent OESZG_WEe46ebcc55e">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEf7b621baa1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1001">
                <div class="OESZ OESZ_DivContent OESZG_WEf7b621baa1">
                 <a href="javascript:selectOpBlueOcean(3)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE5cf4557d17" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE5cf4557d17">
                     <span class="OESZ OESZ_Text OESZG_WE5cf4557d17 ContentBox">Raises - Mucho<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WE2b77cecc22" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1002">
                <div class="OESZ OESZ_DivContent OESZG_WE2b77cecc22">
                 <a href="javascript:selectOpBlueOcean(4)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEec839210a6" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WEec839210a6">
                     <span class="OESZ OESZ_Text OESZG_WEec839210a6 ContentBox">Raises - Moderado<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WE9efa1bd90c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1003">
                <div class="OESZ OESZ_DivContent OESZG_WE9efa1bd90c">
                 <a href="javascript:selectOpBlueOcean(5)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE7ff102a54a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE7ff102a54a">
                     <span class="OESZ OESZ_Text OESZG_WE7ff102a54a ContentBox">Raises - Poco<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEc40e57abe8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1004">
                <div class="OESZ OESZ_DivContent OESZG_WEc40e57abe8">
                 <a href="javascript:selectOpBlueOcean(6)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEf0ac7bd611" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WEf0ac7bd611">
                     <span class="OESZ OESZ_Text OESZG_WEf0ac7bd611 ContentBox">Reduce - Poco<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WEdf05bad4b9" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1005">
                <div class="OESZ OESZ_DivContent OESZG_WEdf05bad4b9">
                 <a href="javascript:selectOpBlueOcean(7)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE1a540fbc40" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE1a540fbc40">
                     <span class="OESZ OESZ_Text OESZG_WE1a540fbc40 ContentBox">Reduce - Moderado<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
               <div id="WE3b4dc666a1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1006">
                <div class="OESZ OESZ_DivContent OESZG_WE3b4dc666a1">
                 <a href="javascript:selectOpBlueOcean(8)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE87e993e796" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo OECenterAH" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WE87e993e796">
                     <span class="OESZ OESZ_Text OESZG_WE87e993e796 ContentBox">Reduce - Mucho<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div><div id="WEba7a94a14b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1003">
             <div class="OESZ OESZ_DivContent OESZG_WEba7a94a14b">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE325613ba89" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1002">
                <div class="OESZ OESZ_DivContent OESZG_WE325613ba89">
                 <img src="WEFiles/Image/WEImage/ok-WE76d67b8270.png" class="OESZ OESZ_Img OESZG_WE325613ba89" alt="" />
                </div>
               </div>
               <div id="WE0ebc0faee0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1001">
                <div class="OESZ OESZ_DivContent OESZG_WE0ebc0faee0">
                 <a href="javascript:selectOpBlueOcean(1)">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEc69e91f1ae" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OEGo" style="z-index:1001">
                    <div class="OESZ OESZ_DivContent OESZG_WEc69e91f1ae">
                     <span class="OESZ OESZ_Text OESZG_WEc69e91f1ae ContentBox">Create<br /></span>
                    </div>
                   </div>
                  </div>
                 </a>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE5a271d2e37" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1007">
      <div class="OESZ OESZ_DivContent OESZG_WE5a271d2e37">
       <img src="WEFiles/Image/WEImage/Canvas_float_1-WE5a271d2e37.png" class="OESZ OESZ_Img OESZG_WE5a271d2e37" alt="" />
      </div>
     </div>
     <div id="WEe22cc1456f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1009">
      <div class="OESZ OESZ_DivContent OESZG_WEe22cc1456f">
       <img src="WEFiles/Image/WEImage/canvas_float_3-WEe22cc1456f.png" class="OESZ OESZ_Img OESZG_WEe22cc1456f" alt="" />
      </div>
     </div>
     <div id="WE4c10e085ef" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1006">
      <div class="OESZ OESZ_DivContent OESZG_WE4c10e085ef">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/Canvas_1-WE4c10e085ef-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/Canvas_1-WE4c10e085ef.png" class="OESZ OESZ_Img OESZG_WE4c10e085ef" alt="" />
       </picture>
      </div>
     </div>
     <div id="WE7d19164fdd" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1004">
      <div class="OESZ OESZ_DivContent OESZG_WE7d19164fdd">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/Canvas_2-WE7d19164fdd-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/Canvas_2-WE7d19164fdd.png" class="OESZ OESZ_Img OESZG_WE7d19164fdd" alt="" />
       </picture>
      </div>
     </div>
     <div id="WEdf47c4c80a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1008">
      <div class="OESZ OESZ_DivContent OESZG_WEdf47c4c80a">
       <img src="WEFiles/Image/WEImage/canvas_float_2-WEdf47c4c80a.png" class="OESZ OESZ_Img OESZG_WEdf47c4c80a" alt="" />
      </div>
     </div>
     <div id="WE6542bfea74" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1010">
      <div class="OESZ OESZ_DivContent OESZG_WE6542bfea74">
       <img src="WEFiles/Image/WEImage/canvas_float_4-WE6542bfea74.png" class="OESZ OESZ_Img OESZG_WE6542bfea74" alt="" />
      </div>
     </div>
     <div id="WEd2e06cdcd3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1005">
      <div class="OESZ OESZ_DivContent OESZG_WEd2e06cdcd3">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/Canvas_4-WEd2e06cdcd3-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/Canvas_4-WEd2e06cdcd3.png" class="OESZ OESZ_Img OESZG_WEd2e06cdcd3" alt="" />
       </picture>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script type="text/javascript">
   document.getElementById('WE3001148426').setAttribute('style', 'z-index:5000;position:fixed')
   
   //document.getElementById('WE2df3a0ab3b').setAttribute('style', 'z-index:5000;position:fixed')
   document.getElementById('WE979a2ce6ec').setAttribute('style', 'z-index:5000;position:fixed')
   document.getElementById('WE0bf2c0b2ff').setAttribute('style', 'z-index:5000;position:fixed')
   const AlerMensaje = document.getElementById('WEb254cc085e')
   AlerMensaje.setAttribute('style', 'z-index:5000;position:fixed');
   
   document.getElementById('WE92894735fc').setAttribute('style', 'z-index:5000;position:fixed')
   document.getElementById('WE8c6ea1e6c8').setAttribute('style', 'z-index:6000;position:fixed')
   
   const FondoBasPan = document.getElementById('WE8c6ea1e6c8');
   const UsrSelect = document.getElementById('WE1589ee12d7');
   const Loader = document.getElementById('WE8bd892b41c');
   
   
   function Mensaje(e, m){
   	AlerMensaje.style.display = "initial"
   	
   	AlerMensaje.className = (e) ? "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  wobble-ver-right" : "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default slide-out-right"
   	if (e){
   		document.getElementById('WE1065bd7931').innerText = m;
   		setTimeout(()=>{Mensaje(false)}, 3000)}
   	//slide-out-right
   }
   
   
   
   up_avCrds = document.getElementById("WE60794dcfe8");
   up_avCrds.setAttribute('OnMouseOver','CartasDisponibles(true);');
   up_avCrds.setAttribute('OnClick','CartasDisponibles(true);');
   
   
   
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
   		BasePanel(0);
   		
   		//alert("Turn the Screen");
   	} else {
   		
   		document.getElementById('XBody').style.display = "none";
   		document.getElementById('WE4d28880578').style.display = "";
   	}
   	} else {
   		document.getElementById('XBody').style.display = "";
   		document.getElementById('WE4d28880578').style.display = "none";
   		BasePanel(0);
   	}
   }
   CheckScreen();
     
   
     function fulls(){
     	document.body.requestFullscreen()
   	 window.scrollTo(0,1);
   	screen.orientation.lock('landscape');
       
     }
   
   avtSlct = 8;
   function UsrSlct(us){
   
   	
   	Avatars = ["WEd91f42829d", "WE22e243359b", "WE3defa2e960", "WEdb351f375a", "WE954e4f061f", "WEdd4dd2387a", "WE473bed634b", "WEb1b195d5e7", "WE7e191f76ae", "WE8ad6ddfc15", "WE9dff58ac24", "WE58ee3f227f"]
   	
   	Avatars.forEach((s, value)=>{
   		document.getElementById(s).style.opacity = "0.2"
   		if (value == us)
   			document.getElementById(s).style.opacity = "1.0"
   	})
   
   	
   	if (us=="ok"){
   		
   		ico = document.getElementById('WE95f488f8df').children[0].children[0]
   		selIco = document.getElementById(Avatars[avtSlct]).children[0].children[0].children[0]
   		Nmb = document.getElementById('WE3ddb4ed614').children[0].children[0]
   		
   		ico.src = selIco.src;
   		Nmb.innerText = (document.getElementsByName('WE85e1e4be37')[0].value).slice(0, 23);
   		BasePanel(0)
   	} else {
   		avtSlct = us;
   	}
   }
   UsrSlct(avtSlct);
   BasePanel(0)
   
   ;
   const _KeyPartner = document.getElementById('WEd05e839764').children[0].children[0].children[1];
   const _KeyActivities = document.getElementById('WE6e7db47d76').children[0].children[0].children[1];
   const _ValueProposition = document.getElementById('WE336c5ae87b').children[0].children[0].children[1];
   const _CustomerRelationchips = document.getElementById('WEbed4045749').children[0].children[0].children[1];
   const _CustomSegments = document.getElementById('WE99618ea498').children[0].children[0].children[1];
   const _KeyResources = document.getElementById('WE922086aab5').children[0].children[0].children[1];
   const _Channels = document.getElementById('WE18c1a1aafa').children[0].children[0].children[1];
   const _CostStructure = document.getElementById('WEb2357406e7').children[0].children[0].children[1];
   const _RevenueStreams = document.getElementById('WEa71f6a0085').children[0].children[0].children[1];
   
   //const _Libres = document.getElementById('WE0b12853407').children[0].children[0].children[1];
   const _Libres = document.getElementById('WEDisponibles').children[0].children[0].children[0];
   
   /*
   var Look = true;
   */
   //screen.orientation.lock('landscape');
   
   // LIMITES DE CARDS por SPRINTS
   
   
   
   CheckMovs = (pos) => {
   	
   	console.log(pos)
   	
   	LimitMov = IdPartidaActiva.MovLimit.split(",");
   	Movs = game_cards.filter((s)=>{return (s.pos !== "0" && s.tipo == Sprint)}).length
   	
   	
   	if (pos == 0){
   		
   		if (Movs >= parseInt(LimitMov[Sprint-1])){
   			Mensaje(true, "Solo puedes usar " + LimitMov[Sprint-1] + " Card(s) para este Sprint, mejor reemplaza por otra.");
   			TickRealtime();
   			return false;
   			
   		} else {
   			return true;
   		}
   	} else {
   		return true;
   	}
   }
   
   
   const _Pos = [_Libres, _KeyPartner, _KeyActivities, _ValueProposition, _CustomerRelationchips, _CustomSegments, _KeyResources, _Channels, _CostStructure, _RevenueStreams];
   
   
   Limpieza = () => {
   	for (i=0; i < _Pos.length ;i++){
   		_Pos[i].innerHTML = "";
   	}
   }
   
   /// Emparentar Objetos:
   for (a=0; a < game_cards.length; a++){
   	game_cards[a].obj = CrearItemCards(game_cards[a].tipo, game_cards[a].id, game_cards[a].titulo, a)
   }
   
   ColocarCards = () => {
   	
   	_Pos[0].innerHTML = "";
   
   	for (a=0; a < game_cards.length; a++){
   		
   		if (Look){
   			game_cards[a].obj.children[0].children[0].setAttribute("draggable", "false")
   		} else {
   			game_cards[a].obj.children[0].children[0].setAttribute("draggable", "true")
   		}
   		
   		
   		if (game_cards[a].pos != 0){ //<= subjetivo -- == exacto
   			_Pos[parseInt(game_cards[a].pos)].appendChild(game_cards[a].obj);
   			if (game_cards[a].tipo != Sprint) 
   			{game_cards[a].obj.children[0].children[0].setAttribute("draggable", "false");}
   		} 
   		
   		if (game_cards[a].tipo == Sprint && game_cards[a].pos == 0){ //<= subjetivo -- == exacto
   			
   			_Pos[parseInt(game_cards[a].pos)].appendChild(game_cards[a].obj);
   		}
   		
   		
   	}
   	
   	
   }
   
   /*
   Limpieza();
   ColocarCards();
   */
   
   function CrearItemCards (tipo, id, titulo, i) {
   	
   	/*switch (tipo){
   		case 1:
   			Printer = '<div id="WE7507b2ab7f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2002">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE7507b2ab7f">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE5abeea4e54" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE5abeea4e54">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WE3871e97495" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE3871e97495">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE3871e97495" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WE854a4c6608" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE854a4c6608">'+
                      '<span class="OESZ OESZ_Text OESZG_WE854a4c6608 ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</main>'+
              '</div>'+
             '</div>';
   		break;
   		case 2:
   			Printer = '<div id="WEa19b3e9496" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2002">'+
              '<div class="OESZ OESZ_DivContent OESZG_WEa19b3e9496">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE9aa95f04f1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE9aa95f04f1">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WEc26b1fa455" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WEc26b1fa455">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEc26b1fa455" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WEcc4275897f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WEcc4275897f">'+
                      '<span class="OESZ OESZ_Text OESZG_WEcc4275897f ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
              '</main>'+
              '</div>'+
             '</div>';
   		break;
   		case 3:
   			Printer = '<div id="WE980fb9c2a5" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2003">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE980fb9c2a5">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE07f7cf90a4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE07f7cf90a4">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WEa9fb890e09" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WEa9fb890e09">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEa9fb890e09" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WE649f838144" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE649f838144">'+
                      '<span class="OESZ OESZ_Text OESZG_WE649f838144 ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</main>'+
              '</div>'+
             '</div>';
   		break;
   		case 4:
   			Printer = '<div id="WEbb996faad8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2004">'+
              '<div class="OESZ OESZ_DivContent OESZG_WEbb996faad8">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE86f89c7d60" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE86f89c7d60">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WE0fddb928b4" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE0fddb928b4">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE0fddb928b4" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WEe29ccd68c0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WEe29ccd68c0">'+
                      '<span class="OESZ OESZ_Text OESZG_WEe29ccd68c0 ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                '</div>'+
                '</div>'+
               '</main>'+
              '</div>'+
             '</div>';
   		break;
   		case 5:
   			Printer = '<div id="WE3cc132a49c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2005">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE3cc132a49c">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE224587bd4f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE224587bd4f">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WE06ce20920f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE06ce20920f">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE06ce20920f" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WE2499bc0bc5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE2499bc0bc5">'+
                      '<span class="OESZ OESZ_Text OESZG_WE2499bc0bc5 ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</main>'+
              '</div>'+
             '</div>';
   		break;
   		case 6:
   			Printer = '<div id="WE6c7b021071" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2006">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE6c7b021071">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE9249cbbf4d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE9249cbbf4d">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WE77736ab900" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE77736ab900">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE77736ab900" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WE5aaa7f08f5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE5aaa7f08f5">'+
                      '<span class="OESZ OESZ_Text OESZG_WE5aaa7f08f5 ContentBox">'+titulo+'<br /></span>'+
                     '</div>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</main>'+
              '</div>'+
             '</div>';
   		break;
   		
   	}*/
   	
   	Printer = '<div id="WE7507b2ab7f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2002;background-color:'+SprintColors[parseInt(tipo)-1]+'">'+
              '<div class="OESZ OESZ_DivContent OESZG_WE7507b2ab7f">'+
               '<main id="'+id+'" draggable="true" ondragstart="drag(event)">'+
                '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                 '<div id="WE5abeea4e54" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2001">'+
                  '<div class="OESZ OESZ_DivContent OESZG_WE5abeea4e54">'+
                   '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                    '<div id="WE3871e97495" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2002">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE3871e97495">'+
                      '<a href="javascript:MostrarTarjeta(true, '+id+');">'+
                       '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE3871e97495" alt="" />'+
                      '</a>'+
                     '</div>'+
                    '</div>'+
                    '<div id="WE854a4c6608" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2001">'+
                     '<div class="OESZ OESZ_DivContent OESZG_WE854a4c6608">'+
                      '<span class="OESZ OESZ_Text OESZG_WE854a4c6608 ContentBox">'+titulo+'<br /></span>'+
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
   	
   	return obj.firstChild
   	
   }
   
   
   // Drag&Drop:
   
   allowDrop = (ev) => {
   
     ev.preventDefault();
   	if (ev.target.id != ""){
   		ev.target.setAttribute("style", "background:#eaeaea")
   		} else {
   			check = ev.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement
   				.parentElement.parentElement
   			
   			if (check.id == "WEd05e839764"
   		|| check.id == "WE6e7db47d76"
   		|| check.id == "WE336c5ae87b"
   		|| check.id == "WEbed4045749"
   		|| check.id == "WE99618ea498"
   		|| check.id == "WE922086aab5"
   		|| check.id == "WE18c1a1aafa"
   		|| check.id =="WEb2357406e7"
   		|| check.id == "WEa71f6a0085"){
   				check.setAttribute("style", "background:#eaeaea")
   			}
   		}
   	
   }
   
   leaveDrop = (ev) => {
   	ev.preventDefault();
   	ev.target.setAttribute("style", "")
   }
   
   drag = (ev) => {
     ev.dataTransfer.setData("text", ev.target.id);
   //ev.dataTransfer.setData('text/plain', e.target.id);
   }
   
   drop = (ev) => {
   	
   	
     ev.preventDefault();
   	ev.target.setAttribute("style", "")
     var data = ev.dataTransfer.getData("text");
   	//console.log(ev.target.children[0].children[0].children[1]);
   	//console.log(document.getElementById(data).parentElement.parentElement);
   	
   	console.log("Tarjet ID:"+ev.target.id)
   	
   	if (ev.target.id == "WEDisponibles"
   		||ev.target.id == "WEd05e839764"
   		|| ev.target.id == "WE6e7db47d76"
   		|| ev.target.id == "WE336c5ae87b"
   		|| ev.target.id == "WEbed4045749"
   		|| ev.target.id == "WE99618ea498"
   		|| ev.target.id == "WE922086aab5"
   		|| ev.target.id == "WE18c1a1aafa"
   		|| ev.target.id =="WEb2357406e7"
   		|| ev.target.id == "WEa71f6a0085"){
   	
   		
   		// cuenta movimientos por sprint y chequea movimiento:
   		arrayid = game_cards[game_cards.findIndex(function (x) {return x.id == document.getElementById(data).id})].pos;
   		if(CheckMovs(arrayid)){ // <- si no es 0 mueve, si es 0 cuenta movimientos previos.
   			
   	if (Act_mov){ev.target
   		.children[0]
   		.children[0]
   		.children[1]
   		.appendChild(document.getElementById(data).parentElement.parentElement);}
   		
   			
   			setTimeout(()=>{Act_mov=true}, 1500)
   			
   		// check si es blueocean:
   		 if (Act_mov){
   		 	if (game_cards.filter(function(id){return id.id == document.getElementById(data).id})[0].tipo == 3)
   						{
   						if (game_cards.filter(function(id){return id.id == document.getElementById(data).id}
   															  
   											 )[0].pos == "0") {
   							
   							Panel(2, game_cards.filter(function(id){return id.id == document.getElementById(data).id}));
   							ActCards.close();
   						}
   					}
   		 }
   		 
   			
   		// cambiar pos:
   		
   		npos = _Pos.findIndex(function(p){return p.parentElement.parentElement.parentElement.id == ev.target.id})	
   		
   		game_cards.filter(function(id){return id.id == document.getElementById(data).id})[0].pos = npos.toString();
   		
   		pos_indx = game_cards.findIndex((s)=>{return s.id === document.getElementById(data).id})
   		
   		/*console.log("ID "+document.getElementById(data).id)
   		console.log("npos: "+npos)*/
   		
   		if (Act_mov){SendCard(document.getElementById(data).id, npos, pos_indx);}
   		
   		
   		}
   		
   	}
   	
   	check = ev.target.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement
   				.parentElement.parentElement
   			
   			if (check.id  == "WEDisponibles"
   		|| check.id == "WEd05e839764"
   		|| check.id == "WE6e7db47d76"
   		|| check.id == "WE336c5ae87b"
   		|| check.id == "WEbed4045749"
   		|| check.id == "WE99618ea498"
   		|| check.id == "WE922086aab5"
   		|| check.id == "WE18c1a1aafa"
   		|| check.id =="WEb2357406e7"
   		|| check.id == "WEa71f6a0085"){
   				
   				// cuenta movimientos por sprint y chequea movimiento:
   			arrayid = game_cards[game_cards.findIndex(function (x) {return x.id == document.getElementById(data).id})].pos;
   			if(CheckMovs(arrayid)){ // <- si no es 0 mueve, si es 0 cuenta movimientos previos.
   
   				if(Act_mov){check
   				.children[0]
   				.children[0]
   				.children[1]
   				.appendChild(document.getElementById(data).parentElement.parentElement) }
   				
   				
   				setTimeout(()=>{Act_mov=true}, 1500)
   			
   				
   				if (game_cards.filter(function(id){return id.id == document.getElementById(data).id})[0].tipo == 3)
   					{
   						alert('es 3 cartel:'+game_cards.filter(function(id)
   															   {return id.id == document.getElementById(data).id}
   															  )[0].pos); 
   					}
   				
   				}
   			}
   	
   	console.log(ev.target
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.parentElement
   				.id); // ObtengoDestino
   	
     //ev.target.appendChild(document.getElementById(data));
     //
     Act_mov = false;
   }
   
   
   
   objID = null;
   opcionesBlueOcean = (id) => {
   	objID = id;
   	
   	document.getElementById('WEba7a94a14b').style.display = "none"
   	document.getElementById('WEe46ebcc55e').style.display = "none"
   	document.getElementById('WEd0942271b8').style.display = "none"
   	
   	switch (id[0].ValorJson.tipo){
   		case 0: // create // WEba7a94a14b
   			document.getElementById('WEba7a94a14b').style.display = ""
   		break; 
   		case 1: // create raises / reduces
   			document.getElementById('WEe46ebcc55e').style.display = ""
   			document.getElementById('WEba7a94a14b').style.display = ""
   		break;
   		case 2: // raises/reduces // WEe46ebcc55
   			document.getElementById('WEe46ebcc55e').style.display = ""
   		break;
   		case 3: // eliminate //WEd0942271b8
   			document.getElementById('WEd0942271b8').style.display = ""
   		break;
   	}
   }
   selectOpBlueOcean = (op) => {
   	
   	game_cards.filter((s)=>{return s.id == objID[0].id})[0].opcion = op;
   	
   	 send_id = game_cards.filter((s)=>{return s.id == objID[0].id})[0].id
   	 send_pos = game_cards.filter((s)=>{return s.id == objID[0].id})[0].pos
   	 send_indx = game_cards.findIndex((s)=>{return s.id === objID[0].id})
   	 
   	SendCard(send_id, send_pos, send_indx)
   	
   	Panel(0);
   }
   
   ;
   const DragablesPanels = ["WE2bd87c9368", "WE245cf2c7e5", "WE37a71a9d9e", "WE0592da2ead", "WE336c5ae87b", "WEbed4045749", "WE18c1a1aafa", "WEb2357406e7",
   "WEa71f6a0085", "WE99618ea498",]
   
   
   for (p=0; p < DragablesPanels.length; p++){
     document.getElementById(DragablesPanels[p]).classList.add("block")
     document.getElementById(DragablesPanels[p]).children[0].children[0].children[0].classList.add("droppable")
 
   }
   
   
   // var Refresh = window.setInterval(() => {TickRealtime();}, 8500);
   
   
   Act_mov = true;
   
   
   ;
   
   const bajopanel = document.getElementById("WEcb32818414");
   	bajopanel.setAttribute('style', 'z-index:2500;width:99.5vw;height:100vh;top:0;left:0');
   
   const PreviewCard = document.getElementById("WEe1784fd48a")
   PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB";
   const BlueOceanOpt = document.getElementById("WE8f45c4ac18")
   
   function Panel(i, op){
   
   	switch(i){
   		case 0:
   			bajopanel.style.visibility = "hidden";
   			PreviewCard.style.visibility = "hidden";
   			PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB";
   			BlueOceanOpt.style.visibility = "hidden";
   			
   		break;
   		case 1:
   			bajopanel.style.visibility = "visible";
   			BlueOceanOpt.style.visibility = "hidden";
   			PreviewCard.style.visibility = "visible";
   			PreviewCard.className = "BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-in-2-cw"
   			
   		break;
   		case 2:
   			bajopanel.style.visibility = "visible";
   			PreviewCard.style.visibility = "hidden";
   			BlueOceanOpt.style.visibility = "visible";
   			opcionesBlueOcean(op)
   		break;
   		case 3:
   		break;
   		case 4:
   		break;
   	}
   }
  </script>

<script type="text/javascript">

var a = document.getElementById('fer');

const containers = document.querySelectorAll('.block')

const droppable = new Draggable.Sortable(containers, { //Draggable.Droppable(containers, {

draggable: '.draggable',
dropzone: '.droppable' // droppable / dropzone
});

//droppable.on('drag:start', () => console.log('drag:start'));
//droppable.on('droppable:over', (evt) => console.log('droppable:over'));
//droppable.on('droppable:out', (evt) => console.log('droppable:out'));
//droppable.on('drag:stop', () => check());
  droppable.on('droppable:stop', (evt) => console.log(evt)); // evt.dropzone.id
//droppable.on('droppable:dropped', () => console.log('droppable:dropped'));
//droppable.on('droppable:returned', () => console.log('droppable:returned'));


//droppable.on('mirror:attached', (evt) => console.log('mirror:attached'));
//droppable.on('droppable:out', (evt) => console.log('droppable:out'));
//droppable.on('mirror:created', (evt) => console.log('mirror:created'));
//droppable.on('drag:out:container', (evt) => console.log("drag:out:container"));


  check = () => {
  if (a.parentElement.className == "droppable draggable-droppable--occupied"){
  console.log(a.parentElement.id)
  } else {
  setTimeout(check, 100);
  }

  }

  BasePanel(0)

</script>

 </body>
</html>