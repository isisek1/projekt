<?php

declare(strict_types=1);

require __DIR__ . '/../src/tracy.php';

use Tracy\Debugger;

// session is required for this functionality
session_start();

// For security reasons, Tracy is visible only on localhost.
// You may force Tracy to run in development mode by passing the Debugger::DEVELOPMENT instead of Debugger::DETECT.
Debugger::enable(Debugger::DETECT, __DIR__ . '/log');

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
dump(numbers::roundTRUBL($zaokrouhli));
dump(numbers::ceilTRUBL($zaokrouhlinahoru));
dump(numbers::floorTRUBL($zaokrouhlidolu));
dump(numbers::sqrtTRUBL($druhaodmocnina));
dump(numbers::powTRUBL($mocnina, $mocnitel));
dump(numbers::sinTRUBL($uhel));
dump(numbers::cosTRUBL($uhel));
dump(numbers::tanTRUBL($uhel));
dump(numbers::asinTRUBL($zcislanauhel));
dump(numbers::acosTRUBL($zcislanauhel));
dump(numbers::atanTRUBL($zcislanauhel));
dump(numbers::fmodTRUBL($zaklad, $delitel));
dump(numbers::maxTRUBL($pole));
dump(numbers::minTRUBL($pole));
dump(numbers::absTRUBL($abscislo));
dump(numbers::odecitaniTRUBL($a, $b));
dump(numbers::scitaniTRUBL($a, $b));
dump(numbers::deleniTRUBL($a, $b));
dump(numbers::nasobeniTRUBL($a, $b));
dump(numbers::number_formatTRUBL($formatuje));

?>
