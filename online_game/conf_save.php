<?php



//#region Cabeceras
include "conex.php";

header('Content-Type: application/json');

header("Access-Control-Allow-Origin: *"); 
//header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); //
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"); // Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE
header("Allow: GET, POST, OPTIONS, PUT, DELETE"); // Allow: GET, POST, OPTIONS, PUT, DELETE

$func = $_GET['f'];
$id = $_GET['id'];

// endregion


switch ($func){
    case 'save':
//#region Guardar Partida:

    $Partida = json_decode($_POST['Partida']);
    $Jugadores = json_decode($_POST['Jugadores']);
    $Cards = json_decode($_POST['Cards']);
    $Grupos = json_decode($_POST['Grupos']);

    
   if ($Partida != ""){

        $nombre = $Partida->titulo;
        $id = $Partida->id;
        $max_sprints = $Partida->maxsprints;
        $fecha_inicio = $Partida->desde;
        $fecha_fin = $Partida->hasta;
        $Estado =  ($Partida->estado == "on") ? 1 : 0;        
        $lang = $Partida->lang;
        $canvas = $Partida->canvas;
        $sprintAct = $Partida->SprintAct;
        $MovLimit = $Partida->MovLimit;
        $limit_time = $Partida->limit_time;
        $maxsprints =  $Partida->maxsprints;

        $SQL_p = "UPDATE dinamic_partidas SET 
        `max_sprints`=".$max_sprints.", 
        `nombre`='".$nombre."', 
        `Estado`=".$Estado.", 
        `fecha_inicio`='".$fecha_inicio."', 
        `fecha_fin`='".$fecha_fin."',
        `lang`='".$lang."',
        `canvas`=".$canvas.",
        `SprintAct`='".$sprintAct."',
        `MovLimit`='".$MovLimit."',
        `timestamp`='00:00:00',
        `limit_time`='".$limit_time."'
        
        WHERE  `id`=".$id.";";

        

        $Q_p = mysqli_query($conn, $SQL_p);
        if ($Q_p){
            //echo '[{"Result":"OK"}]';
         //   print_r(json_encode($Partida));
         session_start();
        $_SESSION['initPart'] = $id;

        }
    }

    if ($Jugadores != ""){

        mysqli_query($conn, "DELETE FROM `dinamic_jugadores` WHERE id_partida=".$id.";");

        foreach ($Jugadores as $m=>$j){

            

            if (count($j) != 0){

                for ($i=0; $i < count($j) ;$i++){
                    
                    $nom_jugad = $j[$i]->nombre;
                    $SQL_cr = "INSERT INTO dinamic_jugadores (`id_partida`, `id_grupo`, `nombre`) 
                    VALUES ('".$Partida->id."', '".$m."', '".$nom_jugad."')";

                    $Q_cr = mysqli_query($conn, $SQL_cr);
            }

            }

            
    }

    }

    if ($Cards != "")
    {

        mysqli_query($conn, "DELETE FROM `dinamic_available_cards` WHERE partida=".$id.";");

        foreach ($Cards as $a=>$x){

            

            if (count($x) != 0){

                for ($i=0; $i < count($x) ;$i++){
                    
                    $idcard = $x[$i]->id;
                    $SQL_cr = "INSERT INTO dinamic_available_cards (`partida`, `grupo`, `card`) 
                    VALUES ('".$Partida->id."', '".$a."', '".$idcard."')";

                    $Q_cr = mysqli_query($conn, $SQL_cr);
            }

            }

            
    }
}

    if ($Grupos != "")
    {
        // Actualiza Opciones Estaticas:

        foreach ($Grupos as $x){
            $SQL_g = "UPDATE static_grupos SET 
                
                `Nombre`='".$x->titulo."', 
                `passwd`='".$x->passw."'
                
                WHERE `id` = ".$x->id." ;";
                

            $Q_g = mysqli_query($conn, $SQL_g);
            if ($Q_g){
                //echo '[{"Result":"OK"}]';
               // print_r(json_encode($Grupos));
            }

        }

        

        mysqli_query($conn, "DELETE FROM `dinamic_grupos` WHERE id_partida=".$id.";");

        foreach ($Grupos as $i=>$y){

            

            if ($y->estado == "on"){

                $SQL_gg = "INSERT INTO dinamic_grupos (`id_grupo`, `id_partida`, `total_jugadores`) 
                VALUES (".($i).", ".$Partida->id.", ".count($Jugadores[$i]).")";

            $Q_gg = mysqli_query($conn, $SQL_gg);
          

        }

    }
}

    

     echo '[{"status":"ok"}]';
    

//#endregion
break;
case 'load':
    $ahora=date('H:i:s');
    
   // var IdPartidaActiva = {id:'1', titulo: 'Partida Demo', desde: '23/07/2020', hasta: '23/07/2020', maxsprints: 6, estado: 'on', MovLimit:"4,3,4,2,3,2"}; GrupoSelecto = 0;


        $Paquete = [];
        $PartidaActiva = [];
        $Partidas = [];
        $Grupos = [];
        $Jugadores = [];
        $Cards = [];

    $SQL = "SELECT * FROM dinamic_partidas";
    $q = mysqli_query($conn, $SQL);

    $hoy = date('Y-m-d');

    if ($q){
        while ($t = mysqli_fetch_assoc($q)) {
            
            $estados = ($t['Estado'] == 1) ? "on" : "off";

           array_push($Partidas, array(

            'id' => $t['id'], 
             'titulo' => $t['nombre'], 
           'desde' => $t['fecha_inicio'],
           'hasta' => $t['fecha_fin'],
           'maxsprints' => $t['max_sprints'],
           'estado' => $estados,
           'lang' => $t['lang'],
           'hoy' => $hoy,
           'obj' => '',
           'timestamp' => $t['timestamp'],
           'limit_time' => $t['limit_time'],
           'SprintAct' => $t['SprintAct'],
           'canvas' => $t['canvas'],
           'MovLimit' => $t['MovLimit'],));

           if ($t['id'] == $id){

                $times = array(); $times[] = $t['timestamp']; $times[] = $t['limit_time'];
                $Resto = SumarTiempo($times);

            $PartidaActiva = array('id' => $id, 'titulo' => $t['nombre'],'desde' => $t['fecha_inicio'],
            'hasta' => $t['fecha_fin'],
            'maxsprints' => $t['max_sprints'],
            'estado' => $estados,
            'lang' => $t['lang'],
            'hoy' => $hoy,
            'obj' => '',
            'tm_desde' => $ahora,
            'tm_hasta' => $Resto,
            'canvas' => $t['canvas'],
            'timestamp' => $t['timestamp'],
            'limit_time' => $t['limit_time'],
            'SprintAct' => $t['SprintAct'],
            'MovLimit' => $t['MovLimit'], 'GrupoSelecto' => '0');
       }

        }
    }

    $SQL = "SELECT ab.id AS id, ab.QR_ID AS QR, ab.Nombre AS titulo, ab.participantes, ba.total_Jugadores AS Total, ba.puntos as Puntos, ab.passwd AS PW FROM static_grupos AS ab
    LEFT JOIN dinamic_grupos AS ba 
    ON ba.id_grupo = ab.id

    AND ba.id_partida = ".$id."
    
    ORDER BY ab.id";

    $q = mysqli_query($conn, $SQL);
    
    while ($t = mysqli_fetch_assoc($q)) {
            
        $estados = ($t['Total'] != null ) ? "on" : "off";
        $Puntos = ($t['Puntos'] != null) ? $t['Puntos'] : "";

        array_push($Grupos, array(

        'id' => $t['id'], 
        'titulo' => $t['titulo'], 
        'sprint' => '',
        'puntos' => $Puntos,
        'passw' => $t['PW'],
        'estado' => $estados,
        'obj' => ''));

        

        if ($t['Total'] != null ){
            
            $SQL_ju = "SELECT * FROM dinamic_jugadores WHERE 
            id_partida = ".$id."
            AND id_grupo = ".$t['id'];
        
            $q_ju = mysqli_query($conn, $SQL_ju);
            
            $tmp_nombres = [];
            
            if ($q_ju) {
                while ($p = mysqli_fetch_assoc($q_ju)){
                    array_push($tmp_nombres, array('nombre' => $p['nombre'], 'hash' => $p['hash']));
                }   
            }
            array_push($Jugadores, $tmp_nombres);
            
        } else {
            array_push($Jugadores, array());
        }


    }

    $SQL_Cards = "SELECT DC.card AS id, SC.Sprint AS tipo, SC.titulo AS titulo, DC.valor AS valor, DC.grupo AS grupo

    FROM dinamic_available_cards AS DC
    INNER JOIN static_gamecards AS SC
    ON SC.id = DC.card
    WHERE DC.partida = ".$id."
    ";
    $q_cards = mysqli_query($conn, $SQL_Cards);

    if ($q_cards){
        $tmp_cards = [[],[],[],[],[],[],[],[]];
        
        while ($o = mysqli_fetch_assoc($q_cards)) {
            
              $i = $o['grupo'];
              array_push($tmp_cards[$i], array('tipo' => $o['tipo'],
              
              'id' => $o['id'],
              'titulo' => $o['titulo'],
              'obj' => '',
            
            ));
              
          }
        

        $Cards = $tmp_cards;
        
    }
    //{tipo:'1', id:'1', titulo:'Card Sprint1 N01', detalle:'detalle demo 1', tips:'tips demo 1', value:'0', obj: '' }
    //print_r(json_encode($PartidaActiva));
    //print_r(json_encode($Partidas));
    //print_r(json_encode($Grupos));
    //print_r(json_encode($Jugadores));
    //print_r(json_encode($Cards));

    array_push($Paquete, $PartidaActiva);
    array_push($Paquete, $Partidas);
    array_push($Paquete, $Grupos);
    array_push($Paquete, $Jugadores);
    array_push($Paquete, $Cards);

    print_r(json_encode($Paquete));


break;
case 'partidas':

    $subfunc = $_GET['o'];
    
        
/*
DATE('$dat->desde'), 
                    $dat->maxsprints, 
                    DATE('$dat->hasta'), 
                    '$dat->MovLimit',
                    '$dat->lang',
                    $dat->canvas,                    
                    '00:00:00',
                    '00:20:00',
                    '$dat->titulo', 
                    $dat->estado, 
                    $dat->SprintAct);";

*/
       // echo $subfunc ;

        switch ($subfunc){
            case 1:

               

                $dat = json_decode($_POST['partida']); 

                $estado = ($dat->estado == "on") ? 1 : 0;

                //echo $dat->desde;
                if ($estado == 1){
                    mysqli_query($conn, "UPDATE dinamic_partidas SET estado = 0 WHERE estado = 1; ");
                }

                $SQ = "INSERT INTO dinamic_partidas (
                
                `fecha_inicio`, 
                `max_sprints`, 
                `fecha_fin`, 
                `MovLimit`, 
                `lang`, 
                `canvas`, 
                `timestamp`, 
                `limit_time`, 
                `nombre`, 
                `Estado`, 
                `SprintAct`

                ) VALUES (

                    DATE('$dat->desde'), 
                    $dat->maxsprints, 
                    DATE('$dat->hasta'), 
                    '2,2,2,2,2,2',
                    '$dat->lang',
                    $dat->canvas,                    
                    '00:00:00',
                    '00:20:00',
                    '".$dat->titulo."', 
                    ".$estado.", 
                    0);";

                    //echo  $SQ;

                $nw = mysqli_query($conn, $SQ);
                    if ($nw) {
                        //echo '[{"status":"ok"}]';
                        
                        $_last_id = $conn->insert_id;

                        session_start();
                        $_SESSION['initPart'] = $_last_id;

                        exit('[{"status":"ok", "id":"'.$_last_id.'"}]');
                    } else {
                        exit('[{"error":"no"}]');
                    }
                
            

                break;
        case 2:
            $SQL = "DELETE FROM dinamic_partidas WHERE  id=".$id.";";
            $SQL .="DELETE FROM dinamic_jugadores WHERE  id_partida=".$id.";";
            $SQL .="DELETE FROM dinamic_grupos WHERE  id_partida=".$id.";";
            $SQL .="DELETE FROM dinamic_available_cards WHERE  partida=".$id.";";
            $SQL .="DELETE FROM dinamic_confirms WHERE  id_partida=".$id.";";
            $SQL .="DELETE FROM dinamic_forceport WHERE id_partida=".$id.";";
            mysqli_multi_query($conn, $SQL);
            exit('[{"status":"ok"}]');
        break;
        case 3:

            $dat = json_decode($_POST['partida']); 
            $func=$dat->func;

            if ($func == "on"){

                $SQL ="UPDATE dinamic_partidas SET estado = 0 WHERE estado = 1;";
                $SQL .="UPDATE dinamic_partidas SET estado = 1, SprintAct = 0, limit_time = '00:20:00', `timestamp` = '00:00:00' WHERE id =".$id;
                mysqli_multi_query($conn, $SQL);
            
            }

            if ($func == "off"){
                $SQL ="UPDATE dinamic_partidas SET estado = 0 WHERE id = ".$id;
                mysqli_query($conn, $SQL);
            }
        break;

        }
    

    break;
    case "resetTime":
        $Sql = "UPDATE `dinamic_partidas` SET `timestamp`='00:00:00' WHERE  `id`=".$id.";";
        mysqli_query($conn, $Sql);
    break;
    case "setpuntaje":
        
        $Puntos = $_GET['cns'];
        
        $Punt_SQL = "UPDATE dinamic_grupos SET puntos = $Puntos WHERE  id_grupo=$id";
        $QQ = mysqli_query($conn, $Punt_SQL);
        echo '[{"status":"Ok"}]';
    break;
    case "setJugador":

        session_start();
        $_SESSION["nme_usr"] = $_GET["n"];
        $_SESSION["nme_ic"] = $_GET["ic"];

        mysqli_query($conn, "UPDATE dinamic_jugadores SET `hash`='".$_GET["ic"]."' WHERE  `nombre`='".$_GET["n"]."';");

        echo "ok";

    break;
    case "setForcPort":

        $part = $_GET['p'];
        $grup = $_GET['g'];

        $fuerzas = json_decode($_POST['forces']);
        
        $SQ = "SELECT id FROM dinamic_forceport WHERE id_grupos = $grup AND id_partida = $part LIMIT 1";
        $q_chk = mysqli_query($conn, $SQ);

        if ($q_chk && mysqli_num_rows($q_chk) == 0){
            $sql_add = "INSERT INTO dinamic_forceport (
            
            `id_partida`, 
            `id_grupos`, 

            `1_scale`, 
            `1_experience`, 
            `1_capital`, 
            `1_reputation`, 
            `1_distribution`, 

            `2_size_supliers`, 
            `2_price_sesibilities`, 
            `2_technicalcost`, 
            `2_brandcost`, 
            `2_abilityintegrate`, 

            `3_availabiliti`, 

            `4_effectivecompetitors`, 
            `4_market`, 
            `4_diferentation`, 
            `4_strategicstackes`, 
            `4_protectstackes`, 

            `5_sizecostumers`, 
            `5_pricesesibilities`, 
            `5_thecnicalcost`, 
            `5_brandcost`, 
            `5_abilityintegrate`, 

            `6_impactchanges`, 
            `7_relations`,
            `8_others`,
            `txt_8`) 
            VALUES (
                $part, 
                $grup, 

                $fuerzas[15], 
                $fuerzas[16],
                $fuerzas[17], 
                $fuerzas[18], 
                $fuerzas[19], 

                $fuerzas[5], 
                $fuerzas[6], 
                $fuerzas[7], 
                $fuerzas[8], 
                $fuerzas[9], 

                $fuerzas[20], 

                $fuerzas[10], 
                $fuerzas[11], 
                $fuerzas[12], 
                $fuerzas[13], 
                $fuerzas[14], 

                $fuerzas[0], 
                $fuerzas[1], 
                $fuerzas[2], 
                $fuerzas[3], 
                $fuerzas[4], 

                $fuerzas[21],
                $fuerzas[22],
                $fuerzas[23],
                '$fuerzas[24]' );
            ";
       
       $q_ = mysqli_query($conn, $sql_add);

       if ($q_){
           echo '[{"ok":"send"}]';
       } else {
           echo '[{"error":"error"}]';
       }
    } else {
            $sql_upd = "UPDATE dinamic_forceport 
            SET 
            
            `1_scale`='$fuerzas[15]', 
            `1_experience`='$fuerzas[16]', 
            `1_capital`='$fuerzas[17]', 
            `1_reputation`='$fuerzas[18]', 
            `1_distribution`='$fuerzas[19]', 

            `2_size_supliers`='$fuerzas[5]', 
            `2_price_sesibilities`='$fuerzas[6]', 
            `2_technicalcost`='$fuerzas[7]', 
            `2_brandcost`='$fuerzas[8]', 
            `2_abilityintegrate`='$fuerzas[9]', 

            `3_availabiliti`='$fuerzas[20]', 

            `4_effectivecompetitors`='$fuerzas[10]', 
            `4_market`='$fuerzas[11]', 
            `4_diferentation`='$fuerzas[12]', 
            `4_strategicstackes`='$fuerzas[13]', 
            `4_protectstackes`='$fuerzas[14]', 

            `5_sizecostumers`='$fuerzas[0]', 
            `5_pricesesibilities`='$fuerzas[1]', 
            `5_thecnicalcost`='$fuerzas[2]', 
            `5_brandcost`='$fuerzas[3]', 
            `5_abilityintegrate`='$fuerzas[4]', 

            `6_impactchanges`='$fuerzas[21]', 
            `7_relations`='$fuerzas[22]', 
            `8_others`='$fuerzas[23]',
            `txt_8`='$fuerzas[24]'
            
            WHERE  `id_partida`=$part
            AND `id_grupos` = $grup;";

            $q_ = mysqli_query($conn, $sql_upd);

            if ($q_){
                echo '[{"ok":"send"}]';
            } else {
                echo '[{"error":"error"}]';
            }

        }

    break;

    case "chngepass":
        $old = $_POST["oldPss"];
        $new = $_POST["newPss"];

        $erSql = "SELECT id FROM static_sessions WHERE standar_passwd = '".$old."' LIMIT 1";
        $erQer = mysqli_query($conn, $erSql);
        $cheq = mysqli_num_rows($erQer);
        if ($erQer && $cheq > 0){

            $dat = mysqli_fetch_assoc($erQer);
            $dat_id = $dat["id"];

            $drSql = "UPDATE static_sessions SET `standar_passwd`='".$new."' WHERE id = ".$dat_id;
                
                if (mysqli_query($conn, $drSql)){
                    echo '{"OK":"OK"}';
                } else {
                    echo '{"err":"err"}';        
                }

        } else 
        {
            echo '{"err":"err", "OLD":"'.$old .'"}';
        }

    break;

}

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