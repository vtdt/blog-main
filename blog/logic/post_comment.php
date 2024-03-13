<?php
include "../static/tools.php";


$mydb = new SPDO();
$params = [];

$params[":username"] = $_COOKIE["username"];
$params[":comment"] = sanitizeInput($_POST["comment"]);
$params[":date"] = date_create()->format('Uv');
$mydb->send_query("INSERT INTO comments (user, comment, date) VALUES (:username, :comment, :date)", $params);
