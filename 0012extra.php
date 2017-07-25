
<html>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php /*echo $title; */?></title>
    <link rel="stylesheet" type="text/css" href="0012style.css"/>


</head>


<body>
<div id="wrapper">
    <div id="banner">


    </div>

    <nav id="navigation">

        <ul id="nav">
            <li><a href="0012wheely.php">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Assecoires</a></li>
            <li><a href="#">Contact</a></li>


        </ul>

    </nav>

    <div id="content_area">

        <?php /*echo $content; */?>

    </div>



    <div id="sidebar">


    </div>


    <footer>
        <p>Made By: Xavier Oseini Landveld</p>


    </footer>


</body>
</body>





</html>







<?php

include '0012wheely.php';
include '0012autooverzicht.php';



$lijst = new Autooverzicht();
$lijst = $lijst->getLijst();


?>
<?php
//style extra


/// style extra hoort hier tussen
?>
<body>
<form method="post">
    <br><input type="text" name="min" placeholder="Minimum prijs">
    <br><input type="text" name="max" placeholder="Maximum prijs">
    <br>
    <select name="merk">
        <option value="alle">Alle merken</option>
        <?php

        $merken= array();
        foreach ($lijst as $autoos){
            if (!in_array($autoos->getMerk(), $merken)){
                array_push($merken, $autoos->getMerk());
            }
        }
        foreach ($merken as $merk){
            echo "<option value=".$merk.">".$merk."</option>";
        }

        ?>

    </select>
    <input type="submit" name="submit" value="OK">


</form>

<?php



foreach ($lijst as $autoos){

    if (isset($_POST["submit"] )

        &&
        ($autoos->getPrijs() >= $_POST["min"] || $_POST["min"] == "")
        && ($autoos->getPrijs() <= $_POST["max"] || $_POST["max"] == "")
        && ($autoos->getMerk() == $_POST["merk"] || $_POST["merk"] == "alle")

    )

    {

        echo "<div>";
        echo "". $autoos->getMerk()."<br>";
        echo $autoos->getType() ."<br>";
        echo "€".$autoos->getPrijs(). ",-<br>";
        echo "<img src='phpbegin/".$autoos->getFotoURl()."'><br><br>";
        echo"</div>";


    }

}

?>

<footer>
    <p>© 2017 Xavier Oseini Landveld</p>


</footer>

</body>





<?php
/*interface OperatorInterface{

    public function run($number, $result);
}*/


?>

<!--<!DOCTYPE html>

    <html>

<head>

</head>
<body>

<form action="oefenvak.php" method="post">
    <input type="text" name="num1">
    <input type="text" name="num2">
    <select name="cal">
        <option value="add">Add</option>
        <option value="sub">Subtract</option>
        <option value="mul">Multiply</option>
    </select>

    <button type="submit">Calculate</button>



</form>

</body>



</html>
-->