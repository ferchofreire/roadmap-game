<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="es">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <title>Administrador</title>
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491112400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="cardeditor.css?v=50491112400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491112400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"cardeditor","Culture":"DEFAULT","LanguageCode":"ES","RelativePath":"","RenderMode":"Export","PageAssociatePath":"cardeditor","EditorTexts":null};
  </script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/1.10.2.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491112400"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491112400"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE710bf1c87c":[{"MsgError":"Please enter your error message.","Expression":"^([0-9]*)$"}]}
  </script>
  <link rel="stylesheet" href="/Files/Other/katex-min.css" />
  <link rel="stylesheet" href="/Files/Other/monokai-sublime-min.css" />
  <link rel="stylesheet" href="/Files/Other/quill-snow.css" /><?php
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
     <div id="WEcaabacaee8" class="BaseDiv RHeight OEWECadre OESK_WECadre_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEcaabacaee8">
       <div class="OESZ OESZ_Top OESZG_WEcaabacaee8"></div>
       <div class="OESZ OESZ_Content OESZG_WEcaabacaee8"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEcaabacaee8"></div>
      </div>
     </div>
     <div id="WE113e4bd6d1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:19">
      <div class="OESZ OESZ_DivContent OESZG_WE113e4bd6d1">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEbeb55d28ad" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEbeb55d28ad">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE86f911e1ee" class="BaseDiv RBoth OEWECadre OESK_WECadre_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE86f911e1ee">
             <div class="OESZ OESZ_Top OESZG_WE86f911e1ee"></div>
             <div class="OESZ OESZ_Content OESZG_WE86f911e1ee"></div>
             <div class="OESZ OESZ_Bottom OESZG_WE86f911e1ee"></div>
            </div>
           </div>
           <div id="WEae70550a78" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WEae70550a78">
             <span class="OESZ OESZ_Text OESZG_WEae70550a78 ContentBox">Matriz de Valores</span>
            </div>
           </div>
           <div id="WEb9c0bd0f97" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:111">
            <div class="OESZ OESZ_DivContent OESZG_WEb9c0bd0f97">
             <select name="blueocean" class="OESZ OESZ_ListBox OESZG_WEb9c0bd0f97 OEDynTag0">
              <option value="0" class="OESZ OESZ_Options OESZG_WEb9c0bd0f97" selected="selected">Create</option>
              <option value="1" class="OESZ OESZ_Options OESZG_WEb9c0bd0f97">Create - Raises/Reduces</option>
              <option value="2" class="OESZ OESZ_Options OESZG_WEb9c0bd0f97">Raises-Reduces</option>
              <option value="3" class="OESZ OESZ_Options OESZG_WEb9c0bd0f97">Eliminate</option>
              <option value="4" class="OESZ OESZ_Options OESZG_WEb9c0bd0f97">Eliminate - Raises/Reduces</option>
             </select>
            </div>
           </div>
           <div id="WE524e215ea2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:112">
            <div class="OESZ OESZ_DivContent OESZG_WE524e215ea2">
             <span class="OESZ OESZ_Text OESZG_WE524e215ea2 ContentBox">Presentación:</span>
            </div>
           </div>
           <div id="WE110cae3ce4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE110cae3ce4">
             <span class="OESZ OESZ_Text OESZG_WE110cae3ce4 ContentBox">(Matriz)</span>
            </div>
           </div>
           <div id="WEe68d14fcd1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEe68d14fcd1">
             <span class="OESZ OESZ_Text OESZG_WEe68d14fcd1 ContentBox">Personal</span>
            </div>
           </div>
           <div id="WE9191542347" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE9191542347">
             <span class="OESZ OESZ_Text OESZG_WE9191542347 ContentBox">Alquileres</span>
            </div>
           </div>
           <div id="WEf926ac3ff8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WEf926ac3ff8">
             <span class="OESZ OESZ_Text OESZG_WEf926ac3ff8 ContentBox">Marketing</span>
            </div>
           </div>
           <div id="WE60e5487a78" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WE60e5487a78">
             <span class="OESZ OESZ_Text OESZG_WE60e5487a78 ContentBox">A, Máq.</span>
            </div>
           </div>
           <div id="WE51850f85af" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WE51850f85af">
             <span class="OESZ OESZ_Text OESZG_WE51850f85af ContentBox">Reparac.</span>
            </div>
           </div>
           <div id="WE3c70aa30f7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE3c70aa30f7">
             <span class="OESZ OESZ_Text OESZG_WE3c70aa30f7 ContentBox">Insumos</span>
            </div>
           </div>
           <div id="WE1698f2ad0b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WE1698f2ad0b">
             <span class="OESZ OESZ_Text OESZG_WE1698f2ad0b ContentBox">G.Oficina</span>
            </div>
           </div>
           <div id="WE37a34de200" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE37a34de200">
             <span class="OESZ OESZ_Text OESZG_WE37a34de200 ContentBox">Otros</span>
            </div>
           </div>
           <div id="WEdb71b1d1e5" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WEdb71b1d1e5">
             <span class="OESZ OESZ_Text OESZG_WEdb71b1d1e5 ContentBox">R. Costo</span>
            </div>
           </div>
           <div id="WE0af3920926" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE0af3920926">
             <span class="OESZ OESZ_Text OESZG_WE0af3920926 ContentBox">R. Precio</span>
            </div>
           </div>
           <div id="WE20738c9abe" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:113">
            <div class="OESZ OESZ_DivContent OESZG_WE20738c9abe">
             <span class="OESZ OESZ_Text OESZG_WE20738c9abe ContentBox">R. Venta</span>
            </div>
           </div>
           <div id="WE710bf1c87c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE710bf1c87c">
             <input name="blueocean" type="text" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WE710bf1c87c OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE0bba09624b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WE0bba09624b">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE0bba09624b OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE61aa57fe1e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE61aa57fe1e">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE61aa57fe1e OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE49cd3fa66f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:18">
            <div class="OESZ OESZ_DivContent OESZG_WE49cd3fa66f">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE49cd3fa66f OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE6f5ac38992" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:19">
            <div class="OESZ OESZ_DivContent OESZG_WE6f5ac38992">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6f5ac38992 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEc3cdff2fef" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:20">
            <div class="OESZ OESZ_DivContent OESZG_WEc3cdff2fef">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEc3cdff2fef OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEd0d362ddfa" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:21">
            <div class="OESZ OESZ_DivContent OESZG_WEd0d362ddfa">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEd0d362ddfa OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEb02faf7e07" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:22">
            <div class="OESZ OESZ_DivContent OESZG_WEb02faf7e07">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEb02faf7e07 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE2039cc920d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:23">
            <div class="OESZ OESZ_DivContent OESZG_WE2039cc920d">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE2039cc920d OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEeb2ddbdca3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:24">
            <div class="OESZ OESZ_DivContent OESZG_WEeb2ddbdca3">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEeb2ddbdca3 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE8ca3be075f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:25">
            <div class="OESZ OESZ_DivContent OESZG_WE8ca3be075f">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE8ca3be075f OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE23571f0cd4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:26">
            <div class="OESZ OESZ_DivContent OESZG_WE23571f0cd4">
             <span class="OESZ OESZ_Text OESZG_WE23571f0cd4 ContentBox">Create</span>
            </div>
           </div>
           <div id="WEf3f0309e50" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:27">
            <div class="OESZ OESZ_DivContent OESZG_WEf3f0309e50">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEf3f0309e50 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEf5a7aa8aac" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:28">
            <div class="OESZ OESZ_DivContent OESZG_WEf5a7aa8aac">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEf5a7aa8aac OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE498186e2e3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:29">
            <div class="OESZ OESZ_DivContent OESZG_WE498186e2e3">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE498186e2e3 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE320d71e319" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:30">
            <div class="OESZ OESZ_DivContent OESZG_WE320d71e319">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE320d71e319 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE13116a6aae" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:31">
            <div class="OESZ OESZ_DivContent OESZG_WE13116a6aae">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE13116a6aae OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE2c9b3faa5b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:32">
            <div class="OESZ OESZ_DivContent OESZG_WE2c9b3faa5b">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE2c9b3faa5b OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE311677ebfd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:33">
            <div class="OESZ OESZ_DivContent OESZG_WE311677ebfd">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE311677ebfd OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEac457e4df2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:34">
            <div class="OESZ OESZ_DivContent OESZG_WEac457e4df2">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEac457e4df2 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEd14a693462" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:35">
            <div class="OESZ OESZ_DivContent OESZG_WEd14a693462">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEd14a693462 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE7308ba00c3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:36">
            <div class="OESZ OESZ_DivContent OESZG_WE7308ba00c3">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE7308ba00c3 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEb9cddac52e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:37">
            <div class="OESZ OESZ_DivContent OESZG_WEb9cddac52e">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEb9cddac52e OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE1d17ed27de" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:38">
            <div class="OESZ OESZ_DivContent OESZG_WE1d17ed27de">
             <span class="OESZ OESZ_Text OESZG_WE1d17ed27de ContentBox">Eliminate</span>
            </div>
           </div>
           <div id="WE50e4b8111a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:39">
            <div class="OESZ OESZ_DivContent OESZG_WE50e4b8111a">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE50e4b8111a OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE8738fa3dc2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:40">
            <div class="OESZ OESZ_DivContent OESZG_WE8738fa3dc2">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE8738fa3dc2 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEc6935d2ac2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:41">
            <div class="OESZ OESZ_DivContent OESZG_WEc6935d2ac2">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEc6935d2ac2 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEcab18c324d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:42">
            <div class="OESZ OESZ_DivContent OESZG_WEcab18c324d">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEcab18c324d OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE97d9a28fa2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:43">
            <div class="OESZ OESZ_DivContent OESZG_WE97d9a28fa2">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE97d9a28fa2 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE772ff80298" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:44">
            <div class="OESZ OESZ_DivContent OESZG_WE772ff80298">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE772ff80298 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEc76a2c7a40" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:45">
            <div class="OESZ OESZ_DivContent OESZG_WEc76a2c7a40">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEc76a2c7a40 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE8b64a7c4cb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:46">
            <div class="OESZ OESZ_DivContent OESZG_WE8b64a7c4cb">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE8b64a7c4cb OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEae9f25a79e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:47">
            <div class="OESZ OESZ_DivContent OESZG_WEae9f25a79e">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEae9f25a79e OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEe046bfc6f9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:48">
            <div class="OESZ OESZ_DivContent OESZG_WEe046bfc6f9">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEe046bfc6f9 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEecdf119254" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:49">
            <div class="OESZ OESZ_DivContent OESZG_WEecdf119254">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEecdf119254 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE9d03c1d899" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:50">
            <div class="OESZ OESZ_DivContent OESZG_WE9d03c1d899">
             <span class="OESZ OESZ_Text OESZG_WE9d03c1d899 ContentBox">Raise Mucho</span>
            </div>
           </div>
           <div id="WEfe2a111367" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:51">
            <div class="OESZ OESZ_DivContent OESZG_WEfe2a111367">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEfe2a111367 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE1157e1de46" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:52">
            <div class="OESZ OESZ_DivContent OESZG_WE1157e1de46">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE1157e1de46 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE6ab6ee4a70" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:53">
            <div class="OESZ OESZ_DivContent OESZG_WE6ab6ee4a70">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6ab6ee4a70 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEf46158145b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:54">
            <div class="OESZ OESZ_DivContent OESZG_WEf46158145b">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEf46158145b OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEaf65e8c9f1" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:55">
            <div class="OESZ OESZ_DivContent OESZG_WEaf65e8c9f1">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEaf65e8c9f1 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE237cc88bde" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:56">
            <div class="OESZ OESZ_DivContent OESZG_WE237cc88bde">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE237cc88bde OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE5158d27129" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:57">
            <div class="OESZ OESZ_DivContent OESZG_WE5158d27129">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE5158d27129 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE5973bc1c34" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:58">
            <div class="OESZ OESZ_DivContent OESZG_WE5973bc1c34">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE5973bc1c34 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEd4e58913f3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:59">
            <div class="OESZ OESZ_DivContent OESZG_WEd4e58913f3">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEd4e58913f3 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE1659340582" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:60">
            <div class="OESZ OESZ_DivContent OESZG_WE1659340582">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE1659340582 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEc150bfdf60" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:61">
            <div class="OESZ OESZ_DivContent OESZG_WEc150bfdf60">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEc150bfdf60 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEaa417b02ce" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:62">
            <div class="OESZ OESZ_DivContent OESZG_WEaa417b02ce">
             <span class="OESZ OESZ_Text OESZG_WEaa417b02ce ContentBox">Raise Moderado</span>
            </div>
           </div>
           <div id="WEee19450d42" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:63">
            <div class="OESZ OESZ_DivContent OESZG_WEee19450d42">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEee19450d42 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEef67cafc01" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:64">
            <div class="OESZ OESZ_DivContent OESZG_WEef67cafc01">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEef67cafc01 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE6466ae2228" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:65">
            <div class="OESZ OESZ_DivContent OESZG_WE6466ae2228">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6466ae2228 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE72415bc125" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:66">
            <div class="OESZ OESZ_DivContent OESZG_WE72415bc125">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE72415bc125 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE76a753df8b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:67">
            <div class="OESZ OESZ_DivContent OESZG_WE76a753df8b">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE76a753df8b OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE432a6fa58b" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:68">
            <div class="OESZ OESZ_DivContent OESZG_WE432a6fa58b">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE432a6fa58b OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE7203638b7e" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:69">
            <div class="OESZ OESZ_DivContent OESZG_WE7203638b7e">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE7203638b7e OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEdd19ac6211" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:70">
            <div class="OESZ OESZ_DivContent OESZG_WEdd19ac6211">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEdd19ac6211 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE91ca32d450" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:71">
            <div class="OESZ OESZ_DivContent OESZG_WE91ca32d450">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE91ca32d450 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE35600594d9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:72">
            <div class="OESZ OESZ_DivContent OESZG_WE35600594d9">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE35600594d9 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE15dae68486" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:73">
            <div class="OESZ OESZ_DivContent OESZG_WE15dae68486">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE15dae68486 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEbf5a908a10" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:74">
            <div class="OESZ OESZ_DivContent OESZG_WEbf5a908a10">
             <span class="OESZ OESZ_Text OESZG_WEbf5a908a10 ContentBox">Raise Poco</span>
            </div>
           </div>
           <div id="WE6b59ba335d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:78">
            <div class="OESZ OESZ_DivContent OESZG_WE6b59ba335d">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6b59ba335d OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEa3c0ac4bf0" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:79">
            <div class="OESZ OESZ_DivContent OESZG_WEa3c0ac4bf0">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEa3c0ac4bf0 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE2034c692ab" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:80">
            <div class="OESZ OESZ_DivContent OESZG_WE2034c692ab">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE2034c692ab OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE08998bb3d2" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:81">
            <div class="OESZ OESZ_DivContent OESZG_WE08998bb3d2">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE08998bb3d2 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE2a488a6a7f" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:82">
            <div class="OESZ OESZ_DivContent OESZG_WE2a488a6a7f">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE2a488a6a7f OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE80eead7673" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:83">
            <div class="OESZ OESZ_DivContent OESZG_WE80eead7673">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE80eead7673 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE0b13341ee5" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:84">
            <div class="OESZ OESZ_DivContent OESZG_WE0b13341ee5">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE0b13341ee5 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE59d7c5309a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:85">
            <div class="OESZ OESZ_DivContent OESZG_WE59d7c5309a">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE59d7c5309a OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEa62189ab76" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:86">
            <div class="OESZ OESZ_DivContent OESZG_WEa62189ab76">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEa62189ab76 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEca833a1747" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:87">
            <div class="OESZ OESZ_DivContent OESZG_WEca833a1747">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEca833a1747 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEbbe79617b4" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:88">
            <div class="OESZ OESZ_DivContent OESZG_WEbbe79617b4">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEbbe79617b4 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE34385bf0b1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:75">
            <div class="OESZ OESZ_DivContent OESZG_WE34385bf0b1">
             <span class="OESZ OESZ_Text OESZG_WE34385bf0b1 ContentBox">Reduces-Poco</span>
            </div>
           </div>
           <div id="WE9be20f7451" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:89">
            <div class="OESZ OESZ_DivContent OESZG_WE9be20f7451">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE9be20f7451 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE6250fbc627" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:90">
            <div class="OESZ OESZ_DivContent OESZG_WE6250fbc627">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6250fbc627 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE9d841aa375" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:91">
            <div class="OESZ OESZ_DivContent OESZG_WE9d841aa375">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE9d841aa375 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE1ce90e3258" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:92">
            <div class="OESZ OESZ_DivContent OESZG_WE1ce90e3258">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE1ce90e3258 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE4ac6b54f79" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:93">
            <div class="OESZ OESZ_DivContent OESZG_WE4ac6b54f79">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE4ac6b54f79 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEb79808d731" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:94">
            <div class="OESZ OESZ_DivContent OESZG_WEb79808d731">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEb79808d731 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEf2e2f304f8" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:95">
            <div class="OESZ OESZ_DivContent OESZG_WEf2e2f304f8">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEf2e2f304f8 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEcce6d594e3" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:96">
            <div class="OESZ OESZ_DivContent OESZG_WEcce6d594e3">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEcce6d594e3 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE0dd9301424" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:97">
            <div class="OESZ OESZ_DivContent OESZG_WE0dd9301424">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE0dd9301424 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE100c6efa29" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:98">
            <div class="OESZ OESZ_DivContent OESZG_WE100c6efa29">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE100c6efa29 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE7615525d1a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:99">
            <div class="OESZ OESZ_DivContent OESZG_WE7615525d1a">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE7615525d1a OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEee97b98a9f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:76">
            <div class="OESZ OESZ_DivContent OESZG_WEee97b98a9f">
             <span class="OESZ OESZ_Text OESZG_WEee97b98a9f ContentBox">Reduces Moderado</span>
            </div>
           </div>
           <div id="WEc5ba4bfccb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:100">
            <div class="OESZ OESZ_DivContent OESZG_WEc5ba4bfccb">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEc5ba4bfccb OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE77b74c4646" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:101">
            <div class="OESZ OESZ_DivContent OESZG_WE77b74c4646">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE77b74c4646 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE3c4dffe26c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:102">
            <div class="OESZ OESZ_DivContent OESZG_WE3c4dffe26c">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE3c4dffe26c OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE2b635e8a52" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:103">
            <div class="OESZ OESZ_DivContent OESZG_WE2b635e8a52">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE2b635e8a52 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE1db4360b5a" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:104">
            <div class="OESZ OESZ_DivContent OESZG_WE1db4360b5a">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE1db4360b5a OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE6a51f7f408" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:105">
            <div class="OESZ OESZ_DivContent OESZG_WE6a51f7f408">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE6a51f7f408 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEfe8bfb0a84" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:106">
            <div class="OESZ OESZ_DivContent OESZG_WEfe8bfb0a84">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEfe8bfb0a84 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE9d9487f8eb" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:107">
            <div class="OESZ OESZ_DivContent OESZG_WE9d9487f8eb">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WE9d9487f8eb OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEb9fd69f50d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:108">
            <div class="OESZ OESZ_DivContent OESZG_WEb9fd69f50d">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEb9fd69f50d OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEbfbde314d6" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:109">
            <div class="OESZ OESZ_DivContent OESZG_WEbfbde314d6">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEbfbde314d6 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WEd34a000113" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:110">
            <div class="OESZ OESZ_DivContent OESZG_WEd34a000113">
             <input name="blueocean" type="text" class="OESZ OESZ_TextBox OESZG_WEd34a000113 OEDynTag0" value="0" />
            </div>
           </div>
           <div id="WE30826e5241" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:77">
            <div class="OESZ OESZ_DivContent OESZG_WE30826e5241">
             <span class="OESZ OESZ_Text OESZG_WE30826e5241 ContentBox">Reduce Mucho</span>
            </div>
           </div>
           <div id="WEc8ae6d8534" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:118">
            <div class="OESZ OESZ_DivContent OESZG_WEc8ae6d8534">
             <input name="testv" type="text" class="OESZ OESZ_TextBox OESZG_WEc8ae6d8534 OEDynTag0" />
            </div>
           </div>
           <div id="WE573617c99c" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:115">
            <div class="OESZ OESZ_DivContent OESZG_WE573617c99c">
             <select name="testc" class="OESZ OESZ_ListBox OESZG_WE573617c99c OEDynTag0">
              <option value="no" class="OESZ OESZ_Options OESZG_WE573617c99c" selected="selected">none</option>
             </select>
            </div>
           </div>
           <div id="WE81f838f3ef" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:123">
            <div class="OESZ OESZ_DivContent OESZG_WE81f838f3ef">
             <input name="grafico" type="text" class="OESZ OESZ_TextBox OESZG_WE81f838f3ef OEDynTag0" />
            </div>
           </div>
           <div id="WEe3a920328d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:124">
            <div class="OESZ OESZ_DivContent OESZG_WEe3a920328d">
             <input name="grafico" type="text" class="OESZ OESZ_TextBox OESZG_WEe3a920328d OEDynTag0" />
            </div>
           </div>
           <div id="WEf4a6cf4623" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:114">
            <div class="OESZ OESZ_DivContent OESZG_WEf4a6cf4623">
             <span class="OESZ OESZ_Text OESZG_WEf4a6cf4623 ContentBox">Test Cards:</span>
            </div>
           </div>
           <div id="WEc7953dba23" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:121">
            <div class="OESZ OESZ_DivContent OESZG_WEc7953dba23">
             <span class="OESZ OESZ_Text OESZG_WEc7953dba23 ContentBox">G. Standar:<br /></span>
            </div>
           </div>
           <div id="WEb586220670" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:122">
            <div class="OESZ OESZ_DivContent OESZG_WEb586220670">
             <span class="OESZ OESZ_Text OESZG_WEb586220670 ContentBox">G. Variante:</span>
            </div>
           </div>
           <div id="WE83a3ba9bee" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:119">
            <div class="OESZ OESZ_DivContent OESZG_WE83a3ba9bee">
             <input name="testv" type="text" class="OESZ OESZ_TextBox OESZG_WE83a3ba9bee OEDynTag0" />
            </div>
           </div>
           <div id="WE8ae29233d3" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:116">
            <div class="OESZ OESZ_DivContent OESZG_WE8ae29233d3">
             <select name="testc" class="OESZ OESZ_ListBox OESZG_WE8ae29233d3 OEDynTag0">
              <option value="no" class="OESZ OESZ_Options OESZG_WE8ae29233d3" selected="selected">none</option>
             </select>
            </div>
           </div>
           <div id="WEde4ead188c" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEde4ead188c">
             <a href="javascript:Panel(0)">
              <div class="OECT OECT_Content OECTAbs OEDynTag0">
               <div id="WE11a8d90ac3" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WE11a8d90ac3">
                 <img src="WEFiles/Image/WEImage/icon_db-WEdb410ebd1d.png" class="OESZ OESZ_Img OESZG_WE11a8d90ac3" alt="" />
                </div>
               </div>
               <div id="WEeec3e934be" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WEeec3e934be">
                 <span class="OESZ OESZ_Text OESZG_WEeec3e934be ContentBox">Ok</span>
                </div>
               </div>
              </div>
             </a>
            </div>
           </div>
           <div id="WEf69bdad797" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:117">
            <div class="OESZ OESZ_DivContent OESZG_WEf69bdad797">
             <select name="testc" class="OESZ OESZ_ListBox OESZG_WEf69bdad797 OEDynTag0">
              <option value="no" class="OESZ OESZ_Options OESZG_WEf69bdad797" selected="selected">none</option>
             </select>
            </div>
           </div>
           <div id="WEb76f862f8d" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:120">
            <div class="OESZ OESZ_DivContent OESZG_WEb76f862f8d">
             <input name="testv" type="text" class="OESZ OESZ_TextBox OESZG_WEb76f862f8d OEDynTag0" />
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEcc1be054f1" class="BaseDiv RBoth OEWECodeBlock OESK_WECodeBlock_Default OECenterAB" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEcc1be054f1">
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
        <div id="WE884ce09680" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAB rotate-in-2-cw" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE884ce09680">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE10102d8768" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAV" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE10102d8768">
             <div class="OECT OECT_Content OECTRel OEDynTag0">
              <div class="OERelLine OEHAlignL OEVAlignB">
               <div id="WE5685210222" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
                <div class="OESZ OESZ_DivContent OESZG_WE5685210222">
                 <span class="OESZ OESZ_Text OESZG_WE5685210222 ContentBox">Titulo Tarjeta:</span>
                </div>
               </div>
              </div>
              <div class="OERelLine OEHAlignC OEVAlignB">
               <div id="WEd6f9cb823b" class="BaseDiv RNone OEWEText OESK_WEText_Default" style="z-index:2">
                <div class="OESZ OESZ_DivContent OESZG_WEd6f9cb823b">
                 <span class="ContentBox">Todo el texto que llevaría la tarjeta<br />que no se si es corto<br />o si es largo, no importa, hay que escribir, y escribir, y escribir y escribir<br />My multi-line text<br />My multi-line text<br />My multi-line text<br />My multi-line text<br /></span>
                </div>
               </div>
              </div>
             </div>
            </div>
           </div>
           <div id="WEb797111126" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WEb797111126">
             <a href="javascript:MostrarTarjeta(false)">
              <img src="WEFiles/Image/WEImage/icon_delete-WE2abbafa4c9.png" class="OESZ OESZ_Img OESZG_WEb797111126" alt="" />
             </a>
            </div>
           </div>
           <div id="WEd294d44ec0" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WEd294d44ec0">
             <span class="OESZ OESZ_Text OESZG_WEd294d44ec0 ContentBox">10</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE05a2a07d19" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE05a2a07d19">
          <a href="javascript:Panel(0)">
           <img src="Files/Image/delete_big.png" class="OESZ OESZ_Img OESZG_WE05a2a07d19" alt="" />
          </a>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEc15c6f00d2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
      <div class="OESZ OESZ_DivContent OESZG_WEc15c6f00d2">
       <span class="OESZ OESZ_Text OESZG_WEc15c6f00d2 ContentBox">Valores</span>
      </div>
     </div>
     <div id="WE32ae3da7e1" class="BaseDiv RHeight OEWEPanel OESK_WEPanel_Default" style="z-index:6">
      <div class="OESZ OESZ_DivContent OESZG_WE32ae3da7e1">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE0a0a5a606c" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE0a0a5a606c">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE0a0a5a606c OEDynTag0" name="WE0a0a5a606c" value="Field value" />
         </div>
        </div>
        <div id="WE840da5048b" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE840da5048b">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE840da5048b OEDynTag0" name="WE840da5048b" value="Field value" />
         </div>
        </div>
        <div id="WEd0c739e1a2" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WEd0c739e1a2">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WEd0c739e1a2 OEDynTag0" name="WEd0c739e1a2" value="Field value" />
         </div>
        </div>
        <div id="WE02f5e5cc19" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE02f5e5cc19">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE02f5e5cc19 OEDynTag0" name="WE02f5e5cc19" value="Field value" />
         </div>
        </div>
        <div id="WE79a1aa4e6b" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE79a1aa4e6b">
          <span class="OESZ OESZ_Text OESZG_WE79a1aa4e6b ContentBox">Número</span>
         </div>
        </div>
        <div id="WEdae279e3ef" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEdae279e3ef">
          <span class="OESZ OESZ_Text OESZG_WEdae279e3ef ContentBox">Sprint</span>
         </div>
        </div>
        <div id="WE6042160949" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE6042160949">
          <span class="OESZ OESZ_Text OESZG_WE6042160949 ContentBox">tipo valor:</span>
         </div>
        </div>
        <div id="WE5a98c57517" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WE5a98c57517">
          <span class="OESZ OESZ_Text OESZG_WE5a98c57517 ContentBox">How</span>
         </div>
        </div>
        <div id="WEb1f85c40c8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WEb1f85c40c8">
          <span class="OESZ OESZ_Text OESZG_WEb1f85c40c8 ContentBox">Who</span>
         </div>
        </div>
        <div id="WE2aac317c64" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE2aac317c64">
          <span class="OESZ OESZ_Text OESZG_WE2aac317c64 ContentBox">Why</span>
         </div>
        </div>
        <div id="WE81804ab293" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WE81804ab293">
          <span class="OESZ OESZ_Text OESZG_WE81804ab293 ContentBox">What</span>
         </div>
        </div>
        <div id="WE724ea9636b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE724ea9636b">
          <a href="javascript:Panel(1)">
           <div class="OECT OECT_Content OECTAbs OEDynTag0">
            <div id="WEafec62c972" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
             <div class="OESZ OESZ_DivContent OESZG_WEafec62c972">
              <img src="WEFiles/Image/WEImage/icon_db-WEb6929871fe.png" class="OESZ OESZ_Img OESZG_WEafec62c972" alt="" />
             </div>
            </div>
            <div id="WE5be6d7ac43" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
             <div class="OESZ OESZ_DivContent OESZG_WE5be6d7ac43">
              <span class="OESZ OESZ_Text OESZG_WE5be6d7ac43 ContentBox">Matriz</span>
             </div>
            </div>
           </div>
          </a>
         </div>
        </div>
        <div id="WE5ef0d9a6d9" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE5ef0d9a6d9">
          <input name="Values" type="text" class="OESZ OESZ_TextBox OESZG_WE5ef0d9a6d9 OEDynTag0" />
         </div>
        </div>
        <div id="WEd10c403a27" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WEd10c403a27">
          <input name="Values" type="text" class="OESZ OESZ_TextBox OESZG_WEd10c403a27 OEDynTag0" />
         </div>
        </div>
        <div id="WEe9b469dcd7" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WEe9b469dcd7">
          <select name="Values" class="OESZ OESZ_ListBox OESZG_WEe9b469dcd7 OEDynTag0">
           <option value="1" class="OESZ OESZ_Options OESZG_WEe9b469dcd7" selected="selected">Sprint 1</option>
           <option value="2" class="OESZ OESZ_Options OESZG_WEe9b469dcd7">Sprint 2</option>
           <option value="3" class="OESZ OESZ_Options OESZG_WEe9b469dcd7">Sprint 3</option>
           <option value="4" class="OESZ OESZ_Options OESZG_WEe9b469dcd7">Sprint 4</option>
           <option value="5" class="OESZ OESZ_Options OESZG_WEe9b469dcd7">Sprint 5</option>
           <option value="6" class="OESZ OESZ_Options OESZG_WEe9b469dcd7">Sprint 6</option>
          </select>
         </div>
        </div>
        <div id="WEe6bfb78a20" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEe6bfb78a20">
          <select name="Values" class="OESZ OESZ_ListBox OESZG_WEe6bfb78a20 OEDynTag0">
           <option value="0" class="OESZ OESZ_Options OESZG_WEe6bfb78a20" selected="selected">Trend/Pattern/Test</option>
           <option value="1" class="OESZ OESZ_Options OESZG_WEe6bfb78a20">Blue Ocean</option>
          </select>
         </div>
        </div>
        <div id="WE1250e59eb6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE1250e59eb6">
          <span class="OESZ OESZ_Text OESZG_WE1250e59eb6 ContentBox">Valor:</span>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEd139de576f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
      <div class="OESZ OESZ_DivContent OESZG_WEd139de576f">
       <a href="javascript:window.history.back();">
        <img src="WEFiles/Image/WEImage/logo-WE19cd5b5fbc.png" class="OESZ OESZ_Img OESZG_WEd139de576f" alt="" />
       </a>
      </div>
     </div>
     <div id="WE59e2c61607" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default OEGo" style="z-index:20">
      <div class="OESZ OESZ_DivContent OESZG_WE59e2c61607">
       <a href="javascript:window.history.back();">
        <img src="WEFiles/Image/WEImage/despleg-WE59e2c61607.png" class="OESZ OESZ_Img OESZG_WE59e2c61607" alt="" />
       </a>
      </div>
     </div>
     <div id="WEa844cf6429" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:5">
      <div class="OESZ OESZ_DivContent OESZG_WEa844cf6429">
       <span class="OESZ OESZ_Text OESZG_WEa844cf6429 ContentBox">Editor Cartas de Juego</span>
      </div>
     </div>
     <div id="WEdcd7638c38" class="BaseDiv RNone OEWERadioButtonListV2 OESK_WERadioButtonList2_Default" style="z-index:10">
      <div class="OESZ OESZ_DivContent OESZG_WEdcd7638c38">
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="1" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S1</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="2" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S2</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="3" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S3</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="4" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S4</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="5" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S5</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="6" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">S6</span>
       <input type="radio" class="OESZ OESZ_RadioButton OESZG_WEdcd7638c38" name="WEdcd7638c38" value="*" checked="checked" />
       <span class="OESZ OESZ_RadioTitle OESZG_WEdcd7638c38">all</span>
      </div>
     </div>
     <div id="WEb5f790877b" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:9">
      <div class="OESZ OESZ_DivContent OESZG_WEb5f790877b">
       <span class="OESZ OESZ_Text OESZG_WEb5f790877b ContentBox">Cards</span>
      </div>
     </div>
     <div id="WE47c3689b00" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:15">
      <div class="OESZ OESZ_DivContent OESZG_WE47c3689b00">
       <img src="WEFiles/Image/WEImage/icon_cards-WE47c3689b00.png" class="OESZ OESZ_Img OESZG_WE47c3689b00" alt="" />
      </div>
     </div>
     <div id="WE7fadf946c0" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:12">
      <div class="OESZ OESZ_DivContent OESZG_WE7fadf946c0">
       <span class="OESZ OESZ_Text OESZG_WE7fadf946c0 ContentBox">Contenido</span>
      </div>
     </div>
     <div id="WEec2eba5cc1" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:13">
      <div class="OESZ OESZ_DivContent OESZG_WEec2eba5cc1">
       <img src="WEFiles/Image/WEImage/icon_chess-WE699ecc8d01.png" class="OESZ OESZ_Img OESZG_WEec2eba5cc1" alt="" />
      </div>
     </div>
     <div id="WE2604866d5d" class="BaseDiv RWidth OEWEPanel OESK_WEPanel_Default" style="z-index:7">
      <div class="OESZ OESZ_DivContent OESZG_WE2604866d5d">
       <div class="OECT OECT_Content OECTRel OEDynTag0">
        <div class="OERelLine OEHAlignC OEVAlignT">
         <div id="WE24ac5fb449" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE24ac5fb449">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
             <div id="WE9501e057ab" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE9501e057ab">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE439beceeaa" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE439beceeaa">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE439beceeaa" alt="" />
                 </div>
                </div>
                <div id="WE964b5a4de4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE964b5a4de4">
                  <span class="OESZ OESZ_Text OESZG_WE964b5a4de4 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WEbac39adbbf" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WEbac39adbbf">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WEe928c8a0e0" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WEe928c8a0e0">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WEb6f8c8a7ae" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WEb6f8c8a7ae">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WEb6f8c8a7ae" alt="" />
                 </div>
                </div>
                <div id="WE6293e3d71c" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE6293e3d71c">
                  <span class="OESZ OESZ_Text OESZG_WE6293e3d71c ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WEc48f8940ff" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:3">
          <div class="OESZ OESZ_DivContent OESZG_WEc48f8940ff">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE3a121eeca1" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE3a121eeca1">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE66fe264720" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE66fe264720">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE66fe264720" alt="" />
                 </div>
                </div>
                <div id="WEe219799066" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WEe219799066">
                  <span class="OESZ OESZ_Text OESZG_WEe219799066 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WE1e54b23e78" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:4">
          <div class="OESZ OESZ_DivContent OESZG_WE1e54b23e78">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WEa5f0c3aa66" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WEa5f0c3aa66">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE5e1fcbb45a" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE5e1fcbb45a">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE5e1fcbb45a" alt="" />
                 </div>
                </div>
                <div id="WE35c9e260f8" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE35c9e260f8">
                  <span class="OESZ OESZ_Text OESZG_WE35c9e260f8 ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WE213b6229cc" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:5">
          <div class="OESZ OESZ_DivContent OESZG_WE213b6229cc">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WEf5bb197a60" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WEf5bb197a60">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE0f03ba80fc" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE0f03ba80fc">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE0f03ba80fc" alt="" />
                 </div>
                </div>
                <div id="WE1d82e4554e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE1d82e4554e">
                  <span class="OESZ OESZ_Text OESZG_WE1d82e4554e ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
              </div>
             </div>
            </div>
           </a>
          </div>
         </div><div id="WEf8fe6e9b6b" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:6" title="Editor Cards">
          <div class="OESZ OESZ_DivContent OESZG_WEf8fe6e9b6b">
           <a href="javascript:cargar(2)">
            <div class="OECT OECT_Content OECTAbs OEDynTag0">
             <div id="WE8359a5612e" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
              <div class="OESZ OESZ_DivContent OESZG_WE8359a5612e">
               <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">
                <div id="WE03653e3eb0" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
                 <div class="OESZ OESZ_DivContent OESZG_WE03653e3eb0">
                  <img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE03653e3eb0" alt="" />
                 </div>
                </div>
                <div id="WE06a3a4e52a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
                 <div class="OESZ OESZ_DivContent OESZG_WE06a3a4e52a">
                  <span class="OESZ OESZ_Text OESZG_WE06a3a4e52a ContentBox">Titulo Card Demo 1<br /></span>
                 </div>
                </div>
               </div>
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
     <div id="WE432d40d352" class="BaseDiv RNone OEWEPanel OESK_WEPanel_Default" style="z-index:4">
      <div class="OESZ OESZ_DivContent OESZG_WE432d40d352">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WE0104cb32f9" class="BaseDiv RNone OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE0104cb32f9">
          <input name="WE0104cb32f9" type="text" placeholder="Titulo Tarjeta" class="OESZ OESZ_TextBox OESZG_WE0104cb32f9 OEDynTag0" />
         </div>
        </div>
        <div id="WE952b7e18e8" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE952b7e18e8">
          <select name="WE952b7e18e8" class="OESZ OESZ_ListBox OESZG_WE952b7e18e8 OEDynTag0">
           <option value="es" class="OESZ OESZ_Options OESZG_WE952b7e18e8" selected="selected">Español</option>
           <option value="en" class="OESZ OESZ_Options OESZG_WE952b7e18e8">Ingles</option>
           <option value="pr" class="OESZ OESZ_Options OESZG_WE952b7e18e8">Portugues</option>
          </select>
         </div>
        </div>
       </div>
      </div>
     </div>
     <div id="WEc266c04b43" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:3">
      <div class="OESZ OESZ_DivContent OESZG_WEc266c04b43">
       <a href="javascript:NuevaCarta()">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE4c605692f7" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE4c605692f7">
           <img src="WEFiles/Image/WEImage/econ_edit-WE4c605692f7.png" class="OESZ OESZ_Img OESZG_WE4c605692f7" alt="" />
          </div>
         </div>
         <div id="WE5510e3cde7" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WE5510e3cde7">
           <span class="OESZ OESZ_Text OESZG_WE5510e3cde7 ContentBox">Nueva Carta</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEef73a4a8d4" class="BaseDiv RHeight OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:17">
      <div class="OESZ OESZ_DivContent OESZG_WEef73a4a8d4">
       <div id="standalone-container">
         <div id="toolbar-container">
           <span class="ql-formats">
             <select class="ql-font"></select>
             <select class="ql-size"></select>
           </span>
           <span class="ql-formats">
             <button class="ql-bold"></button>
             <button class="ql-italic"></button>
             <button class="ql-underline"></button>
             <button class="ql-strike"></button>
           </span>
           <span class="ql-formats">
             <select class="ql-color"></select>
             <select class="ql-background"></select>
           </span>
           <span class="ql-formats">
             <button class="ql-script" value="sub"></button>
             <button class="ql-script" value="super"></button>
           </span>
           <span class="ql-formats">
             <button class="ql-header" value="1"></button>
             <button class="ql-header" value="2"></button>
             <button class="ql-blockquote"></button>
             <button class="ql-code-block"></button>
           </span>
           <span class="ql-formats">
             <button class="ql-list" value="ordered"></button>
             <button class="ql-list" value="bullet"></button>
             <button class="ql-indent" value="-1"></button>
             <button class="ql-indent" value="+1"></button>
           </span>
           <span class="ql-formats">
             <button class="ql-direction" value="rtl"></button>
             <select class="ql-align"></select>
           </span>
           <span class="ql-formats">
             <button class="ql-link"></button>
             <button class="ql-image"></button>
             <button class="ql-video"></button>
             <button class="ql-formula"></button>
           </span>
           <span class="ql-formats">
             <button class="ql-clean"></button>
           </span>
         </div>
       </div>
         
       <!--
         <div id="editor-container" style="position: absolute;left: 200px;top: 220px;bottom: 170px;right: 250px;width: auto;height: auto;" ></div>
       
       -->
      </div>
     </div>
     <div id="WEde65aa7f31" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:18">
      <div class="OESZ OESZ_DivContent OESZG_WEde65aa7f31">
       <a href="javascript:Panel(3)">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE352f4884bd" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE352f4884bd">
           <img src="WEFiles/Image/WEImage/icon_tarj-WE352f4884bd.png" class="OESZ OESZ_Img OESZG_WE352f4884bd" alt="" />
          </div>
         </div>
         <div id="WEa22bc9450e" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEa22bc9450e">
           <span class="OESZ OESZ_Text OESZG_WEa22bc9450e ContentBox">Preview</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEtxcontainer" class="BaseDiv RNone OEWECadre OESK_WECadre_Default" style="z-index:16">
      <div class="OESZ OESZ_DivContent OESZG_WEtxcontainer">
       <div class="OESZ OESZ_Top OESZG_WEtxcontainer"></div>
       <div class="OESZ OESZ_Content OESZG_WEtxcontainer"></div>
       <div class="OESZ OESZ_Bottom OESZG_WEtxcontainer"></div>
      </div>
     </div>
     <div id="WE939a8d2ee2" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:21">
      <div class="OESZ OESZ_DivContent OESZG_WE939a8d2ee2">
       <a href="javascript:Panel(3)">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WE1fb8ab27fa" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE1fb8ab27fa">
           <img src="WEFiles/Image/WEImage/delete_big-WE1fb8ab27fa.png" class="OESZ OESZ_Img OESZG_WE1fb8ab27fa" alt="" />
          </div>
         </div>
         <div id="WEab82dc4fae" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEab82dc4fae">
           <span class="OESZ OESZ_Text OESZG_WEab82dc4fae ContentBox">Eliminar Card</span>
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEf342f503ee" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OEGo" style="z-index:11">
      <div class="OESZ OESZ_DivContent OESZG_WEf342f503ee">
       <a href="javascript:GuardarCambios()">
        <div class="OECT OECT_Content OECTAbs OEDynTag0">
         <div id="WEba6ca52814" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
          <div class="OESZ OESZ_DivContent OESZG_WEba6ca52814">
           <span class="OESZ OESZ_Text OESZG_WEba6ca52814 ContentBox">Guardar Cambios</span>
          </div>
         </div>
         <div id="WE93ea15a995" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">
          <div class="OESZ OESZ_DivContent OESZG_WE93ea15a995">
           <img src="WEFiles/Image/WEImage/icon_db-WEb6929871fe.png" class="OESZ OESZ_Img OESZG_WE93ea15a995" alt="" />
          </div>
         </div>
        </div>
       </a>
      </div>
     </div>
     <div id="WEdd2bc6f42f" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:14">
      <div class="OESZ OESZ_DivContent OESZG_WEdd2bc6f42f">
       <img src="WEFiles/Image/WEImage/icon_jug-WEb6b1ae892d.png" class="OESZ OESZ_Img OESZG_WEdd2bc6f42f" alt="" />
      </div>
     </div>
    </div>
   </div>
  </div>
  <script type="text/javascript">
   SprintColors = ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216"]
   
   const FondoFlotante = document.getElementById("WE113e4bd6d1");
   
   const Panel_Matriz = document.getElementById("WEbeb55d28ad");
   const PreviewCards = document.getElementById("WE884ce09680");
   var idcard;
   
   const LoadingIcon = FondoFlotante.children[0].children[0].children[1];
   
   FondoFlotante.setAttribute("style","z-index:3050;")
   document.getElementById("WEe6bfb78a20").setAttribute("onChange","OpTipo()");
   
   function Panel(Pan){
   	switch(Pan){
   		case 0:
   			FondoFlotante.style.visibility = "hidden";
   			Panel_Matriz.style.visibility = "hidden";			
   			LoadingIcon.style.visibility = "hidden";
   			PreviewCards.style.visibility = "hidden";
   		break;
   		case 1:
   			FondoFlotante.style.visibility = "visible";
   			Panel_Matriz.style.visibility = "visible";
   		break;	
   		case 2:
   			Panel_Matriz.style.visibility = "hidden";
   			FondoFlotante.style.visibility = "visible";
   			LoadingIcon.style.visibility = "visible";
   		break;	
   		case 3:
   			Panel(0);
   			FondoFlotante.style.visibility = "visible";
   			PreviewCards.style.visibility = "visible";
   			previewCardView()
   		break;
   }
   }
   
   
   
   OpTipo = () => {
   		
   		document.getElementById("WE724ea9636b").style.visibility = (document.getElementById("WEe6bfb78a20").children[0].children[0].value != 0) ? "visible" : "hidden";
   }
   Panel(0)
   
   OpLang = () => {
   		
   		ContentCard[lang] = quill.container.firstChild.innerHTML;
   		if (ContentCard != null){
   			lang = document.getElementById('WE952b7e18e8').children[0].children[0].value
   			quill.container.firstChild.innerHTML = ContentCard[lang];
   		}
   }
   
   function previewCardView(){
   
   	//document.getElementById('WE10102d8768')
   	
   	document.getElementById('WE5685210222').children[0].children[0].innerText = document.getElementById('WE0104cb32f9').children[0].children[0].value
   	document.getElementById('WEd6f9cb823b').children[0].children[0].innerHTML = quill.container.firstChild.innerHTML;
   	document.getElementById('WEd294d44ec0').children[0].children[0].innerText = document.getElementById('WE5ef0d9a6d9').children[0].children[0].value
   
   	
   	// Titulo: WE5685210222
   	// // contenido: WEd6f9cb823b
   	// // Numero Tarj: WEd294d44ec0
   		
   		
   }
   
   
   //Flotante.style.visibility = "visible";
   // Referencia a paneles de listas:
   
   const _ListaCardsDOM = document.getElementById("WE2604866d5d").children[0].children[0].children[0];
   const _ListaPartidasDOM = document.getElementById("WE432d40d352").children[0].children[0].children[0];
   
   // Boton de guardado:
   const _BtnGuardarCambios = document.getElementById("WE724ea9636b");
   _BtnGuardarCambios.style.visibility = "hidden";
   
   
   // Data Inputs:
   
   // Agregar Elementos:
   
   
   function ImprimirCards(filtro){
   	
   	_ListaCardsDOM.innerHTML = "";
   	tim = 0;
   	
   	for (i=0; i<Cards.length;i++){
   		for (x=0; x< Cards[i].length; x++){
   			setTimeout(rapidelay, tim, i, x);
   				tim += 20;
   			}
   				
   			
   		}
   	Cards[4].forEach((s)=>{
   
   	document.getElementsByName('testc')[0].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
   	document.getElementsByName('testc')[1].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
   	document.getElementsByName('testc')[2].innerHTML += "<option value='"+s.ID+"'>"+s.titulo+"</option>"
   	
   	});
   	
   	} 
   
   
   function rapidelay(i,x){
   	_ListaCardsDOM.appendChild(Cards[i][x].obj);
   }
   
   function CrearCardsSprints(Titulo, i, id){
   
   		Printer = '<div id="WE24ac5fb449" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1; background-color:'+SprintColors[parseInt(i)-1]+'">'+
             '<div class="OESZ OESZ_DivContent OESZG_WE24ac5fb449">'+
             '<a href="javascript:cargar('+i+', '+id+' )">'+
               '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                '<div id="WE9501e057ab" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">'+
                 '<div class="OESZ OESZ_DivContent OESZG_WE9501e057ab">'+
                  '<div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:hidden">'+
                   '<div id="WE439beceeaa" class="BaseDiv RKeepRatio OEWEImage OESK_WEImage_Default" style="z-index:2">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE439beceeaa">'+
                     '<img src="WEFiles/Image/WEImage/view_card-WE3871e97495.png" class="OESZ OESZ_Img OESZG_WE439beceeaa" alt="" />'+
                   ' </div>'+
                   '</div>'+
                   '<div id="WE964b5a4de4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">'+
                    '<div class="OESZ OESZ_DivContent OESZG_WE964b5a4de4">'+
                     '<span class="OESZ OESZ_Text OESZG_WE964b5a4de4 ContentBox">'+Titulo+'<br /></span>'+
                    '</div>'+
                   '</div>'+
                  '</div>'+
                 '</div>'+
                '</div>'+
               '</div>'+
              '</a>'+
             '</div>'+
   		'</div>';
   				
   				 
   		 
   	
   		var obj = document.createElement('div');
   		obj.innerHTML = Printer;
   		
   		return obj.firstChild;
   	
   }
   
   
   var Keys = [
   	"Personal",
   	"Alquileres", 
   	"Marketing", 
   	"AmortMaquinas",
   	"Reparaciones", 
   	"Insumos", 
   	"GtosOficina",  
   	"Otros",
   	"RatioCosto", 
   	"RatioPrecio", 
   	"RatioVenta"
   	]
   
   function LeerMatriz(){
   	//{"Insumos": 1, "Personal": 1, "Marketing": 0, "Alquileres": 0, "RatioCosto": 0, "RatioVenta": 0, "GtosOficina": 0, "OtrosGastos": 0, "RatioPrecio": 0, "Reparaciones": 0, "AmortMaquinas": 0}
   	/* var key, keys = [];
   for (key in _json_lin) {         <-- get keys
     keys.push(key); */
   
   	
   	_json_lin = [];
   	
   	_tmp = {};
   	t = 0;
   	
   	var val = document.getElementsByName('blueocean');
   	var testc = document.getElementsByName('testc');
   	var testv = document.getElementsByName('testv');
   	_tmp = {};
   	
   	_json_lin.push({tipo:parseInt(val[0].value)});
   	
   	val.forEach((s, value) => {
   		
   		
   		
   		if (value != 0){
   			if (t < Keys.length){
   				_tmp[Keys[t]] = parseFloat(s.value);
   				t++
   			} else {
   				_json_lin.push(_tmp);
   				_tmp = {};				
   				t=0;
   				_tmp[Keys[t]] = parseFloat(s.value);
   				t++;
   			
   				
   			}
   			
   		}
   		
   	
   		
   	});
   
   	_json_lin.push(_tmp)
   	
   	_tstCrds = [];
   	_tmp = {}
   	
   	testc.forEach((s, value)=>{
   		_tmp = {}
   		if (s.value != "no"){
   			
   			_tmp['testc'] = parseInt(s.value)
   			_tmp['value'] = parseFloat(testv[value].value)
   			_tstCrds.push (_tmp);
   			
   			}
   	});
   	
   	_json_lin.push(_tstCrds)
   	
   	return _json_lin
   	
   }
   
   function escribirMatriz(m){
   	//matej = '[{"tipo":3},{"Personal":1,"Alquileres":2,"Marketing":3,"AmortMaquinas":4,"Reparaciones":5,"Insumos":6,"GtosOficina":7,"Otros":8,"RatioCosto":9,"RatioPrecio":10,"RatioVenta":11},{"Personal":1,"Alquileres":12,"Marketing":312,"AmortMaquinas":2,"Reparaciones":2,"Insumos":2,"GtosOficina":0,"Otros":5,"RatioCosto":0,"RatioPrecio":0,"RatioVenta":0},{"Personal":2,"Alquileres":2,"Marketing":12,"AmortMaquinas":0,"Reparaciones":20,"Insumos":2,"GtosOficina":5,"Otros":4,"RatioCosto":3,"RatioPrecio":5,"RatioVenta":5},{"Personal":3,"Alquileres":0,"Marketing":0,"AmortMaquinas":0,"Reparaciones":0,"Insumos":1,"GtosOficina":50,"Otros":5,"RatioCosto":4,"RatioPrecio":5,"RatioVenta":5},{"Personal":4,"Alquileres":0,"Marketing":2,"AmortMaquinas":3,"Reparaciones":2,"Insumos":1,"GtosOficina":5,"Otros":2,"RatioCosto":0,"RatioPrecio":50,"RatioVenta":5},{"Personal":5,"Alquileres":0,"Marketing":6,"AmortMaquinas":8,"Reparaciones":8,"Insumos":12,"GtosOficina":2,"Otros":3,"RatioCosto":5,"RatioPrecio":4,"RatioVenta":3},{"Personal":6,"Alquileres":2,"Marketing":2,"AmortMaquinas":6,"Reparaciones":8,"Insumos":7,"GtosOficina":2,"Otros":2,"RatioCosto":3,"RatioPrecio":1,"RatioVenta":1},{"Personal":7,"Alquileres":6,"Marketing":3,"AmortMaquinas":0,"Reparaciones":3,"Insumos":0,"GtosOficina":0,"Otros":2,"RatioCosto":2,"RatioPrecio":2,"RatioVenta":2}]'
   	matej = m//JSON.parse(m);
   	
   	val = document.getElementsByName('blueocean');
   	testc = document.getElementsByName('testc');
   	testv = document.getElementsByName('testv');
   	// limpia testcards:
   	testc.forEach((s, value)=>{
   		s.value = "no"
   		testv[value].value = 0;
   	})
   	
   	val[0].value = matej[0].tipo;
   	
   	x = 0
   	
   	matej.forEach((s, value) => {
   		if (value != 0 && value < 9){
   			for (t=0; t < Keys.length; t++){
   				val[(t+x)+1].value =matej[value][Keys[t]] /// aumenta uno por el campo de opcines
   				//console.log(t+x);
   				
   			} 
   			x+=Keys.length
   			
   		} else {
   			if (value == 9){
   				for (i=0; i < matej[value].length; i++){
   					testc[i].value = matej[value][i].testc
   					testv[i].value = matej[value][i].value
   				}
   				
   			}
   		}
   	});
   	
   }
   
   function NuevaCarta(){
   	quill.container.firstChild.innerHTML = "";
   	document.getElementById('WE0104cb32f9').children[0].children[0].value = ""
   	document.getElementById('WE5ef0d9a6d9').children[0].children[0].value = 0
   	document.getElementById('WEe9b469dcd7').children[0].children[0].value = 1
   	document.getElementById('WEd10c403a27').children[0].children[0].value = 0
   	editID = "n";
   	
   	document.getElementsByName('blueocean').forEach((s)=>{
   		s.value = 0;
   	})
   	
   	document.getElementsByName('testc').forEach((s)=>{
   		s.value = "no";
   	})
   	
   		document.getElementsByName('testv').forEach((s)=>{
   		s.value = 0;
   	})
   	
   }
   /*
   // Lanzadores:
   // 
   ImprimirGrupos();
   ImprimirJugadores();
   ImprimirCards();
   
   */
   
   
   ;
   
   const serv_cards = 'http://localhost/roadmap_game/cards.php?f=listar';
   //const serv_conf_save = 'http://localhost/roadmap_game/conf_save.php?f=save';
   const serv_content_cargCards = 'http://localhost/roadmap_game/cards.php?f=contenido&lang=-all&id=';
   const serv_save_Cardscntn = 'http://localhost/roadmap_game/cards.php?f=savecontent&id=';
   
   var editID = "n";
   var lang = "es";
   
   var ContentCard = {es:null, en:null, pr:null};
   document.getElementById('WE952b7e18e8').setAttribute("onChange","OpLang()");
   	
   CargarCartas = () => {
   	
   	Panel(2);
   	
   	fetch(serv_cards, {
   	 
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		console.log(data)
   		
   		Cards = data;
   		
   		
   		Panel(0)
   		emparentar();
   		ImprimirCards();
   		
   	}) 
   	.catch(error => {
   		
   		alert(error);
   		console.error(error)
   	  })
   		
   	console.log("OK")
   }
   CargarContentCard = (id) => {
   	editID = id;
   	
   	Panel(2);
   	
   	fetch(serv_content_cargCards+id, {
   	 
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   
   		Panel(0)
   		console.log(data)
   		ContentCard = data
   		lang = document.getElementById('WE952b7e18e8').children[0].children[0].value
   		quill.container.firstChild.innerHTML = ContentCard[lang]
   		editID = id;
   		
   	}) 
   	.catch(error => {
   		
   		alert(error);
   		console.error(error)
   	  })
   		
   	console.log("OK")
   }
   GuardarCambios = () => {
   
   		ContentCard[lang] = quill.container.firstChild.innerHTML
   	
   	Panel(2);
   	
   	JsonCard = {
   			titulo: null,
   			ValorJson: null,
               ntarj: null,
               tipo: null,
               valor: null,
   			}
   	
   	JsonCard.titulo = document.getElementById('WE0104cb32f9').children[0].children[0].value
   	JsonCard.ValorJson = LeerMatriz();
   	JsonCard.ntarj = document.getElementById('WE5ef0d9a6d9').children[0].children[0].value
   	JsonCard.tipo = document.getElementById('WEe9b469dcd7').children[0].children[0].value
   	JsonCard.valor = document.getElementById('WEd10c403a27').children[0].children[0].value
   		
   	console.log(JsonCard.ValorJson);
   	
   	var data = new FormData()
   	data.append('ContentCards', JSON.stringify(ContentCard)),
   	data.append('Values', JSON.stringify(JsonCard)),
   
   	fetch(serv_save_Cardscntn+editID, {
   	  method: 'POST',
   	  body: data
   	})
   	
   	.then(response => response.json())
     	.then(data => {
   		
   		Panel(0);
   		
   		console.log(data)
   		
   		if (data[0].status == "ok"){
   			_BtnGuardarCambios.style.visibility = "hidden";
   			Panel(0);
   		
   		}
   		// Respuesta;
   		
   	}).catch(error => {
   		
   		alert(error);
   		Panel(0);
   		//console.error(error)
   	  })
   	
   	
   }
   CargarCartas();
   function emparentar(){
   	// Emparentar Objetos iniciales:
   // 		Jugadores:
   
   
   // 		Card:
   try {
   for (x=0; x<Cards.length; x++){ // distribuye por grupo
   	try {
   		for (i=0; i<Cards[x].length; i++){
   			Cards[x][i].obj = CrearCardsSprints(Cards[x][i].titulo, Cards[x][i].tipo, i);
   		}
   		
   	}
   	
   	catch (e){
   		
   	}
   }} catch (e) {}
   }
   // 		Grupos:
   // 		
   cargar = (a, b) =>{
   	
   	// form:
   	// Numero Tarjeta: WE5ef0d9a6d9
   	// SPrint: WEe9b469dcd7
   	// Valor: WEd10c403a27
   	// Tipo Valor: WEe6bfb78a20
   	// Titulo: WE0104cb32f9
   	
   	Card_Refer = ["WE5ef0d9a6d9", "WEe9b469dcd7", "WEd10c403a27", "WEe6bfb78a20", "WE0104cb32f9"]
   	Card_info = []
   	
   	Card_Refer.forEach((s, value) => {
   		Card_info.push(document.getElementById(Card_Refer[value]));
   	});
   	
   	
   	
   	if (a == 3){
   		Tipo = 1
   		escribirMatriz(Cards[a-1][b].ValorJson);
   	    //		
   	} else {
   		//console.log(Cards[a][b].ID);
   		Tipo = 0
   	}
   	
   	Card_info[0].children[0].children[0].value = Cards[a-1][b].ntarj;
   	Card_info[1].children[0].children[0].value = parseInt(Cards[a-1][b].tipo);
   	Card_info[2].children[0].children[0].value = Cards[a-1][b].valor;
   	Card_info[3].children[0].children[0].value = Tipo;
   	Card_info[4].children[0].children[0].value = Cards[a-1][b].titulo;
   	OpTipo();
   	
   	CargarContentCard(Cards[a-1][b].ID)
   	
   }
  </script>
  <script src="/Files/Other/katex-min.js"></script>
  <script src="/Files/Other/highlight-min.js"></script>
  
  <script src="/Files/Other/quill-min.js"></script>
  
  <script>
    var quill = new Quill('#WEtxcontainer', {
      modules: {
        formula: true,
        syntax: true,
        toolbar: '#toolbar-container'
      },
      placeholder: 'Compose an epic...',
      theme: 'snow'
    });
  
    //quill.container.firstChild.innerHTML = '<?= $contenido ?>';
  
    function CheckCont(){
        id = document.getElementById('id').value
        
      document.getElementById('contenido').value = quill.container.firstChild.innerHTML;
    }
  
  </script>
 </body>
</html>