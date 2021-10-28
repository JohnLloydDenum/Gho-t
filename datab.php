<?php

function Createdb(){
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname ="salesinventory";
    //create connection

    $con = mysqli_connect($servername, $username, $password);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());

    }

    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password,$dbname);

        $sql ="
            CREATE TABLE IF NOT EXISTS sales (id INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
            product_name VARCHAR(35) NOT NULL,
            quantity INT(5) NOT NULL,
            first_name VARCHAR(25) NOT NULL,
            last_name VARCHAR(25) NOT NULL,
            price INT(254) NOT NULL

    );
        ";

        if(mysqli_query($con,$sql)){
            return $con;
        }
        else{
            echo"Cannot Create Table";
        }

    }
    else{
        echo "Error while creating database" .mysqli_error($con);
    }

}