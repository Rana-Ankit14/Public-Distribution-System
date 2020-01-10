<?php
	session_start();
	include("connection.php");

	 if (isset($_GET['id']))
    {

     
     $id=$_GET['id'];
     $email=$_SESSION['email'];
     
     $query="select * from ration where id='$id'";
     $query2="select * from user where email='$email'";
     
	 $run=mysqli_query($link,$query);
	 $run2=mysqli_query($link,$query2);

	
    
     if($run)
     {
	        $array=mysqli_fetch_assoc($run);
	        $array2=mysqli_fetch_assoc($run2);
			$name=$array['name'];
			$mobile=$array['mobile'];
			$card_no=$array['card_number'];
			$seller_id=$array2['id'];
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

    		div#content div#cal{
    		text-align: center;
    	}

    	div#content div#cal form{
    		margin: 50px auto;
    	}

    	div#content div#cal form input{
    		width: 400px;
    		height: 45px;
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
		<div class="row">
			<div class="col-sm-10">
				<h4>Card Number&nbsp;:-&nbsp;<?php echo $card_no?></h4>
				<h4>Customer Name&nbsp;:-&nbsp;<?php echo $name?></h4>

		<?php
		if(isset($_GET['payable_amount']))
		{	
			$amount=$_GET['payable_amount'];
			?>
			<h4>Total Amount = <?php echo $amount;?></h4>
			
		<?php
	}
		?>
			</div>
			<div class="col-sm-2">
				<h4>Seller Id&nbsp;:-&nbsp;<?php echo $seller_id?></h4>
			</div>
		</div>
		<?php
		if(isset($_GET['payable_amount']))
		{ 
			?>

			<form action="useraction.php" method="post">


			<input type="number" name="seller_id" hidden value="<?php echo $seller_id?>">
			<input type="number" name="card_no" hidden value="<?php echo $card_no ?>">
			<input type="number" name="amount" hidden value="<?php echo $amount?>">
			
			<div class="form-group">
				<button type="submit" class="btn btn-default" name="submit" value="Confirm">Confirm Payment</button>
			</div>
			
			
		</form> <!-- form -->	

		<?php
		}

		else
			{
				?>
		<div class="row" id="cal">
			<?php
				include('calculation.php');
			?>
		</div>
		<?php
	}
		?>

	</div>
		

			
	<div class="container-fluid" style="padding:0px;">
		<?php
			include("footer.php");
		?>
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