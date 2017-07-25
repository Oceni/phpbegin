<?php
$_POST = array(); //workaround for broken PHPstorm
parse_str(file_get_contents('php://input'), $_POST);


class Auto{

    private $merk;
    private $type;
    private $prijs;
    private $fotoUrl;



    public function __construct($merk, $type, $prijs, $fotoUrl){

        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->fotoUrl = $fotoUrl;
    }




    public function getMerk(){
        return $this->merk;
    }

    public function getType(){
        return $this->type;
    }

    public function getPrijs(){
        return $this->prijs;
    }


    public function getFotoURl(){
        return $this->fotoUrl;
    }



    public function setMerk($merk){
        $this->merk= $merk;
    }

    public function setType($type){

        $this->type= $type;
    }

    public function setPrijs($prijs){
        $this->prijs= $prijs;
    }

    public function setFotoUrl($fotoUrl){
        $this->fotoUrl= $fotoUrl;
    }




}


?>


<?php

// garage bedrijf
// 1 mr wheely wil graag een overzicht van alle occasions op zijn website
// 2 je moet kunnen zoeken op merk!!
// merken zijn Mercedes=[0],audi[1],bmw[2],volkswagen[3],Jaguar[4],maserati[5],Range rover[6],
// types zijn 0=>AMG,0=>CLS 0=>GLE   1=>RS6   1=>s7
//
// 3 je moet kunnen zoeken op minimale en maximale prijs
// minimale prijs is 10.000 maximale prijs is 130.0000
// 4 de website moeten later uitgebreid kunnen worden dus in een class oop


//classe moet zijn

//classe ->Auto
//eigenschappen ->merk,type,prijs,url
//Functies->geefGas();,rem();


//merk mercedes,audi,bmw

//tweede classe->autooverzicht
//eigenschappen->autos
//functies->voegAutoToe();,getGefilterdeLijst();,getAutoLijst();




// physical address

/*class Address{

    //street address

    public $street_address_1;
    public $street_address_2;

    //name of the City
    public $city_name;

    //name of the subdivision
    public $subdivision_name;


    // Postal code
    public $postal_code;



    public $country_name;
    //name of the country


    //primary key of an address
    protected $_address_id;

    //when the record was created and last update
    protected $_time_created;
    protected $_time_updated;

    //magic_get
    // param string $name
    //return mixed

    function _get($name){
// postal code lookup if unset.
        if(!$this-> postal_code){
            $this->_postal_code= $this->_postal_code_guess();
        }
// Atempt to return a protected property by name

        $protected_property_name='_'.$name;
        if (property_exists($this,$protected_property_name)){
            return $this->$protected_property_name;
        }

        // Unable to acces property; trigger error.
        trigger_error('Undefined property via__get:'. $name );
        return null;
    }
     //__set.
    // $name
    // $value
    function __set($name,$value)
    {
// allow anything to set the postal code
        if ('postal_code' == $name) {
            $this->$name = $value;
            return;
        }
        // unable to acces property; trigger_error.

        trigger_error('undefined or unallowed property via __set():' . $name);

    }
      // gues the postal code given the subdivision and city name
     // todo replace with a database lookup.
      //return string

    protected function _postal_code_guess(){
        return 'LOOKUP';
    }


    function display(){
        $output="";


        //street address
        $output .=$this->street_address_1;
        if($this->street_address_2) {
        }

        $output .='<br/>';
        $output .= $this->city_name. ','. $this->subdivision_name;
        $output .='' . $this->postal_code;
        return $output;
    }

}




*/?>

<!--

--><?php
/*$item= array(

    array('film 1','De rijke jongeling','cool misgunners','100'),
    array('film 2','ik ga vooruit','dag misgunners','200'),
    array('film 3','doorbraak','overwinning','300')


);

echo '<h1> Welkom op de website</h1>';


foreach($item as $gulio){
    echo  '<p><strong>'. $gulio[0].'</strong></p>'. '<p><strong>'. $gulio[1].
        '</strong></p>'.'<p><strong>'. $gulio[2].'</strong></p>';
      echo  '<p>&euro; '.($gulio[3]).',-</p>';

}




*/?>



<!--<html>
<head>
    <title>Override!</title>
    <link href="0012style.css" rel="stylesheet"/>
    <link rel="0012autooverzicht" alt="">

    <meta charset="UTF-8">

</head>
<body>

<?php
/*
    class Auto


    // kunnnen zoeken op merk if isset audi print uit audi plus plaatje en waarde

    {
        private $merk="";
        private $type="";
        private $prijs=0;
        private $url="";
        public $auto="";



        function __construct($merk="",$type="",$prijs=0,$url=""){

            $this->merk = $merk;
            $this->type= $type;
            $this->prijs= $prijs;
            $this->url= $url;


        }


public function geefGas(){



}


public function rem(){


}

public function getMerk(){
    return merk;
    }

    public function getType(){

        return type;
    }

public function getPrijs(){
    return prijs;
}


public function getUrl(){

    return url;
}


public function getPrijsformat(){



}



    }


$auto = new Auto();
var_dump($auto); //  hiermee kan je zien wat er in de klasse is








*/?>

    <?php
/*    $title ="Home";
    $content='Hello World';
    include'0012extra.php';

/*public function merk()
{
$merk= array("Mercedes","Audi","BMW");*/
?>


<center>
<header>
 <div class="wheely">
<img src="36045webdesign.jpg"/>
     <h1>Welcome on Wheelywebsite</h1>
 </div>


</header>
</center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>



<form action="0012autooverzicht.php" method="post">


    Minimale prijs<input type="text" name="Min">
    <?php /*echo "  "  .  "  "  ; */?>
    Maximale prijs<input type="text" name="Max"><br>

    <label for="sel1">Merk:</label>
   <Select>


     <option value="Mercedes">Mercedes</option>
       <option value="Audi">Audi</option>
       <option value="BMW">BMW</option>
       <option value="Volkswagen">Volkswagen</option>
       <option value="Jaguar">Jaguar</option>
       <option value="Maserati">Maserati</option>
       <option value="Range Rover">Range Rover</option>

   </Select>
    <input type="submit" name="verzenden">


</form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="toevoegen">
    <div id="slider">
      <a href="#"  ><img src="mercedes-c63s-amg-sedan-0869.jpg" alt="goeie" title="Merry" /></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="2014Jan06213719_608x342.jpg" alt="audje" title="adi"/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="maxresdefault (2).jpg" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>
        <a href="#"><img src="" alt="" title=""/></a>


    </div>
</div>


</body>
</html>
-->

<!--
--><?php
/*if (isset(value>0)&& <50000{
    if isset(name=['audi']{

        //get all names that are audi
        echo .$audi;

            // dus hier twee waardes meegeven als de prijs tussen die en dat zit en de naam is zo
        // iets dan pas pak je de waarden die gekoppeld zijn aan audi bijvoorbeeld
    }
}

if $merk==$merceds(){
    // laat dan alles van mercedes zien
}


// een lijst maken en in een array zetten een opvragen
*/?>

