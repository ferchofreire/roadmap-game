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
                    array_push($tmp_nombres, array('nombre' => $p['nombre']));
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
            mysqli_multi_query($conn, $SQL);
            exit('[{"status":"ok"}]');
        break;
        case 3:

            $dat = json_decode($_POST['partida']); 
            $func=$dat->func;

            if ($func == "on"){

                $SQL ="UPDATE dinamic_partidas SET estado = 0 WHERE estado = 1;";
                $SQL .="UPDATE dinamic_partidas SET estado = 1 WHERE id = ".$id;
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