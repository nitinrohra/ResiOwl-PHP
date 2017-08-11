<?php
	session_start();
	
	$con=mysqli_connect('localhost','root','','resiowl');
	
    $name 		=	$_POST['username'];
    $email 		=	$_POST['email'];
    $usertype 	=	$_POST['usertype'];
    $gender		=	$_POST['gender'];
    $pass 		=	$_POST['password'];
    
	
	$count	=	mysqli_num_rows($data);
	$sql = "INSERT INTO users (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com')";
    
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
?>