<?php
header("Content-Type: application/json; charset=UTF-8");

include_once "../db-utils/db-utils.php";

$user = $_POST['user'];
$first_name = $user['first_name'];
$last_name = $user['last_name'];
$email = $user['email'];
$phone_number = $user['phone_number'];


$user_insert_query = "insert into user (first_name, last_name, email, phone_number) 
    values ('" . $first_name . "' ,'" . $last_name . "', '" . $email . "', '" . $phone_number . "')";

if (save($user_insert_query) === TRUE) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}
