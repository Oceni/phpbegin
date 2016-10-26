<?php

//classe definieren
class Programma{

    private $naam = "";
    private $omschrijving = "";
    private $liedjes= array();

    public function voegliedjeToe($liedje){

        $this->liedjes[] =$liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

// geeft het informatie terug
    public function getProgramma(){
        return array("naam" => $this->naam,
            "omschrijving" => $this->omschrijving

        );
    }
// geeft de programma een naam de naam als string
    public function setNaam($n){
        if(strlen($n)>=2){
        $this->naam = $n;

    }
}
// geeft het progamma als omschrijving
public function setOmschrijving($omschrijving){
    $this->omschrijving = $omschrijving;
}

public function getNaam(){
  return $this->naam;
}

public function getOmschrijving(){
    return $this->omschrijving;
}
}

?>


