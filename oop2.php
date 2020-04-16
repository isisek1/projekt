<?php

abstract class stringTRUBL {

    public static function substrTRUBL($stringKterýmNahrazuji = 'pes', $stringKterýNahrazuji = 'kočka') {
        return $this->substr($stringKterýNahrazuji, $stringKterýmNahrazuji);
    }

    public static function substr_replaceTRUBL($stringKterýmNahrazuji1 = 'pes', $stringKterýNahrazuji1 = 'kočka', $začátečníBit = 0) {
        return $this->substr_replace($stringKterýNahrazuji1, $stringKterýmNahrazuji1, $začátečníBit);
    }

    public static function strtrTRUBL($slovoKterýmNahrazuji = 'pes', $slovoKterýNahrazuji = 'kočka', $věta = 'Přejel jsem omylem kočka') {
        return $this->strtr($věta, $slovoKterýNahrazuji, $slovoKterýmNahrazuji);
    }

    public static function stroupperTRUBL($velkéPísmeno = 'ABCDEFGHIJKLMNPQRSTUVWXYZ') {
        return $this->strtoupper($velkéPísmeno);
    }

    public static function strtlowerTRUBL($maléPísmeno = 'abcdefghijklmnopqrstuvwxyz') {
        return $this->strtolower($maléPísmeno);
    }

    public static function strrposTRUBL($bit1 = 8, $bit2 = 7) {
        return $this->strrpos($bit1, $bit2, $offset = 0);
    }

    public static function strriposTRUBL($přesněNajdi, $bit = '2B') {
        return $this->strripos($přesněNajdi, $bit, $offset = 0);
    }

    public static function strlenTRUBL($délkaŘetězce = 20) {
        return $this->strlen($délkaŘetězce);
    }

    public static function str_replaceTRUBL($odstraníPísmeno = 'a', $nahradíPísmenem = 'b', $veVětě = 'Mám rád hřeaík') {
        return $this->str_replace($odstraníPísmeno, $nahradíPísmenem, $veVětě, $count = NULL);
    }

    public static function md5TRUBL($zakódujeHeslo = 'yfuu55446hgd') {
        return $this->md5($zakódujeHeslo);
    }

    public static function implodeTRUBL($čárka = ',') {
        return $this->implode('...věděl', $čárka, 'ale...');
    }

    public static function explodeTRUBL($rozdělíString) {
        return $this->explode('', $rozdělíString);
    }

    public static function addslashesTRUBL($přidejLomeno = '/') {
        return $this->addslashes($přidejLomeno);
    }

    public static function trimTRUBL($vynechKusŘetězce) {
        return $this->trim($vynechKusŘetězce);
    }

    public static function ucfirstTRUBL($prvníPísmenoVelké) {
        return $this->ucfirst($prvníPísmenoVelké);
    }

    public static function ucwordsTRUBL($každéPrvníPísmenoVeVětěVelké) {
        return $this->ucwords($každéPrvníPísmenoVeVětěVelké);
        
    }

}
