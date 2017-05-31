<?php
class liedje
{

    private $titel;
    private $artiest;
     // hiermee kijk je welk programma hoort bij welke liedje

    function __construct($t,$a)     //dit word aangeroepen zolang er van een nieuwe klasse een ob ject word gemaakt
    {
        $this->titel=$t;
        $this->artiest=$a;


    }


    //pakt de waarde van de t

    public function getTitel()
    {
        return $this->titel;
    }

    // zet de waarde van de


    public function setTitel($titel){

        $this->titel=$titel;
        return $this;
}



//pakt de waarde van de artiest


public function getArtiest()
{
    return $this->artiest;

}


//zet de waarde van artiest

public function setArtiest($artiest){

    $this->artiest=$artiest;
    return $this;
}

}