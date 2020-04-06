<?php

abstract class ustrednyTRUBL
//abstraktní třída ustrednyTRUBL s protected $napeti uvnitř 
{

    protected $napetiTRUBL;

//nastavení napětí
    public function setNapetiTRUBL($napetiTRUBL) :float {
        $this -> napetiTRUBL = $napetiTRUBL;
    }
//pouze reálné číslo psané číslicí pomocí :float
//přečtení napětí
    public function getNapetiTRUBL() :float{
        return $this -> napetiTRUBL;
    }
//pouze reálné číslo psané číslicí pomocí :float
}

class ustrednaTRUBL extends ustrednyTRUBL
//třída ustrednaTRUBL dědí od ustrednyTRUBL 
{

    public $napetiTRUBL = 12;

    const TYPE = "5";

//nastavení konstanty TYPE
}

var_dump(ustrednaTRUBL::TYPE);
var_dump($napetiTRUBL);
//výpis hodnoty TYPE a $napetiTRUBL přes var_dump 