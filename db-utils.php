<?php

function save($query)
{
    return get_db_connection()->query($query);
}

function get($query)
{
    $results = get_db_connection()->query($query);
    $records = array();

    while ($row = $results->fetch_assoc()) {
        array_push($records, $row);
    }

    return $records;
}

function get_db_connection()
{
    return mysqli_connect("localhost", "root", "", "test");
}
