<?php

header('Content-Type: application/json');

//header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *"); 
//header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); //
header("Access-Control-Allow-Methods: GET, POST"); // Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE
header("Allow: GET, POST"); // Allow: GET, POST, OPTIONS, PUT, DELETE


include 'conex.php';

$f = $_GET["f"];
    $grupo = $_GET["g"];
    $partida = $_GET["p"];

    switch ($f)  
    
    {

    

    case "carga":

        $cargaCont = [];
        $PartidaID = [];

        $cards = [];

    $SQL = "SELECT VC.valor AS opcion, CR.impact AS impact, VC.card AS id, CR.titulo AS Titulo, VC.Pos AS pos, CR.number AS num, CR.Sprint AS sprint, CR.valor as valor, CR.ValorJson as JsonV 
    
    FROM dinamic_available_cards AS VC

    INNER JOIN static_gamecards AS CR

    WHERE VC.card = CR.id
    
    AND VC.grupo = ".$grupo." 

    AND VC.partida = ".$partida."
    
";

        $quer = mysqli_query($conn, $SQL);

        if ($quer){

            
            while($res = mysqli_fetch_assoc($quer)){
                
                $res['id'];
                $res['Titulo'];
                $res['num'];
                $res['sprint'];
                $res['sprint'];
                $res['valor'];
                $res['JsonV'];
                $res['impact'];
                $res['opcion'];

                $jsonV = json_decode($res['JsonV']);
                //$jsonV = $jsonV[0];
                $pos = ($res['pos'] == null) ? 0 : $res['pos'] ;
                
               array_push ($cards, array("tipo" => intval($res['sprint']), "id" => $res['id'], "num" =>  $res['num'], "titulo" =>  $res['Titulo'], "pos" =>  strval($pos), "obj" => "", "valor" =>  $res['valor'], "ValorJson" =>  $jsonV, "opcion" =>  $res['opcion'], "impact" => $res['impact']));

            }
            
        }

        // Partida
        $ahora=date('H:i:s');

        $SQLs = "SELECT * FROM dinamic_partidas WHERE `id`='".$partida."' LIMIT 1;";
        $q = mysqli_query($conn, $SQLs);
    
        $hoy = date('Y-m-d');
    
        if ($q){
            $t = mysqli_fetch_assoc($q);
                
                $estados = ($t['Estado'] == 1) ? "on" : "off";
    
                $times = array(); $times[] = $t['timestamp']; $times[] = $t['limit_time'];
                $Resto = SumarTiempo($times);

               array_push($PartidaID, array(
    
                'id' => $t['id'], 
                 'titulo' => $t['nombre'], 
               'desde' => $t['fecha_inicio'],
               'hasta' => $t['fecha_fin'],
               'maxsprints' => $t['max_sprints'],
               'estado' => $estados,
               'lang' => $t['lang'],
               'hoy' => $hoy,
               'obj' => '',
               'tm_desde' => $ahora,
               'tm_hasta' => $Resto,
               'timestamp' => $t['timestamp'],
               'limit_time' => $t['limit_time'],
               'SprintAct' => $t['SprintAct'],
               'canvas' => $t['canvas'],
               'MovLimit' => $t['MovLimit'],));

        } else {
            echo '{"status":"error"}';
            exit();
        }

        // 

        array_push($cargaCont, $cards);
        array_push($cargaCont,  $PartidaID);

        print_r(json_encode($cargaCont));

    break;
    case "Set_Timestamp": // p={id partida}  t={tiempo} sp={sprint}
        $tiempo = $_GET['t'];

        $sp=$_GET['sp'];
        
        $ahora=date('H:i:s');

        $sq = "UPDATE dinamic_partidas SET `timestamp`=NOW(), `limit_time` = '".$tiempo."', `SprintAct` = '".$sp."' WHERE  `id`=".$partida;
        mysqli_query($conn, $sq);
        
        $times = array();$times[] = $ahora;$times[] = $tiempo;
        $Resto = SumarTiempo($times);

        echo '{"desde":"'.$ahora.'", "hasta":"'.$Resto.'"}';

    break;


    case "Get_Timestamp": // p={id partida}  t={tiempo}
        
        
        
        
        $ahora=date('H:i:s');
        
        $timestamp = "14:09:00";
        $limit = "00:20:00";


        $times = array(); $times[] = "15:05:20"; $times[] = "00:20:00";
        $Resto = SumarTiempo($times);
        
        echo '{"desde":"'.$ahora.'", "hasta":"'.$Resto.'"}';




    break;
    case "tick":

        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');

        $paquet = [];

        $partidas = [];
        $Cards = [];
        $Portforces = [];

        $_POST["cheker"];

        
        $SQL = "SELECT card, Pos, valor FROM dinamic_available_cards WHERE Pos IS NOT NULL AND partida=".$partida." AND grupo = ".$grupo ;
        $q = mysqli_query($conn, $SQL);
        if ($q){
            while ($t = mysqli_fetch_assoc($q)){
                array_push($Cards, array("card" => $t['card'], "pos" => $t['Pos'], "opcion" => $t['valor']));
            }
           
        }

        array_push($paquet, $Cards);

        $times = array(); 

        $forces = false;

        $SQL2 = "SELECT * FROM dinamic_partidas WHERE id=".$partida." LIMIT 1;";
        $qs = mysqli_query($conn, $SQL2);
        if ($qs){
            if ($ts = mysqli_fetch_assoc($qs)){

                $SQL_Confs = mysqli_query($conn, "SELECT sprint FROM dinamic_confirms WHERE id_partida = '".$partida."
                ' AND id_grupo = '".$grupo."' AND sprint = '".$ts['SprintAct']."'LIMIT 1");
                if (mysqli_num_rows($SQL_Confs) > 0){
                    $confirm = "ok";
                } else {
                    $confirm = "no";
                }

                array_push($partidas, array("id" => $ts['id'], "Sprint" => $ts['SprintAct'], "confirmacion" => $confirm));
                $times[] = $ts['timestamp']; $times[] = $ts['limit_time'];

                // if ($ts['SprintAct'] == 0){ $forces = true; }

               $forces = true; 
            }
        }

        if ($forces){
            $SQL3 = "SELECT * FROM dinamic_forceport WHERE id_partida = ".$partida." AND id_grupos = ".$grupo;
            $qs3 = mysqli_query($conn, $SQL3);
            if ($qs3){
                if ($ts3 = mysqli_fetch_assoc($qs3)){
                       array_push($Portforces, $ts3);
                }
            }
        }

        

        $ahora=date('H:i:s');   
        $Resto = SumarTiempo($times);

        $tiempo = array("desde" => $ahora, "hasta" => $Resto);

        array_push($paquet, $partidas);
        array_push($paquet, $tiempo);
        if ($forces){
           array_push($paquet, $Portforces);
        }


        echo "retry: 15000\n";
        echo "data: ".json_encode($paquet)."\n\n";
        

        flush();


    break;
    case "SetCanvas":
        
        $_Pos = $_POST["card"];
        
        //$tst = '{"id":"91","pos":12,"opcion":"2"}';
        $pos = json_decode($_Pos);
        $valor = ($pos->opcion == null) ? "null" : $pos->opcion;
        

        $SQL = "UPDATE dinamic_available_cards SET `Pos`='$pos->pos', valor=$valor WHERE `card` = '$pos->id' AND `partida` = '$partida';";
            $q = mysqli_query($conn, $SQL);
            if ($q){
               echo '[{"status":"OK"}]';
            } else {
               echo '[{"status":"error"}]';
            }
            

    break;
    case "GetPuntos":

        $Puestos = [];
        /*
        Puestos = [
	{id: 2, Team:"Team 3", Puntos: 1600 },
        */
        // carga puntos campeonato:
        $r_SQL = "SELECT din.puntos AS puntos, st.Nombre AS nombre, st.id AS id FROM dinamic_grupos AS din
        INNER JOIN static_grupos AS st
        
        ON din.id_grupo = st.id
        
        WHERE id_partida = ".$partida."
        ORDER BY din.puntos DESC";
        $Q = mysqli_query($conn, $r_SQL);
            if ($Q){
                while($rd = mysqli_fetch_assoc($Q)){
                    
                    $puns = ($rd['puntos'] == null) ? 0 : $rd['puntos'];
                    array_push($Puestos, array("id" => $rd['id'], "Team" => $rd['nombre'],"Puntos" => $puns));    
             }
                
                print_r(json_encode($Puestos));
            }
        


    break;
    case "confirm":
        $sprint = $_GET['s'];
        mysqli_query($conn, "INSERT INTO  dinamic_confirms (`sprint`, `id_grupo`, id_partida) VALUE ('$sprint','$grupo','$partida')");
        echo '{"status":"ok"}';
    break;

    case "finalForces":{
        $Portforces = [];

        $SQL3 = "SELECT * FROM dinamic_forceport WHERE id_partida = ".$partida." AND id_grupos = ".$grupo;
            $qs3 = mysqli_query($conn, $SQL3);
            if ($qs3){
                if ($ts3 = mysqli_fetch_assoc($qs3)){
                       array_push($Portforces, $ts3);
                }
            }

        print_r(json_encode($Portforces));
     break;
    }
}
// EJ: {tipo: 1, id:'1', num: '0', titulo:'Card Sprint1 N61', pos:'0', obj: ''},

function SumarTiempo($times) {

    // loop throught all the times
    foreach ($times as $time) {
        list($hour, $minute, $second) = explode(':', $time);
        $all_seconds += $hour * 3600;
        $all_seconds += $minute * 60; $all_seconds += $second;

    }


    $total_minutes = floor($all_seconds/60); $seconds = $all_seconds % 60;  $hours = floor($total_minutes / 60); $minutes = $total_minutes % 60;

    // returns the time already formatted
    return sprintf('%02d:%02d:%02d', $hours, $minutes,$seconds);
}


?>