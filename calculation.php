<?php
		$query="select * from product";
		$run=mysqli_query($link,$query);
		$total_price=0;
		$no_of_item=0;
		while($array=mysqli_fetch_assoc($run))
		{
			$total_price=$total_price+$array['price'];
			$no_of_item++;
		}

		$avg_price=$total_price/$no_of_item;
		if (isset($_POST['submit'])&&$_POST['submit']=='Submit')
		{
			$payable_amount= $_POST['quantity']*$avg_price;
			header("location:invoice.php?id=$id&payable_amount=$payable_amount");
		}

		if (isset($_POST['submit'])&&$_POST['submit']=='otp')
		{
			header("location:invoice.php?id=$id&payable_amount=$amount");
		}
?>



<div >

			<h2>Enter Total Quantity</h2>	
		<form class="form-inline" action="#" method="post">
		
			<div class="form-group">
				<input type="number" name="quantity" required="required" placeholder="Total Quantity" class="form-control">
			</div>
			<button type="submit" class="btn btn-info btn-lg" name="submit" value="Submit">Submit</button>
		</form>



</div>

