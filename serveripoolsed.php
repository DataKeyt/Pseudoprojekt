<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 17.10.2015
 * Time: 13:41
 */
//Massiiv
$person = array(
    "firstname" => "Rete-Keyt",
    "lastname" => "Uibo",
    "age" => "19"
);
//Boolean
$eesnimi_algab_vokaaliga = false;

//Condition
if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

echo "<p>" . $person['firstname'] . " " . $person['lastname'] . " (" . $person['age'] . ")</p>";

?>
