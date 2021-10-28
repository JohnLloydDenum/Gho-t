<?php

require_once("datab.php");
require_once("component.php");

$con = Createdb();

//create button click

if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();
}

//creating database
function createData(){
    $productid = textboxValue("id");
    $productname = textboxValue("product_name");
    $quantity = textboxValue("quantity");
    $firstname = textboxValue("first_name");
    $lastname = textboxValue("last_name");
    $price = textboxValue("price");

    if($productid && $productname && $quantity && $firstname && $lastname && $price){
        $sql= "INSERT INTO sales (id, product_name, quantity, first_name, last_name, price) 
        VALUES ('$productid', '$productname', '$quantity', '$firstname', '$lastname', '$price')";

       if (mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Record Successfully Inserted...!");
       }
        else{
            echo "Error";
        }

    }
    else{
        TextNode("error", "Provide data in the Textbox");
        
    }
}


//text box
function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));

    if(empty($textbox)){
        return false;
    }
    else{
        return $textbox;
    }
}

//text box element
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'> $msg </h6>";
    echo $element;
}

//get data from the mysql database

function getData(){
    $sql = "SELECT * FROM sales";
    $result = mysqli_query($GLOBALS['con'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;

        }
    }
        //update data
function UpdateData(){

    $productid = textboxValue("id");
    $productname = textboxValue("product_name");
    $quantity = textboxValue("quantity");
    $firstname = textboxValue("first_name");
    $lastname = textboxValue("last_name");
    $price = textboxValue("price");

    if($productid && $productname && $quantity && $firstname && $lastname && $price){
        $sql = "
            UPDATE sales SET product_name='$productname', quantity='$quantity', first_name='$firstname', last_name='$lastname',
            price='$price' WHERE id='$productid'
        ";

        if (mysqli_query($GLOBALS['con'], $sql)){
            TextNode("success", "Data Successfully Updated...!");
        }
        else{
            TextNode("error", "Enable to Update Data...!");
        }
    }else{
        TextNode("error", "Select Data Using Edit Icon...!");

    }

}


function deleteRecord(){

    $productid = (int)textboxValue("id");
    
    $sql= "DELETE FROM sales WHERE id=$productid";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("sucess", "Record Deleted Successfully...!");
    
    }else{
        TextNode("error", "Enable to Delete Record...!");

    }

}

function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 3){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}

function deleteAll(){
    $sql = "DROP TABLE sales";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record deleted Successfully...!");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}


function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['id'];
        }
    }
    return ($id + 1);
}