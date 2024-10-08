<?php
function generuj() {
    $lostablica = array();
    for ($i = 0; $i < 10; $i++) {
        $randomNumber = rand(5, 25);
        array_push($lostablica, $randomNumber);
    }
    return $lostablica;
}

function podzielneprzez5($array) {
    echo "Liczby podzielne przez 5: ";
    foreach ($array as $number) {
        if ($number % 5 == 0) {
            echo $number . "\n";
        }
    }
}
function wiekszeod10($array) {
    $licznik = 0;
    foreach ($array as $number) {
        if ($number > 10) {
            $licznik++;
        }
    }
    echo "<br>Ilość liczb większych od 10: " . $licznik;
}

$randomNumbers = generuj();

print_r($randomNumbers);
echo "<br>";
podzielneprzez5($randomNumbers);
echo wiekszeod10($randomNumbers);




$miesiace = ['I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII'];

$hours = date(format: "g");
$minutes = date(format: "i");
 
$dzienTygodnia = date(format: 'w');
$dzien = date('j');
$miesiac = $miesiace[date('n')-1];
$rok = date('Y');


 echo "<br><br>Dziś jest $dzien.$miesiac.$rok rok. <br>Aktualna godzina to: $hours:$minutes.<br>";



?>