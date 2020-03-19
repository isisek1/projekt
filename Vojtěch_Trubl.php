<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta name="Vojtech">
        <title>
            xD
        </title>
        <link rel ="stylesheet" type ="text/css" href="css/screen.css">
    </head>
    <h1>Zde si predstavte nadpis!</h1>
    <dl>           
        <dt>prvnĂ­ termin</dt>
        <dd>vĂ˝klad terminu 1</dd>
    </dl>
    <dl>           
        <dt>prvni termin</dt>
        <dd>vyklad terminu 1</dd>
    </dl>

    <a href="https://www.google.cz">Google</a>
    <ol>
        <li type = square>Funguj</li>
        <li type = circle>Funguj</li>
        <li type = disc>Funguj</li>
    </ol>
    <table border="6">
        <tr>
            <td width = "120">sksdfhishfia</td>
            <td width = "120">waeeadswdawd</td>
        </tr>
        <tr>
            <td width = "120">sksdfhishfia</td>
            <td width = "120">waeeadswdawd</td>
        </tr>
        <tr>
            <td width = "120">sksdfhishfia</td>
            <td width = "120">waeeadswdawd</td>
        </tr>
    </table>
    <!--poznĂˇmka-->
    <a href ="ludik.jpg"><br><img src="ludik.jpg" width="500"></a>
    <br><img src="IS.jpg" width="500"/>
    <br><div>
        <dl>
            <dt>JmĂ©no:</dt>
            <dd><input type ="text"></dd>
            <dt>Prijmeni:</dt>
            <dd><input type ="text"></dd>
        </dl>
    </div>
    <form action="index.html" method="get">
        <textarea>Sem nÄ›co napiĹˇ xD</textarea>
        <br><h1><i>Neco</i></h1>
        <form>
            <dl>
                <dt>Opet neco</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt>Zase neco</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt>Prekvapive neco</dt>
                <dd><input type ="radio"></dd>
            </dl>
            <dl>
                <dt>Opet neco</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <dl>
                <dt>Zase neco</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <dl>
                <dt>Prekvapive neco</dt>
                <dd><input type ="checkbox"></dd>
            </dl>
            <p>
                <input type="submit" value="schvĂˇlit">
                <br><input type="text" value="">
                <br><input type="password" value="">
                <br><input type="file">
            </p>
            <select name ="radit">
                <option value="jmeno">1.moĹľnost</option>
                <option value="jmeno">2.moĹľnost</option>
                <option value="jmeno">3.moĹľnost</option>
                <option value="jmeno">4.moĹľnost</option>
                <option value="jmeno">5.moĹľnost</option>
            </select>
        </form>

</html>
<?PHP
echo "Ahoj";
echo "<br>";
print_r("Ahoj");
echo "<br>";
var_dump("Ahoj");
echo "<br>";
echo "\&Ahoooooooooooj";
echo "<br>";
echo "<a href=\"index.php\">Homepage</a>";

$a = 2;
$b = 3;
$c = 4;
var_dump($a + $b);
var_dump($b - $c);
var_dump($a / $c);
var_dump($c * $b);
var_dump($b++);
var_dump($c--);
var_dump($a += $b);
var_dump($c -= $b);
var_dump($c *= $a);
var_dump($b /= $a);
var_dump($a == $b);
var_dump($c != $b);
var_dump($a > $b);
var_dump($a < $b);
var_dump($c || $a);
var_dump($b && $a);
var_dump(!$a);

echo "<h2>";
echo Date("d.m.20y");
echo "<br>";
echo Date("h:i:s");
echo "<br>";
echo "</h2>";

$cena1 = 12;
$cena2 = 13;
if ($cena1 > $cena2) {
    echo "je vÄ›tĹˇĂ­";
} else {
    echo "je menĹˇĂ­";
}
echo "<br>";

$hodnota1 = 12;
$hodnota2 = 10;

if ($hodnota1 == $hodnota2) {
    echo "Ano, mĂˇte pravdu :)";
} else {
    echo "Ne, nemĂˇte pravdu :(";
}
echo "<br>";

