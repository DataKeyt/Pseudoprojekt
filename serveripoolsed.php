<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 17.10.2015
 * Time: 13:41
 */


class isik
{
    var $firstname = "Rete-Keyt";
    var $lastname = "Uibo";
    var $age = 19;
    var $sex = "<br /> Female";
}

$keyt = new isik;

//Vowels function
$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($keyt->firstname, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}

//Floating sum
$floating1 = 1.23;
$floating2 = 2.34;
$float_sum = $floating1 + $floating2;

echo "<p>" . $float_sum . "</p>";

//Condition
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

// echo "<p>" . $keyt->firstname . " " . $keyt->lastname . " (" . $keyt->age . ") " . $keyt->sex . "</p>";

?>
