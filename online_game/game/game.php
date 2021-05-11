<?php
include "../back/classes/loggin.php";
include "../back/classes/lang.php";

$Arr = Conexion::SessionChequed("game");

        $lang = $Arr['lang'];
        $canvas = $Arr['canvas'];
        $nameuser = $Arr['nameuser'];
        $nameIco = $Arr['nameIco'];

$conn = new Conexion("../back/conexion.json");

$LangBase = new Language("../lang/", "base");


$leyendaSprints = new Language("../lang/", "LeyendaSprints");

$LangCriterios = new Language("../lang/", "Criterios");

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

  <link id="OEBase" rel="stylesheet" type="text/css" href="PopUpCentral.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="Preguntas.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="NewCards.css?v=50491112400" />
  
  <link id="OEBase" rel="stylesheet" type="text/css" href="PoPUpCriterios.css?v=50491112400" />

  <!-- Modulos JavaScripts-->
  <script type="text/javascript" src="../js/joiner.php?compilation=module"></script>

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

  // Carga de Opciones desde PHP;


  // Sprints

  $SprintsColors = [];
  $SprintsTipoSprits = [];
  $SprintsTipoCards = [];
  $SprintsLeyendas = [];
  $SprintsMecanicas = [];

  $Sprint_SQL = "SELECT num, color, TipoSprint, TipoCard, mecanica FROM static_sprints ORDER BY num";
  $Qspr = mysqli_query($conn->conn(), $Sprint_SQL);
    if ($Qspr){
      while ($spr = mysqli_fetch_assoc($Qspr)){

        array_push($SprintsColors, $spr['color']);
        array_push($SprintsTipoSprits, $spr['TipoSprint']);
        array_push($SprintsTipoCards, $spr['TipoCard']);
        array_push($SprintsLeyendas, $leyendaSprints->getLabel($lang, $spr['num']));
        array_push($SprintsMecanicas, $spr['mecanica']);

      }
    } else {
      echo '<option value="User Default" class="OESZ OESZ_Options OESZG_WE85e1e4be37" selected="selected">User Default</option>';
    }

  // ID
  $IDGet = $_GET['id'];

    // Descompresion Grupo y Partida;
	$t = base64_decode($IDGet);
	$ts = explode("-", $t, 2);


  // Pasando valores a JavaScript
	echo '<script type="text/javascript">
		_phpid = '.$ts[0].'
		_partid = '.$ts[1].'
    _lang = "'.$lang.'";

    _SprintColor = '.json_encode($SprintsColors).';
    _SprintsTipo =  '.json_encode($SprintsTipoSprits).';
    _CardsTipo =  '.json_encode($SprintsTipoCards).';
    _SprintLeyenda = '.json_encode($SprintsLeyendas).';

    _MecanicOrder = '.json_encode($SprintsMecanicas).';

    _LeyendasCriterios = '.$LangCriterios->getLanguageJson().';
    _LeyendasMensajes = '.$LangBase->getLanguageJson().';
    
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

