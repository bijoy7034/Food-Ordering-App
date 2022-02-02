<?php

include "conn.php";

if(isset($_GET['itemid'])){
    $id = $_GET['itemid'];
    $name = $_GET['name'];
    $price = $_GET['price'];
    $qun = $_GET['qun'];
    $query = "INSERT INTO `cart`(`item_name`, `quantity`, `price`, `id`) VALUES ('$name',$qun,$price,$id)";
    $result2 = mysqli_query($conn,$query);
    if($result2){
        header("location:index.php");
    }
    else{
        echo "<script>alert('Already in cart')";
        header("location:index.php");
        
    }
}


?>