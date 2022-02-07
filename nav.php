
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffae00;"> 
        <a class="navbar-brand" style="color: #ffffff;; font-size: 24px;" href="#"><b> AMGO <img style="width: 50px;" src="pics/cart.png" alt="" > <span style="color: black;">Foods</span>  </b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav justify-content-center mr-auto ">
            <li class="nav-item active" style="margin-left: 330%;">
              <a class="nav-link" style="color: blanchedalmond;"  href="index.php"> <b>Home</b> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catagory</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
              </li>
          </ul>
          <form action="search.php" method="POST" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0"  type="submit" name="submit">Search</button>
    </form>
    
        </div>
      </nav>