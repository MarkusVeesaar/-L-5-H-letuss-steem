<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
header('Content-Type: application/json; charset=utf-8');

$mysqli = new mysqli(
    'localhost',
    'ita24paduk_haaletus',
    'd@~F]S1L+!CD0-qI',
    'ita24paduk_haaletus'
);
$mysqli->set_charset('utf8mb4');