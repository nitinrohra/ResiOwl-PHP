<?php
	session_start();
	
	$con=mysqli_connect('localhost','root','','resiowl');
	
	$order 		    =	$_POST['order'];
	$category 		=	$_POST['category'];
    $gender 		=	$_POST['gender'];
    $min_price 		=	$_POST['min-price'];
    $max_price 		=	$_POST['max-price'];
   

     $querr=  "DELETE FROM `result`";

	$querry = "INSERT INTO `result` SELECT * FROM `flat`WHERE `category`='".$category."' AND `gender`='".$gender."' AND `rent` BETWEEN '".$min_price."' AND '".$max_price."'ORDER BY `rent` ".$order."";
	$data1	=	mysqli_query($con,$querr);
	$dat	=	mysqli_query($con,$querry);
	$count	=	mysqli_num_rows($data);
	
	if($count > 0 ){
		
		header('location:search.php');
	}else{
		
		header('location:search.php');
	}
   ?>