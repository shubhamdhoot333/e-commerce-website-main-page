<?php
error_reporting(0);
session_start();
//connect to server
				$Email=$_SESSION['Email'];
				if($Email!=''){
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
				if(!$conn)
				{
					echo" not connect with server";
					echo " <br> ";
				}
				else 
				{
					"connect with server";
				}
				}
				else{
					$e="Please login Your account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
				}
//profile information			
				$Email=$_SESSION['Email'];
						if($Email!='')
						{
						$query="select * from customer1 where Email='$Email' ";
						$data=mysqli_query($conn,$query);
						$total=mysqli_fetch_assoc($data);	
						$Username=$total['Username'] ;
						$Age=$total['Age'];
						$Phone1=$total['Phone'];
						$Password=$total['Password'];
			// total order of all product
					$result9=mysqli_query($conn,"Select SUM(quantity)from order_table where email=' $Email' "); 
						while($rowz = mysqli_fetch_array($result9)){
						$totalproduct=$rowy['SUM(quantity)'];
						}
						if($totalproduct<=10)
						{
							$string="Normal";
						}else if($totalproduct<=20)
						{
							$string="medium";
						}else if($totalproduct<=50)
						{
							$string="high type";
						}else if($totalproduct<=100)
						{
							$string="silver";
						}else if($totalproduct<=500)
						{
							$string="gold";
						}
	//address information					
						$query1="select * from customera where Email='$Email' ";
						 $data=mysqli_query($conn,$query1);
						 $total=mysqli_fetch_assoc($data);
							    $Clientname=$total['Clientname'];
							    $Phone=$total['Phone'];
								$Pin_code=$total['Pin_code'];
						        $Home_Number=$total['Home_Number'];
						        $Colony=$total['Colony'];
								$City=$total['City'] ;
								$State=$total['State'];
								$Type=$total['Type'];	
		// total order of all product
						$resulta=mysqli_query($conn,"Select SUM(quantity)from order_table where email='$Email' "); 
						while($rowz = mysqli_fetch_array($resulta)){
						$t1=$rowz['SUM(quantity)'];
						}
		//successful deliverd
						$query2="SELECT SUM(quantity) AS tom FROM `order_table` WHERE stage ='success' AND email='$Email' ";
						$data1=mysqli_query($conn,$query2);
						$row= mysqli_fetch_assoc($data1);
						$t3 = $row['tom'];
						
		//working upon order and shipping
						$query1="SELECT SUM(quantity) AS toms FROM `order_table` WHERE stage IN('work in progress' , 'shipping') AND where email='$Email' ";
						$dat=mysqli_query($conn,$query1);
						$rowq= mysqli_fetch_assoc($dat);
						 $t2 = $rowq['toms'];
					}	
		
						
	
?>		
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Dashboard</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
							
