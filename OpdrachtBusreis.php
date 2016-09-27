<?php
$leeftijd = 2;
$prijs= 10;
$korting= $prijs*0.5;



if ($leeftijd >= 65) {
    echo "prijs is " . $korting;
}

else if ($leeftijd>12){
    echo "prijs is ".$prijs;
}

 if ($leeftijd <3) {
    echo "prijs is gratis ";
}
else if ($leeftijd <=12 )
{
    echo "prijs is ".$korting;
}



