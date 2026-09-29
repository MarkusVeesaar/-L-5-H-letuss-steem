<?php
require_once 'config.php';

$res = $mysqli->query(
  "SELECT aeg, `Täisnimi` AS name, otsus
   FROM LOGI
   WHERE otsus IS NOT NULL AND TRIM(otsus) <> ''
   ORDER BY aeg"
);
echo json_encode($res->fetch_all(MYSQLI_ASSOC), JSON_UNESCAPED_UNICODE);