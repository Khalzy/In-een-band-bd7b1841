<?php


$Overzicht = [

    "Citizen of Glass kost" => 4.5,
    "Night kost " => 9,
    "New Eyes kost " => 5,
    "Strange Trails kost" =>  10,



];



echo "Het totaalbedrag an ale albums is " . array_sum($Overzicht) . "\n";
echo "De Gemiddelde prijs van alle alle albums is" . array_sum($Overzicht) / count($Overzicht) . "\n";
