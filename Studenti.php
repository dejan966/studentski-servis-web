<?php

class Studenti {
    public $Ime;
    public $Priimek;
    public $Spol;
    public $Datum_Roj;
    public $Telefon;
    public $Email;
    public $Kraj;
    public $Delovno_Mesto;
    
    public function Studenti($Ime, $Priimek, $Spol, $Datum_Roj, $Telefon, $Email, $Kraj, $Delovno_Mesto){
        $this -> Ime;
        $this -> Priimek;
        $this -> Spol;
        $this -> Datum_Roj;
        $this -> Telefon;
        $this -> Email;
        $this -> Kraj;
        $this -> Delovno_Mesto;
    }
    
    public function _toString(){
        return $this->Ime.",".$this->Priimek.",".$this->Spol.",".$this->Datum_Roj.",".$this -> Telefon.",".$this -> Email.",".$this -> Kraj.",".$this -> Delovno_Mesto;
    }
}
