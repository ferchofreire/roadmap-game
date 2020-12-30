<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="pt">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <title>Administrador</title>
  <meta name="viewport" content="width=590px, initial-scale=1" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="Administrador.css?v=50491112400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491112400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"Administrador","Culture":"PT","LanguageCode":"PT","RelativePath":"","RenderMode":"Export","PageAssociatePath":"Administrador","EditorTexts":null};
  </script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/1.10.2.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491112400"></script>
  <script type="text/javascript">
   SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]
   
   function EliminarPartida(id){
   	var EP_conf = window.confirm("¿Seguro desea eliminar esta partida?");
   	if (EP_conf){
   		EnviarPartida('x', false, id);
   	}
   
   }
   
   function EliminarJugador(nomb){
   var EJ_Conf = window.confirm("¿Seguro desea eliminar a "+nomb+"?");
   	if (EJ_Conf){
   		 QuitarJugador(nomb);
   		_BtnGuardarCambios.style.visibility = "visible";
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
   	var CGA = window.confirm("¿Quiere desactivar \""+gr+"\"?, Se eliminarán todos los registros de jugadores y deberá volver a designar cartas.");
   	if (CGA){
   		 ActivarGrupo(id, 'off');
   		_BtnGuardarCambios.style.visibility = "visible";
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
   		break;
   		
   	}
   }
  </script><?php
  $partida = $_GET['id'];

if ($partida != ""){
	echo '<script type="text/javascript">var _phpid = '.$partida.';</script>';

	} else {
	
	header("location: /");
	
}



  ?>

  <script src="/Files/Other/numeral-min.js"></script>
  <script src="/Files/Other/locales/es-min.js"></script>
  
  <script>
  	numeral.locale('es');
  	CheckPoint = {desde:'00:00:00', hasta:'00:20:00'}
  </script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class="RWAuto" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}"><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WEb4d313da0b" class="BaseDiv RHeight OEWECadre OESK_WECadre_Default" style="z-index:2">
      <div class="OESZ OESZ_DivContent OESZG_WEb4d313da0b">
       <div class="OESZ OESZ_Top OESZG_WEb4d313da0b"></div>
       <div class="OESZ OESZ_Content OESZG_WEb4d313da0b"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEb4d313da0b"></div>
      </div>
     </div>
     <div id="WEb3fedc9296" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:28">
      <div class="OESZ OESZ_DivContent OESZG_WEb3fedc9296">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE1d9633bfbd" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WE1d9633bfbd">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WEbf5d890b61" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WEbf5d890b61">
             <div class="OESZ OESZ_Top OESZG_WEbf5d890b61"></div>
             <div class="OESZ OESZ_Content OESZG_WEbf5d890b61"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEbf5d890b61"></div>
            </div>
           </div>
           <div id="WE1891cf0f7c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE1891cf0f7c">
             <img src="WEFiles/Image/WEImage/icon_chess-WE1891cf0f7c.png" class="OESZ OESZ_Img OESZG_WE1891cf0f7c" alt="" />
            </div>
           </div>
           <div id="WE360d94acc1" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE360d94acc1">
             <span class="OESZ OESZ_Text OESZG_WE360d94acc1 ContentBox">Novo jogo:</span>
            </div>
           </div>
           <div id="WEf7de68ed4a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEf7de68ed4a">
             <span class="OESZ OESZ_Text OESZG_WEf7de68ed4a ContentBox">Nome:</span>
            </div>
           </div>
           <div id="WE7699c76cd5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE7699c76cd5">
             <input name="Partidas" type="text" placeholder="Nome" class="OESZ OESZ_TextBox OESZG_WE7699c76cd5 OEd OEDynTag0" />
            </div>
           </div>
           <div id="WE01567c4421" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE01567c4421">
             <span class="OESZ OESZ_Text OESZG_WE01567c4421 ContentBox">Data de início:</span>
            </div>
           </div>
           <div id="WEfcf7a47e6b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEfcf7a47e6b">
             <input name="Partidas" type="date" placeholder="12/07/2020" class="OESZ OESZ_TextBox OESZG_WEfcf7a47e6b OEDynTag0" />
            </div>
           </div>
           <div id="WE23c17902ef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE23c17902ef">
             <span class="OESZ OESZ_Text OESZG_WE23c17902ef ContentBox">Data final:</span>
            </div>
           </div>
           <div id="WEb7cc83619a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEb7cc83619a">
             <input name="Partidas" type="date" placeholder="12/07/2020" class="OESZ OESZ_TextBox OESZG_WEb7cc83619a OEDynTag0" />
            </div>
           </div>
           <div id="WE87c0ca7a80" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE87c0ca7a80">
             <span class="OESZ OESZ_Text OESZG_WE87c0ca7a80 ContentBox">Canvas</span>
            </div>
           </div>
           <div id="WEe2bd6d3a0a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:20">
            <div class="OESZ OESZ_DivContent OESZG_WEe2bd6d3a0a">
             <a href="javascript:CanvasSelectF(3)">
              <img src="WEFiles/Image/WEImage/C_3-WEe2bd6d3a0a.png" class="OESZ OESZ_Img OESZG_WEe2bd6d3a0a" alt="" />
             </a>
            </div>
           </div>
           <div id="WE66ca06422e" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE66ca06422e">
             <a href="javascript:CanvasSelectF(1)">
              <img src="WEFiles/Image/WEImage/C1-WE66ca06422e.png" class="OESZ OESZ_Img OESZG_WE66ca06422e" alt="" />
             </a>
            </div>
           </div>
           <div id="WEd9e91999b4" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WEd9e91999b4">
             <a href="javascript:CanvasSelectF(2)">
              <img src="WEFiles/Image/WEImage/c_2-WEd9e91999b4.png" class="OESZ OESZ_Img OESZG_WEd9e91999b4" alt="" />
             </a>
            </div>
           </div>
           <div id="WE83c786dd56" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE83c786dd56">
             <span class="OESZ OESZ_Text OESZG_WE83c786dd56 ContentBox">Última Sprint <br /></span>
            </div>
           </div>
           <div id="WEd4349317cc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEd4349317cc">
             <span class="OESZ OESZ_Text OESZG_WEd4349317cc ContentBox">Estado:</span>
            </div>
           </div>
           <div id="WE1b7b9f94ec" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE1b7b9f94ec">
             <span class="OESZ OESZ_Text OESZG_WE1b7b9f94ec ContentBox">Língua<br /></span>
            </div>
           </div>
           <div id="WE0d6a054379" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WE0d6a054379">
             <select name="Partidas" class="OESZ OESZ_ListBox OESZG_WE0d6a054379 OEDynTag0">
              <option value="1" class="OESZ OESZ_Options OESZG_WE0d6a054379">Sprint 1</option>
              <option value="2" class="OESZ OESZ_Options OESZG_WE0d6a054379">Sprint 2</option>
              <option value="3" class="OESZ OESZ_Options OESZG_WE0d6a054379">Sprint 3</option>
              <option value="4" class="OESZ OESZ_Options OESZG_WE0d6a054379">Sprint 4</option>
              <option value="5" class="OESZ OESZ_Options OESZG_WE0d6a054379">Sprint 5</option>
              <option value="6" class="OESZ OESZ_Options OESZG_WE0d6a054379" selected="selected">Sprint 6</option>
             </select>
            </div>
           </div>
           <div id="WE13699b8732" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE13699b8732">
             <select name="Partidas" class="OESZ OESZ_ListBox OESZG_WE13699b8732 OEDynTag0">
              <option value="on" class="OESZ OESZ_Options OESZG_WE13699b8732" selected="selected">Ativo</option>
              <option value="off" class="OESZ OESZ_Options OESZG_WE13699b8732">Inactivo</option>
             </select>
            </div>
           </div>
           <div id="WE4769e1dae3" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WE4769e1dae3">
             <select name="Partidas" class="OESZ OESZ_ListBox OESZG_WE4769e1dae3 OEDynTag0">
              <option value="es" class="OESZ OESZ_Options OESZG_WE4769e1dae3" selected="selected">espanhol</option>
              <option value="en" class="OESZ OESZ_Options OESZG_WE4769e1dae3">Inglês</option>
              <option value="pr" class="OESZ OESZ_Options OESZG_WE4769e1dae3">Português</option>
             </select>
            </div>
           </div>
           <div id="WEb18e17e7af" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WEb18e17e7af">
             <a href="javascript:AgregarPartida()">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEdb410ebd1d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEdb410ebd1d">
                 <img src="WEFiles/Image/WEImage/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WEdb410ebd1d" alt="" />
                </div>
               </div>
               <div id="WEdcf5597dcc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEdcf5597dcc">
                 <span class="OESZ OESZ_Text OESZG_WEdcf5597dcc ContentBox">Salve</span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEc6cfc950fe" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEc6cfc950fe">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE3f26fb933c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE3f26fb933c">
             <div class="OESZ OESZ_Top OESZG_WE3f26fb933c"></div>
             <div class="OESZ OESZ_Content OESZG_WE3f26fb933c"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE3f26fb933c"></div>
            </div>
           </div>
           <div id="WE9f282c0bda" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE9f282c0bda">
             <span class="OESZ OESZ_Text OESZG_WE9f282c0bda ContentBox">Atribuir cartões</span>
            </div>
           </div>
           <div id="WE665bd1efdf" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE665bd1efdf">
             <img src="Files/Image/icon_cards.png" class="OESZ OESZ_Img OESZG_WE665bd1efdf" alt="" />
            </div>
           </div>
           <div id="WEae3967d6f3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
            <div class="OESZ OESZ_DivContent OESZG_WEae3967d6f3">
             <span class="OESZ OESZ_Text OESZG_WEae3967d6f3 ContentBox">&nbsp;- 1 -&nbsp;</span>
            </div>
           </div>
           <div id="WE72e4a061fd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:23">
            <div class="OESZ OESZ_DivContent OESZG_WE72e4a061fd">
             <span class="OESZ OESZ_Text OESZG_WE72e4a061fd ContentBox">&nbsp;- 2 -&nbsp;</span>
            </div>
           </div>
           <div id="WE7eb160fe33" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
            <div class="OESZ OESZ_DivContent OESZG_WE7eb160fe33">
             <span class="OESZ OESZ_Text OESZG_WE7eb160fe33 ContentBox">&nbsp;- 3 -&nbsp;</span>
            </div>
           </div>
           <div id="WE1cc95a2ceb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:25">
            <div class="OESZ OESZ_DivContent OESZG_WE1cc95a2ceb">
             <span class="OESZ OESZ_Text OESZG_WE1cc95a2ceb ContentBox">&nbsp;- 4 -&nbsp;</span>
            </div>
           </div>
           <div id="WE5568a49356" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:26">
            <div class="OESZ OESZ_DivContent OESZG_WE5568a49356">
             <span class="OESZ OESZ_Text OESZG_WE5568a49356 ContentBox">&nbsp;- 5 -&nbsp;</span>
            </div>
           </div>
           <div id="WE3dcebbb03c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:27">
            <div class="OESZ OESZ_DivContent OESZG_WE3dcebbb03c">
             <span class="OESZ OESZ_Text OESZG_WE3dcebbb03c ContentBox">&nbsp;- 6 -&nbsp;</span>
            </div>
           </div>
           <div id="WE255587e12e" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE255587e12e">
             <div class="OESZ OESZ_Top OESZG_WE255587e12e"></div>
             <div class="OESZ OESZ_Content OESZG_WE255587e12e"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE255587e12e"></div>
            </div>
           </div>
           <div id="WEe6c569079f" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEe6c569079f">
             <div class="OESZ OESZ_Top OESZG_WEe6c569079f"></div>
             <div class="OESZ OESZ_Content OESZG_WEe6c569079f"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEe6c569079f"></div>
            </div>
           </div>
           <div id="WE660ddd4471" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE660ddd4471">
             <div class="OESZ OESZ_Top OESZG_WE660ddd4471"></div>
             <div class="OESZ OESZ_Content OESZG_WE660ddd4471"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE660ddd4471"></div>
            </div>
           </div>
           <div id="WE5dfff2ac3c" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE5dfff2ac3c">
             <div class="OESZ OESZ_Top OESZG_WE5dfff2ac3c"></div>
             <div class="OESZ OESZ_Content OESZG_WE5dfff2ac3c"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE5dfff2ac3c"></div>
            </div>
           </div>
           <div id="WEec2863f358" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEec2863f358">
             <div class="OESZ OESZ_Top OESZG_WEec2863f358"></div>
             <div class="OESZ OESZ_Content OESZG_WEec2863f358"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEec2863f358"></div>
            </div>
           </div>
           <div id="WEae8b5eb022" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WEae8b5eb022">
             <div class="OESZ OESZ_Top OESZG_WEae8b5eb022"></div>
             <div class="OESZ OESZ_Content OESZG_WEae8b5eb022"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEae8b5eb022"></div>
            </div>
           </div>
           <div id="WE508a013ef8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE508a013ef8">
             <span class="OESZ OESZ_Text OESZG_WE508a013ef8 ContentBox">Sprints:</span>
            </div>
           </div>
           <div id="WEbc46191033" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEbc46191033">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WEbc46191033 OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WE96a16c59db" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE96a16c59db">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WE96a16c59db OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WEb5a673542d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WEb5a673542d">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WEb5a673542d OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WE2a153c8824" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE2a153c8824">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WE2a153c8824 OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WEe3a3c88395" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WEe3a3c88395">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WEe3a3c88395 OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WEc4feede810" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEc4feede810">
             <input name="TotCart" type="text" class="OESZ OESZ_TextBox OESZG_WEc4feede810 OEDynTag0" value="2" />
            </div>
           </div>
           <div id="WE350c6878e2" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE350c6878e2">
             <div class="OESZ OESZ_Top OESZG_WE350c6878e2"></div>
             <div class="OESZ OESZ_Content OESZG_WE350c6878e2"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE350c6878e2"></div>
            </div>
           </div>
           <div id="WEe2a87dfa6c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:21">
            <div class="OESZ OESZ_DivContent OESZG_WEe2a87dfa6c">
             <span class="OESZ OESZ_Text OESZG_WEe2a87dfa6c ContentBox">Total de cartas:</span>
            </div>
           </div>
           <div id="WE0f4a9da1ee" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:28">
            <div class="OESZ OESZ_DivContent OESZG_WE0f4a9da1ee">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WE0f4a9da1ee OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WE3a92a914dd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:29">
            <div class="OESZ OESZ_DivContent OESZG_WE3a92a914dd">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WE3a92a914dd OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WE3cf92512c0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:30">
            <div class="OESZ OESZ_DivContent OESZG_WE3cf92512c0">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WE3cf92512c0 OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WEcb8b11918d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:31">
            <div class="OESZ OESZ_DivContent OESZG_WEcb8b11918d">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WEcb8b11918d OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WE0f6ebcc495" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:32">
            <div class="OESZ OESZ_DivContent OESZG_WE0f6ebcc495">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WE0f6ebcc495 OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WE5f49a24e45" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:33">
            <div class="OESZ OESZ_DivContent OESZG_WE5f49a24e45">
             <input name="movs" type="text" class="OESZ OESZ_TextBox OESZG_WE5f49a24e45 OEDynTag0" value="4" />
            </div>
           </div>
           <div id="WE0c9cab51dd" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE0c9cab51dd">
             <div class="OESZ OESZ_Top OESZG_WE0c9cab51dd"></div>
             <div class="OESZ OESZ_Content OESZG_WE0c9cab51dd"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE0c9cab51dd"></div>
            </div>
           </div>
           <div id="WE3772701196" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
            <div class="OESZ OESZ_DivContent OESZG_WE3772701196">
             <span class="OESZ OESZ_Text OESZG_WE3772701196 ContentBox">Movimentos:</span>
            </div>
           </div>
           <div id="WE19b79f106b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:34">
            <div class="OESZ OESZ_DivContent OESZG_WE19b79f106b">
             <span class="OESZ OESZ_Text OESZG_WE19b79f106b ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WE7a08a0797f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:35">
            <div class="OESZ OESZ_DivContent OESZG_WE7a08a0797f">
             <span class="OESZ OESZ_Text OESZG_WE7a08a0797f ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WE886d9d5223" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:36">
            <div class="OESZ OESZ_DivContent OESZG_WE886d9d5223">
             <span class="OESZ OESZ_Text OESZG_WE886d9d5223 ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WEe795284d89" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:37">
            <div class="OESZ OESZ_DivContent OESZG_WEe795284d89">
             <span class="OESZ OESZ_Text OESZG_WEe795284d89 ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WEc5e8fdb403" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:38">
            <div class="OESZ OESZ_DivContent OESZG_WEc5e8fdb403">
             <span class="OESZ OESZ_Text OESZG_WEc5e8fdb403 ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WE9a3d46dc8f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:39">
            <div class="OESZ OESZ_DivContent OESZG_WE9a3d46dc8f">
             <span class="OESZ OESZ_Text OESZG_WE9a3d46dc8f ContentBox">--<br /></span>
            </div>
           </div>
           <div id="WEee71285302" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WEee71285302">
             <a href="javascript:DesignarCartas()">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEe631ac5a73" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEe631ac5a73">
                 <img src="WEFiles/Image/WEImage/icon_design-WEe631ac5a73.png" class="OESZ OESZ_Img OESZG_WEe631ac5a73" alt="" />
                </div>
               </div>
               <div id="WE94e772e8f2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE94e772e8f2">
                 <span class="OESZ OESZ_Text OESZG_WE94e772e8f2 ContentBox">Atribuir</span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEd7ff5e23d3" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEd7ff5e23d3">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE52921a2048" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:27">
            <div class="OESZ OESZ_DivContent OESZG_WE52921a2048">
             <div class="OESZ OESZ_Top OESZG_WE52921a2048"></div>
             <div class="OESZ OESZ_Content OESZG_WE52921a2048"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE52921a2048"></div>
            </div>
           </div>
           <div id="WE1c3e53985e" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:26">
            <div class="OESZ OESZ_DivContent OESZG_WE1c3e53985e">
             <span class="OESZ OESZ_Text OESZG_WE1c3e53985e ContentBox">Configurações do grupo (geral)</span>
            </div>
           </div>
           <div id="WE48734d5507" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE48734d5507">
             <span class="OESZ OESZ_Text OESZG_WE48734d5507 ContentBox">Configuração de Grupos</span>
            </div>
           </div>
           <div id="WE151f4b846e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE151f4b846e">
             <span class="OESZ OESZ_Text OESZG_WE151f4b846e ContentBox">Nome:</span>
            </div>
           </div>
           <div id="WE96f585b897" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE96f585b897">
             <span class="OESZ OESZ_Text OESZG_WE96f585b897 ContentBox">Password</span>
            </div>
           </div>
           <div id="WE89176bd51f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE89176bd51f">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE89176bd51f OEDynTag0" />
            </div>
           </div>
           <div id="WEee30bb47d2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEee30bb47d2">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEee30bb47d2 OEDynTag0" />
            </div>
           </div>
           <div id="WE5f1348dc40" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WE5f1348dc40">
             <span class="OESZ OESZ_Text OESZG_WE5f1348dc40 ContentBox">Grupo 1</span>
            </div>
           </div>
           <div id="WE92f87f3446" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE92f87f3446">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE92f87f3446 OEDynTag0" />
            </div>
           </div>
           <div id="WEb9825cf517" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEb9825cf517">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEb9825cf517 OEDynTag0" />
            </div>
           </div>
           <div id="WE09a7704028" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:20">
            <div class="OESZ OESZ_DivContent OESZG_WE09a7704028">
             <span class="OESZ OESZ_Text OESZG_WE09a7704028 ContentBox">Grupo 2</span>
            </div>
           </div>
           <div id="WE259d66d5b1" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE259d66d5b1">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE259d66d5b1 OEDynTag0" />
            </div>
           </div>
           <div id="WE0235a57932" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE0235a57932">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE0235a57932 OEDynTag0" />
            </div>
           </div>
           <div id="WEab67bed15e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:21">
            <div class="OESZ OESZ_DivContent OESZG_WEab67bed15e">
             <span class="OESZ OESZ_Text OESZG_WEab67bed15e ContentBox">Grupo 3</span>
            </div>
           </div>
           <div id="WEc231b8e366" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEc231b8e366">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEc231b8e366 OEDynTag0" />
            </div>
           </div>
           <div id="WEaf9b052fc9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEaf9b052fc9">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEaf9b052fc9 OEDynTag0" />
            </div>
           </div>
           <div id="WEfdf96c5dd4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:22">
            <div class="OESZ OESZ_DivContent OESZG_WEfdf96c5dd4">
             <span class="OESZ OESZ_Text OESZG_WEfdf96c5dd4 ContentBox">Grupo 4</span>
            </div>
           </div>
           <div id="WE10624971db" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE10624971db">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE10624971db OEDynTag0" />
            </div>
           </div>
           <div id="WE7677ab1aeb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE7677ab1aeb">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE7677ab1aeb OEDynTag0" />
            </div>
           </div>
           <div id="WEfb92e1cec8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:23">
            <div class="OESZ OESZ_DivContent OESZG_WEfb92e1cec8">
             <span class="OESZ OESZ_Text OESZG_WEfb92e1cec8 ContentBox">Grupo 5</span>
            </div>
           </div>
           <div id="WEcaa3d279e7" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WEcaa3d279e7">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEcaa3d279e7 OEDynTag0" />
            </div>
           </div>
           <div id="WE04ceb0c1ba" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE04ceb0c1ba">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE04ceb0c1ba OEDynTag0" />
            </div>
           </div>
           <div id="WEa3afa22ef1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:24">
            <div class="OESZ OESZ_DivContent OESZG_WEa3afa22ef1">
             <span class="OESZ OESZ_Text OESZG_WEa3afa22ef1 ContentBox">Grupo 6</span>
            </div>
           </div>
           <div id="WE2d15836cd3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE2d15836cd3">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WE2d15836cd3 OEDynTag0" />
            </div>
           </div>
           <div id="WEecb96d04ef" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEecb96d04ef">
             <input name="Grups" type="text" class="OESZ OESZ_TextBox OESZG_WEecb96d04ef OEDynTag0" />
            </div>
           </div>
           <div id="WE7d804726ce" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:25">
            <div class="OESZ OESZ_DivContent OESZG_WE7d804726ce">
             <span class="OESZ OESZ_Text OESZG_WE7d804726ce ContentBox">Grupo 7</span>
            </div>
           </div>
           <div id="WE158637bacc" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo OEGd" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE158637bacc">
             <a href="javascript:ActualizarGrupos()">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE54322763d4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE54322763d4">
                 <span class="OESZ OESZ_Text OESZG_WE54322763d4 ContentBox">Salve</span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE24c55489b7" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE24c55489b7">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WEbe96e98342" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WEbe96e98342">
             <div class="OESZ OESZ_Top OESZG_WEbe96e98342"></div>
             <div class="OESZ OESZ_Content OESZG_WEbe96e98342"></div>
             <div class="OESZ OESZ_Bottom OESZG_WEbe96e98342"></div>
            </div>
           </div>
           <div id="WE42b4df3d62" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE42b4df3d62">
             <span class="OESZ OESZ_Text OESZG_WE42b4df3d62 ContentBox">Carregar Players Excel</span>
            </div>
           </div>
           <div id="WEe7d1fffd0c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEe7d1fffd0c">
             <img src="Files/Image/icon_excel.png" class="OESZ OESZ_Img OESZG_WEe7d1fffd0c" alt="" />
            </div>
           </div>
           <div id="WEf3667509ba" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEf3667509ba">
             <span class="OESZ OESZ_Text OESZG_WEf3667509ba ContentBox">Tipo de carga:</span>
            </div>
           </div>
           <div id="WEb012289847" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WEb012289847">
             <select name="WEb012289847" class="OESZ OESZ_ListBox OESZG_WEb012289847 OEDynTag0">
              <option value="0" class="OESZ OESZ_Options OESZG_WEb012289847">Concatenar / juntar</option>
              <option value="1" class="OESZ OESZ_Options OESZG_WEb012289847">Excluir pré-existente</option>
             </select>
            </div>
           </div>
           <div id="WE886a9c7fc9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE886a9c7fc9">
             <span class="OESZ OESZ_Text OESZG_WE886a9c7fc9 ContentBox">Arquivo Excel</span>
            </div>
           </div>
           <div id="WE6c3d4822a2" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE6c3d4822a2">
             <input name="file" class="OESZ OESZ_InputFile OESZG_WE6c3d4822a2" type="file" />
            </div>
           </div>
           <div id="WEcdb9b3b1af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEcdb9b3b1af">
             <span class="OESZ OESZ_Text OESZG_WEcdb9b3b1af ContentBox">* Apenas arquivos xlsx&nbsp;</span>
            </div>
           </div>
           <div id="WEe021e47188" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEe021e47188">
             <a href="jugadores.xlsx">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE91987d108b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE91987d108b">
                 <img src="WEFiles/Image/WEImage/icon_down-WE91987d108b.png" class="OESZ OESZ_Img OESZG_WE91987d108b" alt="" />
                </div>
               </div>
               <div id="WE1a36007cc3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE1a36007cc3">
                 <span class="OESZ OESZ_Text OESZG_WE1a36007cc3 ContentBox">Baixar modelo <br /></span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
           <div id="WEeca5c85a71" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEeca5c85a71">
             <a href="javascript:ProcesarXLSX()">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEa0090f8b92" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEa0090f8b92">
                 <img src="WEFiles/Image/WEImage/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WEa0090f8b92" alt="" />
                </div>
               </div>
               <div id="WEd61057e61d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEd61057e61d">
                 <span class="OESZ OESZ_Text OESZG_WEd61057e61d ContentBox">Carga</span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEb87416ff43" class="BaseDiv RBoth OEWECodeBlock OESK_WECodeBlock_Default OECenterAB" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEb87416ff43">
          <style>.lds-circle {
            display: inline-block;
          	
            transform: translateZ(1px);
          }
          .lds-circle > div {
          	
            display: inline-block;
            width: 64px;
            height: 64px;
            margin: 8px;
          	
            border-radius: 50%;
          	
            background: #fff;
            animation: lds-circle 2.4s cubic-bezier(0, 0.2, 0.8, 1) infinite;
          }
          @keyframes lds-circle {
            0%, 100% {
              animation-timing-function: cubic-bezier(0.5, 0, 1, 0.5);
            }
            0% {
              transform: rotateY(0deg);
            }
            50% {
              transform: rotateY(1800deg);
              animation-timing-function: cubic-bezier(0, 0.5, 0.5, 1);
            }
            100% {
              transform: rotateY(3600deg);
            }
          }
          </style>
          <div class="lds-circle" ><div style="background-image: url('Files/Image/charg.jpg');background-size:cover;"></div></div>
         </div>
        </div>
        <div id="WE5f2fd50e89" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE5f2fd50e89">
          <a href="javascript:Panel(0)">
           <img src="Files/Image/delete_big.png" class="OESZ OESZ_Img OESZG_WE5f2fd50e89" alt="" />
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE19cd5b5fbc" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WE19cd5b5fbc">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/logo-WE19cd5b5fbc-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/logo-WE19cd5b5fbc.png" class="OESZ OESZ_Img OESZG_WE19cd5b5fbc" alt="" />
       </picture>
      </div>
     </div>
     <div id="WEb41c8f437a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:27">
      <div class="OESZ OESZ_DivContent OESZG_WEb41c8f437a">
       <span class="OESZ OESZ_Text OESZG_WEb41c8f437a ContentBox">0:00:00</span>
      </div>
     </div>
     <div id="WE6568bb17b7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:30">
      <div class="OESZ OESZ_DivContent OESZG_WE6568bb17b7">
       <a href="../logout">
        <img src="WEFiles/Image/WEImage/logout-WE6568bb17b7.png" class="OESZ OESZ_Img OESZG_WE6568bb17b7" alt="" />
       </a>
      </div>
     </div>
     <div id="WEb71bde669c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:29">
      <div class="OESZ OESZ_DivContent OESZG_WEb71bde669c">
       <a href="javascript:passwch(0)">
        <img src="WEFiles/Image/WEImage/icon_conf-WEb71bde669c.png" class="OESZ OESZ_Img OESZG_WEb71bde669c" alt="" />
       </a>
      </div>
     </div>
     <div id="WE716559bf2a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:26">
      <div class="OESZ OESZ_DivContent OESZG_WE716559bf2a">
       <img src="WEFiles/Image/WEImage/icon_chrono-WE716559bf2a.png" class="OESZ OESZ_Img OESZG_WE716559bf2a" alt="" />
      </div>
     </div>
     <div id="WEdfff164ee5" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:31">
      <div class="OESZ OESZ_DivContent OESZG_WEdfff164ee5">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEe11ae15705" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEe11ae15705">
          <span class="OESZ OESZ_Text OESZG_WEe11ae15705 ContentBox">senha atual<br /></span>
         </div>
        </div>
        <div id="WE740ee6cfe5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE740ee6cfe5">
          <input name="chngpass" type="password" class="OESZ OESZ_TextBox OESZG_WE740ee6cfe5 OEDynTag0" />
         </div>
        </div>
        <div id="WE772f1d3a79" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE772f1d3a79">
          <span class="OESZ OESZ_Text OESZG_WE772f1d3a79 ContentBox">Nova senha<br /></span>
         </div>
        </div>
        <div id="WEfa8475e467" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEfa8475e467">
          <input name="chngpass" type="password" class="OESZ OESZ_TextBox OESZG_WEfa8475e467 OEDynTag0" />
         </div>
        </div>
        <div id="WE89fab7a02a" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE89fab7a02a">
          <a href="javascript:passwch(1)">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE0fa3514290" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE0fa3514290">
              <img src="WEFiles/Image/WEImage/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WE0fa3514290" alt="" />
             </div>
            </div>
            <div id="WEa547139701" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEa547139701">
              <span class="OESZ OESZ_Text OESZG_WEa547139701 ContentBox">Salve</span>
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEa028ed706b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
      <div class="OESZ OESZ_DivContent OESZG_WEa028ed706b">
       <span class="OESZ OESZ_Text OESZG_WEa028ed706b ContentBox">Gerenciador de jogo</span>
      </div>
     </div>
     <div id="WE392d7fae1c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:19">
      <div class="OESZ OESZ_DivContent OESZG_WE392d7fae1c">
       <span class="OESZ OESZ_Text OESZG_WE392d7fae1c ContentBox">Jogos</span>
      </div>
     </div>
     <div id="WEc616e08e40" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
      <div class="OESZ OESZ_DivContent OESZG_WEc616e08e40">
       <span class="OESZ OESZ_Text OESZG_WEc616e08e40 ContentBox">Grupos ativos</span>
      </div>
     </div>
     <div id="WE699ecc8d01" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:21">
      <div class="OESZ OESZ_DivContent OESZG_WE699ecc8d01">
       <img src="WEFiles/Image/WEImage/icon_chess-WE699ecc8d01.png" class="OESZ OESZ_Img OESZG_WE699ecc8d01" alt="" />
      </div>
     </div>
     <div id="WE937056991c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:22">
      <div class="OESZ OESZ_DivContent OESZG_WE937056991c">
       <img src="WEFiles/Image/WEImage/icon_grupos-WE937056991c.png" class="OESZ OESZ_Img OESZG_WE937056991c" alt="" />
      </div>
     </div>
     <div id="WEedf83e3863" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:7">
      <div class="OESZ OESZ_DivContent OESZG_WEedf83e3863">
       <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
        <div id="WEb09d3ad145" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEb09d3ad145">
          <div class="OECT OECT_Content OECTRel OEDynTag0">
           <div class="OERelLine OEHAlignC OEVAlignT">
            <div id="WE98d8f8898e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE98d8f8898e">
              <a href="javascript:CambioPartida(1);">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WEc233f5d892" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:7">
                 <div class="OESZ OESZ_DivContent OESZG_WEc233f5d892">
                  <img src="WEFiles/Image/WEImage/delete_big-WEc233f5d892.png" class="OESZ OESZ_Img OESZG_WEc233f5d892" alt="" />
                 </div>
                </div>
                <div id="WE123c1f5899" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:6">
                 <div class="OESZ OESZ_DivContent OESZG_WE123c1f5899">
                  <img src="WEFiles/Image/WEImage/icon_on-WE123c1f5899.png" class="OESZ OESZ_Img OESZG_WE123c1f5899" alt="" />
                 </div>
                </div>
                <div id="WEbb824f9f32" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WEbb824f9f32">
                  <span class="OESZ OESZ_Text OESZG_WEbb824f9f32 ContentBox">Desde: 23/07/2020</span>
                 </div>
                </div>
                <div id="WE6f9a39ccee" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE6f9a39ccee">
                  <span class="OESZ OESZ_Text OESZG_WE6f9a39ccee ContentBox">Partida demo</span>
                 </div>
                </div>
                <div id="WEedfc04245d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
                 <div class="OESZ OESZ_DivContent OESZG_WEedfc04245d">
                  <span class="OESZ OESZ_Text OESZG_WEedfc04245d ContentBox">6<br /></span>
                 </div>
                </div>
                <div id="WE1906526d4e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WE1906526d4e">
                  <span class="OESZ OESZ_Text OESZG_WE1906526d4e ContentBox">Max. Sprints:</span>
                 </div>
                </div>
                <div id="WEfa6ff4fb4b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
                 <div class="OESZ OESZ_DivContent OESZG_WEfa6ff4fb4b">
                  <span class="OESZ OESZ_Text OESZG_WEfa6ff4fb4b ContentBox">Hasta: 23/07/2020</span>
                 </div>
                </div>
               </div>
              </a>
             </div>
            </div><div id="WE4e4fc4f76c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE4e4fc4f76c">
              <a href="javascript:alert('Test click partida');">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WEfce8160f10" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:5">
                 <div class="OESZ OESZ_DivContent OESZG_WEfce8160f10">
                  <a href="javascript:EliminarPartida()">
                   <img src="WEFiles/Image/WEImage/delete_big-WEfce8160f10.png" class="OESZ OESZ_Img OESZG_WEfce8160f10" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEc9446d2cb9" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WEc9446d2cb9">
                  <a href="javascript:ActivarPartida()">
                   <img src="WEFiles/Image/WEImage/icon_off-WEc9446d2cb9.png" class="OESZ OESZ_Img OESZG_WEc9446d2cb9" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEedbff9d85f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WEedbff9d85f">
                  <span class="OESZ OESZ_Text OESZG_WEedbff9d85f ContentBox">Desde: 23/07/2020</span>
                 </div>
                </div>
                <div id="WE9db4469a0c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE9db4469a0c">
                  <span class="OESZ OESZ_Text OESZG_WE9db4469a0c ContentBox">Partida ya Jugada</span>
                 </div>
                </div>
                <div id="WEe4f0c7be66" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
                 <div class="OESZ OESZ_DivContent OESZG_WEe4f0c7be66">
                  <span class="OESZ OESZ_Text OESZG_WEe4f0c7be66 ContentBox">Hasta: 23/07/2020</span>
                 </div>
                </div>
               </div>
              </a>
             </div>
            </div><div id="WEabc93b9796" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4">
             <div class="OESZ OESZ_DivContent OESZG_WEabc93b9796">
              <a href="javascript:alert('Test click partida');">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE198c28f5b2" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:5">
                 <div class="OESZ OESZ_DivContent OESZG_WE198c28f5b2">
                  <a href="javascript:EliminarPartida()">
                   <img src="WEFiles/Image/WEImage/delete_big-WE198c28f5b2.png" class="OESZ OESZ_Img OESZG_WE198c28f5b2" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE2f2606b187" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WE2f2606b187">
                  <a href="javascript:ActivarPartida()">
                   <img src="WEFiles/Image/WEImage/icon_off-WE2f2606b187.png" class="OESZ OESZ_Img OESZG_WE2f2606b187" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE770abce5b8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE770abce5b8">
                  <span class="OESZ OESZ_Text OESZG_WE770abce5b8 ContentBox">Desde: 23/07/2020</span>
                 </div>
                </div>
                <div id="WE2e8c6198a1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE2e8c6198a1">
                  <span class="OESZ OESZ_Text OESZG_WE2e8c6198a1 ContentBox">Partida ya Jugada</span>
                 </div>
                </div>
                <div id="WE30439de721" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
                 <div class="OESZ OESZ_DivContent OESZG_WE30439de721">
                  <span class="OESZ OESZ_Text OESZG_WE30439de721 ContentBox">Hasta: 23/07/2020</span>
                 </div>
                </div>
               </div>
              </a>
             </div>
            </div><div id="WE01559a978f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE01559a978f">
              <a href="javascript:alert('Test click partida');">
               <div class="OECT OECT_Content OECTAbs OEDynTag0">
                <div id="WE58afcb3627" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:5">
                 <div class="OESZ OESZ_DivContent OESZG_WE58afcb3627">
                  <a href="javascript:EliminarPartida()">
                   <img src="WEFiles/Image/WEImage/delete_big-WE58afcb3627.png" class="OESZ OESZ_Img OESZG_WE58afcb3627" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEd8f777bc18" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WEd8f777bc18">
                  <a href="javascript:ActivarPartida()">
                   <img src="WEFiles/Image/WEImage/icon_off-WEd8f777bc18.png" class="OESZ OESZ_Img OESZG_WEd8f777bc18" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE7846aef76a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE7846aef76a">
                  <span class="OESZ OESZ_Text OESZG_WE7846aef76a ContentBox">Desde: 23/07/2020</span>
                 </div>
                </div>
                <div id="WEa3049d9cfe" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEa3049d9cfe">
                  <span class="OESZ OESZ_Text OESZG_WEa3049d9cfe ContentBox">Partida ya Jugada</span>
                 </div>
                </div>
                <div id="WE9bbd29a672" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
                 <div class="OESZ OESZ_DivContent OESZG_WE9bbd29a672">
                  <span class="OESZ OESZ_Text OESZG_WE9bbd29a672 ContentBox">Hasta: 23/07/2020</span>
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
     <div id="WE19a713c7d5" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default" style="z-index:9">
      <div class="OESZ OESZ_DivContent OESZG_WE19a713c7d5">
       <div class="OECT OECT_Content OECTRel OEDynTag0" style="overflow:hidden">
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WEf132d9e24b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo OEGd" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEf132d9e24b">
           <a href="javascript:GrupoSelecto=0 ;ImprimirJugadores();">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE5cd2b5baed" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE5cd2b5baed">
               <img src="WEFiles/Image/WEImage/icon_on-WE5cd2b5baed.png" class="OESZ OESZ_Img OESZG_WE5cd2b5baed" alt="" />
              </div>
             </div>
             <div id="WE281ef99d4d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
              <div class="OESZ OESZ_DivContent OESZG_WE281ef99d4d">
               <span class="OESZ OESZ_Text OESZG_WE281ef99d4d ContentBox">Grupo A (5)</span>
              </div>
             </div>
             <div id="WE2c53145f95" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
              <div class="OESZ OESZ_DivContent OESZG_WE2c53145f95">
               <span class="OESZ OESZ_Text OESZG_WE2c53145f95 ContentBox">Sprint: 1 - Puntos: 500</span>
              </div>
             </div>
             <div id="WEbfb7b2585e" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:4">
              <div class="OESZ OESZ_DivContent OESZG_WEbfb7b2585e">
               <a href="http://../finaldash.php?g=1">
                <img src="WEFiles/Image/WEImage/go_icon-WEbfb7b2585e.png" class="OESZ OESZ_Img OESZG_WEbfb7b2585e" alt="" />
               </a>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WE97997a5457" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
          <div class="OESZ OESZ_DivContent OESZG_WE97997a5457">
           <a href="javascript:GrupoSelecto=1 ;";>
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE78a8524a2f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE78a8524a2f">
               <img src="WEFiles/Image/WEImage/icon_off-WE78a8524a2f.png" class="OESZ OESZ_Img OESZG_WE78a8524a2f" alt="" />
              </div>
             </div>
             <div id="WE1929716113" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
              <div class="OESZ OESZ_DivContent OESZG_WE1929716113">
               <span class="OESZ OESZ_Text OESZG_WE1929716113 ContentBox">Grupo B</span>
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
     <div id="WE8afc458956" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4">
      <div class="OESZ OESZ_DivContent OESZG_WE8afc458956">
       <a href="javascript:Panel(1)">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WEab3d9c60b6" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEab3d9c60b6">
           <img src="WEFiles/Image/WEImage/icon_chess-WEab3d9c60b6.png" class="OESZ OESZ_Img OESZG_WEab3d9c60b6" alt="" />
          </div>
         </div>
         <div id="WE85029812fa" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE85029812fa">
           <span class="OESZ OESZ_Text OESZG_WE85029812fa ContentBox">Novo jogo</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEfcd650b103" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
      <div class="OESZ OESZ_DivContent OESZG_WEfcd650b103">
       <a href="javascript:Panel(2)">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE8296a40925" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE8296a40925">
           <img src="WEFiles/Image/WEImage/icon_excel-WE8296a40925.png" class="OESZ OESZ_Img OESZG_WE8296a40925" alt="" />
          </div>
         </div>
         <div id="WEc5c16710c8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEc5c16710c8">
           <span class="OESZ OESZ_Text OESZG_WEc5c16710c8 ContentBox">Carregar jogadores</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEc62dfdeb48" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:6">
      <div class="OESZ OESZ_DivContent OESZG_WEc62dfdeb48">
       <a href="javascript:Panel(3)">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE13ace5284f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE13ace5284f">
           <img src="WEFiles/Image/WEImage/icon_grupos-WE13ace5284f.png" class="OESZ OESZ_Img OESZG_WE13ace5284f" alt="" />
          </div>
         </div>
         <div id="WE7fca2152ea" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE7fca2152ea">
           <span class="OESZ OESZ_Text OESZG_WE7fca2152ea ContentBox">Grupos</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEa9e57454d7" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:17">
      <div class="OESZ OESZ_DivContent OESZG_WEa9e57454d7">
       <a href="javascript:CargarCartas()">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE48856ae5ea" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE48856ae5ea">
           <img src="WEFiles/Image/WEImage/icon_design-WE48856ae5ea.png" class="OESZ OESZ_Img OESZG_WE48856ae5ea" alt="" />
          </div>
         </div>
         <div id="WEcb534938c6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEcb534938c6">
           <span class="OESZ OESZ_Text OESZG_WEcb534938c6 ContentBox">Atribuir cartões</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEaeee684387" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:18">
      <div class="OESZ OESZ_DivContent OESZG_WEaeee684387">
       <a href="cardeditor.php">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WEfa9c5e15b7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEfa9c5e15b7">
           <img src="WEFiles/Image/WEImage/icon_cards-WEfa9c5e15b7.png" class="OESZ OESZ_Img OESZG_WEfa9c5e15b7" alt="" />
          </div>
         </div>
         <div id="WE9332b7efe1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE9332b7efe1">
           <span class="OESZ OESZ_Text OESZG_WE9332b7efe1 ContentBox">Cards Editor</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEf87467c93f" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
      <div class="OESZ OESZ_DivContent OESZG_WEf87467c93f">
       <span class="OESZ OESZ_Text OESZG_WEf87467c93f ContentBox">Jogadoras</span>
      </div>
     </div>
     <div id="WE410a06c51f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
      <div class="OESZ OESZ_DivContent OESZG_WE410a06c51f">
       <span class="OESZ OESZ_Text OESZG_WE410a06c51f ContentBox">Cartões designados</span>
      </div>
     </div>
     <div id="WEb6b1ae892d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:23">
      <div class="OESZ OESZ_DivContent OESZG_WEb6b1ae892d">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="WEFiles/Image/WEImage/icon_jug-WEb6b1ae892d-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="WEFiles/Image/WEImage/icon_jug-WEb6b1ae892d.png" class="OESZ OESZ_Img OESZG_WEb6b1ae892d" alt="" />
       </picture>
      </div>
     </div>
     <div id="WE08348aee60" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:24">
      <div class="OESZ OESZ_DivContent OESZG_WE08348aee60">
       <img src="WEFiles/Image/WEImage/icon_cards-WE08348aee60.png" class="OESZ OESZ_Img OESZG_WE08348aee60" alt="" />
      </div>
     </div>
     <div id="WEb3174c41db" class="BaseDiv RNone OEWERadioButtonListV2 OESK_WERadioButtonList2_Default" style="z-index:15">
      <div class="OESZ OESZ_DivContent OESZG_WEb3174c41db">
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="1" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S1</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="2" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S2</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="3" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S3</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="4" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S4</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="5" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S5</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="6" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">S6</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEb3174c41db" name="WEb3174c41db" value="*" checked="checked" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEb3174c41db">all</span>
      </div>
     </div>
     <div id="WEa83d02f27a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:20">
      <div class="OESZ OESZ_DivContent OESZG_WEa83d02f27a">
       <span class="OESZ OESZ_Text OESZG_WEa83d02f27a ContentBox">Control Sprints</span>
      </div>
     </div>
     <div id="WE0b84d7f491" class="BaseDiv RWidth OEWEPanel OESK_WEPanel_Default" style="z-index:10">
      <div class="OESZ OESZ_DivContent OESZG_WE0b84d7f491">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignB">
         <div id="WE52271ac670" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE52271ac670">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE4c9350319d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WE4c9350319d">
              <a href="javascript:EliminarJugador">
               <img src="WEFiles/Image/WEImage/icon_delete-WE4c9350319d.png" class="OESZ OESZ_Img OESZG_WE4c9350319d" alt="" />
              </a>
             </div>
            </div>
            <div id="WE5c6dcd07de" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE5c6dcd07de">
              <img src="WEFiles/Image/WEImage/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE5c6dcd07de" alt="" />
             </div>
            </div>
            <div id="WE080a872104" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WE080a872104">
              <span class="OESZ OESZ_Text OESZG_WE080a872104 ContentBox">Fernando A. Freire</span>
             </div>
            </div>
           </div>
          </div>
         </div><div id="WE37e0d9eb98" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
          <div class="OESZ OESZ_DivContent OESZG_WE37e0d9eb98">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEcf8d922c3d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEcf8d922c3d">
              <a href="javascript:AgregarJugador()">
               <img src="WEFiles/Image/WEImage/icon_add-WEcf8d922c3d.png" class="OESZ OESZ_Img OESZG_WEcf8d922c3d" alt="" />
              </a>
             </div>
            </div>
            <div id="WE4770c7dcf7" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE4770c7dcf7">
              <img src="WEFiles/Image/WEImage/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE4770c7dcf7" alt="" />
             </div>
            </div>
            <div id="WEde4cbb2a2c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
             <div class="OESZ OESZ_DivContent OESZG_WEde4cbb2a2c">
              <input name="AddPlayer" type="text" class="OESZ OESZ_TextBox OESZG_WEde4cbb2a2c OEDynTag0" />
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEf83c264b63" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:11">
      <div class="OESZ OESZ_DivContent OESZG_WEf83c264b63">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignT">
         <div id="WEd799e6d791" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEd799e6d791">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE1dd1884d4f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE1dd1884d4f">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE1a5b467b37" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE1a5b467b37">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1a5b467b37" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE8ea6a60fb1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE8ea6a60fb1">
                  <span class="OESZ OESZ_Text OESZG_WE8ea6a60fb1 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </main>
          </div>
         </div><div id="WE8aa8ce9708" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE8aa8ce9708">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WEacdafdfd0c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WEacdafdfd0c">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE381ebfb685" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE381ebfb685">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE381ebfb685" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEa267c1eae8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEa267c1eae8">
                  <span class="OESZ OESZ_Text OESZG_WEa267c1eae8 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </main>
          </div>
         </div><div id="WE70dfc9c97d" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:3">
          <div class="OESZ OESZ_DivContent OESZG_WE70dfc9c97d">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE3635d3237e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE3635d3237e">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE6b491a0077" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE6b491a0077">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE6b491a0077" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEcd0916c6a6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEcd0916c6a6">
                  <span class="OESZ OESZ_Text OESZG_WEcd0916c6a6 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </main>
          </div>
         </div><div id="WEf94b9d617e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:4">
          <div class="OESZ OESZ_DivContent OESZG_WEf94b9d617e">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE36ad3b2197" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE36ad3b2197">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE1eaa89637b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE1eaa89637b">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1eaa89637b" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE5c34a7b7af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE5c34a7b7af">
                  <span class="OESZ OESZ_Text OESZG_WE5c34a7b7af ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </main>
          </div>
         </div><div id="WE4b2e9290d4" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:5">
          <div class="OESZ OESZ_DivContent OESZG_WE4b2e9290d4">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE34352f926b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE34352f926b">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE40480e8544" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE40480e8544">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE40480e8544" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE197678c655" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE197678c655">
                  <span class="OESZ OESZ_Text OESZG_WE197678c655 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </main>
          </div>
         </div><div id="WEb0730cff64" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:6">
          <div class="OESZ OESZ_DivContent OESZG_WEb0730cff64">
           <main id="Card1" draggable="true" ondragstart="drag(event)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE9ecded05e6" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE9ecded05e6">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WEa70511351b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WEa70511351b">
                  <a href="javascript:alert('test');">
                   <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEa70511351b" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEe285ff32d3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEe285ff32d3">
                  <span class="OESZ OESZ_Text OESZG_WEe285ff32d3 ContentBox">Titulo Card Demo 1<br /></span>
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
     <div id="WE45e6d76403" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:25">
      <div class="OESZ OESZ_DivContent OESZG_WE45e6d76403">
       <img src="WEFiles/Image/WEImage/icon_chrono-WE45e6d76403.png" class="OESZ OESZ_Img OESZG_WE45e6d76403" alt="" />
      </div>
     </div>
     <div id="WE004b175b7f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WE004b175b7f">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE915de4e932" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE915de4e932">
          <select name="SprintVigente" class="OESZ OESZ_ListBox OESZG_WE915de4e932 OEDynTag0">
           <option value="1" class="OESZ OESZ_Options OESZG_WE915de4e932" selected="selected">Sprint 1</option>
           <option value="2" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint 2</option>
           <option value="3" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint 3</option>
           <option value="4" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint 4</option>
           <option value="5" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint 5</option>
           <option value="6" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint 6</option>
          </select>
         </div>
        </div>
        <div id="WE48c6052e35" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE48c6052e35">
          <a href="javascript:CorrerTiempo()">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WE307abc8b0b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE307abc8b0b">
              <img src="WEFiles/Image/WEImage/icon_run-WE307abc8b0b.png" class="OESZ OESZ_Img OESZG_WE307abc8b0b" alt="" />
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
        <div id="WE19884345d3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE19884345d3">
          <input name="AjusTime" type="text" class="OESZ OESZ_TextBox OESZG_WE19884345d3 OEDynTag0" value="20" />
         </div>
        </div>
        <div id="WE81329b44e8" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE81329b44e8">
          <input name="AjusTime" type="text" class="OESZ OESZ_TextBox OESZG_WE81329b44e8 OEDynTag0" value="00" />
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE1a39ae8516" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:16">
      <div class="OESZ OESZ_DivContent OESZG_WE1a39ae8516">
       <a href="javascript:GuardarCambios()">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE010a27c386" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE010a27c386">
           <span class="OESZ OESZ_Text OESZG_WE010a27c386 ContentBox">Guardar mudanças</span>
          </div>
         </div>
         <div id="WEb6929871fe" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEb6929871fe">
           <img src="WEFiles/Image/WEImage/icon_db-WEb6929871fe.png" class="OESZ OESZ_Img OESZG_WEb6929871fe" alt="" />
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>
  <script type="text/javascript">
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
                  '<img src="WEFiles/Image/WEImage/icon_add-WEcf8d922c3d.png" class="OESZ OESZ_Img OESZG_WEcf8d922c3d" alt="" />'+
                 '</a>'+
                '</div>'+
               '</div>'+
               '<div id="WE4770c7dcf7" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE4770c7dcf7">'+
                 '<img src="WEFiles/Image/WEImage/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE4770c7dcf7" alt="" />'+
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
   				{id:'0', titulo:'Equipo A', sprint:'1', puntos: '500', estado: 'on', passw: 'g1', obj: ''},
   				{id:'1', titulo:'Equipo B', sprint:'1', puntos: '0', estado: 'off', passw: 'g2', obj: ''},
   				{id:'2', titulo:'Equipo C', sprint:'2', puntos: '1500', estado: 'on', passw: 'g3', obj: ''},
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
   			Jugadores[z][i].obj = CrearStiquerNombre(Jugadores[z][i].nombre);
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
   	
   	
   	if (document.getElementsByName("AddPlayer")[0].value != ""){
   		Jugadores[GrupoSelecto].push(
   			{
   				nombre:document.getElementsByName("AddPlayer")[0].value, 
   			 	obj:CrearStiquerNombre(document.getElementsByName("AddPlayer")[0].value)
   									   }
   			);
   		document.getElementsByName("AddPlayer")[0].value = "";
   			
   		ImprimirJugadores();		
   		EstadoGrupos[GrupoSelecto].obj.children[0].children[0].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[GrupoSelecto].titulo+" ("+Jugadores[GrupoSelecto].length+")";
   		
   		_BtnGuardarCambios.style.visibility = "visible";
   		document.getElementsByName("AddPlayer")[0].focus();
   		return Jugadores;
   		
   		}
   }
   
   // Quitar elementos:
   
   function QuitarPartida(id){
   	delete Partidas[id];
   }
   
   function QuitarJugador(NombJug){
   	Jugadores[GrupoSelecto] = Jugadores[GrupoSelecto].filter(function(item){return item.nombre !== NombJug});
   	ImprimirJugadores();
   	EstadoGrupos[GrupoSelecto].obj.children[0].children[0].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[GrupoSelecto].titulo+" ("+Jugadores[GrupoSelecto].length+")";
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
   		Partidas[b].obj.setAttribute('style','background:#808080');
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
   		EstadoGrupos[GrupoSelecto].obj.setAttribute('style','background:#808080');
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
   	
   	
   }
   
   function ActivarGrupo(id, std){
   	
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
   	ImprimirGrupos();
   	
   	GuardarCambios();
   	
   	;
   }
   
   
   // Creación de elementos visuales:
   
   function CrearStiquerNombre(Titulo){
   	
   	Printer = '<div id="WE52271ac670" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE52271ac670">'+
              '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
               '<div id="WE4c9350319d" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:3">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE4c9350319d">'+
                 '<a href="javascript:EliminarJugador(\''+Titulo+'\')">'+
                  '<img src="WEFiles/Image/WEImage/icon_delete-WE4c9350319d.png" class="OESZ OESZ_Img OESZG_WE4c9350319d" alt="" />'+
                 '</a>'+
                '</div>'+
               '</div>'+
               '<div id="WE5c6dcd07de" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                '<div class="OESZ OESZ_DivContent OESZG_WE5c6dcd07de">'+
                 '<img src="WEFiles/Image/WEImage/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE5c6dcd07de" alt="" />'+
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
                      '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1a5b467b37" alt="" />'+
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
                  '<img src="WEFiles/Image/WEImage/icon_on-WE5cd2b5baed.png" class="OESZ OESZ_Img OESZG_WE5cd2b5baed" alt="" onClick="javascript:DesactivarGrupo(\''+nombre+'\', '+id+');"/>'+
                 '</div>'+
                '</div>'+
                '<div id="WE2c53145f95" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE2c53145f95">'+
                  '<span class="OESZ OESZ_Text OESZG_WE2c53145f95 ContentBox">Sprint: '+sprint+' - Puntos: '+puntos+'</span>'+
                 '</div>'+
                '</div>'+
                '<div id="WE281ef99d4d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE281ef99d4d">'+
                  '<span class="OESZ OESZ_Text OESZG_WE281ef99d4d ContentBox">'+nombre+' ('+initNumJugad+')</span>'+
                 '</div></div>'+
   			
   			'<div id="WEbfb7b2585e" name="finaldash" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:4">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WEbfb7b2585e">'+
                  '<a href="../finaldash.php?g='+id+'"><img src="../Images/go_icon-WEbfb7b2585e.png" class="OESZ OESZ_Img OESZG_WEbfb7b2585e" alt="" /></a>'+
                 '</div>'+
                '</div>'+
   				
   				'</div></a></div></div>';	
   			
   		} else {
   			Printer = '<div id="WE97997a5457" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE97997a5457">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0">'+
                '<div id="WE78a8524a2f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE78a8524a2f">'+
                  '<img src="WEFiles/Image/WEImage/icon_off-WE78a8524a2f.png" class="OESZ OESZ_Img OESZG_WE78a8524a2f" alt="" onClick="javascript:ActivarGrupo('+id+', \'on\');"/>'+
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
   		console.log('Adelantar un Sprint')
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
                     '<img src="WEFiles/Image/WEImage/delete_big-WEc233f5d892.png" onClick="EliminarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEc233f5d892" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WE123c1f5899" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:6">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE123c1f5899">'+
                     '<img src="WEFiles/Image/WEImage/icon_on-WE123c1f5899.png" onClick="DesactivarPartida('+id+')" class="OESZ OESZ_Img OESZG_WE123c1f5899" alt="" />'+
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
                      '<img src="WEFiles/Image/WEImage/delete_big-WEfce8160f10.png" onClick="EliminarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEfce8160f10" alt="" />'+
                    '</div>'+
                   '</div>'+
                   '<div id="WEc9446d2cb9" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WEc9446d2cb9">'+
                      '<img src="WEFiles/Image/WEImage/icon_off-WEc9446d2cb9.png" onClick="ActivarPartida('+id+')" class="OESZ OESZ_Img OESZG_WEc9446d2cb9" alt="" />'+
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
   const serv_xlsx = 'http://localhost/roadmap_game/xlsx_players.php?f=ok"';
   const serv_cards_rand = 'http://localhost/roadmap_game/cards.php?f=designar';
   const serv_conf_save = 'http://localhost/roadmap_game/conf_save.php?f=save&id=';
   const serv_conf_carg = 'http://localhost/roadmap_game/conf_save.php?f=load&id=';
   const serv_nuevPart = 'http://localhost/roadmap_game/conf_save.php?f=partidas&o=';
   const serv_cont_tiempo = 'http://localhost/roadmap_game/realtime-canvas.php?f=Get_Timestamp&p=';
   
   
   ProcesarXLSX = () => {
   	
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
       
   		
   		 console.log(data[0].tipo)
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
   				
   				console.log("g: "+data[i].grupo+" j: "+data[i].jugador);
   
   				if (EstadoGrupos[(data[i].grupo-1)].estado == "on"){
   				
   				Jugadores[data[i].grupo-1].push(
   						{
   							nombre:data[i].jugador, 
   							obj:CrearStiquerNombre(data[i].jugador)
   						}
   					);
   				
   				EstadoGrupos[(data[i].grupo-1)].obj.children[0].children[0].children[0].children[2].children[0].children[0].innerText = EstadoGrupos[(data[i].grupo-1)].titulo+" ("+Jugadores[(data[i].grupo-1)].length+")";
   				
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
   
   //TotalesPorSprint_Cards = []
   
   CargarCartas = () => {
   	
   	Panel(5);
   	
   	fetch(serv_cards_rand, {
   	 
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		console.log(data)
   		
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
   		
   	console.log("OK")
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
   		console.log("asignado a: "+ a +" con: "+Sp1[a-1].value);
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
   	p = ["WE19b79f106b", "WE7a08a0797f", "WE886d9d5223", "WEe795284d89", "WEc5e8fdb403", "WEc5e8fdb403"]	
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
   		
   		console.log(data)
   		
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
   
   EnviarPartida = (m, pr, id)=> {  //EnviarPartida(x, false, 15)
   	
   	var data = new FormData()
   
   	console.log()
   	
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
   	console.log(URL)
   	
   	fetch(URL, {
   	  method: 'POST',
   	  body: data
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		Panel(0);
   		
   		console.log(data)
   		
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
   		console.log(error)
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
   		
   		console.log(data)
   		
   		IdPartidaActiva = data[0];
   		EstadoGrupos = data[2];
   		Partidas = data[1];
   		Jugadores = data[3];
   		cards = data[4];
   		
   		Panel(0);
   		
   		if (Partidas.length == 0){
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
   	
   		if (IdPartidaActiva.estado == "on"){
   			
   			document.getElementById('WE004b175b7f').style.visibility = "visible";
   			
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
   		
   		
   		
   }
   		
   		
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
   		
   	console.log("OK")
   }
   CargarConf();
   
   function emparentar(){
   	// Emparentar Objetos iniciales:
   // 		Jugadores:
   
   for (z=0; z<Jugadores.length; z++){
   	try {
   		for (i=0; i<Jugadores[z].length; i++){
   			Jugadores[z][i].obj = CrearStiquerNombre(Jugadores[z][i].nombre);
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
   	
   	
   	Min_ = document.getElementsByName("AjusTime")[0].value
   	Seg_ = document.getElementsByName("AjusTime")[1].value
   	
   	Tiemp = numeral("00:"+Min_+":"+Seg_)
   	Tiemp = Tiemp.format("00:00:00")
   	Panel(5);
   	
   	Spr = SprinrVig.value
   	
   	fetch("http://localhost:8044/roadmap_game/realtime-canvas.php?f=Set_Timestamp&p="+_phpid+"&t="+Tiemp+"&sp="+Spr)
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		console.log(data)
   		
   		a = numeral(data.desde)
   		b = numeral(data.hasta)
   		
   		if (a._value < b._value){
   		
   			b.subtract(a._value)
   			CheckPoint.hasta = b.format("00:00:00");
   			RunCheck(i)
   			document.getElementById('WE004b175b7f').style.visibility = "hidden";
   			
   		}
   		
   		
   		Panel(0);
   		
   		
   		
   	}).catch(error => {
   		
   		alert(error);
   		Panel(0);
   		//console.error(error)
   	  })
   
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
   		document.getElementById('WE004b175b7f').style.visibility = "visible";
   		IdPartidaActiva.SprintAct = parseInt(SprinrVig.value)
   		
   			SprinrVig.innerHTML = "";
   			for (i=parseInt(IdPartidaActiva.SprintAct)+1; i< parseInt(IdPartidaActiva.maxsprints)+1; i++){
   			SprinrVig.innerHTML += '<option value="'+i+'" class="OESZ OESZ_Options OESZG_WE915de4e932">Sprint '+i+'</option>'
   			fetch('http://localhost:8044/roadmap_game/conf_save.php?f=resetTime&id='+_phpid)
   			}
   		//IdPartidaActiva.SprintAct = SprinrVig.value;     // (parseInt(IdPartidaActiva.SprintAct) + 1).toString();
   		//GuardarCambios();
   	}
   	
   },1000)
   	
   }
  </script>
 </body>
</html>