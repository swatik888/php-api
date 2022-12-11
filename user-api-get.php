<?php
header("Content-Type: application/json; charset=UTF-8");

include_once "db-utils.php";

$users = get("select first_name, last_name, email, phone_number from user");
echo json_encode($users);
