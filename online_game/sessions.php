<?php 

include "conex.php";

header('Content-Type: application/json');

//header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *"); 
//header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); //
header("Access-Control-Allow-Methods: GET, POST"); // Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE
header("Allow: GET, POST"); // Allow: GET, POST, OPTIONS, PUT, DELETE


$listargrupos = false;
$err = false;
$grupo = $_POST["grupo"];
$pass = $_POST["Pass"];
$lang = $_POST["lang"];

//$SQL_Partida_CHEK = "SELECT id, nombre, canvas FROM dinamic_partidas WHERE fecha_inicio < NOW() AND fecha_fin > NOW() AND Estado = 1 LIMIT 1";
$SQL_Partida_CHEK = "SELECT id, nombre, lang, canvas FROM dinamic_partidas WHERE date(fecha_inicio) < NOW() AND date(fecha_fin) > (NOW() - INTERVAL 1 DAY) AND Estado = 1 LIMIT 1";
  $checkpartida = mysqli_query($conn, $SQL_Partida_CHEK);
  $EstadoPartida = mysqli_num_rows($checkpartida);
 
  if ($checkpartida && $EstadoPartida >= 1){
    $partida_activa = mysqli_fetch_assoc($checkpartida);
    $titulopartida = " - ".$partida_activa["nombre"];
    $listargrupos = true;
    $idPartidaActiva = $partida_activa["id"];
    $PartidaCanvas = $partida_activa["canvas"];
  } else {

    $LastPartida = mysqli_query($conn, "SELECT id, nombre, canvas FROM dinamic_partidas LIMIT 1");
    $LPEstadoPartida = mysqli_num_rows($LastPartida);
    if ($LastPartida && $LPEstadoPartida >= 1){
      $partida_activas = mysqli_fetch_assoc($LastPartida);
      $idPartidaActiva = $partida_activas["id"];
      $PartidaCanvas = 1;
    } else {
      $idPartidaActiva = "9000000000000000000009901";
    }
  }
	
if ($grupo != "" ){
  
  if ($grupo == "adm") {
    // echo "<script type=\"text/javascript\">alert(\"ADMINISTRADOR\")</script>";
    $SQL_ADMIN_CHEK = "SELECT id FROM static_sessions WHERE standar_passwd = '".$pass."' LIMIT 1";
    $chekAdmin = mysqli_query($conn ,$SQL_ADMIN_CHEK);
    
    if (mysqli_num_rows($chekAdmin) > 0){
      //header("location: admin/?id=".$idPartidaActiva);
      $url = "admin/".$idPartidaActiva;

        session_start();
        $_SESSION['pg'] = "adm";
        $_SESSION['initPart'] = $idPartidaActiva;
        $_SESSION['lang'] = $lang;

      echo '{"Ok":"'.$url.'"}';


    } else {
      
      echo '{"error":"error"}';
    }

  } else {

    $SQL_Grupo_CHEK = "SELECT id FROM static_grupos WHERE passwd = '".$pass."' AND id = '".$grupo."' LIMIT 1";
    $checkteam = mysqli_query($conn ,$SQL_Grupo_CHEK);

    $CodURL = base64_encode($grupo."-".$idPartidaActiva);

    if (mysqli_num_rows($checkteam) > 0){
      
      $url = "game/_".$CodURL;
         
         session_start();
           $_SESSION['pg'] = "gme";
           $_SESSION['grupo'] = $grupo;
           $_SESSION['lang'] = $lang;
           $_SESSION['url'] = $CodURL;
           $_SESSION['canvas'] = $PartidaCanvas;
           $_SESSION['initPart'] = $idPartidaActiva;

           
           echo '{"Ok":"'.$url.'"}';
   
   
       } else {

      echo '{"error":"error"}';

    }

  }
   

  

}



  ?>