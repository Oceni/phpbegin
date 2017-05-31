
<?php
class RadioProgramma{

private $Programmanaam="";
private $omschrijving="";
private $Liedjes= array();


    public function voegLiedjetoe($liedje){

        $this->liedjes[]=$liedje;
    }


    public function getLiedjes(){

        return $this->liedjes;
    }


    // geeft de programma informatie terug
function getRadioProgramma(){
    return array("Programmanaam"=> $this->Programmanaam,
    "omschrijving"=> $this->omschrijving
    );
}
// geef het programma een naam
//parameter de naam als string

 function setProgrammanaam($Pr){
 if (strlen($Pr)>2) {
     $this->Programmanaam = $Pr;
 }
}
// geef het programma een omschrijving
//parameter de omschrijving als string
    function setomschrijving($omschrijving){

        $this->omschrijving=$omschrijving;
    }

//Retouneert naam van het programma
//paramater
    function getProgrammanaam(){
return $this->Programmanaam;
    }


    function getomschrijving(){
return $this->omschrijving;

    }

}





?>










































<!--
include_once("Programma.php");
include_once("liedje.php");

$ditprogramma = new Programma();
$ditprogramma->setNaam("mijn eerste programma");
$ditprogramma->setOmschrijving("Even test");

foreach($ditprogramma->getProgramma() as $p){
echo $p."<br>";
}

$nieuwliedje= new liedje("dit is de titel " , " today days");
echo $nieuwliedje->getTitel()."<br>";
echo $nieuwliedje->getArtiest();

$ditprogramma->voegliedjeToe($nieuwliedje);

foreach($ditprogramma->getLiedjes() as $liedje){
    echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
}-->