<?php
include "conn.php";

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `order_details` WHERE mobile = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("location:adminOders.php");
    }
}

?>