<?php

mb_internal_encoding('UTF-8');

include "entities/canvas.php";

class RunningGame {
    
    public static function setPuntaje($conn){
        
        $id = $_GET['id'];
        $Puntos = $_GET['cns'];
        
        $Punt_SQL = "UPDATE dinamic_grupos SET puntos = $Puntos WHERE  id_grupo=$id";
        $QQ = mysqli_query($conn, $Punt_SQL);
        echo '[{"status":"Ok"}]';

    }

    public static function setForcePort($conn){

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

    
    }

    // Sprint

    public static function ConfirmCanvas($conn){

        $grupo = $_GET["g"];
        $partida = $_GET["p"];

        $sprint = $_GET['s'];
        mysqli_query($conn, "INSERT INTO  dinamic_confirms (`sprint`, `id_grupo`, id_partida) VALUE ('$sprint','$grupo','$partida')");
        echo '{"status":"ok"}';

    }

    public static function SetTimestamp($conn){
        
        $partida = $_GET["p"];
        
        $tiempo = $_GET['t'];

        $sp=$_GET['sp'];
        
        $ahora=date('H:i:s');

        $sq = "UPDATE dinamic_partidas SET `timestamp`=NOW(), `limit_time` = '".$tiempo."', `SprintAct` = '".$sp."' WHERE  `id`=".$partida;
        mysqli_query($conn, $sq);
        
        $times = array();$times[] = $ahora;$times[] = $tiempo;
        $Resto = Partidas::SumarTiempo($times);

        echo '{"desde":"'.$ahora.'", "hasta":"'.$Resto.'"}';

    }

    public static function GetTimestamp($conn){
        
        $ahora=date('H:i:s');
        
        $timestamp = "14:09:00";
        $limit = "00:20:00";


        $times = array(); $times[] = "15:05:20"; $times[] = "00:20:00";
        $Resto = Partidas::SumarTiempo($times);
        
        echo '{"desde":"'.$ahora.'", "hasta":"'.$Resto.'"}';

    }

    // Camvas

    public static function SetCanvas($conn){
        
        $grupo = $_GET["g"];
        $partida = $_GET["p"];

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

    }

    // Puntaje

    public static function GetPuntaje($conn){

        $partida = $_GET["p"];
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
        

    }

    public static function resetTime($conn){

        $id = $_GET['id'];
        $Sql = "UPDATE `dinamic_partidas` SET `timestamp`='00:00:00' WHERE  `id`=".$id.";";
        mysqli_query($conn, $Sql);
        
    }
}

?>