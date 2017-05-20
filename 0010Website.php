
<?php

session_start();

if (isset($_SESSION['user']['log'])){
    echo "<h1>welkom".$_SESSION['user']['log']."op de website</h1>";
    echo "<p><a href='0010Login.php'>login</a></p>";
}else{

    header('locatie: 0010Login.php');
    // terug naar het scherm
}



?>