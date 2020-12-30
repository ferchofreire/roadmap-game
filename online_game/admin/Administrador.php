<?php

session_start();
if ($_SESSION['pg'] != "adm"){
  header("location: ../loggin");
}

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
  
  include "lang/adm".$lang.".nyx" 
  
  
  ?>
  <script type="text/javascript" src="../js/admin.js"></script>
 </body>
</html>