<?php

include "../back/classes/loggin.php";
include "../back/classes/lang.php";

$LabelLang = new Language("../lang/", "admin");


Conexion::SessionChequed("admin");

$lang = $_SESSION['lang'];

?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
 
 <?php 

  include "head.nyx";

  // remplazar WEFiles/Image/WEImage por ../Images
  // remplazar Files/Image/ por ../Images

 ?>
</head>


 <body class="RWAuto" data-gl="{&quot;KeywordsHomeNotInherits&quot;:false}"><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  
  <?php 
  
  //$lang
  //include "lang/adm".$lang.".nyx" 
  
  
  ?>

<!-- Cuerpo HTML -->

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
             <img src="../Images/icon_chess-WE1891cf0f7c.png" class="OESZ OESZ_Img OESZG_WE1891cf0f7c" alt="" />
            </div>
           </div>
           <div id="WE360d94acc1" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE360d94acc1">
             <span class="OESZ OESZ_Text OESZG_WE360d94acc1 ContentBox"><?= $LabelLang->getLabel($lang,9) // Nueva Partida ?>  </span>
            </div>
           </div>
           <div id="WEf7de68ed4a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEf7de68ed4a">
             <span class="OESZ OESZ_Text OESZG_WEf7de68ed4a ContentBox">Nombre:</span>
            </div>
           </div>
           <div id="WE7699c76cd5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE7699c76cd5">
             <input name="Partidas" type="text" placeholder="Nombre" class="OESZ OESZ_TextBox OESZG_WE7699c76cd5 OEd OEDynTag0" />
            </div>
           </div>
           <div id="WE01567c4421" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE01567c4421">
             <span class="OESZ OESZ_Text OESZG_WE01567c4421 ContentBox">Fecha inicio:</span>
            </div>
           </div>
           <div id="WEfcf7a47e6b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEfcf7a47e6b">
             <input name="Partidas" type="date" placeholder="12/07/2020" class="OESZ OESZ_TextBox OESZG_WEfcf7a47e6b OEDynTag0" />
            </div>
           </div>
           <div id="WE23c17902ef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE23c17902ef">
             <span class="OESZ OESZ_Text OESZG_WE23c17902ef ContentBox">Fecha final:</span>
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
              <img src="../Images/C_3-WEe2bd6d3a0a.png" class="OESZ OESZ_Img OESZG_WEe2bd6d3a0a" alt="" />
             </a>
            </div>
           </div>
           <div id="WE66ca06422e" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE66ca06422e">
             <a href="javascript:CanvasSelectF(1)">
              <img src="../Images/C1-WE66ca06422e.png" class="OESZ OESZ_Img OESZG_WE66ca06422e" alt="" />
             </a>
            </div>
           </div>
           <div id="WEd9e91999b4" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WEd9e91999b4">
             <a href="javascript:CanvasSelectF(2)">
              <img src="../Images/c_2-WEd9e91999b4.png" class="OESZ OESZ_Img OESZG_WEd9e91999b4" alt="" />
             </a>
            </div>
           </div>
           <div id="WE83c786dd56" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE83c786dd56">
             <span class="OESZ OESZ_Text OESZG_WE83c786dd56 ContentBox">Último Sprint<br /></span>
            </div>
           </div>
           <div id="WEd4349317cc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WEd4349317cc">
             <span class="OESZ OESZ_Text OESZG_WEd4349317cc ContentBox">Estado:</span>
            </div>
           </div>
           <div id="WE1b7b9f94ec" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE1b7b9f94ec">
             <span class="OESZ OESZ_Text OESZG_WE1b7b9f94ec ContentBox">Idioma<br /></span>
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
              <option value="on" class="OESZ OESZ_Options OESZG_WE13699b8732" selected="selected">Activo</option>
              <option value="off" class="OESZ OESZ_Options OESZG_WE13699b8732">Inactivo</option>
             </select>
            </div>
           </div>
           <div id="WE4769e1dae3" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WE4769e1dae3">
             <select name="Partidas" class="OESZ OESZ_ListBox OESZG_WE4769e1dae3 OEDynTag0">
              <option value="es" class="OESZ OESZ_Options OESZG_WE4769e1dae3" selected="selected">Español</option>
              <option value="en" class="OESZ OESZ_Options OESZG_WE4769e1dae3">Ingles</option>
              <option value="pr" class="OESZ OESZ_Options OESZG_WE4769e1dae3">Portugues</option>
             </select>
            </div>
           </div>
           <div id="WEb18e17e7af" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WEb18e17e7af">
             <a href="javascript:AgregarPartida()">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WEdb410ebd1d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEdb410ebd1d">
                 <img src="../Images/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WEdb410ebd1d" alt="" />
                </div>
               </div>
               <div id="WEdcf5597dcc" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEdcf5597dcc">
                 <span class="OESZ OESZ_Text OESZG_WEdcf5597dcc ContentBox">Guardar</span>
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
             <span class="OESZ OESZ_Text OESZG_WE9f282c0bda ContentBox">Asignar cartas</span>
            </div>
           </div>
           <div id="WE665bd1efdf" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE665bd1efdf">
             <img src="../Images/icon_cards.png" class="OESZ OESZ_Img OESZG_WE665bd1efdf" alt="" />
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
             <span class="OESZ OESZ_Text OESZG_WEe2a87dfa6c ContentBox">Total cartas:</span>
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
             <span class="OESZ OESZ_Text OESZG_WE3772701196 ContentBox">Movimientos:</span>
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
                 <img src="../Images/icon_design-WEe631ac5a73.png" class="OESZ OESZ_Img OESZG_WEe631ac5a73" alt="" />
                </div>
               </div>
               <div id="WE94e772e8f2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE94e772e8f2">
                 <span class="OESZ OESZ_Text OESZG_WE94e772e8f2 ContentBox">Asignar</span>
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
             <span class="OESZ OESZ_Text OESZG_WE1c3e53985e ContentBox">Configuración de grupos (general)</span>
            </div>
           </div>
           <div id="WE48734d5507" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE48734d5507">
             <span class="OESZ OESZ_Text OESZG_WE48734d5507 ContentBox">Configuración de Grupos</span>
            </div>
           </div>
           <div id="WE151f4b846e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE151f4b846e">
             <span class="OESZ OESZ_Text OESZG_WE151f4b846e ContentBox">Nombre:</span>
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
                 <span class="OESZ OESZ_Text OESZG_WE54322763d4 ContentBox">Guardar</span>
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
             <span class="OESZ OESZ_Text OESZG_WE42b4df3d62 ContentBox">Cargar Excel de jugadores</span>
            </div>
           </div>
           <div id="WEe7d1fffd0c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEe7d1fffd0c">
             <img src="../Images/icon_excel.png" class="OESZ OESZ_Img OESZG_WEe7d1fffd0c" alt="" />
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
              <option value="0" class="OESZ OESZ_Options OESZG_WEb012289847">Concatenar / Unir</option>
              <option value="1" class="OESZ OESZ_Options OESZG_WEb012289847">Borrar pre-exisente</option>
             </select>
            </div>
           </div>
           <div id="WE886a9c7fc9" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE886a9c7fc9">
             <span class="OESZ OESZ_Text OESZG_WE886a9c7fc9 ContentBox">Archivo Excel</span>
            </div>
           </div>
           <div id="WE6c3d4822a2" class="BaseDiv RNone OEWEUploadFilesV2 OESK_WEUploadFiles2_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE6c3d4822a2">
             <input name="file" class="OESZ OESZ_InputFile OESZG_WE6c3d4822a2" type="file" />
            </div>
           </div>
           <div id="WEcdb9b3b1af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WEcdb9b3b1af">
             <span class="OESZ OESZ_Text OESZG_WEcdb9b3b1af ContentBox">* Solo archivos xlsx&nbsp;</span>
            </div>
           </div>
           <div id="WEe021e47188" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WEe021e47188">
             <a href="jugadores.xlsx">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE91987d108b" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE91987d108b">
                 <img src="../Images/icon_down-WE91987d108b.png" class="OESZ OESZ_Img OESZG_WE91987d108b" alt="" />
                </div>
               </div>
               <div id="WE1a36007cc3" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE1a36007cc3">
                 <span class="OESZ OESZ_Text OESZG_WE1a36007cc3 ContentBox">Bajar Modelo<br /></span>
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
                 <img src="../Images/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WEa0090f8b92" alt="" />
                </div>
               </div>
               <div id="WEd61057e61d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEd61057e61d">
                 <span class="OESZ OESZ_Text OESZG_WEd61057e61d ContentBox">Cargar</span>
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
          <div class="lds-circle" ><div style="background-image: url('../Images/charg.jpg');background-size:cover;"></div></div>
         </div>
        </div>
        <div id="WE5f2fd50e89" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE5f2fd50e89">
          <a href="javascript:Panel(0)">
           <img src="../Images/delete_big.png" class="OESZ OESZ_Img OESZG_WE5f2fd50e89" alt="" />
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WE19cd5b5fbc" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WE19cd5b5fbc">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="../Images/logo-WE19cd5b5fbc-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="../Images/logo-WE19cd5b5fbc.png" class="OESZ OESZ_Img OESZG_WE19cd5b5fbc" alt="" />
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
       <a href="../back/routes.php?f=logout">
        <img src="../Images/logout-WE6568bb17b7.png" class="OESZ OESZ_Img OESZG_WE6568bb17b7" alt="" />
       </a>
      </div>
     </div>
     <div id="WEb71bde669c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:29">
      <div class="OESZ OESZ_DivContent OESZG_WEb71bde669c">
       <a href="javascript:passwch(0)">
        <img src="../Images/icon_conf-WEb71bde669c.png" class="OESZ OESZ_Img OESZG_WEb71bde669c" alt="" />
       </a>
      </div>
     </div>
     <div id="WE716559bf2a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:26">
      <div class="OESZ OESZ_DivContent OESZG_WE716559bf2a">
       <img src="../Images/icon_chrono-WE716559bf2a.png" class="OESZ OESZ_Img OESZG_WE716559bf2a" alt="" />
      </div>
     </div>
     <div id="WEdfff164ee5" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:31">
      <div class="OESZ OESZ_DivContent OESZG_WEdfff164ee5">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEe11ae15705" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEe11ae15705">
          <span class="OESZ OESZ_Text OESZG_WEe11ae15705 ContentBox">Actual password<br /></span>
         </div>
        </div>
        <div id="WE740ee6cfe5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE740ee6cfe5">
          <input name="chngpass" type="password" class="OESZ OESZ_TextBox OESZG_WE740ee6cfe5 OEDynTag0" />
         </div>
        </div>
        <div id="WE772f1d3a79" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE772f1d3a79">
          <span class="OESZ OESZ_Text OESZG_WE772f1d3a79 ContentBox">Nuevo password<br /></span>
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
              <img src="../Images/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WE0fa3514290" alt="" />
             </div>
            </div>
            <div id="WEa547139701" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WEa547139701">
              <span class="OESZ OESZ_Text OESZG_WEa547139701 ContentBox">Guardar</span>
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
       <span class="OESZ OESZ_Text OESZG_WEa028ed706b ContentBox">Administrador de juego</span>
      </div>
     </div>
     <div id="WE392d7fae1c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:19">
      <div class="OESZ OESZ_DivContent OESZG_WE392d7fae1c">
       <span class="OESZ OESZ_Text OESZG_WE392d7fae1c ContentBox">Partidas</span>
      </div>
     </div>
     <div id="WEc616e08e40" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
      <div class="OESZ OESZ_DivContent OESZG_WEc616e08e40">
       <span class="OESZ OESZ_Text OESZG_WEc616e08e40 ContentBox">Grupos activos</span>
      </div>
     </div>
     <div id="WE699ecc8d01" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:21">
      <div class="OESZ OESZ_DivContent OESZG_WE699ecc8d01">
       <img src="../Images/icon_chess-WE699ecc8d01.png" class="OESZ OESZ_Img OESZG_WE699ecc8d01" alt="" />
      </div>
     </div>
     <div id="WE937056991c" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:22">
      <div class="OESZ OESZ_DivContent OESZG_WE937056991c">
       <img src="../Images/icon_grupos-WE937056991c.png" class="OESZ OESZ_Img OESZG_WE937056991c" alt="" />
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
                  <img src="../Images/delete_big-WEc233f5d892.png" class="OESZ OESZ_Img OESZG_WEc233f5d892" alt="" />
                 </div>
                </div>
                <div id="WE123c1f5899" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:6">
                 <div class="OESZ OESZ_DivContent OESZG_WE123c1f5899">
                  <img src="../Images/icon_on-WE123c1f5899.png" class="OESZ OESZ_Img OESZG_WE123c1f5899" alt="" />
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
                   <img src="../Images/delete_big-WEfce8160f10.png" class="OESZ OESZ_Img OESZG_WEfce8160f10" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEc9446d2cb9" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WEc9446d2cb9">
                  <a href="javascript:ActivarPartida()">
                   <img src="../Images/icon_off-WEc9446d2cb9.png" class="OESZ OESZ_Img OESZG_WEc9446d2cb9" alt="" />
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
                   <img src="../Images/delete_big-WE198c28f5b2.png" class="OESZ OESZ_Img OESZG_WE198c28f5b2" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WE2f2606b187" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WE2f2606b187">
                  <a href="javascript:ActivarPartida()">
                   <img src="../Images/icon_off-WE2f2606b187.png" class="OESZ OESZ_Img OESZG_WE2f2606b187" alt="" />
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
                   <img src="../Images/delete_big-WE58afcb3627.png" class="OESZ OESZ_Img OESZG_WE58afcb3627" alt="" />
                  </a>
                 </div>
                </div>
                <div id="WEd8f777bc18" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:4">
                 <div class="OESZ OESZ_DivContent OESZG_WEd8f777bc18">
                  <a href="javascript:ActivarPartida()">
                   <img src="../Images/icon_off-WEd8f777bc18.png" class="OESZ OESZ_Img OESZG_WEd8f777bc18" alt="" />
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
               <img src="../Images/icon_on-WE5cd2b5baed.png" class="OESZ OESZ_Img OESZG_WE5cd2b5baed" alt="" />
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
            </div>
           </a>
          </div>
         </div><div id="WE97997a5457" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
          <div class="OESZ OESZ_DivContent OESZG_WE97997a5457">
           <a href="javascript:GrupoSelecto=1 ;";>
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE78a8524a2f" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE78a8524a2f">
               <img src="../Images/icon_off-WE78a8524a2f.png" class="OESZ OESZ_Img OESZG_WE78a8524a2f" alt="" />
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
           <img src="../Images/icon_chess-WEab3d9c60b6.png" class="OESZ OESZ_Img OESZG_WEab3d9c60b6" alt="" />
          </div>
         </div>
         <div id="WE85029812fa" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE85029812fa">
           <span class="OESZ OESZ_Text OESZG_WE85029812fa ContentBox">Nueva partida</span>
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
           <img src="../Images/icon_excel-WE8296a40925.png" class="OESZ OESZ_Img OESZG_WE8296a40925" alt="" />
          </div>
         </div>
         <div id="WEc5c16710c8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEc5c16710c8">
           <span class="OESZ OESZ_Text OESZG_WEc5c16710c8 ContentBox">Cargar jugadores</span>
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
           <img src="../Images/icon_grupos-WE13ace5284f.png" class="OESZ OESZ_Img OESZG_WE13ace5284f" alt="" />
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
           <img src="../Images/icon_design-WE48856ae5ea.png" class="OESZ OESZ_Img OESZG_WE48856ae5ea" alt="" />
          </div>
         </div>
         <div id="WEcb534938c6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEcb534938c6">
           <span class="OESZ OESZ_Text OESZG_WEcb534938c6 ContentBox">Asignar cartas</span>
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
           <img src="../Images/icon_cards-WEfa9c5e15b7.png" class="OESZ OESZ_Img OESZG_WEfa9c5e15b7" alt="" />
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
       <span class="OESZ OESZ_Text OESZG_WEf87467c93f ContentBox">Jugadores</span>
      </div>
     </div>
     <div id="WE410a06c51f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
      <div class="OESZ OESZ_DivContent OESZG_WE410a06c51f">
       <span class="OESZ OESZ_Text OESZG_WE410a06c51f ContentBox">Cartas designadas</span>
      </div>
     </div>
     <div id="WEb6b1ae892d" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:23">
      <div class="OESZ OESZ_DivContent OESZG_WEb6b1ae892d">
       <picture>
        <source media="only screen and (max-width: 950px)" srcset="../Images/icon_jug-WEb6b1ae892d-66736b49-9f9c-408f-8e1c-7fcd4c7650b2.png" />
        <img src="../Images/icon_jug-WEb6b1ae892d.png" class="OESZ OESZ_Img OESZG_WEb6b1ae892d" alt="" />
       </picture>
      </div>
     </div>
     <div id="WE08348aee60" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:24">
      <div class="OESZ OESZ_DivContent OESZG_WE08348aee60">
       <img src="../Images/icon_cards-WE08348aee60.png" class="OESZ OESZ_Img OESZG_WE08348aee60" alt="" />
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
               <img src="../Images/icon_delete-WE4c9350319d.png" class="OESZ OESZ_Img OESZG_WE4c9350319d" alt="" />
              </a>
             </div>
            </div>
            <div id="WE5c6dcd07de" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE5c6dcd07de">
              <img src="../Images/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE5c6dcd07de" alt="" />
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
               <img src="../Images/icon_add-WEcf8d922c3d.png" class="OESZ OESZ_Img OESZG_WEcf8d922c3d" alt="" />
              </a>
             </div>
            </div>
            <div id="WE4770c7dcf7" class="BaseDiv RBoth OEWEImage OESK_WEImage_Default OECenterAV" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE4770c7dcf7">
              <img src="../Images/default_user-WE5c6dcd07de.png" class="OESZ OESZ_Img OESZG_WE4770c7dcf7" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1a5b467b37" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE381ebfb685" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE6b491a0077" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE1eaa89637b" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE40480e8544" alt="" />
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
                   <img src="../Images/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEa70511351b" alt="" />
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
       <img src="../Images/icon_chrono-WE45e6d76403.png" class="OESZ OESZ_Img OESZG_WE45e6d76403" alt="" />
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
              <img src="../Images/icon_run-WE307abc8b0b.png" class="OESZ OESZ_Img OESZG_WE307abc8b0b" alt="" />
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
           <span class="OESZ OESZ_Text OESZG_WE010a27c386 ContentBox">Guardar cambios</span>
          </div>
         </div>
         <div id="WEb6929871fe" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEb6929871fe">
           <img src="../Images/icon_db-WEb6929871fe.png" class="OESZ OESZ_Img OESZG_WEb6929871fe" alt="" />
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
    </div>
   </div>
  </div>


 <!-- Fin Cuerpo HTML -->


  <script type="text/javascript" src="../js/admin.js"></script>
 </body>
</html>