<?php
session_start();
error_reporting(0);
//connect to DBMS			
				$Email=$_SESSION['Email'];
				if($Email!=''){
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
						
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							"connect with server";
							}
								}
?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Order details</title>
			<!--link-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
					
</head>
<body>
		<!--navbar-->		
					<nav class="navbar navbar-expand-lg navbar-light bg-dark ">
							<font face="segoe script"size="3px"color="white">Salasar Art & Craft</font>
					</nav>
					
	<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Order Status</li>
								</ol>
						</div>
						<div class="container">
	<!--1row-->			
						<div class="row">
							<div class="col-lg-12 text-center">
								<label><font color="red"size="5px"face="segoe script"> <u>Customer Product Order </u></font> </label>
							</div>
						</div>

	<!--2row-->					
						<div class="row">
	
							<div class="col-lg-6 text-center">
								
								<table class="table table-striped">
										<font color="black" size="5px" face="segoe script"> New Order</font>	
											<font size="4px">
											<tr><th> Invoice No</th><th>Product Name</th> <th>Stage</th><th>view invoice</th>  </tr>
													<?php
												if($Email!=''){
												$query=mysqli_query($conn,"SELECT * FROM order_table where stage!='success' And email='$Email' ");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $invoice=$roa['Invoice_no'];
													echo "</td><td>";echo $name=$roa['name']; 
													echo "</td><td>";echo $stage=$roa['stage'];   
													echo "<form action='pdf.php?value=$invoice' method='POST' >";
													echo "</td><td>";echo "<input type='submit' name='View'  class='btn btn-primary' value='View'>"; echo "</a>";	
													echo "</form>";
													echo "</td></tr>";
													}
												}
												?>
											</font>
								</table>
							</div>
							
							<div class="col-lg-6 text-center">
											<label><font size="5px"face="segoe script"> <u> Old  Order </u></font> </label>
											<table class="table table-striped">
										<font size="4px">
											<tr><th> Invoice No</th><th>Product Name</th> <th>Stage</th><th>view invoice</th> </tr>
													<?php
													if($Email!=''){
											$query=mysqli_query($conn,"SELECT * FROM order_table where stage='success' AND  email='$Email' ");
													while($roa = mysqli_fetch_array($query)){
													echo "<tr><td>";echo $invoice=$roa['Invoice_no'];
													echo "</td><td>";echo $name=$roa['name']; 
													echo "</td><td>";echo $stage=$roa['stage'];
													echo "<form action='pdf.php?value=$invoice' method='POST' >";
													echo "</td><td>";echo "<input type='submit' name='View'  class='btn btn-primary' value='View'>";	
													echo "</form>";
													echo "</td></tr>";
													}
													}
												?>
											</font>
											</table>
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