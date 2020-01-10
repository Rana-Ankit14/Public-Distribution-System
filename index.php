<?php
	session_start();
	include("connection.php");
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
	<div class="container-fluid">
		<?php
				include("header.php");
		?>

	</div>
		

		<div class="container-fluid" style="min-height: 300px;"> <!-- content end -->
				<div class="row">
					<div class="col-md-4">
						<h3 style="text-align: center;">Overview</h3>
						
						<p>The central and state governments shared the responsibility of regulating the PDS. While the central government is responsible for procurement, storage, transportation, and bulk allocation of food grains, state governments hold the responsibility for distributing the same to the consumers through the established network of Fair Price Shops (FPSs).</p><p>State governments are also responsible for operational responsibilities including allocation and identification of families below poverty line, issue of ration cards, supervision and monitoring the functioning of FPSs[clarification needed]. Under PDS scheme, each family below the poverty line is eligible for 35 kg of rice or wheat every month, while a household above the poverty line is entitled to 15 kg of foodgrain on a monthly basis.</p>
					</div>
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<h3 style="text-align: center;">History</h3>
						<p>The public distribution system was made by Amartya Bhushan. A public distribution shop, also known as fair price shop (FPS), is a part of India's public system established by Government of India which distributes rations at a subsidized price to the poor.[5] Locally these are known as "ration shops" and chiefly sell wheat, rice and sugar at a price lower than the market price called Issue Price. Other essential commodities may also be sold. To buy items one must have a "Ration Card".</p><p> These shops are operated throughout the country by joint assistance of central and state government. The items from these shops are much cheaper but are of average quality. Ration shops are now present in most localities, villages towns and cities. India has 478,000 shops constituting the largest distribution network in the world.</p>
					</div>
				</div>
			
		</div>		<!-- content end -->


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