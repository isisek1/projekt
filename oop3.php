<?php

class numbers {

    static public function roundTRUBL($zaokrouhli) {
        return round($zaokrouhli);
    }

    static public function ceilTRUBL($zaokrouhlinahoru) {
        return ceil($zaokrouhlinahoru);
    }

    static public function floorTRUBL($zaokrouhlidolu) {
        return floor($zaokrouhlidolu);
    }

    static public function sqrtTRUBL($druhaodmocnina) {
        return sqrt($druhaodmocnina);
    }

    static public function powTRUBL($mocnina, $mocnitel) {
        return pow($mocnina, $mocnitel);
    }

    static public function sinTRUBL($uhel) {
        return sin($uhel);
    }

    static public function cosTRUBL($uhel) {
        return cos($uhel);
    }

    static public function tanTRUBL($uhel) {
        return tan($uhel);
    }

    static public function asinTRUBL($zcislanauhel) {
        return asin($zcislanauhel);
    }

    static public function acosTRUBL($zcislanauhel) {
        return acos($zcislanauhel);
    }

    static public function atanTRUBL($zcislanauhel) {
        return atan($zcislanauhel);
    }

    static public function fmodTRUBL($zaklad, $delitel) {
        return fmod($zaklad, $delitel);
    }

    static public function maxTRUBL($pole) {
        return max($pole);
    }

    static public function minTRUBL($pole) {
        return min($pole);
    }

    static public function absTRUBL($abscislo) {
        return abs($abscislo);
    }

    static public function odecitaniTRUBL($a, $b) {
        return $a - $b;
    }

    static public function scitaniTRUBL($a, $b) {
        return $a + $b;
    }

    static public function deleniTRUBL($a, $b) {
        return $a / $b;
    }

    static public function nasobeniTRUBL($a, $b) {
        return $a * $b;
    }

    static public function number_formatTRUBL($formatuje) {
        return number_format($formatuje);
    }

}

$zaokrouhli = 38.83;
$zaokrouhlinahoru = 38.83;
$zaokrouhlidolu = 38.83;
$druhaodmocnina = 16;
$mocnina = 9;
$mocnitel = 3;
$uhel = 90;
$zcislanauhel = 50;
$zaklad = 20;
$delitel = 5;
$pole = array('1', '2', '3', '4', '5', '12', '16', '25', '69');
$abscislo = 57.12;
$a = 8;
$b = 2;
$formatuje = 10;
var_dump(numbers::roundTRUBL($zaokrouhli));
var_dump(numbers::ceilTRUBL($zaokrouhlinahoru));
var_dump(numbers::floorTRUBL($zaokrouhlidolu));
var_dump(numbers::sqrtTRUBL($druhaodmocnina));
var_dump(numbers::powTRUBL($mocnina, $mocnitel));
var_dump(numbers::sinTRUBL($uhel));
var_dump(numbers::cosTRUBL($uhel));
var_dump(numbers::tanTRUBL($uhel));
var_dump(numbers::asinTRUBL($zcislanauhel));
var_dump(numbers::acosTRUBL($zcislanauhel));
var_dump(numbers::atanTRUBL($zcislanauhel));
var_dump(numbers::fmodTRUBL($zaklad, $delitel));
var_dump(numbers::maxTRUBL($pole));
var_dump(numbers::minTRUBL($pole));
var_dump(numbers::absTRUBL($abscislo));
var_dump(numbers::odecitaniTRUBL($a, $b));
var_dump(numbers::scitaniTRUBL($a, $b));
var_dump(numbers::deleniTRUBL($a, $b));
var_dump(numbers::nasobeniTRUBL($a, $b));
var_dump(numbers::number_formatTRUBL($formatuje));




