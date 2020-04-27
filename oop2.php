<?php

class stringTRUBL {

    static public function substrTRUBL($stringKterýmNahrazuji, $stringKterýNahrazuji) {
        return substr($stringKterýmNahrazuji, $stringKterýNahrazuji);
    }

    static public function substr__replaceTRUBL($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit) {
        return substr_replace($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit);
    }

    static public function strtrTRUBL($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji) {
        return strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    static public function strtoupperTRUBL($velkéPísmeno) {
        return strtoupper($velkéPísmeno);
    }

    static public function strtolowerTRUBL($maléPísmeno) {
        return strtolower($maléPísmeno);
    }

    static public function strrposTRUBL($odkudhledam, $cohledam) {
        return strrpos($odkudhledam, $cohledam);
    }

    static public function strriposTRUBL($odkudhledam, $presnecohledam) {
        return strripos($odkudhledam, $presnecohledam);
    }

    static public function strposTRUBL($odkudhledam, $cohledam) {
        return strpos($odkudhledam, $cohledam);
    }

    static public function strlenTRUBL($délkaŘetězce) {
        return strlen($délkaŘetězce);
    }

    static public function strchrTRUBL($odkudhledam, $cohledam) {
        return strchr($odkudhledam, $cohledam);
    }

    static public function str_replace($Samohlásky, $Rozmezí, $veVětě) {
        return str_replace($Samohlásky, $Rozmezí, $veVětě);
    }

    static public function md5TRUBL($Zpráva) {
        return md5($Zpráva);
    }

    static public function implodePokkorny($Co, $Kam) {
        return implode($Co, $Kam);
    }

    static public function explodeTRUBL($hranice, $Věta2) {
        return explode($hranice, $Věta2);
    }

    static public function addcslashesTRUBL($vtomhleretezci, $rozmezi) {
        return addcslashes($vtomhleretezci, $rozmezi);
    }

    static public function addslashTRUBL($Věta2) {
        return addslashes($Věta2);
    }

    static public function trimPTRUBL($odsud, $vynechKusŘetězce) {
        return trim($odsud, $vynechKusŘetězce);
    }

    static public function ucfirstTRUBL($Věta) {
        return ucfirst($Věta);
    }

    static public function ucwordsTRUBL($Věta) {
        return ucwords($Věta);
    }

}

$stringKterýmNahrazuji = "kockopes";
$stringKterýNahrazuji = 2;
$stringKterýmNahrazuji1 = "pes";
$stringKterýNahrazuji1 = "kocka";
$začátečníBit = 0;
$Věta = "kocka mi snedla susenku";
$slovoKterýNahrazuji = "Kocka";
$slovoKterýmNahrazuji = "Opice";
$velkéPísmeno = "abcdefghijklmnopqrstuvwxyz";
$maléPísmeno = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$odkudhledam = "fs56jhggj7OTGZVd";
$cohledam = "j7O";
$presnecohledam = "ggj7OTG";
$délkaŘetězce = "Cego jsem tu";
$Samohlásky = array('a', 'e', 'i', 'o', 'u', 'y');
$Rozmezí = "";
$veVětě = "Mam rad rizek";
$Zpráva = "mango";
$co = ",";
$kam = array('pes', 'kocka', 'medved');
$hranice = '""';
$Věta2 = "pes kocka medved";
$vtomhleretezci = "Mam rad rizek";
$rozmezi = 'A..z';
$odsud = "\b\bMam rad rizek\b\b";
$vynechKusŘetězce = "\b";

var_dump(stringTRUBL::substrTRUBL($stringKterýmNahrazuji, $stringKterýNahrazuji));
var_dump(stringTRUBL::substr__replaceTRUBL($stringKterýmNahrazuji1, $stringKterýNahrazuji1, $začátečníBit));
var_dump(stringTRUBL::strtrTRUBL($Věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji));
var_dump(stringTRUBL::strtoupperTRUBL($velkéPísmeno));
var_dump(stringTRUBL::strtolowerTRUBL($maléPísmeno));
var_dump(stringTRUBL::strrposTRUBL($odkudhledam, $cohledam));
var_dump(stringTRUBL::strriposTRUBL($odkudhledam, $presnecohledam));
var_dump(stringTRUBL::strposTRUBL($odkudhledam, $cohledam));
var_dump(stringTRUBL::strlenTRUBL($délkaŘetězce));
var_dump(stringTRUBL::strchrTRUBL($odkudhledam, $cohledam));
var_dump(stringTRUBL::str_replace($Samohlásky, $Rozmezí, $veVětě));
var_dump(stringTRUBL::md5TRUBL($Zpráva));
var_dump(stringTRUBL::implodePokkorny($co, $kam));
var_dump(stringTRUBL::explodeTRUBL($hranice, $Věta2));
var_dump(stringTRUBL::addcslashesTRUBL($vtomhleretezci, $rozmezi));
var_dump(stringTRUBL::addslashTRUBL($Věta2));
var_dump(stringTRUBL::trimPTRUBL($odsud, $vynechKusŘetězce));
var_dump(stringTRUBL::ucfirstTRUBL($Věta));
var_dump(stringTRUBL::ucwordsTRUBL($Věta));






