<?php
session_start();

  if ($_SESSION['pg'] == "gme"){
    $lang = $_SESSION['lang'];
    $canvas = $_SESSION['canvas'];
    $lang = $_SESSION['lang'];
    $nameuser = $_SESSION["nme_usr"];
    $nameIco = $_SESSION["nme_ic"];
  } else {
    header("location: ../loggin");
  }
?>

<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <title>Roadmap Game - Running</title>
  <meta name="viewport" content="width=850, initial-scale=1" />
  <link id="openElement" rel="stylesheet" type="text/css" href="openElement.css?v=50491112400" />
  <link id="OETemplate1" rel="stylesheet" type="text/css" href="Base.css?v=50491112400" />
  
  <link rel="stylesheet" type="text/css" href="opentip.css?v=50491112400" />

  <link id="OEBase" rel="stylesheet" type="text/css" href="partida.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="Canvas.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="Dashboard.css?v=50491112400" />

  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491112400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"Canvas","Culture":"DEFAULT","LanguageCode":"ES","RelativePath":"","RenderMode":"Export","PageAssociatePath":"Canvas","EditorTexts":null};
  </script>
  <script type="text/javascript" src="../plugins/1.10.2.js?v=50491112400"></script>
  
  <script type="text/javascript" src="../plugins/oe.min.js?v=50491112400"></script>
  <script type="text/javascript" src="../plugins/opentip-jquery.min.js?v=50491112400"></script>
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

   @keyframes RunsTiledSmall {
  100% { background-position: -293px 0; }
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
  <script src="../plugins/numeral.min.js"></script>
  <script src="../plugins/locales/es.min.js"></script>
  <script type="text/javascript" src="../plugins/draggable.bundle.js"></script>
  <script>
  	numeral.locale('es');
  	
  </script>
  
  <script src="../plugins/Chart.min.js"></script>
  
  <script src="../plugins/Chart.min.js"></script>
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
  <style>
  input[type=range] {
  width: 100%;
  margin: 9.65px 0;
  background-color: transparent;
  -webkit-appearance: none;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  background: rgba(0, 0, 178, 0.7);
  border: 0;
  width: 100%;
  height: 10.7px;
  cursor: pointer;
}
input[type=range]::-webkit-slider-thumb {
  margin-top: -9.65px;
  width: 30px;
  height: 30px;
  background: #d33635;
  border: 2px solid rgba(255, 255, 255, 0.8);
  border-radius: 16px;
  cursor: pointer;
  -webkit-appearance: none;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #4c4cff;
}
input[type=range]::-moz-range-track {
  background: rgba(0, 0, 178, 0.7);
  border: 0;
  width: 100%;
  height: 10.7px;
  cursor: pointer;
}
input[type=range]::-moz-range-thumb {
  width: 30px;
  height: 30px;
  background: #d33635;
  border: 2px solid rgba(255, 255, 255, 0.8);
  border-radius: 16px;
  cursor: pointer;
}
input[type=range]::-ms-track {
  background: transparent;
  border-color: transparent;
  border-width: 11.55px 0;
  color: transparent;
  width: 100%;
  height: 10.7px;
  cursor: pointer;
}
input[type=range]::-ms-fill-lower {
  background: #000019;
  border: 0;
}
input[type=range]::-ms-fill-upper {
  background: rgba(0, 0, 178, 0.7);
  border: 0;
}
input[type=range]::-ms-thumb {
  width: 30px;
  height: 30px;
  background: #d33635;
  border: 2px solid rgba(255, 255, 255, 0.8);
  border-radius: 16px;
  cursor: pointer;
  margin-top: 0px;
  /*Needed to keep the Edge thumb centred*/
}
input[type=range]:focus::-ms-fill-lower {
  background: rgba(0, 0, 178, 0.7);
}
input[type=range]:focus::-ms-fill-upper {
  background: #4c4cff;
}
/*TODO: Use one of the selectors from https://stackoverflow.com/a/20541859/7077589 and figure out
how to remove the virtical space around the range input in IE*/
@supports (-ms-ime-align:auto) {
  /* Pre-Chromium Edge only styles, selector taken from hhttps://stackoverflow.com/a/32202953/7077589 */
  input[type=range] {
    margin: 0;
    /*Edge starts the margin from the thumb, not the track as other browsers do*/
  }
}
  </style>
  
  <style>
    
    input:focus, textarea:focus, select:focus{
          outline: none;
      }
    
    .draggable-container--over {
    	background-color: #6bb16b15;
    }
    .draggable {
    	background-color: #ff3946;
    	box-shadow: 10px 10px 10px #000000;
    	width: 100%;
      height: 45px;
      margin: 4px 0 2px 0;
      padding: 0;
      overflow: hidden;
      border-radius: 12px 12px 12px 0;
      background-color: #c00000;
    	
    }

    .off {
    	
    	box-shadow: 10px 10px 10px #000000;
    	width: 100%;
      height: 45px;
      margin: 4px 0 2px 0;
      padding: 0;
      overflow: hidden;
      border-radius: 12px 12px 12px 0;
      background-color: #c00000;
    	cursor: -webkit-grab; cursor: no-drop

    }
  	
  	.draggable:hover {
    	background-color: #ff0046;
    	box-shadow: 10px 10px 10px #000000;
  		
  		cursor: -webkit-grab; cursor: grab
    }
    
    .draggable-mirror {
  	 width: 140px;
  	  height: 110px; 
    	opacity: 0.8;
  	  
    	cursor: -webkit-grabbing; cursor: grabbing;
  	  cursor: move;
    }
    
    .draggable-source--is-dragging{
    	opacity: 0.2;
  	  animation: pulse 0.3s infinite;
    }
    
    .draggable-source--placed{
    	-webkit-animation:shake-bottom .8s cubic-bezier(.455,.03,.515,.955) both;animation:shake-bottom .8s cubic-bezier(.455,.03,.515,.955) both;
  	  /*animation: fade 1s linear forwards;*/
    	opacity: 0.8; 
    }
    
    	
    .interItem{
    	left: 10px;
        top: 0;
        width: 100%;
        height: 45px;
        margin: 0 0 -1px 0;
        padding: 0;
        border-radius: 12px 0 0 0;
        background-color: rgba(0,0,0,.2);
    }
    .interText{
    	position: absolute;
        left: 9px;
        top: 24px;
        width: auto;
        height: auto;
        color: #fff;
        font-weight: bold;
        font-size: 13px;
        font-family: Arial,Helvetica,sans-serif;
    }
    .interIMG{
    	position: absolute;
        top: 6px;
        right: 24px;
        width: 15px;
        height: auto;
        opacity: .5;
        filter: alpha(Opacity=50);
    }
    
    .droppable, .droppable.draggable-dropzone--occupied{
    	width: 100px; 
    	height: 5px;
    	border: solid;
    	display: flex;
    }
    
    
    		
  @keyframes fade {
    from {
      opacity: 0;
      visibility: hidden;
      transform: translateY(10px);
    }
    to { 
      opacity: 1;
      visibility: visible;
      transform: translateY(0);
    }
  }
  
  
  @-webkit-keyframes shake-bottom{0%,100%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}10%{-webkit-transform:rotate(2deg);transform:rotate(2deg)}20%,40%,60%{-webkit-transform:rotate(-4deg);transform:rotate(-4deg)}30%,50%,70%{-webkit-transform:rotate(4deg);transform:rotate(4deg)}80%{-webkit-transform:rotate(-2deg);transform:rotate(-2deg)}90%{-webkit-transform:rotate(2deg);transform:rotate(2deg)}}@keyframes shake-bottom{0%,100%{-webkit-transform:rotate(0deg);transform:rotate(0deg);-webkit-transform-origin:50% 100%;transform-origin:50% 100%}10%{-webkit-transform:rotate(2deg);transform:rotate(2deg)}20%,40%,60%{-webkit-transform:rotate(-4deg);transform:rotate(-4deg)}30%,50%,70%{-webkit-transform:rotate(4deg);transform:rotate(4deg)}80%{-webkit-transform:rotate(-2deg);transform:rotate(-2deg)}90%{-webkit-transform:rotate(2deg);transform:rotate(2deg)}}
  
  @keyframes pulse {
    0% {
      opacity: 0.2;;
    }
    50% {
      opacity: 1.0;;
    }
  	100% {
      opacity: 0.2;;
    }
  }
  </style>

  <link rel="stylesheet" href="../plugins/animate.min.css"  />
  
  <link rel="preload" as="image" href="../Images/logo-WE71cb131790.png">
  
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
  
  
  <?php
  	$IDGet = $_GET['id'];


	$t = base64_decode($IDGet);
	$ts = explode("-", $t, 2);

	echo '<script type="text/javascript">
		_phpid = '.$ts[0].'
		_partid = '.$ts[1].'
    _lang = "'.$lang.'";
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
<script type="text/javascript">
  
  function pn(i) {

    document.getElementById("pan_champ").style.display="none";
    document.getElementById("pan_canvas").style.display="none";
    document.getElementById("pan_dashboard").style.display="none";
    clearInterval(Passarela)

    
		switch(i){
		 case 0:
      //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo_chmp.png")');
      document.getElementById("pan_champ").style.display="initial";
      CartasDisponibles(false);
      Menu();
      BasePanel(1);
      CargarTabla();
      ReposManual();
      Pantalla = 0
      document.getElementById('WE60794dcfe8').style.visibility = "hidden";
		 break;
		 case 1:
      //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo.jpg")');
      document.getElementById("pan_canvas").style.display="initial";
      
      Menu();
      document.getElementById('WE60794dcfe8').style.visibility = "visible";

      sendconfirm = () =>{

          console.log("confirmacion");

          fetch("../realtime-canvas.php?f=confirm&g="+_phpid+"&p="+_partid+"&s="+IdPartidaActiva.SprintAct)
            .then(response => response.json())
            .then(data => {
              BasePanel(0);
              MiniRunners.style.display = "none"; // quita animacion mini runners;
            })
          BasePanel(1)
          Menu();
          Look = true;
          VariableCompetitiva = 0;
        }

        

      if (IdPartidaActiva.SprintAct == 0){
        Pantalla = 0
      } else {
        Pantalla = 1
        document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:sendconfirm()";
      }

		 break;
		 case 2:
      //document.getElementById("pan_dashboard").style.display="initial";
      //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo.jpg")');
      Pantalla = 1
      if(parseInt(IdPartidaActiva.SprintAct) > 0){
        
        if(parseInt(IdPartidaActiva.SprintAct) == 1 )
         {
           
          if(RealtimeData[1][0].confirmacion != "no"){ // No procesa el dash si no se enviado el primer canvas

          document.getElementById("pan_dashboard").style.display="initial";
          EstadosResultado(game_cards);
          Pantalla = 0} else {
            Mensaje(true, "no ha enviado el Canvas");
          }
        
        }

        if(parseInt(IdPartidaActiva.SprintAct) > 1){
          document.getElementById("pan_dashboard").style.display="initial";
          EstadosResultado(game_cards);
          Pantalla = 0
        }


        
      } else {
        document.getElementById("pan_dashboard").style.display="initial";
        Pantalla = 1

        document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:usersend()";

        usersend = () =>{
	        sendFdPorter();
        }
            // Cargamos Valores guardados
                form = document.getElementsByName('factor1');
                txt = document.getElementsByName('WE7e6b2544b9')[0];
                ordenA = [null, null, null, 15,16,17,18,19,5,6,7,8,9,20,10,11,12,13,14,0,1,2,3,4,5,21,22,23,24]
                ordenB = [null, null, null, "1_scale","1_experience","1_capital","1_reputation","1_distribution","2_size_supliers","2_price_sesibilities","2_technicalcost","2_brandcost","2_abilityintegrate","3_availabiliti","4_effectivecompetitors","4_market","4_diferentation","4_strategicstackes","4_protectstackes","5_sizecostumers","5_pricesesibilities","5_thecnicalcost","5_brandcost","5_abilityintegrate","6_impactchanges","7_relations","8_others", null]

                if (RealtimeData[3][0] != undefined) { 
                  for (i=0; i<ordenB.length; i++){
                      if (ordenA[i] != null){
                        form[ordenA[i]].value = RealtimeData[3][0][ordenB[i]]
                      }
                  }
                  txt.value = RealtimeData[3][0]['txt_8'];
              }
                
        

      }
      

      Menu();
      RunEstados();
      VistasPaneles(0);

      document.getElementById('WE60794dcfe8').style.visibility = "hidden";

		 break;
		}
    console.log("'.$IDGet.'")
    
    
  }

