<?php
header("Content-Type: application/json; charset=UTF-8");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];

$db_connection = mysqli_connect("localhost", "root", "", "test");

// insert into user (first_name, last_name, email, phone_number) values ('Swati', 'Kokate', 'sk@gmail.com', '1234567890');

$user_insert_query = "insert into user (first_name, last_name, email, phone_number) values ('" . $first_name . "' ,'" . $last_name . "', '" . $email . "', '" . $phone_number . "')";


if ($db_connection->query($user_insert_query) === TRUE) {
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "error"));
}
