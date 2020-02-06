<?php


$Overzicht = [

    "Citizen of Glass kost" => 4.5,
    "Night kost " => 9,
    "New Eyes kost " => 5,
    "Strange Trails kost" =>  10,



];



foreach ($Overzicht as $key => $value) {
    echo $key . $value . PHP_EOL;
}

echo "Het totaalbedrag an ale albums is" . array_sum($Overzicht) . "\n";
echo "De gemiddelde prijs van alle albums is" . array_sum($Overzicht) / count($Overzicht) . "\n";
