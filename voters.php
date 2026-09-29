<?php
require_once 'config.php';

$res = $mysqli->query("SELECT ID AS id, `TÄISNIMI` AS name, otsus, aeg FROM HAALETUS ORDER BY ID");
echo json_encode($res->fetch_all(MYSQLI_ASSOC), JSON_UNESCAPED_UNICODE);