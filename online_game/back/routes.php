<?php

// API simplificado para control de datos en base de datos.

include "classes/loggin.php";
include "classes/admin.php";
include "classes/game.php";
include "classes/sync.php";
include "classes/gamecards.php";
include "classes/plugin.php";

$conn = new Conexion(

                    "../back/conexion.json"

                );


$goto = $_GET["f"];

switch($goto){

    // login y redirección

    case "login":

        $conn->HeadersJson();

        $conn->login(
            $conn->conn()
        );

    break;

    // ADMINISTRADOR

    case "GuardarPartida":

        // Guarda Arrays con datos de partida (jugadores, cards, partida)

        $conn->HeadersJson();

        Partidas::GuardarPartida(
            $conn->conn()
        );

    break;

    case "CargarXLSX":

        // Carga Jugadores desde un XLSX

        $conn->HeadersJson();

        Plugin::SetXLSX();

    break;


    case "CargarPartida":

        // Trae los datos de partida;

        $conn->HeadersJson();

        Partidas::CargarPartida(
            $conn->conn()
        );

    break;

    case "SetupPartidas":

        // Configuracion secundaria con datos de partida;
        $conn->HeadersJson();

        Partidas::SetupsPartidas(
            $conn->conn()
        );

    break;

    case "CambioPassw":

        // cambio de password:

        Partidas::CambiarPassword(
            $conn->conn()
        );

    break;

    case "logout":

        // Cierra el session de php

        $conn->HeadersJson();

        $conn->logout(
            $conn->conn()
        );

    break;

    // DURANTE EL JUEGO

    case "SetJugador":

        // Establece un jugador (al loguearse el usuario);

        $conn->HeadersJson();
        
        $conn->setJugador(
            $conn->conn()
        );
        
    break;

    case "SetPuntaje": // A revisión por cambios en el paradigma: ahora lo hace directamente el servidor.

        $conn->HeadersJson();
        
        RunningGame::setPuntaje(
            $conn->conn()
        );

    break;

    case "GetPuntaje": // A revisión por cambios en el paradigma: ahora lo hace directamente el servidor.

        $conn->HeadersJson();
        
        RunningGame::GetPuntaje(
            $conn->conn()
        );

    break;

    case "resetTime": 

        $conn->HeadersJson();
        
        RunningGame::resetTime(
            $conn->conn()
        );

    break;


    case "setForcePort":

        // Establece los datos de la fuerza de porter.

        $conn->HeadersJson();
        
        RunningGame::setForcePort(
            $conn->conn()
        );

    break;

    case "ConfirmarCanvas":

        // Envia confirmación sobre posición de canvas;

        $conn->HeadersJson();
        
        RunningGame::ConfirmCanvas(
            $conn->conn()
        );

    break;

    case "SendCanvas":
        Sincronizacion::SendCanvas(
            $conn->conn()
        );
        
    break;

    case "tick":

        // Tick de sincronización de canvas entre grupos:

        $conn->HeaderEventStreams();
        
        Sincronizacion::tick(
            $conn->conn()
        );
    break;
    case "tick_carga":

        $conn->HeadersJson();

        Sincronizacion::Carga(
            $conn->conn()
        );

    break;

    case "setTimestamp":
        
        $conn->HeadersJson();

        RunningGame::SetTimestamp(
            $conn->conn()
        );
    break;

    case "getTimestamp":
        
        $conn->HeadersJson();

        RunningGame::GetTimestamp(
            $conn->conn()
        );
    break;

    // CARDS 

    case "CardDesignar":
        
        $conn->HeadersJson();

        CardFunctions::Designar(
            $conn->conn()
        );
    break;
    case "CardListar":

        $conn->HeadersJson();

        CardFunctions::Listar(
            $conn->conn()
        );
    break;
    case "CardContenido":
        
        $conn->HeadersJson();

        CardFunctions::Contenido(
            $conn->conn()
        );
    break;
    case "CardSaveContent":

        $conn->HeadersJson();

        CardFunctions::GrabarContenido(
            $conn->conn()
        );
    break;
    case "CardEliminar":

        $conn->HeadersJson();

        CardFunctions::Eliminar(
            $conn->conn()
        );
    break;
}

?>