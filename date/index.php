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
echo '<br>';

// Tehted kuupäevadega
echo date('d.m.Y G:i' , time()+60);
echo '<br>';
echo date('d.m.Y G:i' , time()+60*60);
echo '<br>';
echo date('d.m.Y G:i' , time()+60*60*24);
echo '<br>';
$sp = mktime(0,0,0,10,29,1969-27);
echo date('d.m.Y', $sp);
echo '<br>';

// inglise keelsed laused

echo strtotime("now");
echo '<br>';
echo strtotime("tomorrow");
echo '<br>';
echo strtotime("yesterday");
echo '<br>';
echo strtotime("10 September 2000");
echo '<br>';
echo strtotime("+1 day");
echo '<br>';
echo strtotime("+1 week");
echo '<br>';
echo strtotime("+2 week 3 days 4 hours 5 seconds");
echo '<br>';
echo strtotime("next Thursday");
echo '<br>';
echo strtotime("last Monday");
echo '<br>';
echo strtotime("5pm + 6 Hours");
echo '<br>';
echo strtotime("now + 4 fortnights");
echo '<br>';
echo strtotime("last Monday");
echo '<br>';
echo strtotime("4pm yesterday");
echo '<br>';
echo strtotime("6am 10 days ago");
echo '<br>';

// kuupäeva valideerimine
if(checkdate(12,32,2013)) {
    echo('Kuupäev korras!');
} else {
    echo ('Kuupäev on valesti sisestatud');
}


?>