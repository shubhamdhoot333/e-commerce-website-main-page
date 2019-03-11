<?php
//connect to DBMS			
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
	//server connect					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							"connect with server";
							}


?>


<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Living Room Furniture</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">				
			</head>
<body>
		<!--1 navbar-->				
						<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script"size="3px"color="white"><b>Salasar Art & Craft</b></font>
						</nav>
		<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Living Room</li>
								</ol>
						</div>
						<div class="container">
		<!--1row-->
						<div class="row">
						<div class="col-lg-12 text-center">
						<b> <font size="5px" face="segoe script" color="red"> Shop by living Room</font></b>
						</div>
						</div>
		<!--2row-->
						<div class="row">
							<div class="col-lg-12 text-center">
							<b>The choice of the modern living room furniture determines the overall look of the house since the room is one to be visited first by the guests
							</b></div>
						</div>
		
		<!--3row-->		<br><br>	
						<div class="row">
							<div class="col-lg-4 text-center">
							<?php
							$result=mysqli_query($conn,"select * from sofas");
							$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
							?>
							<a  class="p-2" href="common.php?value1=living room sofas & value2=sofas">
							<img src="<?php echo $photo;?>" height="200px" width="200px"><br><br>
							<font color="black" size="4px">
							SOFA SETS 
							</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>
							</a>
							</div>
							
							<div class="col-lg-4 text-center">
							<?php
							$result=mysqli_query($conn,"select * from otheritem where name='tv unit' ");
							$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
							?>
							<a  class="p-2" href="common.php?value1=tv unit & value2=otheritem">
							<img src="<?php echo $photo?>" height="200px" width="200px"><br><br>
							<font color="black" size="4px">
							TV UNIT
							</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>
							</a>
							</div>
							
							<div class="col-lg-4 text-center">
							<?php
							$result=mysqli_query($conn,"select * from otheritem where name='shoe racks' ");
							$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
							?>
							
							<a  class="p-2" href="common.php?value1=shoe racks & value2=otheritem">
							<img src="<?php echo $photo;?>" height="200px" width="200px"><br><br>
							<font color="black" size="4px">
							SHOE RACKS
							</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>
							</a>
							</div>
						</div>
		<!--3row--><br><br>
						
						<div class="row">
							<div class="col-lg-4 text-center">
								<?php
							$result=mysqli_query($conn,"select * from bookshelve where name='bookshelve' ");
							$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
							?>
								<a  class="p-2" href="common.php?value1=bookshelve & value2=bookshelve">
								<img src="<?php echo $photo; ?>" height="200px" width="200px"><br><br>
								<font color="black" size="4px">
									BOOKSHELVES
								</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>
								</a>
							</div>
							
							<div class="col-lg-4 text-center">
								<?php
							$result=mysqli_query($conn,"select * from table1 where name='coffee table' ");
							$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
							?>
								
								<a  class="p-2" href="common.php?value1=coffee table & value2=table1">
								<img src="<?php echo $photo; ?>" height="200px" width="200px" alt="item not present"><br><br>
									<font color="black" size="4px">
								COFFEE TABLE 
								</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>	
								</a>
							</div>
							
							<div class="col-lg-4 text-center">
								<?php
									$result=mysqli_query($conn,"select * from chair where name='chair' ");
									$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
								?>
								<a  class="p-2" href="common.php?value1=chair & value2=chair">
								<img src="<?php echo $photo; ?>" height="200px" width="200px"><br><br>
									<font color="black" size="4px">
								Chair
									</font><br><br>
							<button type="button" class="btn btn-primary btn-md">view</button>	
							</a></div>
						</div>
					</div>
					<br><br>
					<br><br>
	<!--footer-->		 
			 <footer class="text-muted bg-light bg-secondary">
					<div class="container">
							<div class=" border-top ">
								<br>
								<div class="row">
		<!--our company-->						
								<div class="col-lg-3 text-center">
										<label><h6 class="h6"><u>Our Company</u></h6></label>
									<br><a href="about.php"><font color="black">About us</font></a>	
									<br><a href="custom.php"><font color="black">Custom Furniture</font></a>
									<br><a href="contact_us.php"><font color="black">Contact us</font></a>
									<br><a href="wood.php"><font color="black">Type Of Wood</font></a>
									<br><a href="team.php"><font color="black">Team</font></a>
								</div>
		<!--customer services--><br>			
								<div class="col-lg-3 text-center">
									<label><h6 class="h6"><u>Customer Service</u></h6></label>
									<br><a href="terms.php"><font color="black">Terms Of Use</font></a>
									<br><a href="security.php"> <font color="black">Security & Privacy</font></a>
									<br><a href="return.php"> <font color="black">Return & Refund</font></a>
									<br><a href="track.php"> <font color="black">Track Order</font></a>
									<br><a href="stories.php"> <font color="black">Customer Stories</font></a>
								</div>
		<!--top categories-->						
								<div class="col-lg-3 text-center">
								<label><h6 class="h6"><u>Top Categories</u></h6></label>
								<br><a href="living_room_furniture.php"> <font color="black">Living Room Furniture </font></a>
								<br><a href="dining_room_furniture.php"> <font color="black">Dining Room Furniture </font></a>
								<br><a href="bed_room_furniture.php"> <font color="black">Bedroom Furniture </font></a>
								<br><a href="storage.php"> <font color="black">Storage Furniture </font></a>
								<br><a href="outdoor_furniture.php"> <font color="black">Outdoor Furniture </font></a>								
								</div>
		<!--note-->						
								<div class="col-lg-3 text-center">
									<label><h6 class="h6"><u>Follow</u></h6></label><br>
		<!--api-->						<a href="https://www.facebook.com/shreesalasar.artandcraft.5"> <font color="blue" size="3px">*Facebook</font></a><br>
		<!--api-->						<a href="https://www.youtube.com/channel/UCzOQoOQ07BJiaZtNOAt7WbA"> <font color="blue" size="3px">*Youtube</font></a><br>
		<!--api-->						
		<!--api-->						 <font color='blue' size="4px">Support</font><br>
		<!--api-->						 <font  size="3px">shreesalasarartandcraft@gmail.com</font><br>
		<!--api-->						 <font  size="3px">9314098500</font><br>
								</div>
								
								
							</div>	
							</font>
					</div>
					<hr color="black">
					<div class="row">
					<div class="col-lg-6 text-center">
					Online Furniture Shopping Website - Delivering In India.

					</div>
					<div class="col-lg-6 text-center">
					 2019-2020.jayshreeshyam.com
					</div>
					</div><br><br><br>
			</footer>
		
						
</body>
</html>						