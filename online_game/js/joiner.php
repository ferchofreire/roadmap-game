<?php

header("Content-Type: application/javascript");

$Files = Json_decode(file_get_contents("files.json"));


$F = $_GET['compilation'];

switch($F){
    case "module":

        foreach($Files->Modules as $Mdl){
            print_r(file_get_contents($Mdl.".js"));
             
        }

    break;

    case "instances":

        foreach($Files->Instances as $Inc){
            print_r(file_get_contents($Inc.".js"));    
        }

    break;
}


?>