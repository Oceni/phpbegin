
<?php

include_once('0011Radiozender.php');
include_once('Liedje.php');

$ditRadioProgramma=new RadioProgramma();
$ditRadioProgramma->setProgrammanaam("mijn eerste programma");
$ditRadioProgramma->setomschrijving("even testen");


foreach($ditRadioProgramma->getRadioProgramma()as $p) {
    echo $p . "<br>";

}



$nieuwLiedje= new Liedje("dit is de titel","blessi ina wroko");
echo $nieuwLiedje->getTitel()."<br>";
echo $nieuwLiedje->getArtiest();


$ditRadioProgramma->voegLiedjetoe($nieuwLiedje);

foreach($ditRadioProgramma->getLiedjes() as $liedje){

    echo $liedje->getTitel()."-".$liedje->getArtiest()."<br>";
}
?>