</head>
<body>
			<!--1 navbar-->				
							<nav class="navbar navbar-expend-lg navbar-light bg-secondary ">
								<font face="segoe script"size="3px"color="white">Salasar Art & Craft</font>
							</nav>	
			<!--2 navbar-->	
							<nav class="navbar navbar-expand-lg navbar-dark bg-dark">			
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span><font face="segoe script" size="4px">Dashboard Menu</font>
								</button>	
									
								<div class="collapse navbar-collapse" id="navbarmenu">
									<ul class="nav nav-pills" id="myTab" role="tablist">
						<!--profile-->				
										<li class="nav-item">	
												<a class="nav-link mr-4 active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="true" >
												<font face="segoe script "size="4px" color="white"> User Profile</a></font>
										</li>
						<!--address-->			
										<li class="nav-item">
											<a class="nav-link mr-4 " id="managead-tab" data-toggle="tab" href="#managead" role="tab" aria-controls="managead" aria-selected="true">
										     	<font face="segoe script"size="4px" color="white">Address Record</a></font>
										</li>
						<!--customer type-->			
										<li class="nav-item">
											<a class="nav-link mr-4 " id="customer-tab" data-toggle="tab" href="#customer"  role="tab" aria-controls="customer" aria-selected="true">
											     <font face="segoe script"size="4px" color="white">Customer Type</a></font>
										</li>
						<!--selling point-->				
										<li class="nav-item">
											<a class="nav-link mr-4 "id="point-tab" data-toggle="tab" href="#point" role="tab" aria-controls="point"    aria-selected="true">
											     <font face="segoe script"size="4px" color="white">Selling Point</a></font>
										</li>
						<!--product report-->				
										<li class="nav-item">
											<a class="nav-link mr-4 " id="report-tab" data-toggle="tab" href="#report" role="tab" aria-controls="report" aria-selected="true">
												<font face="segoe script"size="4px" color="white">Product Report</a></font>
										</li>
						<!--profile summary-->				
										<li class="nav-item">
											<a class="nav-link mr-4 " id="summary-tab" data-toggle="tab" href="#summary"  role="tab" aria-controls="summary" aria-selected="true">
											   <font face="segoe script"size="4px" color="white">Profile Summary</a></font>
										</li>
									</ul>	
								</div>	
							</nav>
						<br>	
				
				<div class="tab-content" id="myTabContent">
	<!-- profile container--><div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">					
								<div class="container">
	<!--1row-->			<br><br>
					<div class="row">
							<div class="col-lg-12 text-center">
									<font face="segoe script" color="red" size="5px"><b><u>Customer Personal Information</u></b></font>	
							</div>
					</div>
	<!--2row-->		<br>	
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-3 bg-dark text-center">
						<font color="white"><h5 class="h5">Username :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">						
						<h5 class="h5"><?php echo $Username ?></font></h5> 
						</div>
						<div class="col-lg-3">
						</div>
					</div>
	<!--3row-->	<br>
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-3 bg-dark text-center">	
							<font color="white"><h5 class="h5">Age :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">
							<h5 class="h5"><?php echo $Age ?></font></h5>
						</div>
						<div class="col-lg-3"></div>
					</div>
	<!--4row-->	<br>
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-3 bg-dark text-center">
							<font color="white"><h5 class="h5">Phone Number :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">
						<h5 class="h5"><?php echo $Phone1 ?></font></h5>
						</div>
						<div class="col-lg-3"></div>
					</div>
	<!--5row-->	<br>		
					<div class="row">
						<div class="col-lg-3">
						</div>
						<div class="col-lg-3 bg-dark text-center">
							<font color="white"><h5 class="h5">Password :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">
							<h5 class="h5"><?php echo $Password ?></font></h5>
						</div>
						<div class="col-lg-3"></div>
					</div>
	<!--6row-->	<br>	
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 bg-dark text-center">
							<font color="white"><h5 class="h5">Email Address :</h5></font>
						</div>
						<div class="col-lg-3"></div>
					</div>
	<!--7row-->			
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 bg-secondary text-center">
							<h5 class="h5"><font color="white"><?php echo $Email ?></font></h5>
						</div>
						<div class="col-lg-3"></div>
					</div>		
						</div>
							</div>

	<!--address container-->
					<div class="tab-pane fade" id="managead" role="tabpanel" aria-labelledby="managead">			
					<div class="container">
		<!--1row-->	<br>		
					<div class="row">
							<div class="col-lg-12 text-center">
									<font face="segoe script" color="red" size="5px"><b><u>Customer Address Information</u></b></font>	
							</div>
					</div>
		<!--2row-->	<br>
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-3 bg-dark text-center">
								<font size="4px" color="white">Address type: <?php echo $Type; ?></font>
							</div>
							<div class="col-lg-3 bg-secondary text-center">													
								<font size="4px" color="white">	State:<?php echo $State;?></font>
							</div>
							<div class="col-lg-3"></div>
						</div>
		<!--3row-->		<br>		
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-3 bg-dark text-center">
								<font color="white" size="4px">Clientname:<?php echo $Clientname;  ?></font>
							</div>
							<div class="col-lg-3 bg-secondary text-center"> 
								<font color="white" size="4px">	City: <?php echo $City; ?></font>
							</div>
							<div class="col-lg-3"></div>
						</div>
		<!--4row-->		<br>		
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-3 bg-dark text-center">										
									<font color="white" size="4px">Phone Number:  <?php echo $Phone; ?></font>
							</div>
							<div class="col-lg-3 bg-secondary text-center">
									<font color="white" size="4px">Colony :        <?php echo $Colony; ?></font>
							</div>
							<div class="col-3"></div>
						</div>
		<!--5row-->		<br>	
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-3 bg-dark text-center">
								<font color="white" size="4px">Pincode: <?php echo $Pin_code;    ?></font>
							</div>
							<div class="col-lg-3 bg-secondary text-center">
								<font color="white" size="4px">House no: <?php echo $Home_Number; ?></font>
							</div>
							<div class="col-3"></div>
						</div>	
						<br>
					</div>
					</div>
	<!--customer type-->	
							<div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer">
								<div class="container">
								 <br>
			<!--1row-->					
								<div class="row">
									<div class="col-lg-12 text-center"><font color="red" face="segoe script" size="6px"><b><u>Type of Customer</u></b></font>
									<br><font size="4px"><b><u><?php echo $string; ?></u></b></font></div>
								</div>
			<!--2row-->			
								 <br>	
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
									<font color="white" size="5px"><b>
										1. Order 0 to 10 <br></font></b>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										<font color="white" size="5px"><b>
										*   Normal  Type<br></font></b>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--3 row-->		
								 <br>		
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										<font color="white" size="5px"><b>
										2. Order 10 to 20 <br></font></b>
									</div>	
									<div class="col-lg-3 text-center  bg-secondary">
									<font color="white" size="5px"><b>	*   Medium  Type<br></b></font>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--4 row-->		
								<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										<font color="white" size="5px"><b>4. Order 20 to 50<br></b></font>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										<font color="white" size="5px"><b>*  high type<br></b></font>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--5 row-->		
								<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										<font color="white" size="5px"><b>5. Order  50 to 100<br></b></font>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										<font color="white" size="5px"><b>*   Silver  Type<br></b></font> 
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--6 row-->		
								<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
									<font color="white" size="5px"><b>6. Order 100 to 500<br></b></font>	
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										<font color="white" size="5px"><b>*  Gold    Type <br></b></font>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--7row-->			<br>	
								<div class="row">
									<div class="col-lg-12 text-center">
											<font color="black" size="4px">
											<b>*These order in not include the return/cancel order(product).</b> 
											</font>	
									</div>
								</div>
								</div>
								</div>
	<!--selling point-->
							<div class="tab-pane fade" id="point" role="tabpanel" aria-labelledby="point">
								<div class="container">		
								<br>
								<div class="row">
			<!--1row-->				<div class="col-lg-12 text-center"> <font color="red"  face="segoe script" size="5px" ><u><b>Selling Discount</b></u></font></div>
								</div><br>
			<!--2row-->			<font color="white" size="4px"></b>	
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center  bg-dark">
										1. Order 500 to 1000 <br>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										* Given 1% Discount <br>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--3 row-->		<br>		
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										2. Order 1000 to 5000 <br>
									</div>	
									<div class="col-lg-3 text-center  bg-secondary">
										* Given 2% Discount <br>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--4 row-->		<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										4. Order 5000 to 10000<br>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										* Given 5% Discount <br>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--5 row-->		<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										5. Order  10,000 to 50,000<br>
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										* Given 7% Discount<br> 
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--7 row-->		<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										6. Order 50,000 to 1,00,000<br>	
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										* Given 10% Discount <br>
									</div>
									<div class="col-lg-3"></div>
								</div>
			<!--8 row-->		<br>
								<div class="row">
									<div class="col-lg-3"></div>
									<div class="col-lg-3 text-center bg-dark">
										7. Order 1,00,000 to up <br>	
									</div>
									<div class="col-lg-3 text-center bg-secondary">
										* Given 15% Discount<br>
									</div>
									<div class="col-lg-3"></div>
								</div>
								</b></font><br>
							</div>	
							</div>
	<!--Product report-->
							<div class="tab-pane fade" id="report" role="tabpanel" aria-labelledby="report">
									<div class="container">
				<!--1row-->			
										<div class="row">
											<div class="col-lg-12 text-center">
										<table class="table table-striped">
											<font size="4px">
										<label><tr><th> Product name</th><th>Prise</th><th>Quantity</th><th>Stage</th></tr></label>	
										<?php
												if($Email!=''){
												$query3=mysqli_query($conn,"SELECT * FROM order_table where email='$Email'");
													while($roa = mysqli_fetch_array($query3)){
													echo "<tr><td>";echo $name=$roa['name'];
													echo "</td><td>";echo $cost=$roa['cost']; 
													echo "</td><td>";echo $quantity=$roa['quantity'];
													echo "</td><td>";echo $stage=$roa['stage'];		
													echo "</td></tr>";
													}
												}
										?>
											</font>
										</table>
									</div>
										</div>
									</div>
							</div>							
	<!--profile summary-->						
							<div class="tab-pane fade" id="summary" role="tabpanel" aria-labelledby="summary">
								<div class="container">
				<!--1row -->	
									<div class=" row">
										<div class="col-lg-12 text-center">
											<font color="red"  face="segoe script" size="5px" ><u><b>Profile Summary</b></u></font>
										</div>
									</div>
				<!--2row-->			<br>	
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white" size="4px">
												<b>Username :</b>
												</font>
										</div>
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white" size="4px">
												<b><?php echo $Username ; ?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
					<!--3row-->					
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white" size="4px">
													<b>Customer Type</b>
												</font>
										</div>
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white" size="4px">
											<b><?php echo $string; ?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
				<!--4row-->					
									<div class="row">
										<div class="col-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white" size="4px">
													<b>Address</b>
												</font>
										</div>	
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white" size="4px">
											<b><?php echo $City; ?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
				<!--5px-->				
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white">
													<b>Total Order given</b>
												</font>
										</div>
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white"  size="4px">
											<b><?php echo $t1; ?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
				<!--6row-->				
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white" size="4px">
										<b>successful deliverd </b>
												</font>
										</div>
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white"size="4px">
											<b><?php echo $t3;?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
				<!--7row-->				
									<div class="row">
										<div class="col-lg-3"></div>
										<div class="col-lg-3 bg-dark text-center">
									           <font color="white" size="4px">
										<b>working upon order </b>
												</font>
										</div>
										<div class="col-lg-3 bg-secondary text-center">						
											  <font color="white"size="4px">
											<b><?php echo $t2;?></b>
									          </font>	
										</div>
										<div class="col-lg-3"></div>
									</div>
									<br>
								</div>
							</div>
				</div><br><br>
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