<script type="text/javascript" src="../js/game/base-head.js"></script>
<div id="XBody" class="BaseDiv RBoth OEPageXbody OESK_XBody_Default" style="z-index:1000">
   
  <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">


     <?php include "scaffold/base.php"?>

    <!-- FuerzasPorter -->
    <section id="pan_Porter" style="display:none">

      <?php include "scaffold/porter.php" ?>

    </section>

     <!-- Canvas -->
     <section id="pan_canvas" style="display:none">

      <?php include "scaffold/canvas.php" ?>

     </section>

    <!-- DashBoard -->

    <section id="pan_dashboard" style="display:none">

      <?php include "scaffold/dashboard.php" ?>

    </section>

    <!-- Competencia -->

    <section id="pan_champ" style="display:none">

      <?php include "scaffold/puntajes.php" ?>

    </section>


     <!-- FIN -->


    <!-- PoPUP Mensajes -->

    <div id="WE64fcc6f953" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="display:none;z-index:60000;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WE64fcc6f953">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        
        
        <div id="WEab2dc61e90" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3; cursor:pointer">
         <div class="OESZ OESZ_DivContent OESZG_WEab2dc61e90">
          <img src="../Images/delete_big.png" class="OESZ OESZ_Img OESZG_WEab2dc61e90" alt="" />
         </div>
        </div>
        <div id="WE277d29c3b4" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE277d29c3b4">
          <img src="../Images/crdsicons-WE09b25afd20.png" class="OESZ OESZ_Img OESZG_WE277d29c3b4" alt="" />
         </div>
        </div>
        <div id="WE7f8c02f4db" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE7f8c02f4db">
          <span class="OESZ OESZ_Text OESZG_WE7f8c02f4db ContentBox">Titulo del PopUp</span>
         </div>
        </div>
        <div id="WE5c2891c6f2" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE5c2891c6f2">
          <span class="ContentBox">Texto Multilinea<br />asda<br />asd<br />as<br />da<br />sda<br />sd<br />as<br />da<br />sd<br />a<br />sd<br />a<br /></span>
         </div>
        </div>
       </div>
      </div>
     </div>

     <!-- Preguntas -->
     
     <div id="WE0f83cfd343" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="display:none;z-index:6000; position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WE0f83cfd343">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE0dcd0a8f58" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE0dcd0a8f58">
          <img src="../Images/delete_big.png" class="OESZ OESZ_Img OESZG_WE0dcd0a8f58" alt="" />
         </div>
        </div>
        <div id="WEd7adab14e7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEd7adab14e7">
          <img src="../Images/crdsicons-WE09b25afd20.png" class="OESZ OESZ_Img OESZG_WEd7adab14e7" alt="" />
         </div>
        </div>
        <div id="WE3d48d8b0a7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE3d48d8b0a7">
          <span class="OESZ OESZ_Text OESZG_WE3d48d8b0a7 ContentBox">¿Está Seguro?</span>
         </div>
        </div>
        <div id="WE7699421cb6" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE7699421cb6">
          <span class="ContentBox">¿Está seguro de enviar este Canvas?<br /></span>
         </div>
        </div>
        <div id="WE0bd13cf539" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__bounceInUp" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE0bd13cf539">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE08fa55da4a" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE08fa55da4a">
             <div class="OESZ OESZ_Top OESZG_WE08fa55da4a"></div>
             <div class="OESZ OESZ_Content OESZG_WE08fa55da4a"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE08fa55da4a"></div>
            </div>
           </div>
           <div id="WE08850e81de" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2;cursor:pointer" data-ot="OK" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
            <div class="OESZ OESZ_DivContent OESZG_WE08850e81de">
             
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEffd7af9ab7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEffd7af9ab7">
                 <img src="../Images/send_ok-WE254353a11f.png" class="OESZ OESZ_Img OESZG_WEffd7af9ab7" alt="" />
                </div>
               </div>
              </div>
             
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE99d895ae48" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  animate__animated animate__bounceInUp" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE99d895ae48">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE1616e48cab" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE1616e48cab">
             <div class="OESZ OESZ_Top OESZG_WE1616e48cab"></div>
             <div class="OESZ OESZ_Content OESZG_WE1616e48cab"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE1616e48cab"></div>
            </div>
           </div>
           <div id="WE6e79edc9db" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2;cursor:pointer" data-ot="Cancel" data-ot-delay="0.2" data-ot-background="#FFFFFF" data-ot-border-color="#FFFFFF" data-ot-target="true" data-ot-target-joint="top right" data-ot-tip-joint="bottom left">
            <div class="OESZ OESZ_DivContent OESZG_WE6e79edc9db">
             
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE9a6b2e7475" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OECenterAH" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE9a6b2e7475">
                 <img src="../Images/DeleteCard.png" class="OESZ OESZ_Img OESZG_WE9a6b2e7475" alt="" />
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


     <!-- GAMECARDS -->


     <style>
     .rotate-diagonal-1{-webkit-animation:rotate-diagonal-1 .4s linear both;animation:rotate-diagonal-1 .4s linear both}
     @-webkit-keyframes rotate-diagonal-1{0%{-webkit-transform:rotate3d(1,1,0,0deg);transform:rotate3d(1,1,0,0deg)}50%{-webkit-transform:rotate3d(1,1,0,-180deg);transform:rotate3d(1,1,0,-180deg)}100%{-webkit-transform:rotate3d(1,1,0,-360deg);transform:rotate3d(1,1,0,-360deg)}}@keyframes rotate-diagonal-1{0%{-webkit-transform:rotate3d(1,1,0,0deg);transform:rotate3d(1,1,0,0deg)}50%{-webkit-transform:rotate3d(1,1,0,-180deg);transform:rotate3d(1,1,0,-180deg)}100%{-webkit-transform:rotate3d(1,1,0,-360deg);transform:rotate3d(1,1,0,-360deg)}}

     </style>

      <!--URL BACKGROUND ../Images/CardBgAdd.png -->

  <div id="GameCardsView" style="display:none">
     <div id="WE84c74bf340" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAB" style="z-index:6000;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WE84c74bf340">
       <div class="OESZ OESZ_Top OESZG_WE84c74bf340"></div>
       <div class="OESZ OESZ_Content OESZG_WE84c74bf340"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE84c74bf340"></div>
      </div>
     </div>
     <div id="WE71600d3c3c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default OECenterAB" style="z-index:6000;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WE71600d3c3c">
       <div class="OESZ OESZ_Top OESZG_WE71600d3c3c"></div>
       <div class="OESZ OESZ_Content OESZG_WE71600d3c3c"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE71600d3c3c"></div>
      </div>
     </div>
     <div id="WEbb2aaf8d1e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-diagonal-1" style="z-index:6000;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WEbb2aaf8d1e">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE40318174b2" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE40318174b2">
          <span class="ContentBox">My multi-line text</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEac05ca20ff" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:3;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WEac05ca20ff">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE7910722f1d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE7910722f1d">
          <img src="../Images/rotation.png" class="OESZ OESZ_Img OESZG_WE7910722f1d" alt="" />
         </div>
        </div>
        <div id="WEb4ee765f82" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEb4ee765f82">
          <img src="../Images/rotation.png" class="OESZ OESZ_Img OESZG_WEb4ee765f82" alt="" />
         </div>
        </div>
       </div>
      </div>
     </div>
