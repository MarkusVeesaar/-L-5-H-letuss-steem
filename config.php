<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
header('Content-Type: application/json; charset=utf-8');

$mysqli = new mysqli("localhost", "ita24veesaar_User", "(b2?mbC+S(b(@@hU", "ita24veesaar_Voting_system");
$mysqli->set_charset("utf8mb4");
