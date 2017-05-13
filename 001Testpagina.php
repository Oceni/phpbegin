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

include("header.php");
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>


</head>
<body>

<?php
if (isset($_GET['kan'])) {
    foreach ($_GET['beast'] as $beast) {
        print $beast;
    }
}
?>

<form action="#" method="GET">
    <select name="beast[]">
        <option value='<img src="leeuw.jpg"'>Leeuw</option>
        <option value='<img src="paard.jpg"'>paard</option>
        <option value='<img src="beer.jpg" '>beer</option>
        <option value='<img src="hond.jpg" '>hond</option>
        <option value="<img sr-=-"
    </select>
    <input type="submit" name="kan" value="verzenden">
</form>
}


</body>


</html>


<?php
include("footer.php");
?>


<!--





<html>
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