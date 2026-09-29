<?php
require_once 'config.php';

$t = $mysqli->query(
  "SELECT UNIX_TIMESTAMP(h_alguse_aeg) * 1000 AS start,
          `hääletanud` AS haaletanud, poolt, vastu
   FROM TULEMUSED ORDER BY ID DESC LIMIT 1"
)->fetch_assoc();

$t['total'] = (int)$mysqli->query("SELECT COUNT(*) FROM HAALETUS")->fetch_row()[0];
echo json_encode($t, JSON_UNESCAPED_UNICODE);