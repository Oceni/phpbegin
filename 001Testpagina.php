
<?php

class bevrijding{


    public $Kleur="";


    function bidden(){

        return "doorbraak".$this->getKleur(). "overwinning";
    }


    public function setKleur($Kleur){
        $this->Kleur=$Kleur;
        return;
    }
    public function getKleur(){
        return $this->Kleur;
    }

}

$herstel= new bevrijding;
$herstel->setKleur("green");
echo $herstel->bidden();


?>















<?php
/*
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
*/?>












<?php
/*
if(!isset($_POST['name'], $_POST['age'])){

    $name=$_REQUEST['name'];
    $age=$_REQUEST['age'];
    echo $name." and" .$age." are avaible";
}

*/ ?>


<?php
/*$name = $_POST["name"];
$addres = $_POST["addres"];
$email = $_POST["email"];
$wachtwoord = $_POST["wachtwoord"];
if($name=="" || $addres=="" || $email=="" || $wachtwoord==""){
    header("Location: form.php?error");
}else{
    echo "Uw Naam : ".$name."<br>";
    echo "Uw Adres : ".$addres."<br>";
    echo "Uw Email : ".$email."<br>";
    echo "Uw Wachtwoord : ".$wachtwoord."<br>";
}


*/ ?>

<?php
/*
include("header.php");
*/?>



<!--
--><?php
/*include("footer.php");
*/?>





<?php

/*session_start();

$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);


if(isset($_SESSION["gebruiker"])){
 echo "<h1>Welkom ".$_SESSION["gebruiker"]["naam"]." op de website</h1>";
 echo "<p><a href='0010Login.php'>login</a></p>";
}
//op deze pagina kan iedereen komen
else{
header('location: 0010Login.php');
}



*/?><!--

-->






































<?php
/*
    include("header.php");


$messages= array();
if(!isset($_GET["ïnlognaam"])&& !isset($_GET["wachtwoord"])){

    $messages[]= "de inlognaam en de wachtwoord moet ingevuld worden";

}else if(strlen($_GET["inlognaam"])<2){

   $messages[]= "Een naam moet minimaal 2 letters bevatten";
}else if(strlen($_GET["wachtwoord"])<3){

    $messages[]="Een wachtwoord moet minimaal 2 letters bevatten";
}



if(!count ($messages)==0) {
    // als messages niet geteld zijn weergeven
    //mesages weergeven

    $html="<ul>";
    foreach($messages as $message){
        $html.="<li>".$message."</li>";
        // dit betekent html is een lege string als ik een messages
        // tegen kom word het aan de lege string toegevoegd
    }

    $html.="</ul>";
    echo $html;
}else{

    echo "Welkom my brother meesterplusser" . $_GET["inlognaam"];


    */ ?>


    <div style="background-color:<?php /*echo $_GET["wachtwoord"]; */ ?>; height:200px; width:200px"</div>

    <?php
/*}
    include("footer.php");

*/ ?>

    <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css";
    </head>


    <body>

    </body>

    </html-->