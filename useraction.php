<?php
	session_start();
	include("connection.php");


// new user registration code

	if (isset($_POST['submit'])&&$_POST['submit']=='Register')
	{

     $name=$_POST['name'];
     $mobile="+91".$_POST['mobile'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $address1=$_POST['address1'];
     $address2=$_POST['address2'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $address=$address1."<br>".$address2."<br>".$city."<br>".$state." -".$pincode;
     
     $query="INSERT INTO `user`(`id`, `name`, `email`, `mobile`, `password`, `fulladdress`, `address1`, `address2`, `city`, `state`, `pincode`) VALUES ('','$name','$email','$mobile','$password','$address','$address1','$address2','$city','$state','$pincode')";
     
        $run=mysqli_query($link,$query);
    
     if($run)
     {
    	$queryfetch="select * from user where email='$email'";
		$fetch=mysqli_query($link,$queryfetch);   
    	if(mysqli_num_rows($fetch)==1)
    	{
	    	$array=mysqli_fetch_assoc($fetch);
	    	$msg2="New Seller added";
	    	header("location:seller_list.php?msg2=$msg2");
      	 }     
	}
     else{
        $msg2= "Email already register";
        header("location:signup.php?msg2=$msg2");
     }

	}


// Log in  php code

    if (isset($_POST['submit'])&&$_POST['submit']=='Log in')
    {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query="select * from user where email='$email' and password='$password'";
        $run=mysqli_query($link,$query);

        if(mysqli_num_rows($run)==1){
            $array=mysqli_fetch_assoc($run);
            $role=$array['role'];
            $_SESSION['email']=$email;
            $_SESSION['role']=$role;
            if ($role=="admin") {
                header("location:index.php");    
            } else {
                header("location:shop.php");
            }
            
            
            }

        else{
            $msg="wrong email or password";
            header("location:index.php?msg=$msg");
        }

    }


// Entering new card holder

    if (isset($_POST['submit'])&&$_POST['submit']=='Submit')
    {

     $card=$_POST['card_no'];
     $name=$_POST['name'];
     $mobile="+91".$_POST['mobile'];
     $email=$_POST['email'];
     $address1=$_POST['address1'];
     $address2=$_POST['address2'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $address=$address1."<br>".$address2."<br>".$city."<br>".$state." -".$pincode;
     
     $query="INSERT INTO `ration`(`id`,`card_number`, `name`, `email`, `mobile`,`fulladdress`, `address1`, `address2`, `city`, `state`, `pincode`) VALUES ('','$card','$name','$email','$mobile','$address','$address1','$address2','$city','$state','$pincode')";
     
        $run=mysqli_query($link,$query);
    
     if($run)
     {
        
            $msg2="New Card added";
            header("location:card_holder_list.php?msg2=$msg2");
              
    }
     else{
        $msg2= "Card no. already register";
        header("location:new_card.php?msg2=$msg2");
     }


    }







//

    if (isset($_POST['submit'])&&$_POST['submit']=='Confirm')
        {
            $amount=$_POST['amount'];
            $card_no=$_POST['card_no'];
            $seller_id=$_POST['seller_id'];
            echo $amount.$card_no.$seller_id;

     $query="INSERT INTO `order_list`(`order_number`, `seller_id`, `card_no`, `amount`) VALUES ('','$seller_id','$card_no','$amount')";
     $run=mysqli_query($link,$query);
     header("location:shop.php");
        }
/*
     $name=$_POST['name'];
     $mobile="+91".$_POST['mobile'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $address1=$_POST['address1'];
     $address2=$_POST['address2'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $pincode=$_POST['pincode'];
     $address=$address1."<br>".$address2."<br>".$city."<br>".$state." -".$pincode;
     
     $query="INSERT INTO `user`(`id`, `name`, `email`, `mobile`, `password`, `fulladdress`, `address1`, `address2`, `city`, `state`, `pincode`) VALUES ('','$name','$email','$mobile','$password','$address','$address1','$address2','$city','$state','$pincode')";
     
        $run=mysqli_query($link,$query);
    
     if($run)
     {
        $queryfetch="select * from user where email='$email'";
        $fetch=mysqli_query($link,$queryfetch);   
        if(mysqli_num_rows($fetch)==1)
        {
            $array=mysqli_fetch_assoc($fetch);
            $msg2="New Seller added";
            header("location:seller_list.php?msg2=$msg2");
         }     
    }
     else{
        $msg2= "Email already register";
        header("location:signup.php?msg2=$msg2");
     }

    }
    */