<?php

// lettura file
$database = file_get_contents(__DIR__ . "/dischi.json");

// struttura php
$dischi = json_decode($database);

// elaborazioni
// filtro album per indice
$discoSelezionato = [];

if (isset($_GET["index"])) {
    $index = $_GET["index"];

    $discoSelezionato = $dischi[$index];

    // json disco selezionato
    header('Content-Type: application/json');
    echo json_encode($discoSelezionato);
    die;
};

// json elenco dischi
header('Content-Type: application/json');
echo json_encode($dischi);
