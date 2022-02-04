<?php

include 'conn.php';
if(isset($_POST['submit'])){
  $fullname = $_POST['fullname'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $payment = $_POST['payment'];
  

  $sql = "INSERT INTO `order_details`(`fullname`, `mobile`, `email`, `address`, `payment`) VALUES ('$fullname',$mobile,'$email','$address','$payment')";
  $result = mysqli_query($conn,$sql);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body  style="background-image: url('pics/home-bg.jpg');">
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffae00;"> 
        <a class="navbar-brand" style="color: #ffffff;; font-size: 24px;" href="#"><b> AMGO <img style="width: 50px;" src="pics/cart.png" alt="" ><span style="color: black;">Foods </span>   </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav justify-content-center mr-auto ">
            <li class="nav-item active" style="margin-left: 330%;">
              <a class="nav-link" style="color: blanchedalmond;"  href="#"> <b>Cart</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
          </ul>
          <span class="navbar-text">
            <button class="btn btn-light ">LOGIN</button>
          </span>
        </div>
      </nav>



      <div class="container">
        <br><br><br><br>
        <center style="color: #ffae00;; font-size: 34px;" href="#"><b> FOOD <img style="width: 50px;" src="pics/cart (2).png" alt="" > <span style="color: black;"> CART</span>  </b></center><br><br>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">FOOD ITEM</th>
      <th scope="col">PRICE</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>


   <?php
   
   include "conn.php";
   $sql = "SELECT * FROM cart";
   $result = mysqli_query($conn,$sql);
   if($result){
    $sum = 0;
       while($row = mysqli_fetch_assoc($result)){
           $id   = $row['id'];
           $name = $row['item_name'];
           $qun = $row['quantity'];
           $price = $row['price'];
           
           $sum = ($qun * $price)+$sum;
           echo '<tr>
           <th scope="row">  ' .$name. '</th>
           <td>'.$price.'</td>
           <td>'.$qun.'</td>
           <td><button style="background-color:orange;" class="btn btn btn-sm"><a class="text-light" style="text-decoration:none;" href="addQun.php?id='.$id.'&qun='.$qun.'">+</a></button>
           <button style="background-color:orange;" class="btn btn btn-sm"><a class="text-light"  style="text-decoration:none;" href="minusQun.php?id='.$id.'&qun='.$qun.'">-</a></button>
           <button class="btn btn-danger btn-sm"><a class="text-light"  style="text-decoration:none;" href="cartDel.php?deleteid='.$id.'">DELETE</a></button></td>
          
         </tr>';
       }
   }else {
    echo '<tr>
    <th scope="row">CART IS EMPTY</th></tr>';
   }
   
   ?>
  </tbody>
</table>

 <h3 style="color: orange;">TOTAL : <b style="color: #5c5c5c;"><?php echo $sum ?> /-</b> </h3><br>


 <button type="button" style="background-color: orange;" class="btn btn-lg btn-block" data-bs-toggle="modal" data-bs-target="#exampleModal"><a style="color: white;" href="#">PROCEED ORDER</a></button>


 <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div style="background-image: url('pics/home-bg.jpg');" class="modal-dialog">
 
  <form action="cart.php" method="POST" class="form-floating">


  <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ORDER DETAILS</h5>
        <button type="button" class="btn btn-light" data-bs-dismiss="modal" aria-label="Close">&#xD7</button>
      </div>
      <div class="modal-body">
        
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Fullname</label>
         <input type="text" class="form-control" id="exampleInputEmail1" name="fullname">
       </div>
       <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Mobile</label>
         <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="mobile">
       </div>
      <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Email address</label>
         <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">You can track oder witj the email</div>
       </div>
      <div class="form-floating">
      <label for="floatingInput"> Address</label>
      <textarea class="form-control" placeholder="Address" id="floatingTextarea2" style="height: 100px" name="address"></textarea>
       </div>
       <div class="form-group col-md-6">
      <label for="inputState">Payment</label>
      <select id="inputState" name="payment" class="form-control" >
        <option selected>Choose...</option>
        <option>COD</option>
        <option>UPI</option>
        <option>CARD</option>
      </select>
    </div>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" style="background-color: orange; color:white;" name="submit" class="btn">PLACE OLDER</button>
      </div>
    </div>
    </form>
  </div>
</div>







      </div>



      <br><br>




      <?php include "footer.php" ?>



      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    </body>
</html>