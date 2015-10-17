<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 17.10.2015
 * Time: 13:41
 */
//Massiiv
/*$person = array(
    "firstname" => "Rete-Keyt",
    "lastname" => "Uibo",
    "age" => "19"
); */
//Boolean
$eesnimi_algab_vokaaliga = false;

//Condition
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

class isik
{
    var $firstname = "Rete-Keyt";
    var $lastname = "Uibo";
    var $age = 19;
    var $sex = "<br /> Female";
}

$keyt = new isik;

echo "<p>" . $keyt->firstname . " " . $keyt->lastname . " (" . $keyt->age . ") " . $keyt->sex . "</p>";

?>
