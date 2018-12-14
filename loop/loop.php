<?php
#header('Refresh: 1');
//*
/* for
 *  for ($jm = alg; $jmn <= lopp; $jm++) {
 *      tegevused, mis toimuvad nii kaua
 *      kui jm väärtus ei ole lõppväärtust saavutanud
 * }
 */

echo '<h5>Ülesanne 1</h5>';
for($arv = 1; $arv <= 10; $arv++) {
    $varv = '';
    /* if($arv % 2 == 0) {
        $varv = 'green';
    }   else {
        $varv ='red';
    } */
    $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
}
?>
<style>
    table, tr, td, th {
        border: 1px solid;
        border-collapse: collapse;
        width: 250px;
        height: 50px;
    }

    .tabel {
        border: 1px solid;
        border-collapse: collapse;
        width: 380px;
        height: 30px;
    }
</style>
<?php
echo '<h5>Ülesanne 2</h5>';
echo '<table>';
for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
    echo '<tr>';
    for($veeruNumber = 1; $veeruNumber <= 5; $veeruNumber++) {
//        echo '<td style="background: '.$varv.'">&nbsp;</td>';
            $varv ='#';
                for ($kord = 1; $kord <= 6; $kord++) {
                    $varv = $varv . dechex(rand(0, 15));
                }
            echo '<td style="background: '.$varv.'">&nbsp;</td>';
    }
    echo '</tr>';
}
echo '</table>';

echo '<br>';
echo '<table class="tabel">';
    for($reaNumber2 = 1; $reaNumber2 <= 11; $reaNumber2++){
        echo '<tr class="tabel">';
        for($veeruNumber2 = 1; $veeruNumber2 <= 10; $veeruNumber2++) {

            echo '<td class="tabel">&nbsp;</td>';
        }
        echo '</tr>';
    }
echo '</table>';

echo '<br>';
echo '<h5>Ülesanne 3</h5>';
echo '<table class="tabel">';
    echo '<tr>';
    for($arv1 = 0; $arv1 <= 10; $arv1++) {
        $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
        echo '<th>' . $txt . '</th>';
    }
    echo '</tr>';
    for($arv1 = 0; $arv1 <= 10; $arv1++) {
        echo '<tr>';
        echo '<th>';
        echo $arv1;
        echo '</th>';
        for ($arv2 = 1; $arv2 <= 10; $arv2++) {
            echo '<td>';
            echo($arv1 * $arv2);
            echo '</td>';
        }
        echo '</tr>';
    }
echo '</table>';

echo '<br>';
echo '<h5>Ülesanne 4</h5>';

$arv3 = 1234;
    while($arv3 != 0) {
        $number = $arv3 % 10;
        echo 'Number = '.$number.'<br>';
        $arv3 = $arv3 / 10;
        echo 'Arv float = '.$arv3.'<br>';
        settype($arv3,  'int');
        echo 'Arv int = '.$arv3.'<br>';
        $summa += $number;
        echo '<hr>';
    }
echo 'Arvu numbrite summa = '.$summa.'<br>';
