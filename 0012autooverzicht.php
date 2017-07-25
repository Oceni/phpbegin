



<?php

var_dump($lijst );
class Autooverzicht{

    private $lijst;

    public function __construct(){



        $this->lijst = array (

            new Auto("Mercedes","AMG",39000,"../wheely/mercedes-c63s-amg-sedan-0869.jpg"),
            new Auto("Mercedes","GLE",67000,"../wheely/Mercedes-AMG-GLE-63-Coupe.jpg"),
            new Auto("Mercedes","CLA",35000,"../wheely/00-mercedes-benz-vehicles-cla-180-c-117-environmental-certificate-1280x686-1280x686.jpg"),
            new Auto("Mercedes","CLS 63",32500,"../wheely/8zzoczxmu5cls.jpg"),
            new Auto("Audi","RS7",70000,"../wheely/6-sieu-xe-audi-rs-7.jpg"),
            new Auto("Audi","RS6",89000,"../wheely/IMG_4845.jpg"),
            new Auto("Audi","Q7",139000,"../wheely/Audi-Q7-PPI-ICE-GT-1.jpeg"),
            new Auto("Audi","S5",33000,"../wheely/safgasfgsafgs5.jpg"),
            new Auto("Bmw","M7",55000,"../wheely/maxresdefault (2).jpg"),
            new Auto("Bmw","X6",60000,"../wheely/LANZAMIENTO-BMW-X6-1.jpg"),
            new Auto("Bmw","M5",45000,"../wheely/P90251032_highRes_the-new-bmw-m4-cs-04-1024x683.jpg"),
            new Auto("Volkswagen","Scirocco",23000,"../wheely/vw-scirocco-uk-2014-002.jpg"),
            new Auto("Volkswagen","Golf7",25000,"../wheely/images (4).jpeg"),
            new Auto("Volkswagen","Golf GTD",27000,"../wheely/Volkswagen-Golf-GTD-GTI-and-R-743395.jpg"),
            new Auto("Jaguar","F type",70000,"../wheely/2017-Jaguar-F-Type-SVR-Co-Pilot-Nordschleife-1.jpg"),
            new Auto("Jaguar","F type",70000,"../wheely/b88c78f34bac0179753a340a6610747af9fe28be832b2d788e73741a17d9901c.jpg"),
            new Auto("Jaguar","XF type",65000,"../wheely/DSC_0554.jpg"),
            new Auto("Jaguar","SUV",80000,"../wheely/jguar-cx17-gold2.jpg"),
            new Auto("Maserati","Granturismo",120000,"../wheely/maserati-2014-wallpaper-3.jpg"),
            new Auto("Maserati","Ghibli",70000,"../wheely/7bbf792785d11b951d02ff9334806393.jpg"),
            new Auto("Maserati","Levante",90000,"../wheely/maserati-levante-s-c396824092016184350_8.jpg"),
            new Auto("Range Rover","Sport",77000,"../wheely/1625Rangesport.jpg"),
            new Auto("Range Rover","Velar",67000,"../wheely/Range_Rover_Velar.jpg"),
            new Auto("Range Rover","Evogue",50000,"../wheely/Range-Rover-Evoque-SE-Dynamic-006.jpg"),
            new Auto("Range Rover","Cabrio",75000,"../wheely/rrevoqueconvladraftnd021-1rangecabri.jpg"),
            new Auto("Range Rover","Geneva",65000,"../wheely/rr-velar-geneva_010.jpg"),
            new Auto("Range Rover","limit",85000,"../wheely/range-rover-widebody-by-mc-customs-1.jpg"),





        );
    }
    public function getLijst(){
        return $this->lijst;
    }
}

?>













<?php
/*require'0012wheely.php';


$_GET['post'];
*/





?>

<?php
/*echo '<h2>Instantiating Address</h2>';

$address= new Address;


echo '<h2>Empty Address</h2>';
echo '<tt><pre>'.var_export($address,TRUE).'</pre></tt>';
echo '<h2> setting properties...</h2>';

$address->street_address_1='555 Fake Street';
$address->city_name='Townsville';
$address->subdivision_name='state';
$address->postal_code='12345';
$address->country_name='United States of America';
echo '<tt><pre>'.var_export($address,TRUE).'</pre></tt>';

echo '<h2>Displaying address </h2>';
echo $address->display();

echo '<h2>Testing magic __get and __set</h2>';
unset($address->postal_code);
echo $address->display();





*/?>
<!--
<html>
<body>
<?php
/*
class AutoOverzicht
{

    public $autoos=array();


    public function voegAutoToe($merk="",$type="",$prijs=0,$url=""){
        array_push($this->autoos, new Auto($merk, $type,$prijs,$url));


        /*if (isstet($merk==""))&& isset($prijs<20000){
            foreach($autos as $auto){
             echo $auto;
            }
        }*/

/*     $auto= new Auto('Mercedes','AMG','AMG','30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'50000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'80000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'70000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');
     $auto= array('Mercedes'=>'AMG','AMG'=>'30000');







 }

 public function getGefilterdeLijst(){

}


public function getAutoLijst(){

}

}

*/?>

</body>
</html>
-->