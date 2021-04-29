<?php

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');

class Language{

    static $Galery;
    public $URL;

    function __construct($_URL, $gal){
        $this->URL = $_URL;
        $this->Galery = json_decode(file_get_contents($this->URL.$gal.".json"));
    }

    public function getLabel($lng, $id){
        return $this->Galery->$lng[$id];
    }

    public function getLanguageObject(){
        return $this->Galery;
    }

    public function getLanguageJson(){
        return json_encode($this->Galery,  JSON_UNESCAPED_UNICODE);
    }

}


?>