
<?php
	function tempratuur($C) {
        $F = $C * (9/5) + 32;
        return $F;
    }

    echo  tempratuur(30);


?>

<br>

<?php
function deelbaar($a,$b){



    if($a % $b==0) {

        echo "true";
        return true;
    }else{

        echo "false";
        return false;
    }
}

if (deelbaar(2,5))

?>


    <br>


    <?php

function test($e){

    $k=$e;
    return $k;
}

echo "e=". strrev("cool");

?>



<!--
//Schrijf een functie die als argument een waarde in Celsius accepteert en de temperatuur in Fahrenheit weergeeft.
//Schrijf een functie die bepaalt of een getal deelbaar is door 3. De functie accepteert
//een getal als argument en als retour-waarde wordt een boolean teruggegeven.
//Schrijf een functie die een string accepteert als argument en als return-waarde een string geeft met de letters in omgekeerde volgorde.
-->