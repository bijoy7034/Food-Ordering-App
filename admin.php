<?php 

include 'conn.php';
if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM admin_login WHERE email = '$email' AND password= '$password'";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $count = mysqli_num_rows($result);

if($count == 1){
  header("location:adminHome.php");
}
else {
    echo "<script>alert('Invalid username')</script>";
}


}


?>



<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="pics/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('pics/home-bg.jpg');"><center>
    <div class="container-pt-3 my-5" style="width: 490px; padding:30px; background-color: white;">
    <form action="admin.php" method="post">
    <center style="color: #ffae00;; font-size: 34px;" href="#"><b> ADMIN <span style="color: black;">LOGIN</span>  </b></center><br><br>
        <div class="form-floating mb-3">
        <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput" style="color: grey;">Email address</label>
      </div>
      <div class="form-floating">
         <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
         <label for="floatingPassword" style="color: grey;">Password</label>
      </div><br>
           <p class="small mb-5 pb-lg-2"><a class="text-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-lg px-5" name="submit" style="background-color: orange;" type="submit">Login</button>
              <br><br><br>
              <!-- <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" style="color: orange;" class="text"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div> -->

              <div>
              <p class="mb-0">Are you a customer? <a href="#!" style="color: orange;" class="text-50 fw-bold">Customer Login</a></p>
            </div>

            </form>
            </div>

            

    </div>

    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>






















