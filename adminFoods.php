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
        <a class="navbar-brand" style="color: #ffffff;; font-size: 24px;" href="index.php"><b> AMGO <span style="color: black;">Foods</span>  </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav justify-content-center mr-auto ">
            <li class="nav-item active" style="margin-left: 320%;">
              <a class="nav-link" style="color: blanchedalmond;"  href="#"> <b>FOODS</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminHome.php">ADD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CATAGORY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ORDERS</a>
              </li>
          </ul>
          <span class="navbar-text">
            <button class="btn btn-light "><a href="admin.php">LOGOUT</a></button>
          </span>
        </div>
      </nav>



      <div class="container">
        <br><br><br><br>
        <center style="color: #ffae00;; font-size: 34px;" href="#"><b> FOOD <span style="color: black;"> ITEMS</span>  </b></center><br><br>

        <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FOOD ITEM</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">PRICE</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>


   <?php
   
   include "conn.php";
   $sql = "SELECT * FROM food_item";
   $result = mysqli_query($conn,$sql);
   if($result){
       while($row = mysqli_fetch_assoc($result)){
           $id = $row['item_id'];
           $name = $row['customer_name'];
           $qun = $row['quantity'];
           $price = $row['price'];

           echo '<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$name.'</td>
           <td>'.$qun.'</td>
           <td>'.$price.'</td>
           <td><button class="btn btn-primary btn-sm"><a class="text-light" style="text-decoration:none;" href="update.php?updateid='.$id.'">UPDATE</a></button>
           <button class="btn btn-success btn-sm"><a class="text-light"  style="text-decoration:none;" href="view_emp.php?viewid='.$id.'">VIEW</a></button>
           <button class="btn btn-danger btn-sm"><a class="text-light"  style="text-decoration:none;" href="del.php?deleteid='.$id.'">DELETE</a></button></td>
          
         </tr>';
       }
   }
   
   ?>
  </tbody>
</table>





      </div>



      <br><br>br
      <?php include "footer.php" ?>



      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
    </body>
</html>