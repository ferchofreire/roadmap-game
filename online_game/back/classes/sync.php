<?php

class Sincronizacion{

    public function Tick($conn){

        $grupo = $_GET["g"];
        $partida = $_GET["p"];



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

                $SQL_StateMachine = mysqli_query($conn, "SELECT puntos, maquinaestados FROM dinamic_grupos WHERE id_partida = '".$partida."' AND id_grupo = '".$grupo."' LIMIT 1");
                if (mysqli_num_rows($SQL_StateMachine) > 0){
                    
                    $stateArr = mysqli_fetch_assoc($SQL_StateMachine);
                }

                array_push($partidas, array("id" => $ts['id'], "Sprint" => $ts['SprintAct'], "confirmacion" => $confirm, "step" => $stateArr['maquinaestados'], "puntos" => $stateArr['puntos']));
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
        $Resto = Partidas::SumarTiempo($times);

        $tiempo = array("desde" => $ahora, "hasta" => $Resto);

        array_push($paquet, $partidas);
        array_push($paquet, $tiempo);
        if ($forces){
           array_push($paquet, $Portforces);
        }


        echo "retry: 1000\n";
        echo "data: ".json_encode($paquet)."\n\n";
        

        flush();
    }

    public function Carga($conn){
        
        $grupo = $_GET["g"];
        $partida = $_GET["p"];

        $cargaCont = [];
        $PartidaID = [];

        $cards = [];

            $SQL = "SELECT CR.impact AS impact, VC.card AS id, CR.titulo AS Titulo, VC.Pos AS pos, CR.number AS num, CR.Sprint AS sprint, CR.valor as valor, CR.ValorJson as JsonV 
            
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

                $jsonV = json_decode($res['JsonV']);
                //$jsonV = $jsonV[0];
                $pos = ($res['pos'] == null) ? 0 : $res['pos'] ;
                
               array_push ($cards, array("tipo" => intval($res['sprint']), "id" => $res['id'], "num" =>  $res['num'], "titulo" =>  $res['Titulo'], "pos" =>  strval($pos), "obj" => "", "valor" =>  $res['valor'], "ValorJson" =>  $jsonV, "opcion" =>  "", "impact" => $res['impact']));

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
                $Resto = Partidas::SumarTiempo($times);

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
    }

    public function SendCanvas ($conn){
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

}

?>