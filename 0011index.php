<?php

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
}