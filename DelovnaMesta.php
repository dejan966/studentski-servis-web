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
    
    public function DelovnaMesta($Naziv, $Opis, $Placa, $Trajanje, $Delovnik, $Sifra, $Prosto, $Kraj, $Podjetje, $FilePath){
        $this -> Naziv = $Naziv;
        $this -> Opis = $Opis;
        $this -> Placa = $Placa;
        $this -> Trajanje = $Trajanje;
        $this -> Delovnik = $Delovnik;
        $this -> Sifra = $Sifra;
        $this -> Prosto = $Prosto;
        $this -> Kraj = $Kraj;
        $this -> Podjetje = $Podjetje;
        $this -> FilePath = $FilePath;
    }
    
    public function _toString(): string{
        return $this->Naziv.",".$this->Opis.",".$this->Placa.",".$this->Trajanje.",".$this->Delovnik.",".$this->Sifra.",".$this->Prosto.",".$this->Kraj.",".$this->Podjetje.",".$this->FilePath;
    }
}
