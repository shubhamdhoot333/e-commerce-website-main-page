<?php
session_start();
error_reporting(0);
//connect to DBMS
				$Email=$_SESSION['Email'];
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
	//take value from link		
					$id=$_GET['value1'];
					$title=$_GET['value2'];	
					$select=1;
				
					if($id!='')
					{
						$result=mysqli_query($conn,"select * from $title where product_id='$id' ");
						$row = mysqli_fetch_array($result);
							 $name=$row['name'];
							 $cost=$row['cost'];
							 $wood=$row['wood'];
							 $data=$row['data'];
							 $photo1=$row['photo1'];
							 $photo2=$row['photo2'];
							 $photo3=$row['photo3'];
							$t1=str_replace('.', '.<br>*', $data);
					
					}

					if(isset($_REQUEST['Save']))
					{					
						if($_REQUEST['select']!="")
						{
							
							 $select=$_REQUEST['select'];
							
						}
					}
//add to card					
				if($Email!=''){
					if(isset($_REQUEST['addtocard']))
						{					
						
							
//here check item present or not						
						$r=mysqli_query($conn,"select * from addtocard where product_id='$id' and email='$Email' and title='$title' ");
						$row1 = mysqli_affected_rows($conn);
						if($row1==0)
						{
							 mysqli_query($conn,"INSERT INTO addtocard(productname,email,product_id,cost,title,data,wood,photo1) 
									VALUES('$name','$Email','$id','$cost','$title','$data','$wood','$photo1')");
						}
						
						}	
				}
				else
				{
					$e="Please Login your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
				}
					

?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Product</title>
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
								<font face="segoe script"size="3px"color="white"><b>jay shree shyam</b></font>
						</nav>
		<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Product Detail</li>
								</ol>
						</div>
			
		
		
		
		<!--contaner-->				
						<div class="container">
				<!--row-->	<br>
							<div class="row">
								<div class="col-lg-12 text-center">
									<font face="segoe script"  size="6px"><u><?php echo $name; ?></u></font>
								</div>
							</div>
				<!--row-->	<br>
							<div class="row">
								<div class="col-lg-6 text-center">
										<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<!--indicator-->			
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
											
											<div class="carousel-inner">
												<div class="carousel-item active">
											<?php echo "<img src='$photo1' class='d-block w-100' alt='...' height='400px'>";  ?>
												</div>
											
												<div class="carousel-item">
											<?php echo "<img src='$photo2' class='d-block w-100' alt='...' height='400px'>";  ?>			
												</div>
							
												<div class="carousel-item">
											<?php echo "<img src='$photo3' class='d-block w-100' alt='...' height='400px'>";  ?>		
												</div>
											</div>
											
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
														<i class="fa fa-backward bg-dark" ></i>
														<i class="sr-only">Previous</i>
												</a>
							
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
														<i class="fa fa-forward bg-dark" ></i>
														<i class="sr-only">Next</i>
												</a>
										</div>
								</div>
								<div class="col-lg-6 text-center">
									<label><font size="5px" color="red"><u>Details of Products Of Product</u></font></label><br>
									<div class="text-left ml-4">	
								<font size="4px"><label>*Cost Of Product:-</label>&nbsp&nbsp
									<label><?php echo $cost; ?></label><br>
									<label>*Type of Wood:-</label>&nbsp&nbsp
									<label><?php echo $wood; ?></label><br>
									<label>*Description of Product:-</label>&nbsp&nbsp<br>
									<label><?php echo $t1; ?></label>
								</font><br>
								<font size="4px"><b>Quantity</b></font>
								<?php echo "<form name='order' method='POST' action='productcommonpage.php?value1=$id &value2=$title'>";?>
								<select name="select" class="form-control">
												<option name="1" value="1">1</option>
												<option name="2" value="2">2</option>
												<option name="3" value="3">3</option>
												<option name="4" value="4">4</option>
												<option name="5" value="5">5</option>
												<option name="6" value="6">6</option>
												<option name="7" value="7">7</option>
												<option name="8" value="8">8</option>
												<option name="9" value="9">9</option>
												<option name="10" value="10">10</option>
												
								</select>
								<br>
								<div class="text-center">
									<input type="submit" name="Save" class="btn btn-primary" value="Save Quantity">
								</form>	
								</div>
								</div>
								<br>
								</div>
							</div>
				<!--row-->				
							<div class="row">
									<div class="col-lg-6 "></div>
									<div class="col-lg-3 text-center">	
						<?php
								echo "<form name='order' method='POST'>";
								
								echo"<button type='submit' name='addtocard' value='Add To Card' class='btn btn-primary btn-lg mr-4'><i class='fa fa-shopping-cart mr-2'></i>Add To Card</button>";
								echo "</form>";
						?>			</div>
									<div class="col-lg-3 text-center">
						<?php	
							if($Email!='')
							{	
						echo"<a href='addaddress.php?value1=$id & value2=$title & value3=$select' class='btn btn-primary btn-lg ml-4'><i class='fa fa-sign-in-alt mr-3'></i>Buy Now</a>";
							}
							else{
								$e="Please login your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
							}
						?>
									</div>		
							</div>
				
				<!--jumbortan--><br><br>
								<div class="jumbotron">
									<div class="row">
										<div class="col-lg-12 text-center">	
										<font size="5px"><b>Customer Questions & Answers</b></font><br><br>
										<font size="3px"><b>For More Info Call </b></font><br>
										<font color="red"><p><b>+91-9672277000</b><p></font>
										</div>	
									</div>
								</div>
						
											<?php
				
								$result=mysqli_query($conn,"select * from $title where name='$name' ");
								$n=mysqli_affected_rows($conn);
								for($i=0;$i<$n;)
								{
								echo "<div class='row'>";
								for($j=0;$j<4;$j++)
								{
									if($i==$n)
									{   break;     }
								echo "<div class='col-lg-4 text-center'>";
								echo "<br>";
								echo "<div class='card' >";
										$row = mysqli_fetch_array($result);
										 $photo=$row['photo1'];
									echo "<img src='$photo' class='card-img-top' height='200px' width='150px'>";
									echo "<div class='card-body'>";
										 $cost=$row['cost'];
										 $product_id=$row['product_id'];
										 $name1=$row['name'];
										 echo "<font size='4px'><b>";
										 echo "Product name&nbsp:&nbsp&nbsp&nbsp".$name1;
										 echo "<br>";
										 echo "Cost&nbsp:&nbsp&nbsp&nbsp".$cost;
										 echo "<br><br>";										
										 echo "<a href='productcommonpage.php?value1=$product_id & value2=$title' class='btn btn-primary'>See Full Details </a>";
										echo "</u></font>";
									
									echo "</div>";
									echo "</div>";
									echo "</div>";
									$i++;
								}
							
								}
								
							?>			
						
						
						
						
						
						
						
						
						</div>
						
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