echo "<br>";
if ($hodnota1 == $hodnota2) {
    echo "RovnajĂ­ se";
} elseif ($hodnota1 < $hodnota2) {
    echo "Nerovnost 1";
} elseif ($hodnota1 > $hodnota2) {
    echo "Nerovnost 2";
}
echo "<br>";
$ovoce = array(1 => 'banĂˇn', 2 => 'jablko', 3 => 'mandarinka', 4 => 'hruĹˇka', 5 => 'mango', 6 => 'grep', 7 => 'pomelo', 8 => 'avokĂˇdo', 9 => 'nashi', 10 => 'malina');
var_dump($ovoce);

echo "<br>";
$auta['osobnĂ­'] = '';
$auta['nĂˇkladnĂ­'] = '';

$auta['osobnĂ­']['Fiat'][1] = 'Multipla';
$auta['osobnĂ­']['Fiat'][2] = '500';
$auta['osobnĂ­']['Ford'][3] = 'Focus';
$auta['osobnĂ­']['Ford'][4] = 'Galaxy';
$auta['osobnĂ­']['Ĺ koda'][1] = 'Yetty';
$auta['osobnĂ­']['Ĺ koda'][2] = 'Fabia';
$auta['osobnĂ­']['Ĺ koda'][3] = 'Octavia';
$auta['osobnĂ­']['Ĺ koda'][4] = 'Kamiq';
$auta['osobnĂ­']['Porche'][1] = '911';
$auta['osobnĂ­']['Porche'][2] = 'Carrera';
$auta['osobnĂ­']['Dodge'][1] = 'Viper';
$auta['osobnĂ­']['Dodge'][2] = 'Venom';
$auta['nĂˇkladnĂ­']['Tatra'][1] = '815';
$auta['nĂˇkladnĂ­']['Tatra'][2] = '24';
$auta['nĂˇkladnĂ­']['Tatra'][3] = '11';
$auta['nĂˇkladnĂ­']['Tatra'][4] = '12';
$auta['nĂˇkladnĂ­']['Tatra'][5] = '13';
$auta['nĂˇkladnĂ­']['Tatra'][6] = '111';
$auta['nĂˇkladnĂ­']['Mercedes-Benz'][1] = 'ACTROS 2551';
$auta['nĂˇkladnĂ­']['Mercedes-Benz'][2] = 'ACTROS 2553';
$auta['nĂˇkladnĂ­']['Mercedes-Benz'][3] = 'ACTROS 2542 6x2';


var_dump($auta);
echo '<br>';
echo "<table border = '1'>";
foreach ($ovoce as $key => $value) {
    echo "<tr>", "<td>", $key, "</td>", "<td>", $value, "</td>", "</tr>";
}
echo "</table>";
echo '<br>';
echo '<br>';
echo "</table>";
echo '<br>';


$count1 = 10;
$count2 = 5;

echo "<table border = '1'>";
for ($index = 1; $index < $count1 + 1; $index ++) {
    echo "<tr>";
    echo "<td>". $index . "</td>";
    for ($index2 = 1; $index2 < $count2 + 1; $index2 ++) {
        
        echo "<td>". $index . "." . $index2 . "</td>";
    }

    echo "</tr>";
}
echo "</table>"; 
echo "<br>";

echo "<h2>";
echo Date("d.m.20y");
echo "<br>";
echo Date("h:i:s");
echo "<br>";
echo "</h2>";


class Users{
    public $pohlavi = array('muz','zena');
}
class User extends Users{
    
    private $firstname;
    
    private $lastname;
    
    private $fullname;
    
    private $street;
    
    private $city;
    
    private $zip;
    
    private $email;
    
    private $phone;
    
    public function _construct ($data){
    $this->firstname = $data['firstName'];
    
    foreach ($data as $key => $value) {

    $this->$key = $value; 
        
    }    
    }
    }

$data['firstName'] = "Jan";
$data['lastName'] = "NovĂˇk";
$data['fullName'] = "Jan Novak";

$user = new User($data);
var_dump($user);
//var_dump($data);

class A {
	var $a;
	public $b;
	protected $c;
	private $d;
	
	public static $e;
	
	private $f = '';
	private $g = 'foo';
	private $h = 108;
	private $i = array('bar');
}

phpinfo()

?>

