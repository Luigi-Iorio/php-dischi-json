<?php

// lettura file
$database = file_get_contents(__DIR__ . "/dischi.json");

// struttura php
$dischi = json_decode($database, true); //true risultato array associativo

// elaborazioni
// filtro album per indice
$discoSelezionato = [];

if (isset($_GET["index"])) {
    $index = $_GET["index"];

    if (isset($dischi[$index])) {
        $discoSelezionato = $dischi[$index];

        // aggiunta brano preferito
        if (isset($_POST["create"])) {

            // brano preferito in disco selezionato
            $discoSelezionato["brano"] = $_POST["branoInPost"];

            // disco selezionato in dischi
            $dischi[$index] = $discoSelezionato;

            file_put_contents("dischi.json", json_encode($dischi));
        }

        // json disco selezionato
        header('Content-Type: application/json');
        echo json_encode($discoSelezionato);
        die;
    }
};

// json elenco dischi
header('Content-Type: application/json');
echo json_encode($dischi);
