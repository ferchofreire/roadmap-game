<?php
session_start();

  if ($_SESSION['pg'] != ""){
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
  <title>Dashboard</title>
  <meta name="viewport" content="width=950px, initial-scale=1, minimal-ui" />
  <link id="openElement" rel="stylesheet" type="text/css" href="openElement.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="FinalShowDash.css?v=50491112400" />
  <link id="Canvas" rel="stylesheet" type="text/css" href="../game/Canvas.css?v=50491112400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491112400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"FinalShowDash","Culture":"DEFAULT","LanguageCode":"ES","RelativePath":"","RenderMode":"Export","PageAssociatePath":"FinalShowDash","EditorTexts":null};
  </script>
  <script type="text/javascript" src="../plugins/1.10.2.js?v=50491112400"></script>
  <script type="text/javascript" src="../plugins/oe.min.js?v=50491112400"></script>
  <script src="../plugins/Chart.min.js"></script>
  <script src="../plugins/draggable.bundle.js"></script>
  <?php 

    $Grupo = $_GET["g"];
  
    echo '<script type="text/javascript">
    
      _phpid = '.$Grupo.';
      _PartidaID = '.$_SESSION['initPart'].'; 
      _partid = '.$_SESSION['initPart'].'; 
    
    </script>'
  
  ?>

  
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

  
  <script type="text/javascript">
    
    SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]
    SprintTitle = ["Stress Test", "Business Model Patterns", "Blue Ocean Strategy", "Digital Drivers", "Business Model Test", "Metrics"]
    SprintLeg = ["Undestanding the competitive environment", 
          "New business models ahead", "Creating new market space", 
          "targeting value with new digital skils", "Testing innovations", 
          "implementing business model innovation"]

    SprintTypeCards = ["Trends", "Patterns", "Blue Ocean", "Digital", "Test", "Metrics"]

    game_cards = [];

    IdPartidaActiva = {"id":"55","titulo":"demox","desde":"2020-08-21","hasta":"2020-08-22","maxsprints":"6","estado":"on","lang":"es","hoy":"2020-08-21","obj":"","tm_desde":"19:26:12","tm_hasta":"19:22:20","canvas":"1","timestamp":"19:02:20","limit_time":"00:20:00","SprintAct":"2","MovLimit":"4,4,4,4,4,4","GrupoSelecto":"0"}
    
    RealtimeData = [];
    RealtimeData[3] = []
    RealtimeData[3][0] = undefined

function CartasDisponibles(id){
  //
}
  </script>

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
  <script src="../plugins/numeral.min.js"></script>
  <script src="../plugins/locales/es.min.js"></script>
  
  <script>
  	numeral.locale('es');
  	
  </script>
 </head>
 <body class="RWAuto" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}">

 <div id="WE60794dcfe8"></div>
 <div id="CartasDisponibles" style="display:none;"></div>
 <div id="WEDisponibles" style="display:none;"></div>
 <div id="WEcb32818414"></div>
 <div id="WEe1784fd48a"></div>

 <div id="WE_banderin_1"></div>
 <div id="WE_banderin_2"></div>

 <div id="WE_cartel_1"></div>
 <div id="WE_cartel_3"></div>

 <div id="WE_banderin_4"></div>

 <div id="WE4093fa85d0"></div>
 <div id="WEdccedd8fdc"></div>
 
<div id="WEdccedd8fdc"></div>
<div id="WE4093fa85d0"></div>
<div id="btn_bar"></div>

