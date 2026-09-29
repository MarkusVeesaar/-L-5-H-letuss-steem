<?php
require_once 'config.php';

try {
    $mysqli->query("SET @reset_mode = 1");
    $mysqli->query("UPDATE HAALETUS SET otsus = NULL, aeg = NULL");
    $mysqli->query("DELETE FROM LOGI");
    $mysqli->query("UPDATE TULEMUSED SET h_alguse_aeg = NOW()");
    $mysqli->query("SET @reset_mode = NULL");
    echo json_encode(["ok" => true, "teade" => "Hääletus lähtestatud, uus 5 minutit algas"], JSON_UNESCAPED_UNICODE);
} catch (mysqli_sql_exception $e) {
    http_response_code(500);
    echo json_encode(["error" => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}