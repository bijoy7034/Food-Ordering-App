<?php

include "conn.php";

if(isset($_POST['submit'])){

  $search = $_POST['search'];
  $sql = "SELECT * FROM food_item WHERE customer_name = '$search'";
  $result = mysqli_query($conn,$sql);
  
   
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="pics/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Search</title>
</head>
<body>
    <?php  include "nav.php"?><br><br><br><br>
    <?php if ($result){
    while($row = mysqli_fetch_assoc($result)) {

      $id = $row['item_id'];
      $name = $row['customer_name'];
      $image = $row['image'];
      $discription = $row['discription'];
      $price = $row['price'];
      $qun =1;
     echo " <center><div class='card mr-5 ml-5 rounded' style='width: 24rem;'>
     <img class='card-img-top' src='pics/$image' alt='Card image cap'>
     <div class='card-body'>
       <h5 class='card-title'>$name</h5>
       <p class='card-text'>$discription</p>
       <span ><a href='#' style='color: #ffae00;'>&#9733; &#9733; &#9733; &#9733; &#9734;</a></span>
       <p class='h3'>&#8377 $price.0/-</p><br>
       <a href='addcart.php?itemid=$id&name=$name&price=$price&qun=$qun' class='btn btn' style='background-color:#ffae00; color:#ffffff'>ADD TO CART</a>
     </div>
     
   </div> </center>";
      }
      

  }else {
    // $id = $row['item_id'];
    // echo $name = $row['customer_name'];
    // $image = $row['image'];
    // $discription = $row['discription'];
    // $price = $row['price'];
    // $qun =1;
    echo "<h1>No Items</h1>";
} ?>
     <br><br><br><br><br>
    





    <?php include "footer.php" ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>