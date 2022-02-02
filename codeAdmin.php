<?php 

include "conn.php";


    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dis = $_POST['discription'];
    $qun = $_POST['quantity'];
    $veg = $_POST['veg'];
    $price =$_POST['price'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];    
        $folder = "pics/".$filename;
    $sql = "INSERT INTO `food_item`(`item_id`, `customer_name`, `quantity`, `discription`, `price`, `veg_non`, `image`) VALUES ($id,'$name',$qun,'$dis',$price,'$veg','$filename')";
    $result = mysqli_query($conn,$sql);
    $abc=move_uploaded_file($tempname, $folder);
    if($result){
        header("location:adminHome.php");

    }else {
        echo "Something Went Wrong";
    }


?>