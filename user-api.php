<?php
header("Content-Type: application/json; charset=UTF-8");

$db_connection = mysqli_connect("localhost", "root", "", "test");

// insert into user (first_name, last_name, email, phone_number) values ('Swati', 'Kokate', 'sk@gmail.com', '1234567890');

$users = get_users($db_connection);
echo json_encode($users);





function get_users($db_connection)
{
    $results = $db_connection->query("select first_name, last_name, email, phone_number from user");
    $users = array();

    while ($row = $results->fetch_assoc()) {
        array_push($users, $row);
    }

    return $users;
}
