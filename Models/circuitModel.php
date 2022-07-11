<?php
require_once('Model.php');

function getInfoCircuit(){
    global $database;
    $query = "SELECT * FROM circuit";
    $req = $database->prepare($query);
    $req->execute();
    $ligne = $req->fetchAll();
    return $ligne;
}