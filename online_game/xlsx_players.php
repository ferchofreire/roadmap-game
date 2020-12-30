<?php
//require_once __DIR__.'plugins/SimpleXLSX.php';


//header('Content-Type: text/html; charset=utf-8');
header("Access-Control-Allow-Origin: *"); 
//header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); //
header("Access-Control-Allow-Methods: GET, POST"); // Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE
header("Allow: GET, POST"); // Allow: GET, POST, OPTIONS, PUT, DELETE

include 'plugins/SimpleXLSX.php';
include 'conex.php';

$f = $_GET["f"];

    if ($f != ""){


        //echo $_FILES['test']['type'];

        
      
        echo $_FILES['fichero_usuario']['tmp_name'];
        //var_dump(file_exists($_FILES['test']['tmp_name']));



    // echo '<h1>Parse Jugadores</h1><pre>';
    if ( $xlsx = SimpleXLSX::parse($_FILES['file']['tmp_name']) ) {

        header('Content-Type: application/json');

        // print_r( $xlsx->rows() );
        //$list = $xlsx->rows();
        //echo count($list);


        $Json = [];
        $x = 0;


        // echo "<br>".$xlsx->rows()[0][0]. " - ". $xlsx->rows()[0][1]."<br>";
        
        foreach ($xlsx->rows() as $r){
            
            // echo "Grupo: ".$r[0].", Jugador: ".$r[1]."<br><br>";

            if ($x != 0){
                array_push($Json, array('grupo' => $r[0], 'jugador' => $r[1]));        
            } $x += 1;

            
            //$sql = "INSERT INTO static_gamecards (`number`, `formato`, `Sprint`, `titulo`) VALUES ('".$r[0]."', '".$r[1]."', '".$r[2]."', '".$r[3]."');";
        // $remarks=mb_convert_encoding($remarks, "UTF-8");
        
        

            /*$sql = "INSERT INTO static_gamecards (`number`, `formato`, `Sprint`, `titulo`, `contenido`, `dorso`) 
            VALUES ('".$r[0]."', '".$r[1]."', '".$r[2]."', '".$r[3]."', '".strval($r[4])."', '".strval($r[5])."');";
            $q = mysqli_query($conn, $sql);

            if ($q) {
                echo "<br>OK subido: ".$r[0]." - ".$r[1]." - ".$r[2]." - ".$r[3]." - ".$r[4]." - ".$r[5]." - ".$r[6]." <br><br> ";
            } else {
                echo "error tarjeta: ".$r[0]." de print: ".$r[2]."<br>".$r[4]."<br><br>".mysqli_error($conn)."<br><br>";
            }*/

        }

        print_r(json_encode($Json));
        

    } else {
        header('Content-Type: application/json');
        echo '[{"tipo":"error":"'.SimpleXLSX::parseError().'"}]';
        
    }



} else {

   header('Content-Type: text/html; charset=utf-8');

   echo '<html>
<body>
<form method="post" action="?f=ok" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Upload</button>
</form>
</body>
</html>
';

}
?>