<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

if (!$data) {
  echo json_encode(["error" => "No llegaron datos"]);
  exit;
}

file_put_contents("event.json", json_encode([
  "action" => $data["action"] ?? "none",
  "time" => time()
]));

echo json_encode(["status" => "ok"]);
