<?php

class DelovnaMesta {
    public $Naziv;
    public $Opis;
    public $Placa;
    public $Trajanje;
    public $Delovnik;
    public $Sifra;
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
        $this -> Kraj = $_kraj;
        $this -> Podjetje = $_podjetje;
        $this -> FilePath = $_filepath;
    }
}
