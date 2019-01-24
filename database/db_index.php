<?php
require_once 'conf.php';
require_once 'db_fnk.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);
echo '<pre>';
print_r($res);
