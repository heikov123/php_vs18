<?php

function andmeTootlus(&$vormiAndmed, $jaotus){
    $jaotatudAndmed = array();
    foreach ($jaotus as $nimi){
        $jaotatudAndmed[$nimi] = array();
        foreach ($vormiAndmed as $element => $vaartus) {
            if (strpos($element, $nimi) === 0) {
                $jaotatudAndmed[$nimi][$element] = $vaartus;
            }
        }
    }
    $vormiAndmed = array_slice($jaotatudAndmed,0,count($jaotatudAndmed));
}
// ruumala arvutused
function keraRuumala($keraRaadius){
    return 4/3 * pi() * pow($keraRaadius, 3);
}
function koonuseRuumala($koonuseRaadius, $koonuseKorgus){
    return 1/3 * pi() * pow($koonuseRaadius, 2) * $koonuseKorgus;
}
function silindriRuumala($silindriRaadius, $silindriKorgus){
    return pi() * pow($silindriRaadius, 2) * $silindriKorgus;
}
// tulemuste väljastamine
function valjasta($nimi, $ruumala){
    echo '<h1>'.$nimi.' ruumala</h1>';
    echo $ruumala.'cm<sup>3</sup><br>';
}
// funktsioon
function ruumalad($vormiAndmed){
    foreach ($vormiAndmed as $kujund => $andmed){
        $ruumalaFunktsioon =  $kujund.'Ruumala';
        valjasta($kujund, call_user_func_array($ruumalaFunktsioon, array_values($andmed)));
    }
}
$vormiAndmed = array_slice($_GET,0,count($_GET));
andmeTootlus($vormiAndmed, array('kera', 'koonuse', 'silindri'));
ruumalad($vormiAndmed);