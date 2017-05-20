<?php

session_start();


if(isset($_SESSION["user"])&& $_SESSION["user"]["rol"]=="administrator"){

    echo "<h1>welkom".$_SESSION["user"]["log"]."op de administrator gedeelte van de website</h1>";
    echo "<p><a href='0010Login.php'>login</a></p>"; // om terug te kunnen naar het login gedeelte
}



else{
    echo "je hebt geen toegang tot de administrator website je moet eerst inloggen";

    header('locatie:0010Login.php'); // stuurt je gelijk terug

}


?>


