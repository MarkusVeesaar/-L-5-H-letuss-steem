<?php
require_once 'config.php';

$data  = json_decode(file_get_contents('php://input'), true);
$id    = (int)($data['id'] ?? 0);
$otsus = $data['otsus'] ?? '';

try {
    $stmt = $mysqli->prepare("UPDATE HAALETUS SET otsus = ?, aeg = NOW() WHERE ID = ?");
    $stmt->bind_param("si", $otsus, $id);
    $stmt->execute();
    echo json_encode(["ok" => true]);
} catch (mysqli_sql_exception $e) {
    http_response_code(400);
    echo json_encode(["error" => $e->getMessage()], JSON_UNESCAPED_UNICODE);
}