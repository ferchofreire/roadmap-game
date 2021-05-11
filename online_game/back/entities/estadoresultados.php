<?php 

class EstadoResultados {

    private $Grupo;
    private $Partida;

    private $CincoFuerzasdePorter;
    private $CardsSelectas;
    private $CuadroVentas;
    private $CuadroFlujoCajaTriAnual;
    private $TablaMetrica;
    private $tablaCambiodeEstado;

    function __construct()
    {
        $this->CardsSelectas = $_GET['cards'];
        $this->Grupo = $_GET['g'];
        $this->Partida = $_GET['p'];
        
    }
    function TraerCartasJuego($conn){

    }

    function GenerarPuntaje($_conn){
        $SQL = "
            SELECT * 
            FROM dinamic_available_cards AS dc
            INNER JOIN static_gamecards AS sc
            ON dc.card = sc.id
            
            WHERE Pos > 0 AND ";
    }

    function RetornarTablas(){
        //
    }

    function SumarCards($tipo){
        switch($tipo){

        }
    }

 }

?>