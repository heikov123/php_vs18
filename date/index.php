<?php

date_default_timezone_set('Europe/Tallinn');
echo time();
echo '<br>';
echo date('d.m.Y G:i' , time());
echo '<br>';
echo date('d.m.Y G:i');
echo '<br>';
echo  date('d.F.Y');
echo '<br>';
echo '<br>';

// kuude massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
// kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
// kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;
echo '<br>';

// muu soovitud kuupäeva genereerimine
mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$sp = mktime(0,0,0,10,29,1969);
echo date('d.m.Y', $sp);
?>