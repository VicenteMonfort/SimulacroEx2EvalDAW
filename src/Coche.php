<?php

class Coche
{
    public $modelo;
    public $combustible; #petroleo o eléctrico
    public $autonomia;
    public $kmtotales;

    public function __construct($a1,$a2, $a3, $a4)
    {
        $this->modelo=$a1;
        $this->combustible=$a2;
        $this->autonomia=$a3;
        $this->kmtotales=$a4;
    }

    public function reposta($a){

        return $this->combustible+$a;
    }

    public function circula($a){
        if ($a<$this->autonomia){
            return $this->combustible-$a;
            $this->kmtotales+=$a
        }
        
    }
}
?>
