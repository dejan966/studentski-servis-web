<?php

class Podjetja {
    public $Ime;
    public $Telefon;
    public $Kraj;
    
    public function Podjetja($Ime, $Telefon, $Kraj){
        $this->Ime = $Ime;
        $this->Telefon = $Telefon;
        $this->Kraj = $Kraj;
    }
    
    public function _toString(){
        return $this->Ime.",".$this->Telefon.",".$this->Kraj;
    }
}
