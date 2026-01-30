<?php
$data = json_decode(file_get_contents("php://input"), true);

file_put_contents("event.json", json_encode([
  "action" => $data["action"],
  "time" => time()
]));
