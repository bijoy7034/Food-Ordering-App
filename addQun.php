<?php

include "conn.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $qun = $_GET['qun'] + 1;
    $query = "UPDATE `cart` SET `quantity`= $qun  WHERE id = $id";
    $result2 = mysqli_query($conn,$query);
    if($result2){
        header("location:cart.php");
    }
   
}


?>