<?php
	session_start();
	
	$con=mysqli_connect('localhost','root','','resiowl');
	
	$order 		    =	$_POST['order'];
	$category 		=	$_POST['category'];
    $gender 		=	$_POST['gender'];
    $min_price 		=	$_POST['min-price'];
    $max_price 		=	$_POST['max-price'];
   

  
    $querry = "SELECT * FROM `flat` WHERE `category`='".$category."' AND `gender`='".$gender."' AND `rent`= BETWEEN '".$min_price."' AND '".$max_price."'ORDER BY `rent` ".$order."";
	echo(id);
	$data	=	mysqli_query($con,$querry);
	$count	=	mysqli_num_rows($data);
	
   ?>