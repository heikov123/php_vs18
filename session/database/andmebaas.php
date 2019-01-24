<?php
function connect_db($hostName, $dbUser, $dbPass, $dbName) {
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);

    if(!$conn){
        echo 'unable to connect to MySQL<br>';
        echo mysqli_connect_error().'<br>';
        exit;
    }

    return $conn;
}

require_once 'conf.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);
echo '<pre>';
print_r($iktConn);