</script>
<script type="text/javascript" src="../js/game/base-head.js"></script>
<div id="XBody" class="BaseDiv RBoth OEPageXbody OESK_XBody_Default" style="z-index:1000">
   
  <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">


     <?php include "lang/base".$lang .".nyx"?>


     <!-- Canvas -->
     <section id="pan_canvas" style="display:none">

      <?php include "lang/canvas-es.nyx" ?>

     </section>

    <!-- DashBoard -->

    <section id="pan_dashboard" style="display:none">

      <?php include "lang/dash-es.nyx" ?>

    </section>

    <!-- Competencia -->

    <section id="pan_champ" style="display:none">

      <?php include "lang/champ-es.nyx" ?>

    </section>


     <!-- FIN -->
    </div>
   </div>
  </div>

  <script type="text/javascript">

    

    init = <?php 
    
    if ($nameuser == ""){
      echo "true";
    } else {
      echo "false";
    }
    
    ?>;  
  </script>

  <script type="text/javascript" src="../js/game/base.js"></script>
  <Script type="text/javascript" src="../js/game/canvas.js"> </Script>
  <Script type="text/javascript" src="../js/game/competencia.js"> </Script>
  <script type="text/javascript" src="../js/game/dashboard.js"></script>

  <script>

    <?php 

    if ($nameuser != ""){

      echo '
    avtSlct = '.$nameIco.';
    ico = document.getElementById(\'WE95f488f8df\').children[0].children[0]
    selIco = document.getElementById(Avatars[avtSlct]).children[0].children[0].children[0]
    Nmb = document.getElementById(\'WE3ddb4ed614\').children[0].children[0]
        
    ico.src = selIco.src;
    Nmb.innerText = ("'.$nameuser.'").slice(0, 23);
    
    if(IdPartidaActiva.SprintAct == 0){
      pn(2);
  } else {
      pn(1);
  }
  
  ';
    }
    ?>
    
    
    
    Icon = ["../Images/G1-WE2164b83b07.png", "../Images/G_2-WE97b04467a0.png",

"../Images/G_3-WE6f1f3ba49f.png",
"../Images/G_4-WE1c0a0e1467.png ",
"../Images/G_5-WE24adfee543.png ",
"../Images/G_6-WEbb596c0c0d.png",
"../Images/G7-WE7489823c1b.png",]

document.getElementById("WEe8b6c17e09").children[0].children[0].src = "../Images/"+Icon[_phpid];


document.getElementById("WEf07cd3261e").children[0].children[0].innerText = SprintTypeCards[Sprint-1];


  </script>

 </body>
</html>