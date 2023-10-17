<?php

include_once("conn.php");

$method = $_SERVER["REQUEST_METHOD"];

//regate //
if($method === "get") {

    $bordasQuery = $conn->query("SELECT * FROM borda; ");
    $bordas = $bordasQuery->fetchAll();

    $massasQuery = $conn->query("SELECT * FROM massa; ");
    $massas = $massasQuery->fetchAll();

    $saboresQuery = $conn->query("SELECT * FROM sabor; ");
    $sabores = $saboresQuery->fetchAll();

    //Criação

} elseif($method === "post") {

}