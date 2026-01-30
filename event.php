<?php
session_start();

if (isset($_GET["action"])) {
  $_SESSION["last_event"] = time();
  echo "ok";
  exit;
}

echo $_SESSION["last_event"] ?? 0;
