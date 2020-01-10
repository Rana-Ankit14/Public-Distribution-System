<?php 
		$search='';	
		$count=3;
		if (isset($_GET['page']) && $_GET['page']!='')
		 {
			$page=$_GET['page'];
		}
		else{
			$page=1;
		}
		$offset=($page-1)*$count;
		

		if (isset($_GET['name'])) {
			$search=$_GET['search'];
			$query="select * from product where name like '%$search%' limit $offset,$count";
			$query2="select count(id) as count from product where name like '%$search%'";
		}
		else if (isset($_GET['id'])) {
			$search=$_GET['search'];
			$query="select * from product where id like '%$search%' limit $offset,$count";
			$query2="select count(id) as count from product where id like '%$search%'";
		}	

	else{	
	$query="select * from product limit $offset,$count";
	$query2="select count(id) as count from product";
	}
	$run=mysqli_query($link,$query);
	$run2=mysqli_query($link,$query2);
	$array2=mysqli_fetch_assoc($run2);
	$rowcount=$array2['count'];
	$pages=ceil($rowcount/$count);



?>
	<h3 style="text-align: center;font-size: 25px;">Product List</h3>

	<div class="grid-80" id="product-table-search">
		  <form class="navbar-form navbar-left" action="#" method="get">
        <div class="form-group">
          <input type="text" name="search" value="<?php echo $search; ?>" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default" name="name" value="By Name">By Name</button>
        <button type="submit" class="btn btn-default" name="id" value="By Id">By Id</button>
      </form>

		</div>
	

	<div style="padding: 5px;">
	<table class="table table-bordered table-hover table-striped" style="background-color: white;">
				<tr>
					<th>Product ID</th>
					<th>Name</th>
					<th>Price</th>
					
						<?php
			 		if(isset($_SESSION['email'])&&$_SESSION['role']=='admin')
			 		{
			 	?>
			 	<th>Action</th>
			 		<?php
			 			}
			 		?>

				</tr>


	<?php

	while($array=mysqli_fetch_assoc($run))
	{
		?>
			<tr>
				<td><?php echo $array['id'];?></td>
	 			<td><?php echo $array['name'];?></td>
			 	<td><?php echo $array['price'];?></td>
			 	<?php
			 		if(isset($_SESSION['email'])&&$_SESSION['role']=='admin')
			 		{
			 	?>
			 	<td><a href="updateproduct.php?id=<?php echo $array['id'];?>">Product Update</a>
			 		<br><br>
			 		<a href="deleteproduct.php?id=<?php echo $array['id'];?>">Delete </a></td>
			 		<?php
			 			}
			 		?>
			 </tr>



		<?php
	}


				if($pages>1)
   				{
   					?>
   						<tr>
			<td colspan="6" style="text-align: center;">
   				<?php	
    		     if ($page!=1)
    		     {
    		     	$previous=$page-1;
    		     	?>
    		     	<a href="product_list.php?page=<?php echo $previous;
    		     	if(isset($_GET['search']))
    			    		{ echo "&search=".$search;}
				   		if (isset($_GET['id']))
							{ echo "&id=".$_GET['id'];}
						if (isset($_GET['name']))
							{ echo "&name=".$_GET['name'];}
						?>">Previous</a>
    		     	<?php
    		     }


				for ($i=1; $i <= $pages; $i++)
				{
				?>
					   <a href="product_list.php?page=<?php echo $i;
					    if(isset($_GET['search']))
    			    		{ echo "&search=".$search;}
				   		if (isset($_GET['id']))
							{ echo "&id=".$_GET['id'];}
						if (isset($_GET['name']))
							{ echo "&name=".$_GET['name'];}


					    ?>"><?php echo $i;?></a>
				<?php
					}
				if ($page!=$pages)
    		     {
    		     	$next=$page+1;
    		     	?>
    		     	<a href="product_list.php?page=<?php echo $next;
    		     	if(isset($_GET['search']))
    			    		{ echo "&search=".$search;}
				   		if (isset($_GET['id']))
							{ echo "&id=".$_GET['id'];}
						if (isset($_GET['name']))
							{ echo "&name=".$_GET['name'];}
    		     	?>">Next</a>
    		     	<?php
    		     }
    		     ?>
    		     </td>
		</tr>
				<?php
			}
				?>
			
		</table>
</div>