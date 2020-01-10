<?php
	session_start();
	include("connection.php");

			 if (isset($_POST['submit'])&&$_POST['submit']=='Submit')
    {

     
     $card_no=$_POST['card_no'];
     
     $query="select id from ration where card_number='$card_no'";
     
	 $run=mysqli_query($link,$query);

	
    
     if($run)
     {
	        $array=mysqli_fetch_assoc($run);
			$id=$array['id'];
			if ($id!='') {
				header("location:invoice.php?id=$id");
			}
			else {
				$msg2= "Wrong card number";
        		header("location:shop.php?msg2=$msg2");

			}
       
            
              
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
    	div#content{
    		text-align: center;
    	}

    	div#content form{
    		margin: 50px auto;
    	}

    	div#content form input{
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

		<h2>Enter Card Number</h2>	
		<form class="form-inline" action="#" method="post">
			<div class="form-group">
				<?php
				if (isset($_GET['msg2'])) {
					$message=$_GET['msg2'];
					echo "<script type='text/javascript'>alert('$message');</script>";
				}

				?>
			</div>
			<div class="form-group">
				<input type="number" name="card_no" required="required" placeholder="Card Number" class="form-control">
			</div>
			<button type="submit" class="btn btn-info btn-lg" name="submit" value="Submit">Submit</button>
		</form>

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