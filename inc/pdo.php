<?php

// define('HOST','localhost');
// $dbName ='netflix';
// $userDbName ='laurine';
// $userDbPassword ='pioupiou';

try {
$conn = new PDO('mysql:host=localhost;dbname=netflix',"laurine","pioupiou",[
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
]);
} catch (PDOException $erreur){
    echo 'Erreur de connexion: '.$erreur->getMessage();
};