<?php

function getDB() {
    
    $host = DB_HOST;
    $dbname = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbh;
}