</div>


<!-- POP UP Criterios -->

<div id="WEad93fc0ead" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="display:none;z-index:2060;position:fixed">
      <div class="OESZ OESZ_DivContent OESZG_WEad93fc0ead">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE5e293e7d4b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3;cursor:pointer">
         <div class="OESZ OESZ_DivContent OESZG_WE5e293e7d4b">
          <img src="../Images/delete_big.png" class="OESZ OESZ_Img OESZG_WE5e293e7d4b" alt="" >
         </div>
        </div>
        <div id="WEa2b4fba989" class="BaseDiv RWidth OEWEText OESK_WEText_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEa2b4fba989">
          <span class="ContentBox">-</span>
         </div>
        </div>
        <div id="WEc4258b9f1d" class="BaseDiv RBoth OEWELabel OESK_WELabel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEc4258b9f1d">
          <span class="OESZ OESZ_Text OESZG_WEc4258b9f1d ContentBox">-</span>
         </div>
        </div>
       </div>
      </div>


     <!-- FIN EMERGENTES -->





    </div>
   </div>
  </div>



  <!-- JAVASCRIPTS NUEVOS-->

  
<!--<script type="text/javascript" src="../js/classes/Secciones.js"></script>
<script type="text/javascript" src="../js/classes/MenuControl.js"></script>
<script type="text/javascript" src="../js/classes/AvatarSelector.js"></script>
<script type="text/javascript" src="../js/classes/Notification.js"></script>
<script type="text/javascript" src="../js/classes/Sincronizacion.js"></script>
<script type="text/javascript" src="../js/classes/Cronometro.js"></script>
<script type="text/javascript" src="../js/classes/StateMachine.js"></script>

<Script type="text/javascript" src="../js/mechanics/CanvasDisplayController.js"> </Script> 
<Script type="text/javascript" src="../js/mechanics/5PorterHandler.js"> </Script> -->





<script type="text/javascript">

<?php 

  if ($nameuser != ""){
    echo '
    NameUser = "'.$nameuser.'";
    AvatarID = '.$nameIco.';';
  }
  else {
    echo '
    NameUser = null;
    AvatarID = null;';
  }

 ?>

</script>


<!-- JAVASCRIPTS VIEJOS-->

  <!-- <script type="text/javascript" src="../js/game/base.js"></script> -->
  <!-- <Script type="text/javascript" src="../js/game/canvas.js"> </Script> -->
  <!-- <Script type="text/javascript" src="../js/game/competencia.js"> </Script> -->
  <!-- <script type="text/javascript" src="../js/game/dashboard.js"></script> -->

    <script type="text/javascript" src="../js/joiner.php?compilation=instances"></script>

 </body>
</html>