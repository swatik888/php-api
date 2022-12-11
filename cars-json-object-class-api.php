<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$id = $_REQUEST["id"];

$cars = array(
    new Car("BMW", "25L", "White"),
    new Car("Volvo", "40L", "Red"),
    new Car("Toyota", "35L", "Blue")
);

if (empty($id)) {
    echo json_encode($cars);
} else {
    echo json_encode($cars[$id]);
}



class Car
{
    public $name;
    public $price;
    public $color;

    function __construct($name, $price, $color)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_price()
    {
        return $this->price;
    }
    function get_color()
    {
        return $this->color;
    }
}
