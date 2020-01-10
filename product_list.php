<?php
	session_start();
	include("connection.php");

		 if (isset($_POST['submit'])&&$_POST['submit']=='Submit')
    {

     
     $name=$_POST['name'];
     $price=$_POST['price'];
     
     $query="INSERT INTO `product`(`id`, `name`, `price`) VALUES ('','$name','$price')";
     
        $run=mysqli_query($link,$query);
    
     if($run)
     {
        
            $msg2="New product added";
            header("location:product_list.php?msg2=$msg2");
              
    }
     else{
        $msg2= "Item already exist";
        header("location:product_list.php?msg2=$msg2");
     }


    }

?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	 
	<!--<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">-->

	 <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    		/*background-color: #f9ebdb;
	background: -moz-linear-gradient(top, #f9ebdb, #e49f58);
	background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#f9ebdb), to(#e49f58));*/
		background-image: url('image/xyz.jpg');
		background-size: 1500px auto;
    	}
    </style>
	
</head>
<body>
	<div class="container-fluid" style="padding: 0px;">
		<?php
				include("navbar.php");
		?>


	</div>

		<div class="container" id="content" style="min-height: 500px">		<!-- content start-->
			
		<div style="text-align: right;">
			<?php
			if(isset($_SESSION['email'])&&$_SESSION['role']=='admin')	
			{
				?>
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Enter New Product</button>	

			</div>
		<div>
		<?php
	}
		if(isset($_GET['msg2']))
			{
				echo "<b>".$_GET['msg2']."</b>";
			}

		?>
		</div>



		
		<div>
			<?php
				include("product_list_table.php");
			?>
		</div>

		</div>										<!-- content end -->




		<div class="container-fluid" style="padding:0px;">
			<?php
				include("footer.php");
			?>
		</div>   



		<!-- product entry popup code   -->

		<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="text-align: center;">Enter New Product</h4>
      </div>
      <div class="modal-body">
       		<?php  include("product_entry.php"); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>










	   <!-- jQuery (necessary for Bootstrap's JavaScript plugins)-->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!--pop over script -->
    <script>
	$(document).ready(function(){
	$('[data-toggle="popover"]').popover(); 
	});
	</script>
</body>
</html>