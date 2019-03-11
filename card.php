<?php 
session_start();
error_reporting(0);
$Email=$_SESSION['Email'];

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
            <title>Card</title>
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
									<li class="breadcrumb-item active" aria-current="page">Add To Card </li>
								</ol>
						</div>
		<!--jumbotrom-->					
							<div class="jumbotron">
								<div class="container">		
<?php						
			//check item add or not
				$query5=mysqli_query($conn,"SELECT * FROM addtocard where email='$Email'");
											$row1 = mysqli_affected_rows($conn);		
												if($row1!=0)
													{
			//print card into database--	
													for($i=0;$i<$row1;)
													{	
														echo "<div class='row'>";
														for($j=0;$j<3;$j++)
														{
															if($i==$row1)
																{   break;     }
															$roa = mysqli_fetch_array($query5);
															$name5 = $roa['productname']; 
															$cost5 = $roa['cost'];   
															$pid1 = $roa['product_id']; 
															$ti1 = $roa['title'];
															$photo = $roa['photo1'];		
															
															echo "<div class='col-lg-4 text-center'>";
														echo "<div class='card' >";
														echo "<form method='POST' action='card.php?value4=$pid1 & value5=$ti1' enctype='multipart/form-data'>";
																echo "<img src='$photo' class='card-img-top' height='200px' width='150px'>";
															echo "<div class='card-body'>";
															echo "<font size='4px'><b>";
																$ti1;
																$pid1;
														echo "Product name&nbsp:&nbsp&nbsp&nbsp".$name5;
															echo "<br>";
														echo "Cost&nbsp:&nbsp&nbsp&nbsp".$cost5;
														echo "<br><br>";										
														echo "<a href='productcommonpage.php?value1=$pid1 & value2=$ti1' class='btn btn-primary'>See product</a><br><br>";
														echo "<input type='submit' name='Cancel' value='Cancel' class='btn btn-primary'>";
														echo "</form>";		
						       						  
																				
													echo "</font>";
											echo "</div>";
											echo "</div><br>";
								echo "</div></b>";
								$i++;
									  }
							echo "</div><br>";
								}
						if(isset($_REQUEST['Cancel']))
						{		
						 $n1=$_GET['value4'];
						 $n2=$_GET['value5'];	
						 $Email=$_SESSION['Email'];					
					
						if(mysqli_query($conn,"DELETE FROM addtocard WHERE title='$n2' and product_id='$n1' and email='$Email' "))
						{  
						echo "yes";
						}
						else 
						{
						echo mysqli_error($conn);
					    }
						}
						
						}
						else
						{	
			//	<!--2row--->	
									echo "<div class='row'>";	
										echo"<div class='col-lg-4'></div>";
										echo "<div class='col-lg-4 text-center'>";
											echo "<font color='blue' class='display-4'>";
											echo "<i class='fa fa-cart-plus fa-lg'></i>";
											echo "</font>";
										echo "</div>";
										echo "<div class='col-4'></div>";
									echo "</div>";
			//	<!--3row--->
										echo"<br>";			
									echo"<div class='row'>";	
										echo"<div class='col-lg-4'></div>";
										echo"<div class='col-lg-4 text-center'>";
											echo "<font color='black'>";
											echo "<label>";
											echo "<h4 class='h4'> Checkout card</h4>";	
											echo "</label>";
											echo "</font>";
										echo"</div>";
										echo"<div class='col-lg-4'></div>";
									echo"</div>";
			//<!--4row--->			
									echo "<div class='row'>";	
										echo"<div class='col-lg-4'></div>";
										echo"<div class='col-lg-4 text-center'>";
											echo"<font color='black'>";
											echo"<label>";
											echo"<h5 class='h5'> Your Shipping card is empty!</h5>";	
											echo"</label>";
											echo"</font>";
										echo"</div>";
										echo"<div class='col-lg-4'></div>";
									echo "</div>";
			//<!--5row--->			
									echo"<div class='row'>";	
										echo"<div class='col-lg-4'></div>";
										echo"<div class='col-lg-4 text-center'>";
												echo "<font color='black'>";
												echo"<a  class='btn btn-primary btn-block btn-lg' href='main_page.php'>";
												echo "<font color='white'><b>CONTINUE SHOPPING</b></font></a>";
												echo"</font>";
										echo"</div>";
										echo"<div class='col-lg-4'></div>";
									echo"</div>";
		//					
						
						}			
?>
								<br><br>
								</div>
								
						
								</div>
								
						<footer>
								<div class="container">		
						<!--5 row-->			
									<div class="row">
										<div class="col-lg-3 text-center">
									<label>
										<i class="fa fa-lock fa-lg"></i>
										Secure payment
									</label>
										</div>
										
										<div class="col-lg-3 text-center">
									<label>
										<i class="fa fa-star fa-lg"></i>
										Original product
									</label>
										</div>
										<div class="col-lg-3 text-center">
									<label>
										<i class="fa fa-recycle fa-lg"></i>
										Free & Easy return
									</label>
										</div>
										<div class="col-lg-3 text-center">
									<label>
										<i class="fa fa-sun fa-lg"></i>
											100% Buyer protection	
									</label>
										</div>
									</div>		
				<!--row-->
								<div class="row p-1">
									<div class="col-12 bg-primary">
										<center><label><h5><font color="white">We accepted  Payment  by</font></h5></label></center>
									</div>
								</div>
							
								<div class="container">				
			<!--row-->				<div class="row"> 
										
										<div class="col-lg-3 text-center">
											<label>
											<i class="fa fa-money-bill-alt fa-lg "></i>
											Paytm
											</label>
										</div>	
										
										<div class="col-lg-3 text-center">
											<label>
											<i class="fa fa-credit-card fa-lg "></i>
											Debit card
											</label>
										</div>
										
										<div class="col-lg-3 text-center">
											<label>
											<i class="fa fa-credit-card fa-lg "></i>
											Credit card
											</label>
										</div>
									
										<div class="col-lg-3 text-center">
											<label>
											<i class="fa fa-university fa-lg "></i>
											Net Banking
											</label>
										</div>
									</div>	
								</div>
								</div>
						</footer>
						
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
<?php
?>						