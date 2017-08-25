

 <?php
	session_start();
	$_SESSION['page-name']="search.php";
	$con=mysqli_connect('localhost','root','','resiowl');
  $querry = "SELECT * FROM `result`";
	$dat	=	mysqli_query($con,$querry);
	$data	=	mysqli_fetch_array($dat);
?>



<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Search</title>
    <meta charset="utf-8"></meta>
    <link rel="stylesheet" href="component/jquery.rateyo.min.css"/>
	<link href="component/search.css" type="text/css" rel="stylesheet">
		<link href="component/bootstrap.css" type="text/css" rel="stylesheet">
		<link rel="stylesheet" href="component/jquery.rateyo.min.css">
		<script type="text/javascript" src="component/jquery.min.js"></script>
		<script type="text/javascript" src="component/jquery.rateyo.js"></script>
		<script src="component/bootstrap.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="component/jquery.bxslider.min.js"></script>
		<link href="component/jquery.bxslider.css" rel="stylesheet" />
	</head>
	<body class="body" style="overflow-x:hidden;">
			<?php include('includes/header.php'); ?>
	      	<script src="component/bootstrap.min.js"></script>
		<script type="text/javascript" src="component/jquery.rateyo.js"></script>
			<br /><br />
			<div class="filter">
				<nav class="navbar navbar-default" style="z-index:800;width:100%;margin-top:10px;">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand" href="#">Filters</a>
					    </div>
					
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div> 
						
						<form action="filter.php" method="post">
							<ul class="nav navbar-nav" style="padding-left:150px;"  >
						        <li class="dropdown">
						          <a href="#"  aria-expanded="false">Sort By <span class="caret"></span></a>
						          <select name="order">
											<option value="ASC">Low to High</option>
											<option value="DESC">High to Low</option>
										</select>
											
						        </li>
								<li class="dropdown">
						          <a href="#"  aria-expanded="false">Category</a>
						          <select name="category">
											<option value="1">Flat</option>
											<option value="0">Hostel</option>
											<option value="">Both</option>
											</select>
										</li>
								<li class="dropdown">
						          <a href="#" aria-expanded="false">Gender </a>
						          <select name="gender">
											<option value="m">male</option>
											<option value="f">female</option>
										</select>
						        </li>
						
								<li class="dropdown">
						          <a href="#" aria-expanded="false">Min Price</a>
						          <select name="min-price">
											<option value="5000">Min Price</option>
											<option value="5000">5000</option>
											<option value="7000">7000</option>
											<option value="10000">10000</option>
											<option value="15000">15000</option>
											<option value="20000">20000</option>
										</select>
						        </li>
								<li class="dropdown">
						          <a href="#"  role="button" aria-expanded="false">Max Price </a>
						          <select name="max-price">
											<option value="5000">Max Price</option>
											<option value="7000">7000</option>
											<option value="10000">10000</option>
											<option value="15000">15000</option>
											<option value="20000">20000</option>
											<option value="25000">25000</option>
										</select>
						        </li>
								<button type="submit" class="btn btn-default">Search</button>
							</ul>
							<form class="navbar-form navbar-left" role="search">
						        <div class="form-group">
									<input type="text" class="form-control" placeholder="City">
						        </div>
						        
						    </form>
						</div>
						<div style="float:left;width:100%" class="row">
							<div class="col-xs-12 col-md-1" style="font-size:16px;margin:10px;">Distance  -</div>
							
							<div class="checkbox col-xs-12 col-md-2" style="display:inline;margin:10px;">
						      <label><input type="checkbox" value="">Near Hospital</label>
						    </div>
							<div class="checkbox col-xs-12 col-md-2" style="display:inline;margin:10px;">
						      <label><input type="checkbox" value="">Near Grocery Store</label>
						    </div>
							<div class="checkbox col-xs-12 col-md-2" style="display:inline;margin:10px;">
						      <label><input type="checkbox" value="">Near Mall</label>
						    </div>
							<div class="checkbox col-xs-12 col-md-2" style="display:inline;margin:10px;">
						      <label><input type="checkbox" value="">Near Transportation</label>
						    </div>
							<div class="checkbox col-xs-12 col-md-2" style="display:inline;margin:10px;">
						      <label><input type="checkbox" value="">Near Restaurant</label>
						    </div>
					    </div>
					    </div>
				  </div>
				  
					</form>		
				  
				</nav>
			</div>
			
			
			
			<div class="row">
				<div class="data" style="z-index:100;background-color:rgba(49,79,79,0.7);color:white;">
					<p>Hostel / pg</p>
					<div class="image col-xs-12 col-sm-6 col-md-4">
						<ul class="bxslider slider">
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
						</ul>
					</div>
					<div  class="content col-xs-12 col-sm-6 col-md-8 row">
						<div class="box"></div> 
						<div class="glyphicon glyphicon-map-marker des"> <?php echo $data['plot'];echo $data['colony'];echo $data['street'];
					echo 	$data['city'];echo $data['state']; ?></div>
						<div class="glyphicon glyphicon-user des"> Boys</div>
						<div class="glyphicon glyphicon-user des"> Single Room</div>
						
						<br /><br />
						<div class="list-group" style="margin:0 0 0 2%;">
						    <div href="#" class="list-group-item" style="background-color:white;color:black;border:none;">
						      <h4 class="list-group-item-heading" style="color:red;">Facilities</h4><br />
						      <p class="list-group-item-text">
								<ul>
									<li class="list">AC Room</li>
									<li class="list">Laundary</li>
									<li class="list">Food</li>
									<li class="list">Timing</li>
								</ul>
							  </p>
						    </div>
						</div>
						<br />
						<br />
						<div class="col-md-6"><h4>Rent -</h4><h3 style="color:black;">&#8377 <?php echo $data['rent']; ?></h3></div>
						<div class="col-md-6"><h4>Security Deposit -</h4><h3 style="color:black;">&#8377<?php echo $data['security_deposit']; ?></h3></div>
						
						<div class="col-xs-12 row" style="padding:2%;">
							<div class="col-xs-12" style="font-size:18px;color:black">Distance From (Kms) :-</div>
							<div class="col-xs-6 col-md-3">Hospital - </div>
							<div class="col-xs-6 col-md-3">Grocery Store - </div>
							<div class="col-xs-6 col-md-3">Mall - </div>
							<div class="col-xs-6 col-md-3">Transportation - </div>
							<div class="col-xs-6 col-md-3">Restaurant - </div>
						</div>
						
						<br /><br /><br />
						<div class="row" style="margin-left:3%;">
							<div class="form-group col-xs-9 col-md-5" style="padding:0;">
								<textarea class="form-control" id="usr" style="float:left;"><?php echo $data['description']; ?></textarea>
							</div>
							<div class="col-xs-3" style="padding:0;">
								<button type="button" class="btn btn-success" style="float:left;margin-left:2px;">Comment</button>
							</div>
							<div class="col-xs-6 col-md-1" style="margin:0;padding:0;">
								<h3>Rating</h3>
							</div>
							<div style="float:right;font-size:20px;margin:0;padding:0" class="rateyo col-xs-6 col-md-4"></div>
						</div>	
						<div class="book">
							<button type="button" class="btn btn-warning btn-block"><div style="font-size:20px;">Book Now</div></button>
						</div>
					</div>
				</div>
			</div>	
			<div class="row">
				<div class="data" style="z-index:100;background-color:rgba(160,82,42,0.7);color:white;">
				<p>Flat</p>
					<div class="image col-xs-12 col-sm-6 col-md-4">
						<ul class="bxslider slider">
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
							<li><img class="s-img" src="images/cad-square-500x500.jpg" /></li>
						</ul>
					</div>
					<div class="content col-xs-12 col-sm-6 col-md-8 row">
						
						<div class="box"></div>
						<div class="glyphicon glyphicon-map-marker des"> Locality</div>
						<div class="glyphicon glyphicon-user des"> Boys</div>
						<br /><br />
						<div class="list-group" style="margin:0 0 0 2%;">
						    <div href="#" class="list-group-item" style="background-color:white;color:black;border:none;">
						      <h4 class="list-group-item-heading" style="color:red;">Facilities</h4><br />
						      <p class="list-group-item-text">
								<ul>
									<li class="list">AC Room</li>
									<li class="list">Laundary</li>
									<li class="list">Food</li>
									<li class="list">Timing</li>
								</ul>
							  </p>
						    </div>
						</div>
						<br />
						
						<div class="col-md-6"><h4>Rent -</h4><h3 style="color:black;">&#8377 5489 </h3></div>
						<div class="col-md-6"><h4>Security Deposit -</h4><h3 style="color:black;">&#8377 5489 </h3></div>
						
						<div class="col-xs-12 row" style="padding:2%;">
							<div class="col-xs-12" style="font-size:18px;color:black">Distance From (Kms) :-</div>
							<div class="col-xs-6 col-md-3">Hospital - </div>
							<div class="col-xs-6 col-md-3">Grocery Store - </div>
							<div class="col-xs-6 col-md-3">Mall - </div>
							<div class="col-xs-6 col-md-3">Transportation - </div>
							<div class="col-xs-6 col-md-3">Restaurant - </div>
						</div>
						
						<br /><br /><br />
						<div class="row" style="margin-left:3%;">
							<div class="form-group col-xs-9 col-md-5" style="padding:0;">
								<textarea class="form-control" id="usr" style="float:left;"></textarea>
							</div>
							<div class="col-xs-3" style="padding:0;">
								<button type="button" class="btn btn-success " style="float:left;margin-left:2px;">Comment</button>
							</div>
							<div class="col-xs-6 col-md-1" style="margin:0;padding:0;">
								<h3>Rating</h3>
							</div>
							<div style="float:right;font-size:20px;margin:0;padding:0;color:red;" class="rateyo col-xs-6 col-md-4"></div>
						</div>
						<div class="book">
							<button type="button" class="btn btn-primary btn-block"><div style="font-size:20px;">Book Now</div></button>
						</div>
						
					</div>
					
										
				</div>
			</div>
    <script>

      $(function () {

        var rating = 1.6;

        $(".counter").text(rating);

        $("#rateYo1").on("rateyo.init", function () { console.log("rateyo.init"); });

        $("#rateYo1").rateYo({
          rating: rating,
          numStars: 5,
          precision: 2,
          starWidth: "64px",
          spacing: "5px",
	  rtl: true,
          multiColor: {

            startColor: "#000000",
            endColor  : "#ffffff"
          },
          onInit: function () {

            console.log("On Init");
          },
          onSet: function () {

            console.log("On Set");
          }
        }).on("rateyo.set", function () { console.log("rateyo.set"); })
          .on("rateyo.change", function () { console.log("rateyo.change"); });

        $(".rateyo").rateYo();

        $(".rateyo-readonly-widg").rateYo({

          rating: rating,
          numStars: 5,
          precision: 2,
          minValue: 1,
          maxValue: 5
        }).on("rateyo.change", function (e, data) {
        
          console.log(data.rating);
        });
      });
	  
    </script>
	
  </body>
</html>
