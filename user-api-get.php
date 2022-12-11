<?php
header("Content-Type: application/json; charset=UTF-8");

$db_connection = mysqli_connect("localhost", "root", "", "test");

// insert into user (first_name, last_name, email, phone_number) values ('Swati', 'Kokate', 'sk@gmail.com', '1234567890');

$users = get_assoc_array($db_connection, "select first_name, last_name, email, phone_number from user");
echo json_encode($users);





function get_assoc_array($db_connection, $query)
{
    $results = $db_connection->query($query);
    $records = array();

    while ($row = $results->fetch_assoc()) {
        array_push($records, $row);
    }

    return $records;
}
