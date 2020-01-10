<nav class="navbar navbar-inverse" style="border-radius: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="image/logo.png" width="125px" height="25px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
            <li><a href="product_list.php">Product List</a></li>

            <?php
              if(isset($_SESSION['email'])&&$_SESSION['role']=='admin') 
              {
            ?>    
            <li><a href="seller_list.php">Seller List</a></li>
            <li><a href="card_holder_list.php">Card Holder List</a></li>
            <?php
              }
              if(isset($_SESSION['email'])&&$_SESSION['role']=='seller')
              {
                ?>
                <li><a href="shop.php">Shop</a></li>
                <?php
              } 
            ?>          
            
    </ul>
    <ul class="nav navbar-nav navbar-right">
          <?php
            if(isset($_GET['msg']))
            {
                $message=$_GET['msg'];
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            if(isset($_SESSION['email']))
            {
            ?>
              <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
            <?php
            }
            else{
            ?>  
            <li class="dropdown">
            <a class="dropdown-toggle" href="#" data-toggle="dropdown">Sign In <strong class="caret"></strong></a>
            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
              <!-- Login form here -->

              <form action="useraction.php" method="post" style="width: 250px;height: 200px;">
    
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-default" name="submit" value="Log in">Submit</button>
                <a href="forgetpassword" style="float: right;">Forgot Password</a>
              </form>



            </div>
          </li>

            <?php
            }
            ?>

    </ul>
  </div>
</nav> 



  

<!-- <button type="submit" class="btn btn-default" name="submit" value="Log in">Submit</button>-->