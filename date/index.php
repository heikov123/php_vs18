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
echo '<br>';

// Ülesanne 8
echo date('20.03.2013 12:31' , time());	 //20.03.2013 12:31
echo '<br>';
echo '<br>';

// kuva tänane eestikeelne nädalapäev
$nadalapaevad = array('esmaspäev', 'teisipäev', 'kolmpaäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev');
$praegune_nadalapaev = $nadalapaevad[date('N', time()) - 1];
echo $praegune_nadalapaev;
echo '<br>';
// kuva eestikeelne kuupäev koos nädalapäevaga
echo '<br>';
echo $paev.'.'.$kuu.' '.$aasta.' '.$praegune_nadalapaev;
echo '<br>';
echo '<br>';

// leia mitu päeva on jäänud j'rgmise jaanipäevani

$date1=date_create("2019-06-24");
$date2=date_create("2019-01-28");
$diff=date_diff($date1,$date2, true);
echo $diff->format("jaanipäevani on aega %a päeva");
echo '<br>';
echo '<br>';

// Kuva mõlema sünnikuupäevad ning vahe aastates

$metsheina_synnipaev = date_create("1980-11-06");
$minu_synnipaev = date_create("1996-10-29");
$difference = $metsheina_synnipaev->diff($minu_synnipaev);
echo 'Sünnipäevade erinevus on '.$difference->y.' aastat ';
echo '<br>';
echo '<br>';


?>