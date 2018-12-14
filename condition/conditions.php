<?php
// Tingimused
/*
 *
 *  if(tingimus) {
 *      tegevused, mis toimuvad siis, kui tingimus kehtib
 *
 *      } else {
 *          muidu, kui tingimus ei kehti, toimuvad siin kirjutatud tegevused
 * }
 */

echo '<h5>Ülesanne 1</h5>';
$arv = rand(0, 100);
if($arv % 2 == 0) {
    echo '<div style="color: green">'.$arv.'</div>';
    } else {
    echo  '<div style="color: red">'.$arv.'</div>';
}

echo '<h5>Ülesanne 2</h5>';
$arv2 = rand(0, 100);
if($arv2 >= 0 and $arv2 < 25) {
    echo '<div style="color: green">'.$arv2.'</div>';
    } else if($arv2 >= 25 and $arv2 < 50) {
    echo '<div style="color: darkorange">'.$arv2.'</div>';
    } else if($arv2 >= 50 and $arv2 < 75) {
    echo '<div style="color: deeppink">'.$arv2.'</div>';
    } else if ($arv2 >= 75 and $arv2 < 100) {
    echo '<div style="color: cornflowerblue">'.$arv2.'</div>';
}

//* tingimuslaused
/*
 * swtich (kontroll) {
 *      case vastus:
 *          tegevused, mis antud case puhul toimivad
 *          break;
 *      deafult;
 *          tegevused, mis toimuvad siis kui kõik muu ei sobi
 *          break;
 * }
 */
echo '<br>';
echo '<hr>';


echo '<h5>Ülesanne 3</h5>';



$aktiive = 'roheline';
switch ($aktiive) {
    case 'punane':
        echo '<div style="background-color: red; width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        break;
    case 'kollane':
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="background-color: yellow; width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        break;
    case 'roheline':
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        echo '<div style="background-color: green; width: 100px; border-radius: 50px; border: 1px solid; height: 100px;"></div>';
        break;
}