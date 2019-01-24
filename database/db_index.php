<?php
require_once 'conf.php';
require_once 'db_fnk.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
// insert/update tüüpi sql testimine
$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);

$sql = 'SELECT * FROM user';
$res = getData($sql, $iktConn);

echo '<pre>';
print_r($res);

echo 'Tere, '.$res[0]['first_name'].' '.$res[0]['last_name'].'<br>';
