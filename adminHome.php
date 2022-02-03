<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Home</title>
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
              <a class="nav-link" style="color: blanchedalmond;"  href="#"> <b>ADD</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="adminFoods.php">FOODS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">CATAGORY</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminOders.php">ORDERS</a>
              </li>
          </ul>
          <span class="navbar-text">
            <button class="btn btn-light "><a href="admin.php">LOGOUT</a></button>
          </span>
        </div>
      </nav>
      


    <div class="container">
        <br><br><br>
        <center style="color: #ffae00;; font-size: 34px;" href="#"><b> ADD <span style="color: black;">FOOD ITEMS</span>  </b></center><br><br>
<br>
<br>
<form action="codeAdmin.php" method="post" enctype="multipart/form-data">
<div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Id</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Item Id" name="id">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Name</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Item name" name="name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Discription</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Write something about the food items"name="discription">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Quantity</label>
      <input type="number" name="quantity" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Veg Or Non-veg</label>
      <select id="inputState" name="veg" class="form-control">
        <option selected>Choose...</option>
        <option>Veg</option>
        <option>Non-Veg</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Price</label>
      <input type="text" name="price" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Add Picture</label>
    <input type="file" name="uploadfile" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirm Food 
      </label>
    </div>
  </div>
   


<button class="btn btn-lg px-5" name="submit" style="background-color: orange; color:blanchedalmond" type="submit">ADD ITEM</button>
</form>
</div>

    </div>
    <center><img style="width: 300px;" src="pics/home-img.png" alt="foot-image"></center>

    <br><br><br>
      <?php include "footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>