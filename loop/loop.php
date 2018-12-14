<?php
header('Refresh: 1');
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
    table, tr, td {
        border: 1px solid;
        border-collapse: collapse;
        width: 50px;
    }
</style>
<?php
echo '<h5>Ülesanne 2</h5>';
echo '<table>';
for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
    echo '<tr>';
    $varv ='#';
    for($kord = 1; $kord <= 6; $kord++){
        $varv = $varv.dechex(rand(0, 15));
    }
    echo '<td style="background: '.$varv.'">&nbsp;</td>';
    echo '</tr>';
}
echo '</table>';

