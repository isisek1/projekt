<?php

abstract class StringsTRUBL {

    protected static function substrTRUBL($body) {
        define($body, 'osmnáct');
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

    protected static function addcslashesTRUBL($oddo) {
        define($oddo, '1,2,3,4,5,6,7,8,9,10');
    }

    protected static function addslashesTRUBL($lomeno) {
        define($lomeno, 'MC´Donald');
    }

    protected static function trimTRUBL($vynechcastretezce) {
        define($vynechcastretezce, '\k\kped je jf\z\z');
    }

    protected static function ucfirstTRUBL($prvnipismenovelke) {
        define($prvnipismenovelke, 'praha a plzeň');
    }

    protected static function ucwordsTRUBL($kazdeprvnipismenovelke) {
        define($kazdeprvnipismenovelke, 'praha a plzeň');
    }

}

class SringTRUBL extends StringsTRUBL {

    //nahradi sttring jinym stringem
    public static function substrTRUBL() {
        parent::substrTRUBL();
        return substr($body, null);
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
    public function addcslashesTRUBL($oddo) {
        return addcslashes($oddo, '\1...\7');
    }

    // vloží lomeno
    public function addslashesTRUBL($addlomenno) {
        return addslashes($addlomenno);
    }

    //vynechá část řetězce, zbytek ne
    public function trimTRUBL($vynechcastretezce) {
        return trim($vynechcastretezce, '\h.');
    }

    //první písmeno v řetězci je velké
    public function ucfirstTRUBL($prvnipismenovelke) {
        return ucfirst($prvnipismenovelke);
    }

    //každé první písmeno v řetězci je velké
    public function ucwordsTRUBL($kazdeprvnipismenovelke) {
        return ucwords($kazdeprvnipismenovelke);
    }

}

echo 'StringsTRUBL';
var_dump(StringTRUBL::substrTRUBL(body));



