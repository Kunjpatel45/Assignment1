<?php
class Database{

    private $connection;
    function __construct(){
        $this->connect_db();
    }
    // connecting database
    public function connect_db(){
        $this->connection= mysqli_connect("172.31.22.43","Kunj200524563","_hS6p3qRsz","Kunj200524563");
        if(mysqli_connect_error()){
            die("Database connection failed: " . mysqli_connect_error());
        }
    }
    //takes data from user and add to table
    public function create($name, $phone, $pizza_size, $toppings, $delivery_address){
        $name = $this->sanitize($name);
        $phone = $this->sanitize($phone);
        $pizza_size = $this->sanitize($pizza_size);
        $toppings = $this->sanitize(implode(",", $toppings));
        $delivery_address = $this->sanitize($delivery_address);

        $sql = "INSERT INTO pizza_orders (name, phone, pizza_size, toppings, delivery_address) VALUES ('$name', '$phone', '$pizza_size', '$toppings', '$delivery_address')";
        $res = mysqli_query($this->connection, $sql);
        if($res) {
            return true;
        } else {
            return false;
        }
    }
    // to show on view page
    public function read($id=null){
        $sql = "SELECT * FROM pizza_orders";
        if ($id){
            $sql .= "WHERE id=$id";
        }
        $res = mysqli_query($this->connection,$sql);
        return $res;
    }
    // Sanitizing user input to prevent SQL injection
    public function sanitize($var){
        $return = mysqli_real_escape_string($this->connection, $var);
        return $return;
    }
}

$database = new Database();