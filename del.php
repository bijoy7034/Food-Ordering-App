<?php
include "conn.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `food_item` WHERE item_id = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:adminFoods.php");
    }
}

?>