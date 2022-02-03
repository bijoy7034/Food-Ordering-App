<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffae00;"> 
        <a class="navbar-brand" style="color: #ffffff;; font-size: 24px;" href="index.php"><b> AMGO <span style="color: black;">Foods</span>  </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav justify-content-center mr-auto ">
            <li class="nav-item active" style="margin-left: 320%;">
              <a class="nav-link" style="color: blanchedalmond;"  href="#"> <b>ORDERS</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminHome.php">ADD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CATAGORY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminFoods.php">FOODS</a>
              </li>
          </ul>
          <span class="navbar-text">
            <button class="btn btn-light "><a href="admin.php">LOGOUT</a></button>
          </span>
        </div>
      </nav>

      <div class="container">
        <br><br><br><br>
        <center style="color: #ffae00;; font-size: 34px;" href="#"><b> CURRENT<span style="color: black;"> ODERS</span>  </b></center><br><br>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Payment</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>


   <?php
   
   include "conn.php";
   $sql = "SELECT * FROM `order_details`";
   $result = mysqli_query($conn,$sql);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
           $name   = $row['fullname'];
           $mobile = $row['mobile'];
           $email = $row['email'];
           $address = $row['address'];
           $payment = $row['payment'];
           echo '<tr>
           <th scope="row">'.$name.'</th>
           <td>'.$mobile.'</td>
           <td>'.$email.'</td>
           <td>'.$address.'</td>
           <td>'.$payment.'</td>
           <td><button class="btn btn-primary btn-sm"><a class="text-light" style="text-decoration:none;" href="viewOdre.php?id='.$mobile.'">VIEW</a></button>
           <button class="btn btn-success btn-sm"><a class="text-light"  style="text-decoration:none;" href="oderDel.php?deleteid='.$mobile.'">ODER DELIVERED</a></button></td>
          
         </tr>';
       }
   }
   
   ?>
  </tbody>
</table>
      </div>



      <?php include 'footer.php' ?>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
   
</body>
</html>