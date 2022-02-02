<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Amgo Foods Inc.</title>
  </head>
  <body>
    
      
<br><br>


<?php include "nav.php" ?>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="pics/3a.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>The food at your doorstep</h5>
                <p>Amgo provides services in web as well as mobile application. Awesome food that you can eat everyday.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="pics/2a.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>The food at your doorstep</h5>
                <p>Amgo provides services in web as well as mobile application. Awesome food that you can eat everyday.</p>
              </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="pics/1a.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5>The food at your doorstep</h5>
                <p>Amgo provides services in web as well as mobile application. Awesome food that you can eat everyday.</p>
              </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>



<br><br>
<center style="color: #ffae00;; font-size: 38px;" href="#"><b> FOOD <span style="color: black;">ITEMS</span>  </b></center>
<br>


<div style="background-image: url('pics/home-bg.jpg');" class="d-flex align-content-start flex-wrap">

      <?php
      
      include "conn.php";

      $sql = "SELECT * FROM food_item";
      $result = mysqli_query($conn,$sql);
      
      if ($result){
        while($row = mysqli_fetch_assoc($result)) {

          $id = $row['item_id'];
          $name = $row['customer_name'];
          $image = $row['image'];
          $discription = $row['discription'];
          $price = $row['price'];
          $qun =1;
          ?>
          
         


          <div class="card my-5 mr-5 ml-5" style="width: 25rem;">
              <img class="card-img-top" src="pics/<?php echo $image ?>" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?php echo $name ?></h5>
                <p class="card-text"><?php echo $discription ?></p><br>
                <p class="h3">&#8377 <?php echo $price ?>.0/-</p><br>
                <a href="addcart.php?itemid=<?php echo $id ?>&name=<?php echo $name ?>&price=<?php echo $price ?>&qun=<?php echo $qun ?>" class="btn btn" style="background-color:#ffae00; color:#ffffff">ADD TO CART</a>
              </div>
              
            </div>
            
              
           <?php

        }
      }

      
      ?> </div>
      <br>

<?php include "footer.php" ?>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>