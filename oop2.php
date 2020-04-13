<?php

abstract class StringsTRUBL {

    protected static function substrTRUBL($points) {
        define($points, 'osmnáct');
    }

    protected static function substr_replaceTRUBL($nahrada) {
        define($nahrada, 'aaaaa');
    }

    protected static function strtrTRUBL($oprava) {
        define($oprava, 'DOBRÝ den');
    }

    protected static function strtoupperTRUBL($velkepismo) {
        define($velkepismo, 'čégo chlapci');
    }

    protected static function strtolowerTRUBL($malepismo) {
        define($malepismo, 'AHOJ ja jsem Vojtěch');
    }

    protected static function strrposTRUBL($urcizdaje) {
        define($urcizdaje, '45288hhdjhdgdh');
    }

    protected static function strriposTRUBL($presnenajdi) {
        define($presnenajdi, 'K876KJH');
    }

    protected static function strposTRUBL($najdi) {
        define($najdi, 'osmnáct');
    }

    protected static function strlenTRUBL($pocet) {
        define($pocet, 'KKJDHDHHE');
    }

    protected static function strchrTRUBL();

    protected static function str_replaceTRUBL($smazepismena) {
        define($smazepismena, array('a', 'e', 'i', 'o', 'u', 'y'));
    }

    protected static function md5TRUBL($kodujeheslo) {
        define($kodujeheslo, 'šmakuláda');
    }

    protected static function implodeTRUBL($carka) {
        define($carka, array('jmeno', 'prijmeni', 'bydliště'));
    }

    protected static function explodeTRUBL($rozrhnestring) {
        define($rozrhnestring, 'ČAU Ahoj Alloha');
    }

    protected static function addcslashesTRUBL($vypiseoddo) {
        define($vypiseoddo, '1,2,3,4,5,6,7,8,9,10');
    }

    protected static function addslashesTRUBL($vlozilomeno) {
        define($vlozilomeno, 'MC´Donald');
    }

    protected static function trimTRUBL($vynechcast) {
        define($vynechcast, '\k\kped je jf\z\z');
    }

    protected static function ucfirstTRUBL($prvnivelke) {
        define($prvnivelke, 'praha a plzeň');
    }

    protected static function ucwordsTRUBL($kazdeprvnivelke) {
        define($kazdeprvnivelke, 'praha a plzeň');
    }

}

class SringTRUBL extends StringsTRUBL {

    //nahradi sttring jinym stringem
    public static function substrTRUBL() {
        parent::substrTRUBL();
        return substr($points, null);
    }

    //nahradí daný výraz za bitovou hodnotu
    public function substr_replaceTRUBL($nahrada) {
        return substr_replace($nahrada, 'aaaa', 0);
    }

    //nahradí určené slovo za jiné
    public function strtrTRUBL($oprava) {
        return strtr($oprava, 'AHOJ', 'ZDAR');
    }

    //všechna písmena jsou velká
    public function strtoupperTRUBL($velkepismo) {
        return strtoupper($velkepismo);
    }

    //všechna písmena jsou malá
    public function strtolowerTRUBL($malepismo) {
        return strtolower($malepismo);
    }

    //urci zda je 8 od 7 bitu dal
    public function strrposTRUBL($urcizdaje) {
        return strrpos($urcizdaje, '8', 7);
    }

    //najde zda takova kombinaci řetěz obsahuje
    public function strriposTRUBL($presnenajdi) {
        return strripos($presnenajdi, '2B', 0);
    }

    //délka řetězce
    public function strlenTRUBL($pocet) {
        return strlen($pocet);
    }

    //smaže vybraná písmena ze řetězce
    public function str_replaceTRUBL($smazepismena) {
        return str_replace($smazepismena, 'a', 'nazdar co chceš?');
    }

    public function md5TRUBL($kodujeheslo) {
        return md5($kodujeheslo, '56377jjhdhska');
    }

    public function implodeTRUBL($carka) {
        return implode(',', $carka);
    }

    //rozloží string na další stringy
    public function explodeTRUBL($roztrhnestring) {
        return explode('', $roztrhnestring);
    }

    //vypíše řetězec od kolika do kolika
    public function addcslashesTRUBL($vypiseoddo) {
        return addcslashes($vypiseoddo, '\1...\7');
    }

    // vloží lomeno
    public function addslashesTRUBL($addlomenno) {
        return addslashes($addlomenno);
    }

    //vynechá část řetězce, zbytek ne
    public function trimTRUBL($vynechcast) {
        return trim($vynechcast, '\h.');
    }

    //první písmeno v řetězci je velké
    public function ucfirstTRUBL($prvnivelke) {
        return ucfirst($prvnivelke);
    }

    //každé první písmeno v řetězci je velké
    public function ucwordsTRUBL($kazdeprvnivelke) {
        return ucwords($kazdeprvnivelke);
    }

}

echo 'StringsTRUBL';
var_dump(StringTRUBL::substrTRUBL(points));



