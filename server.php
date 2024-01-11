<?php

// lettura file
$database = file_get_contents(__DIR__ . "/dischi.json");

// struttura php
$dischi = json_decode($database);

// elaborazioni

// traduzione in json
header('Content-Type: application/json');
echo json_encode($dischi);
