<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
header('Content-Type: application/json; charset=utf-8');

$mysqli = new mysqli("localhost", "Markus", "12345", "haaletussusteem");
$mysqli->set_charset("utf8mb4");