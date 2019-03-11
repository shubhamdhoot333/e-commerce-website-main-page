<?php
session_start();
error_reporting(0);
		//connect to datatbase		
				$Email=$_SESSION['Email'];
				if($Email!=''){
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						$e="Not Connect with server";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								
						}
					else 
						{
						 "connect with server";
						
						}
	//data code		
					if(isset($_POST['Address']))
					{
	
	//check value not empty		
						if($_POST['Clientname']=="" or $_POST['Phone']=="" or $_POST['Pin_code']=="" or $_POST['Home_Number']=="" or $_POST['Colony']=="" or $_POST['City']==""  or $_POST['State']=="" or $_POST['Type']=="" )
							{
							die;
							}
						$Clientname=$_POST['Clientname'];
						$Phone=$_POST['Phone'];
						$Pin_code=$_POST['Pin_code'];
						$Home_Number=$_POST['Home_Number'];
						$Colony=$_POST['Colony'];
						$City=$_POST['City'];
						$State=$_POST['State'];
						$Type=$_POST['Type'];
	//find length of all variable	
					$C_length=strlen($Clientname);
					$P_length=strlen($Phone);
					$Pin_length=strlen($Pin_code);
					$H_length=strlen($Home_Number);
					$Co_length=strlen($Colony);
					$City_length=strlen($City);
					$S_length=strlen($State);
					$T_length=strlen($Type);
	//check clientname length						
					if($C_length>20)
						{
							$e="username must be 20 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check phone number length						
					if($P_length>10)
						{
						$e="Phone number must be 10 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check pin code length						
					if($Pin_length>6)
						{

						$e="Pin number must be 6 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;

						}
	//check home number length						
					if($H_length>30)
						{
						$e="Home number must be 30 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;


						}
	//check colony length						
					if($Co_length>30)
						{
						$e="Colony  name  must be 30  digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;


						}
	//check city length						
					if($City_length>30)
						{
						$e="city name must be 30 digit  ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check state length						
					if($S_length>20)
						{
						$e="state must be 20 digit  ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check type length						
					if($T_length>10)
						{
						$e="type(home /office) must be 10 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}	
				
				}
					$query1="select * from customera where Email='$Email' ";
								mysqli_query($conn,$query1);
								$n= mysqli_affected_rows($conn);
								if($n!=0) 
								{
									$query2="UPDATE customera 
									SET Clientname='$Clientname', Phone='$Phone', Pin_code='$Pin_code', Home_Number='$Home_Number', Colony='$Colony', City='$City' ,State='$State', Type='$Type' 
									WHERE Email='$Email'";
	//run sql query										
								}
								else
								{
	//update sql querry				
									$query2="INSERT INTO customera(Email,Clientname,Phone,Pin_code,Home_Number,Colony,City,State,Type) 
								VALUES('$Email','$Clientname','$Phone','$Pin_code','$Home_Number','$Colony','$City','$State','$Type')"; 				
									
								}
							
						$query3="select * from customera where Email='$Email' ";
						 $data=mysqli_query($conn,$query3);
						 $total=mysqli_fetch_assoc($data);
						$Clientname=$total['Clientname'];
						$Phone=$total['Phone'];
						$Pin_code=$total['Pin_code'];
						$Home_Number=$total['Home_Number'];
						$Colony=$total['Colony'];
						$City=$total['City'] ;
						$State=$total['State'];
						$Type=$total['Type'];	
						if(mysqli_query($conn,$query2))
							{  
							}
							else 
							{
							echo mysqli_error();
							}
						       								
				mysqli_close($conn);
				}
	?>	
				
				
				

<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Manage Address</title>
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
						<nav class="navbar navbar-expend-lg navbar-light bg-secondary">
								<font face="segoe script"size="3px"color="white" >Salasar Art & Craft</font>
						</nav>
		<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Manage Address</li>
								</ol>
						</div>
		<!--container-->			
						<div class="container">
		<!--1row-->		<br>		
						<div class="row">
							<div class="col-lg-12 text-center">						
								<font  face="segoe script" color="red" size="5px">Here You Can Add Your Address </font>
							</div>
						</div>
		<!--2row-->			<br>
							<div class="row">
		<!--col-->					
							<div class="col-lg-6 text-center">
			<!--use 1 accordion-->					
							<div class="accordion" id="accordionExample">
								<form method="POST" action="manageaddress.php" enctype="multipart/form-data">
			<!--1st card-->			<div class="card">
		<!--header-->					<div class="card-header bg-dark" id="headingOne">
											<button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<font color="white" size="4px">Add New Address</font>
											</button>
										</div>
			
			<!--body-->					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
											<div class="card-body">
												<input type="text" class="form-control disable" value="India" disabled><br>
												<input type="text" class="form-control" name="Clientname" placeholder="Enter your clientname" required><br> 
												<input type="text" class="form-control" name="Phone" placeholder="Enter your Phone number without prefixes"required><br>
												<input type="text" class="form-control" name="Pin_code" placeholder="(0 to 9) 6 digit pincode"required><br>
												<input type="text" class="form-control" name="Home_Number" placeholder="Flat / house No./ Floor / Building"required><br>
												<input type="text" class="form-control" name="Colony" placeholder="Colony /Street / Locality"required><br>
												<input type="text" class="form-control" name="City" placeholder="City"required><br>
												<input type="text" class="form-control" name="State" placeholder="State"required><br>
													<h5 class="h5 text-center">Select Address type</h5>
												<input type="text" class="form-control" name="Type" placeholder="Home/Office"required><br>	
												<input type="submit" class="btn btn-lg btn-block btn-primary" name="Address" value="Add Address">
											</div>
										</div>
									</div>
								</form>
								</div>
								</div>							
			<!--use 2 accordion--><br>
		<!--col-->					
							<div class="col-lg-6 text-center">
							<div class="accordion" id="accordionExample1">
								<!--card-->					
									<div class="card">
				<!--header-->	
									<div class="card-header bg-dark" id="headingTwo">
										<button class="btn btn-link  "  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<font color="white" size="4px">Old Address</font>
										</button>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample1">
				<!--body-->					
										<div class="card-body">
											<table class="table table-striped">
												<tr><td><label>State:</label></td><td><?php echo $State; ?></td></tr> 
												<tr><td><label>Clientname:</label></td><td><?php echo $Clientname;  ?></td></tr>
												<tr><td><label>City:</label></td><td><?php echo $City ;  ?></td></tr>
												<tr><td><label>	Phone Number:</label></td><td><?php echo $Phone;  ?></td></tr>
												<tr><td><label>colony</label></td><td><?php echo $Colony; ?></td></tr>
												<tr><td><label>Pincode:</label></td><td><?php echo $Pin_code;  ?></td></tr>
												<tr><td><label>House no:</label></td><td><?php echo $Home_Number; ?></td></tr>
												<tr><td><label>Address type:</label></td><td><?php echo $Type;?></td></tr>
											</table>
										</div>
									</div>
									</div>
								</div>
							</div>	
							</div>
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