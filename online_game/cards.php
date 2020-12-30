<?php 
include "conex.php";

header('Content-Type: application/json');

header("Access-Control-Allow-Origin: *"); 
//header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); //
header("Access-Control-Allow-Methods: GET, POST"); // Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE
header("Allow: GET, POST"); // Allow: GET, POST, OPTIONS, PUT, DELETE

$func = $_GET["f"];
$param = $_GET["p"];
$grupo = $_GET["s"];

switch ($func) {
    case "crear":

    break;
    case "designar":

        $TotalTarjetas = 497;
        $totalEquipos = 3;
        $totalJugadoresPorGrupo = 35;
        
        $TarjetasporEquipo = $TotalTarjetas / $totalEquipos;


        $TotalTarjetas = [];

        for ($i=1; $i < 7; $i++){
        
        $CardsSprints = [];

        $SQL =" SELECT id, titulo, Sprint, number FROM static_gamecards WHERE Sprint = ".$i."
        ORDER BY RAND()
        "; //LIMIT 57

        $MySQL = mysqli_query($conn, $SQL);

            if ($MySQL){
                while($Row = mysqli_fetch_assoc($MySQL)){
                
                    //$tarjeta  = "tarjeta: ".$Row["titulo"]." grupo sprint: ".$Row["Sprint"]."Numero Tarjeta:".$Row["number"]."<br>";
                    $tarjeta  = Array("ID" => $Row["id"] , "titulo" => $Row["titulo"], "sprint" => $Row["Sprint"], "ntarj" => $Row["number"]);

                    array_push($CardsSprints, $tarjeta);
                    
                }
            }
            
            array_push($TotalTarjetas, $CardsSprints);
      }

    print_r(Json_encode($TotalTarjetas));
    //echo "<br><br>select tarjeta: ".$TotalTarjetas[72];

    // distribuir tarjetas:

    


    break;
    case "listar":
        $TotalTarjetas = 497;
        $totalEquipos = 3;
        $totalJugadoresPorGrupo = 35;
        
        $TarjetasporEquipo = $TotalTarjetas / $totalEquipos;


        $TotalTarjetas = [];

        for ($i=1; $i < 7; $i++){
        
        $CardsSprints = [];

        $SQL =" SELECT id, titulo, Sprint, number, valor, ValorJson, impact  FROM static_gamecards WHERE Sprint = ".$i; //LIMIT 57

        $MySQL = mysqli_query($conn, $SQL);

            if ($MySQL){
                while($Row = mysqli_fetch_assoc($MySQL)){

                    $vJson = Json_decode($Row["ValorJson"]);
                
                    //$tarjeta  = "tarjeta: ".$Row["titulo"]." grupo sprint: ".$Row["Sprint"]."Numero Tarjeta:".$Row["number"]."<br>";
                    $tarjeta  = Array("ID" => $Row["id"] , "titulo" => $Row["titulo"], "tipo" => $Row["Sprint"], "ntarj" => $Row["number"], "valor" => $Row["valor"], "ValorJson" => $vJson, "impact" => $Row["impact"]);

                    array_push($CardsSprints, $tarjeta);
                    
                }
            }
            
            array_push($TotalTarjetas, $CardsSprints);
      }

    print_r(Json_encode($TotalTarjetas));
    break;
    case "contenido":

        //echo "ok";
        $pack_lang = [];

        $id = $_GET['id'];
        $lang = $_GET['lang'];

        if ($lang == '-all'){
            $SQL = "SELECT `id`, `contenido`, `contenido-en`, `contenido-pr` FROM static_gamecards WHERE id=".$id." LIMIT 1";
        } else {
            $lang = ($lang == "-es") ? "" : $lang;
            $SQL = "SELECT `contenido".$lang."` as contenido FROM static_gamecards WHERE id=".$id." LIMIT 1";
        }

       

        $Qs = mysqli_query($conn, $SQL);
        
        if ($Qs) {

            
            if ($QQT = mysqli_fetch_assoc($Qs)){

                if ($lang == "-all"){
                    $_tmp = array("es" => $QQT['contenido'], "en" => $QQT['contenido-en'], "pr" => $QQT['contenido-pr']);
                    print_r(json_encode($_tmp)); 
                } else {
                    $_tmp = array("content" => $QQT['contenido']);
                    print_r(json_encode($_tmp)); 
                    
                }
            }

        } else {
            echo "error";
        }
    break;
    case "savecontent":

        $id = $_GET['id'];
        if ($id != "n"){
         
            $dat_c = json_decode($_POST['ContentCards']);
            $dat_v = json_decode($_POST['Values']);

            $_tmp = json_encode($dat_v->ValorJson);
            
        /*   $dat_c->es;
            $dat_c->en;
            $dat_C->pr;

            $dat_v->titulo;

            $dat_v->ValorJson;
            $dat_v->ntarj;
            $dat_v->obj;
            $dat_v->tipo;
            $dat_v->valor; */

      /*      $SQQ = "UPDATE static_gamecards 
            
            SET `number` = $dat_v->ntarj,
             `Sprint` = $dat_v->tipo,
             `Titulo` = '$dat_v->titulo',
             `contenido` = '$dat_c->es',
             `contenido-en` = '$dat_c->en',
              `contenido-pr` = '$dat_C->pr',
               `valor` = $dat_v->valor,
                `ValorJson` = '$dat_v->ValorJson' 
                
                WHERE id=".$id; */

            $SQQ = "UPDATE static_gamecards 
                        
            SET `number` = $dat_v->ntarj,
            `Sprint` = $dat_v->tipo,
            `Titulo` = '$dat_v->titulo',
            `contenido` = '$dat_c->es',
            `contenido-en` = '$dat_c->en',
            `contenido-pr` = '$dat_c->pr',
            `valor` = $dat_v->valor,
            `ValorJson` = '$_tmp',
            `impact` = '$dat_v->impact'
                
                WHERE id=".$id.";";

            

                $Rq = mysqli_query($conn, $SQQ);
                if ($Rq){
                    echo '[{"status": "OK"}]';
                    exit();
                }  else {
                     echo '[{"error": "'.mysqli_error($conn).'"}]';
                    exit();
                }
                
            } else {

                if ($id == 'n'){
                    
                    $dat_c = json_decode($_POST['ContentCards']);
                    $dat_v = json_decode($_POST['Values']);

                    $_tmp = json_encode($dat_v->ValorJson);

                    $SQ = "INSERT INTO static_gamecards 
                    (`number`,
                    `Sprint`,
                    `Titulo`,
                    `contenido`,
                    `contenido-en`,
                    `contenido-pr`,
                    `valor`,
                    `ValorJson`,
                    `impact`) VALUES (
                        $dat_v->ntarj,
                    $dat_v->tipo,
                    '$dat_v->titulo',
                    '$dat_c->es',
                    '$dat_c->en',
                    '$dat_c->pr',
                    $dat_v->valor,
                    '$_tmp',
                    '$dat_v->impact'
                    )";

                $Rq = mysqli_query($conn, $SQ);
                if ($Rq){
                    mysqli_free_result($Rq);
                    exit('[{"status": "OK"}]');
                }  else {
                    
                    exit('[{"error": "'.mysqli_errno($conn).'"}]');
                }

            }
                
            } 

    break;
    case "eliminar":
        
        $ID = $_GET["id"];

        mysqli_query($conn, "DELETE FROM static_gamecards WHERE  id=".$ID.";");
         
    break;

}
?>