<div id="WE9234a60359"><div><div><div></div></div></div></div>
<div id="WE663221ffc3"><div><div><div> <div><div><div><div></div></div></div></div> </div></div></div></div>
<div id="WE6d14d31355"><div><div><div></div></div></div></div>
<div id="WE6186eef492"><div><div><div></div></div></div></div>
 
 
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RNone OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WECanvasPortable" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:21">
      <div class="OESZ OESZ_DivContent OESZG_WECanvasPortable">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        
       <!-- Sección Canvas -->

       <?php 


          if ($_GET['c'] != ""){
            $canvas = $_GET['c'];
          }
       
        include "../game/canvas/cmb_".$canvas.".nyx";
       
       ?>
      
       <!-- <div id="WE7088dd5491" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default  slide-in-top" style="z-index:1"> 
         <div class="OESZ OESZ_DivContent OESZG_WE7088dd5491">
          <div class="OECT OECT_Content OECTRel OEDynTag0">
           <div class="OERelLine OEHAlignL OEVAlignT">
            <div id="WE99c31ee0d4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE99c31ee0d4">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE40122ffe16" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE40122ffe16">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WEf95e2ac6ce" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:4">
                    <div class="OESZ OESZ_DivContent OESZG_WEf95e2ac6ce">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE7d304db981" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE7d304db981">
                        <div class="OESZ OESZ_Top OESZG_WE7d304db981"></div>
                        <div class="OESZ OESZ_Content OESZG_WE7d304db981"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE7d304db981"></div>
                       </div>
                      </div>
                      <div id="WE58d99eeac9" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE58d99eeac9">
                        <span class="OESZ OESZ_Text OESZG_WE58d99eeac9 ContentBox">Key Partner</span>
                       </div>
                      </div>
                      <div id="WE2dd4c491c7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE2dd4c491c7">
                        <img src="../Images/011-WEcf0cdd85e6.png" class="OESZ OESZ_Img OESZG_WE2dd4c491c7" alt="" />
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
            </div><div id="WEca33350a26" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEca33350a26">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignL OEVAlignB">
                <div id="WE72557729aa" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE72557729aa">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WEfb9389ceac" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WEfb9389ceac">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WEd9fbdb9b7a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WEd9fbdb9b7a">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WEc6caf1ae4f" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WEc6caf1ae4f">
                            <div class="OESZ OESZ_Top OESZG_WEc6caf1ae4f"></div>
                            <div class="OESZ OESZ_Content OESZG_WEc6caf1ae4f"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WEc6caf1ae4f"></div>
                           </div>
                          </div>
                          <div id="WE7e14be170a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WE7e14be170a">
                            <img src="../Images/010-WEc9cbbfad04.png" class="OESZ OESZ_Img OESZG_WE7e14be170a" alt="" />
                           </div>
                          </div>
                          <div id="WEe59b14a6fa" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WEe59b14a6fa">
                            <span class="OESZ OESZ_Text OESZG_WEe59b14a6fa ContentBox">Key Ativities</span>
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
                </div><div id="WE6323246d1a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE6323246d1a">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE923c5b45d2" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE923c5b45d2">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WEa22f022c38" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WEa22f022c38">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WEecca35dd68" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WEecca35dd68">
                            <div class="OESZ OESZ_Top OESZG_WEecca35dd68"></div>
                            <div class="OESZ OESZ_Content OESZG_WEecca35dd68"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WEecca35dd68"></div>
                           </div>
                          </div>
                          <div id="WE144734fcb7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WE144734fcb7">
                            <img src="../Images/04-WEc705513e29.png" class="OESZ OESZ_Img OESZG_WE144734fcb7" alt="" />
                           </div>
                          </div>
                          <div id="WEdf5005d3e3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WEdf5005d3e3">
                            <span class="OESZ OESZ_Text OESZG_WEdf5005d3e3 ContentBox">Key Resources</span>
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
            </div><div id="WEdf8cf5d7b8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEdf8cf5d7b8">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE0576d34e91" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE0576d34e91">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WE7a1001952f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                    <div class="OESZ OESZ_DivContent OESZG_WE7a1001952f">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE51d91a6ecd" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE51d91a6ecd">
                        <div class="OESZ OESZ_Top OESZG_WE51d91a6ecd"></div>
                        <div class="OESZ OESZ_Content OESZG_WE51d91a6ecd"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE51d91a6ecd"></div>
                       </div>
                      </div>
                      <div id="WE350020f661" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE350020f661">
                        <img src="../Images/012-WE1b8ecc538c.png" class="OESZ OESZ_Img OESZG_WE350020f661" alt="" />
                       </div>
                      </div>
                      <div id="WE9b27ca4c8b" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE9b27ca4c8b">
                        <span class="OESZ OESZ_Text OESZG_WE9b27ca4c8b ContentBox">Value Propositions</span>
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
            </div><div id="WE316a43f245" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE316a43f245">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignL OEVAlignB">
                <div id="WEd7bba0e6b8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEd7bba0e6b8">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE1aa678475b" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE1aa678475b">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WE4523fd7488" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WE4523fd7488">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WE76a3a826bd" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WE76a3a826bd">
                            <div class="OESZ OESZ_Top OESZG_WE76a3a826bd"></div>
                            <div class="OESZ OESZ_Content OESZG_WE76a3a826bd"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WE76a3a826bd"></div>
                           </div>
                          </div>
                          <div id="WEd2b9948602" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WEd2b9948602">
                            <img src="../Images/01-WEdc3551cf94.png" class="OESZ OESZ_Img OESZG_WEd2b9948602" alt="" />
                           </div>
                          </div>
                          <div id="WEb4121610ba" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WEb4121610ba">
                            <span class="OESZ OESZ_Text OESZG_WEb4121610ba ContentBox">Customer Relationships</span>
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
                </div><div id="WE75d46e5191" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE75d46e5191">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE6d8347e1e7" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE6d8347e1e7">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WE68080beb4b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WE68080beb4b">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WEed8505d3bc" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WEed8505d3bc">
                            <div class="OESZ OESZ_Top OESZG_WEed8505d3bc"></div>
                            <div class="OESZ OESZ_Content OESZG_WEed8505d3bc"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WEed8505d3bc"></div>
                           </div>
                          </div>
                          <div id="WEbd2650c414" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WEbd2650c414">
                            <img src="../Images/06-WE25947a2310.png" class="OESZ OESZ_Img OESZG_WEbd2650c414" alt="" />
                           </div>
                          </div>
                          <div id="WE071e15de3c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WE071e15de3c">
                            <span class="OESZ OESZ_Text OESZG_WE071e15de3c ContentBox">Channels</span>
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
            </div><div id="WE8ea423e129" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE8ea423e129">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE8faf11f49e" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE8faf11f49e">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WE459ee5fd7a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:4">
                    <div class="OESZ OESZ_DivContent OESZG_WE459ee5fd7a">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE39bbe91cc5" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE39bbe91cc5">
                        <div class="OESZ OESZ_Top OESZG_WE39bbe91cc5"></div>
                        <div class="OESZ OESZ_Content OESZG_WE39bbe91cc5"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE39bbe91cc5"></div>
                       </div>
                      </div>
                      <div id="WEaedbc5e4ad" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WEaedbc5e4ad">
                        <img src="../Images/02-WEd0ce9f4503.png" class="OESZ OESZ_Img OESZG_WEaedbc5e4ad" alt="" />
                       </div>
                      </div>
                      <div id="WE6ae2f8407f" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE6ae2f8407f">
                        <span class="OESZ OESZ_Text OESZG_WE6ae2f8407f ContentBox">Customer Segments</span>
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
            </div><div id="WE00b89222b6" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:8">
             <div class="OESZ OESZ_DivContent OESZG_WE00b89222b6">
              <div class="OECT OECT_Content OECTRel OEDynTag0">
               <div class="OERelLine OEHAlignL OEVAlignB">
                <div id="WE395c67a7ca" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE395c67a7ca">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE4c4ef36f89" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE4c4ef36f89">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WEe4a1c70b86" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WEe4a1c70b86">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WE712b1e3b7b" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WE712b1e3b7b">
                            <div class="OESZ OESZ_Top OESZG_WE712b1e3b7b"></div>
                            <div class="OESZ OESZ_Content OESZG_WE712b1e3b7b"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WE712b1e3b7b"></div>
                           </div>
                          </div>
                          <div id="WE29f80f97d1" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WE29f80f97d1">
                            <img src="../Images/03-WE295b7cfffd.png" class="OESZ OESZ_Img OESZG_WE29f80f97d1" alt="" />
                           </div>
                          </div>
                          <div id="WE513d325b96" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WE513d325b96">
                            <span class="OESZ OESZ_Text OESZG_WE513d325b96 ContentBox">Consumer</span>
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
                </div><div id="WEe29c3d5f86" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  block" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WEe29c3d5f86">
                  <div class="OECT OECT_Content OECTAbs OEDynTag0">
                   <div id="WE6323da0c82" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                    <div class="OESZ OESZ_DivContent OESZG_WE6323da0c82">
                     <div class="OECT OECT_Content OECTRel OEDynTag0">
                      <div class="OERelLine OEHAlignC OEVAlignB">
                       <div id="WEffe909eeb9" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                        <div class="OESZ OESZ_DivContent OESZG_WEffe909eeb9">
                         <div class="OECT OECT_Content OECTAbs OEDynTag0">
                          <div id="WEc0e46f0f2e" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                           <div class="OESZ OESZ_DivContent OESZG_WEc0e46f0f2e">
                            <div class="OESZ OESZ_Top OESZG_WEc0e46f0f2e"></div>
                            <div class="OESZ OESZ_Content OESZG_WEc0e46f0f2e"></div>
                            <div class="OESZ OESZ_Bottom OESZG_WEc0e46f0f2e"></div>
                           </div>
                          </div>
                          <div id="WEeb26cea4f2" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                           <div class="OESZ OESZ_DivContent OESZG_WEeb26cea4f2">
                            <img src="../Images/07-WE887771b78d.png" class="OESZ OESZ_Img OESZG_WEeb26cea4f2" alt="" />
                           </div>
                          </div>
                          <div id="WE7229c9c886" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                           <div class="OESZ OESZ_DivContent OESZG_WE7229c9c886">
                            <span class="OESZ OESZ_Text OESZG_WE7229c9c886 ContentBox">Influencer</span>
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
            </div><div id="WEb905a8d7f8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  block" style="z-index:6">
             <div class="OESZ OESZ_DivContent OESZG_WEb905a8d7f8">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE6b9659bb06" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE6b9659bb06">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WEae454fd9c1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:3">
                    <div class="OESZ OESZ_DivContent OESZG_WEae454fd9c1">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE1d8b65ea11" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE1d8b65ea11">
                        <div class="OESZ OESZ_Top OESZG_WE1d8b65ea11"></div>
                        <div class="OESZ OESZ_Content OESZG_WE1d8b65ea11"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE1d8b65ea11"></div>
                       </div>
                      </div>
                      <div id="WE823a2c0375" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE823a2c0375">
                        <img src="../Images/09-WEc9445c133d.png" class="OESZ OESZ_Img OESZG_WE823a2c0375" alt="" />
                       </div>
                      </div>
                      <div id="WE92634e8f62" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE92634e8f62">
                        <span class="OESZ OESZ_Text OESZG_WE92634e8f62 ContentBox">Cost Structure</span>
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
            </div><div id="WE875c386e5d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default  block" style="z-index:7">
             <div class="OESZ OESZ_DivContent OESZG_WE875c386e5d">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE8607540b57" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE8607540b57">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WEc99af11ee0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                    <div class="OESZ OESZ_DivContent OESZG_WEc99af11ee0">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE66349569f6" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE66349569f6">
                        <div class="OESZ OESZ_Top OESZG_WE66349569f6"></div>
                        <div class="OESZ OESZ_Content OESZG_WE66349569f6"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE66349569f6"></div>
                       </div>
                      </div>
                      <div id="WE7d5db70aef" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE7d5db70aef">
                        <img src="../Images/05-WEdf2cb09ffe.png" class="OESZ OESZ_Img OESZG_WE7d5db70aef" alt="" />
                       </div>
                      </div>
                      <div id="WE0a4a84edbb" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WE0a4a84edbb">
                        <span class="OESZ OESZ_Text OESZG_WE0a4a84edbb ContentBox">Revenue Streams</span>
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
            </div><div id="WE3926f95612" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
             <div class="OESZ OESZ_DivContent OESZG_WE3926f95612">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE0fd802714c" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default  block" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE0fd802714c">
                 <div class="OECT OECT_Content OECTRel OEDynTag0">
                  <div class="OERelLine OEHAlignC OEVAlignB">
                   <div id="WE15d3e866cb" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterRH" style="z-index:2">
                    <div class="OESZ OESZ_DivContent OESZG_WE15d3e866cb">
                     <div class="OECT OECT_Content OECTAbs OEDynTag0">
                      <div id="WE1f0748a41c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
                       <div class="OESZ OESZ_DivContent OESZG_WE1f0748a41c">
                        <div class="OESZ OESZ_Top OESZG_WE1f0748a41c"></div>
                        <div class="OESZ OESZ_Content OESZG_WE1f0748a41c"></div>
                        <div class="OESZ OESZ_Bottom OESZG_WE1f0748a41c"></div>
                       </div>
                      </div>
                      <div id="WE8d20747975" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                       <div class="OESZ OESZ_DivContent OESZG_WE8d20747975">
                        <img src="../Images/08-WE3478d399ed.png" class="OESZ OESZ_Img OESZG_WE8d20747975" alt="" />
                       </div>
                      </div>
                      <div id="WEf1dd4dc9c5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                       <div class="OESZ OESZ_DivContent OESZG_WEf1dd4dc9c5">
                        <span class="OESZ OESZ_Text OESZG_WEf1dd4dc9c5 ContentBox">Intermediaries</span>
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
        </div>


        --> </div> 

      

       <!-- Fin Sección -->

      </div>
     </div>
     <div id="WE80e345ee57" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
      <div class="OESZ OESZ_DivContent OESZG_WE80e345ee57">
       <span class="OESZ OESZ_Text OESZG_WE80e345ee57 ContentBox">Complementors</span>
      </div>
     </div>
     <div id="WEae7ff876b3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
      <div class="OESZ OESZ_DivContent OESZG_WEae7ff876b3">
       <span class="OESZ OESZ_Text OESZG_WEae7ff876b3 ContentBox">Regulatory Factors</span>
      </div>
     </div>
     <div id="WE1277881946" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
      <div class="OESZ OESZ_DivContent OESZG_WE1277881946">
       <div class="OESZ OESZ_Top OESZG_WE1277881946"></div>
       <div class="OESZ OESZ_Content OESZG_WE1277881946"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE1277881946"></div>
      </div>
     </div>
     <div id="WEa375124131" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:5">
      <div class="OESZ OESZ_DivContent OESZG_WEa375124131">
       <div class="OESZ OESZ_Top OESZG_WEa375124131"></div>
       <div class="OESZ OESZ_Content OESZG_WEa375124131"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEa375124131"></div>
      </div>
     </div>
     <div id="WE13c015cd9d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:18">
      <div class="OESZ OESZ_DivContent OESZG_WE13c015cd9d">
       <span class="OESZ OESZ_Text OESZG_WE13c015cd9d ContentBox">How</span>
      </div>
     </div>
     <div id="WEcadfca9d98" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
      <div class="OESZ OESZ_DivContent OESZG_WEcadfca9d98">
       <span class="OESZ OESZ_Text OESZG_WEcadfca9d98 ContentBox">What</span>
      </div>
     </div>
     <div id="WEd60365cc40" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEd60365cc40">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WEee352f3a70" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEee352f3a70">
           <canvas id="_canv_Impacto" width="263px" height="263px"></canvas>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEd9a83f4b9a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
      <div class="OESZ OESZ_DivContent OESZG_WEd9a83f4b9a">
       <span class="OESZ OESZ_Text OESZG_WEd9a83f4b9a ContentBox">Who</span>
      </div>
     </div>
     <div id="WEfbfabbac6a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
      <div class="OESZ OESZ_DivContent OESZG_WEfbfabbac6a">
       <span class="OESZ OESZ_Text OESZG_WEfbfabbac6a ContentBox">Why</span>
      </div>
     </div>
     <div id="WE18ad913f84" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:6">
      <div class="OESZ OESZ_DivContent OESZG_WE18ad913f84">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WE66fe18d299" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE66fe18d299">
           <canvas id="_canv_porter" width="263" height="263px"></canvas>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE0f2ac6ae5a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
      <div class="OESZ OESZ_DivContent OESZG_WE0f2ac6ae5a">
       <span class="OESZ OESZ_Text OESZG_WE0f2ac6ae5a ContentBox">Otro</span>
      </div>
     </div>
     <div id="WEf91f6b5ca0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:15">
      <div class="OESZ OESZ_DivContent OESZG_WEf91f6b5ca0">
       <span class="OESZ OESZ_Text OESZG_WEf91f6b5ca0 ContentBox">Clientes</span>
      </div>
     </div>
     <div id="WEf532891657" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
      <div class="OESZ OESZ_DivContent OESZG_WEf532891657">
       <span class="OESZ OESZ_Text OESZG_WEf532891657 ContentBox">Barrera de Entrada</span>
      </div>
     </div>
     <div id="WE7a0d7f9a9a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
      <div class="OESZ OESZ_DivContent OESZG_WE7a0d7f9a9a">
       <span class="OESZ OESZ_Text OESZG_WE7a0d7f9a9a ContentBox">Competencia</span>
      </div>
     </div>
     <div id="WE5e78f6232c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
      <div class="OESZ OESZ_DivContent OESZG_WE5e78f6232c">
       <span class="OESZ OESZ_Text OESZG_WE5e78f6232c ContentBox">Proveedores</span>
      </div>
     </div>
     <div id="WE96a92735e2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
      <div class="OESZ OESZ_DivContent OESZG_WE96a92735e2">
       <span class="OESZ OESZ_Text OESZG_WE96a92735e2 ContentBox">Sustituos</span>
      </div>
     </div>
     <div id="WEa80a9ec6c0" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default" style="z-index:7">
      <div class="OESZ OESZ_DivContent OESZG_WEa80a9ec6c0">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WE5adf08edaf" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE5adf08edaf">
           <span class="OESZ OESZ_Text OESZG_WE5adf08edaf ContentBox"><span style="font-family:Geneva, Arial, Helvetica, sans-serif;font-size:16px;">Blue Ocean Value Curve</span></span>
          </div>
         </div>
        </div>
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WE9c9923ab9c" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE9c9923ab9c">
           <canvas id="_canv_blueocean" width="450px" height="222px"></canvas>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEd06dccb1dc" class="BaseDiv RWidth OEWEPanel OESK_WEPanel_Default" style="z-index:20">
      <div class="OESZ OESZ_DivContent OESZG_WEd06dccb1dc">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignL OEVAlignT">
         <div id="WE3e60d57bab" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE3e60d57bab">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE45cc79d391" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE45cc79d391">
              <span class="OESZ OESZ_Text OESZG_WE45cc79d391 ContentBox">Customer Retention</span>
             </div>
            </div>
            <div id="WE6db4a8e9d1" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE6db4a8e9d1">
              <img src="../Images/convertionRate-WE07966ec71e.png" class="OESZ OESZ_Img OESZG_WE6db4a8e9d1" alt="" />
             </div>
            </div>
            <div id="WE758c502459" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE758c502459">
              <span class="OESZ OESZ_Text OESZG_WE758c502459 ContentBox">273770</span>
             </div>
            </div>
            <div id="WEc540f563bd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEc540f563bd">
              <span class="OESZ OESZ_Text OESZG_WEc540f563bd ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE21ace34b55" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WE21ace34b55">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE99b5d1fe3a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE99b5d1fe3a">
              <span class="OESZ OESZ_Text OESZG_WE99b5d1fe3a ContentBox">Margen Bruto</span>
             </div>
            </div>
            <div id="WE68c39c759c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE68c39c759c">
              <img src="../Images/money-WEbddd6bbafc.png" class="OESZ OESZ_Img OESZG_WE68c39c759c" alt="" />
             </div>
            </div>
            <div id="WE04c16bc5d2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE04c16bc5d2">
              <span class="OESZ OESZ_Text OESZG_WE04c16bc5d2 ContentBox">273770</span>
             </div>
            </div>
            <div id="WE25ced6883e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE25ced6883e">
              <span class="OESZ OESZ_Text OESZG_WE25ced6883e ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE7fa761925e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WE7fa761925e">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE9e46f15c80" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE9e46f15c80">
              <span class="OESZ OESZ_Text OESZG_WE9e46f15c80 ContentBox">Unique visitors</span>
             </div>
            </div>
            <div id="WE6a7fa9e482" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE6a7fa9e482">
              <img src="../Images/unique-visitor-WE19eb177755.png" class="OESZ OESZ_Img OESZG_WE6a7fa9e482" alt="" />
             </div>
            </div>
            <div id="WE60a1924efd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE60a1924efd">
              <span class="OESZ OESZ_Text OESZG_WE60a1924efd ContentBox">273770</span>
             </div>
            </div>
            <div id="WEe7d57d066f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEe7d57d066f">
              <span class="OESZ OESZ_Text OESZG_WEe7d57d066f ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE14d334bf85" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WE14d334bf85">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE99c09c94f7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE99c09c94f7">
              <span class="OESZ OESZ_Text OESZG_WE99c09c94f7 ContentBox">Revenue Growth</span>
             </div>
            </div>
            <div id="WE5948045488" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE5948045488">
              <img src="../Images/revenueGrow-WEc42d3cebbd.png" class="OESZ OESZ_Img OESZG_WE5948045488" alt="" />
             </div>
            </div>
            <div id="WE08fee0a358" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE08fee0a358">
              <span class="OESZ OESZ_Text OESZG_WE08fee0a358 ContentBox">273770</span>
             </div>
            </div>
            <div id="WE7c94692405" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE7c94692405">
              <span class="OESZ OESZ_Text OESZG_WE7c94692405 ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
            <div id="WE657c0d97da" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:5">
             <div class="OESZ OESZ_DivContent OESZG_WE657c0d97da">
              <div class="OESZ OESZ_Top OESZG_WE657c0d97da"></div>
              <div class="OESZ OESZ_Content OESZG_WE657c0d97da"></div>
              <div class="OESZ OESZ_Bottom OESZG_WE657c0d97da"></div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEb569643a9a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WEb569643a9a">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignC OEVAlignB">
             <div id="WE5930d142ed" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE5930d142ed">
               <span class="OESZ OESZ_Text OESZG_WE5930d142ed ContentBox">ROI: 40,0%</span>
              </div>
             </div>
            </div>
            <div class="OERelLine OEHAlignC OEVAlignB">
             <div id="WEa185576775" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
              <div class="OESZ OESZ_DivContent OESZG_WEa185576775">
               <canvas id="_canv_ROI" width="182px" height="182px"></canvas>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEcbb5795d82" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WEcbb5795d82">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE741ee3a49d" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE741ee3a49d">
              <span class="OESZ OESZ_Text OESZG_WE741ee3a49d ContentBox">Net Proffit</span>
             </div>
            </div>
            <div id="WEa8b4f92d63" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEa8b4f92d63">
              <img src="../Images/money-WEbddd6bbafc.png" class="OESZ OESZ_Img OESZG_WEa8b4f92d63" alt="" />
             </div>
            </div>
            <div id="WE467aba21ca" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE467aba21ca">
              <span class="OESZ OESZ_Text OESZG_WE467aba21ca ContentBox">273770</span>
             </div>
            </div>
            <div id="WE83bb0d9604" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE83bb0d9604">
              <span class="OESZ OESZ_Text OESZG_WE83bb0d9604 ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WEfe06e45750" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WEfe06e45750">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE602c732998" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE602c732998">
              <span class="OESZ OESZ_Text OESZG_WE602c732998 ContentBox">Capital Expedure</span>
             </div>
            </div>
            <div id="WEe03de83cb0" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEe03de83cb0">
              <img src="../Images/money-WEbddd6bbafc.png" class="OESZ OESZ_Img OESZG_WEe03de83cb0" alt="" />
             </div>
            </div>
            <div id="WE6767bb318c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE6767bb318c">
              <span class="OESZ OESZ_Text OESZG_WE6767bb318c ContentBox">273770</span>
             </div>
            </div>
            <div id="WE062ee5ab8d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WE062ee5ab8d">
              <span class="OESZ OESZ_Text OESZG_WE062ee5ab8d ContentBox"><span style="color:rgb(89, 89, 89);font-size:10px;">1355</span></span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="OERelLine OEHAlignL OEVAlignB">
         <div id="WEf6de101ed8" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:8">
          <div class="OESZ OESZ_DivContent OESZG_WEf6de101ed8">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE25f18c7be0" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE25f18c7be0">
              <span class="OESZ OESZ_Text OESZG_WE25f18c7be0 ContentBox">NPS</span>
             </div>
            </div>
            <div id="WE6abcf505f8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE6abcf505f8">
              <span class="OESZ OESZ_Text OESZG_WE6abcf505f8 ContentBox">273770</span>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div class="OERelLine OEHAlignL OEVAlignB">
         <div id="WEe4b4446546" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:9">
          <div class="OESZ OESZ_DivContent OESZG_WEe4b4446546">
           <div class="OECT OECT_Content OECTRel OEDynTag0">
            <div class="OERelLine OEHAlignC OEVAlignB">
             <div id="WE4134bc5296" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE4134bc5296">
               <span class="OESZ OESZ_Text OESZG_WE4134bc5296 ContentBox">Market Share</span>
              </div>
             </div>
            </div>
            <div class="OERelLine OEHAlignC OEVAlignB">
             <div id="WEb7a0ff5c7d" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
              <div class="OESZ OESZ_DivContent OESZG_WEb7a0ff5c7d">
               <canvas id="_canv_MarkShre" width="185px" height="160px"></canvas>
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
     <div id="WE3f92687843" class="BaseDiv RNone OEWECadre OESK_WECadre_Default" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WE3f92687843">
       <div class="OESZ OESZ_Top OESZG_WE3f92687843"></div>
       <div class="OESZ OESZ_Content OESZG_WE3f92687843"></div>
       <div class="OESZ OESZ_Bottom OESZG_WE3f92687843"></div>
      </div>
     </div>
     <div id="WEbd2fd89cc7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:19">
      <div class="OESZ OESZ_DivContent OESZG_WEbd2fd89cc7">
       <img src="../Images/G1-WEbd2fd89cc7.png" class="OESZ OESZ_Img OESZG_WEbd2fd89cc7" alt="" />
      </div>
     </div>

     <!-- Titulos Agregados -->

          <!--Otro Titulo -->

          <div id="WE921f9aa9c0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
      <div class="OESZ OESZ_DivContent OESZG_WE921f9aa9c0">
       <span class="OESZ OESZ_Text OESZG_WE921f9aa9c0 ContentBox"><span style="font-family:Geneva, Arial, Helvetica, sans-serif;font-size:16px;">Porter Impact Wheel</span></span>
      </div>
     </div>

     
     <div id="WEe7e2b1dff3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:23">
      <div class="OESZ OESZ_DivContent OESZG_WEe7e2b1dff3">
       <span class="OESZ OESZ_Text OESZG_WEe7e2b1dff3 ContentBox"><span style="font-family:Geneva, Arial, Helvetica, sans-serif;font-size:16px;">Busines Model Impact Wheel</span></span>
      </div>
     </div>
     

     <!-- fin titulos -->


    </div>
   </div>
  </div>


  <script type="text/javascript" src="../js/game/canvas.js"></script>
  <script type="text/javascript" src="../js/game/dashboard.js"></script>
  <script type="text/javascript" src="../js/finaldash.js"></script>


          <script type="text/javascript">
            ColocarCards();
          </script>>

 </body>
</html>