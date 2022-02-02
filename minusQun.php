<?php

include "conn.php";

if(isset($_GET['id'])){
    echo $id = $_GET['id'];
    echo $qun = $_GET['qun'];
    if($qun>1){
       $qun=$qun - 1;
    }
    $query = "UPDATE `cart` SET `quantity`= $qun  WHERE id = $id";
    $result2 = mysqli_query($conn,$query);
    if($result2){
        header("location:cart.php");
    }
   
}


?>