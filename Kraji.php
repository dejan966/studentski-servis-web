<?php

class Kraji {
    public $Ime_K;
    public $Posta;
    public $St_D;
    public $St_S;
    
    public function Kraji($Ime_K, $Posta, $St_D, $St_S){
        $this->Ime_K = $Ime_K;
        $this->Posta = $Posta;
        $this->St_D = $St_D;
        $this->St_S = $St_S;
    }
    
    public function _toString(){
        return $this->Ime_K.",".$this->Posta.",".$this->St_D.",".$this->St_S;
    }
}
