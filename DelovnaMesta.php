<?php

class DelovnaMesta {
    public $Naziv;
    public $Opis;
    public $Placa;
    public $Trajanje;
    public $Delovnik;
    public $Sifra;
    public $Prosto;
    public $Kraj;
    public $Podjetje;
    public $FilePath;
    
    public function DelovnaMesta($_naziv, $_opis, $_placa, $_trajanje, $_delovnik, $_sifra, $_prosto, $_kraj, $_podjetje, $_filepath){
        $this -> Naziv = $_naziv;
        $this -> Opis = $_opis;
        $this -> Placa = $_placa;
        $this -> Trajanje = $_trajanje;
        $this -> Delovnik = $_delovnik;
        $this -> Sifra = $_placa;
        $this -> Prosto = $_prosto;
        $this -> Kraj = $_kraj;
        $this -> Podjetje = $_podjetje;
        $this -> FilePath = $_filepath;
    }
    
    public function _ToString(): string{
        return $this->Naziv.",".$this->Opis.",".$this->Placa.",".$this->Trajanje.",".$this->Delovnik.",".$this->Sifra.",".$this->Prosto.",".$this->Kraj.",".$this->Podjetje.",".$this->FilePath;
    }
}
