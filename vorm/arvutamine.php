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
