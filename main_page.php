<?php
session_start();
error_reporting(0);
$Email=$_SESSION['Email'];
include 'mainpagephp.php';
?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Main Page </title>
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
						<nav class="navbar navbar-expend-lg navbar-light bg-secondary ">
								<font face="segoe script"size="4px"color="white">Salasar Art & Craft</font>
								<div>
		<!--shopping-cart-->		<?php echo"<a href='card.php?value=1'><font color='white' size='4px' class='mr-3'><i class='fa fa-shopping-cart'></font></i></a>";?>
		<!--notification-->			<a href="notification.php"><font color="white" size="4px" class="mr-3"><i class="fa fa-bell "></font></i></a>
		<!--contect-->				<a href="search.php"><font color="white" size="4px" class="mr-3"><i class="fa fa-search"></font></i></a>
								</div>		
						</nav>
		<!--2 navbar-->	
						<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">			
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
									<font face="segoe script" size="3px">Menu</font>
								</button>
							<div class="collapse navbar-collapse" id="navbarmenu">
								<div class="navbar-nav">
									<div class="dropdown">
	<!--home-->									
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="homemenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Home</b></font>
										</a>
	<!--1home menu--->											
							<div class="dropdown-menu text-justify " aria-labelledby="homemenu">
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="dashboard.php">Dashboard</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="offer.php">Offer</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item " href="orderstatus.php">Order Detail</a>
								</div>
								
								<div class="p-2 border-bottom border-dark ">
										<a class="dropdown-item" href="about.php">About</a>
								</div>
								
							</div>
									</div>
	<!--2setting-->					
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Setting</b></font>
										</a>
									
	<!--account setting-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--l&s-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="L&S.php">Login & Security</a> 
											</div>
						<!--manage address-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="manageaddress.php">Manage Address</a>
											</div>
						<!--review-->
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="rating.php">Reviews</a>
											</div>
						<!--signout-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="signout.php">Sign Out</a>
											</div>
										</div>
									</div>
	<!--3sofas-->					
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Sofas</b></font>
										</a>
									
	<!--sofas item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--fabric sofas-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=fabric sofas & value2=sofas">Fabric sofas</a> 
											</div>
						<!--Wooden sofas-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=wooden sofas & value2=sofas">Wooden sofas</a>
											</div>
						<!--3 seater sofas-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=3 seater sofas & value2=sofas">3 seater sofas</a>
											</div>
						<!--2 seater sofas-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=2 seater sofas & value2=sofas">2 seater sofas</a>
											</div>
						<!--leather sofas-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=leather sofas & value2=sofas">leather sofas</a>
											</div>
						<!--L shape sofas-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=l shape sofas & value2=sofas">L shape sofas</a>
											</div>
						<!--sofas cum bed-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=sofas cum bed & value2=sofas">sofas cum bed</a>
											</div>

									</div>
	<!--close-->			</div>
	<!--4Living-->											
									<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Living</b></font>
										</a>
									
	<!--living item-->				<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tv unit-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=tv unit & value2=otheritem">TV unit</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=living room table & value2=table1">Tables</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=living room chair & value2=chair">Chairs</a>
											</div>
						<!--divans-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=divans & value2=otheritem">Divans</a>
											</div>
						<!--bookshelves-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=book shelve & value2=bookshelve">Bookshelves</a>
											</div>
						<!--side board-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=side board & value2=sideboard">Side Board</a>
											</div>
						<!--storage-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=storage & value2=storage">Storage</a>
											</div>

									</div>
				<!--close-->	</div>
	<!--5bedroomitem-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Bedroom</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1= bed room beds & value2=beds">Beds</a> 
											</div>
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=bed room table & value2=table1">Tables</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=bed room chair & value2=chair">Chairs</a>
											</div>
						<!--wardrobes-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1= bed room wardrobes & value2=wardrobes">wardrobes</a>
											</div>
						<!--storage-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=bed room storage & value2=storage">Storage</a>
											</div>
						<!--box-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=bed room box & value2=storage">Box</a>
											</div>
									</div>
				<!--close-->	</div>
				
	<!--6Dining-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Dining</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=dining room table & value2=table1"> Dining Tables</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=dining room chair & value2=chair"> Dining Chairs</a>
											</div>
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=kitchen cabinate & value2=otheritem">Kitchen Cabinate</a> 
											</div>
						<!--wardrobes-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=kitchen trolley & value2=otheritem">Kitchen trolley</a>
											</div>
						<!--storage-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=bathroom cabinate & value2=otheritem">Bathroom cabinate</a>
											</div>
						<!--box-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=bar item & value2=otheritem">Bar item</a>
											</div>
									</div>
				<!--close-->	</div>
							
	<!--7Kids-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Kids</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--tables-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=kids table & value2=table1"> Kids Tables</a>
											</div>
						<!--chairs-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=kids chairs  & value2=chair">Kids Chairs</a>
											</div>
						<!--beds-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=kids room bed & value2=beds">kids beds</a> 
											</div>
						<!--table-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=study table & value2=table1">Study table</a>
											</div>
						<!--book shelve-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=kids room book shelve & value2=bookshelve">Book shelves</a>
											</div>
						<!--computer table-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=computer table & value2=table1">computer table</a>
											</div>
									</div>
				<!--close-->	</div>
								
	<!--8Decors-->
								<div class="dropdown">
										<a class="nav-item nav-link mr-4 dropdown-toggle" href="#"id="dropdownsetting" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<font face="segoe script" size="4px" color="white"><b>Decors</b></font>
										</a>
									<div class="dropdown-menu" aria-labelledby="dropdownsetting">
						<!--lamp-->					
											<div class="p-2 border-bottom border-dark">
												<a class="dropdown-item" href="common.php?value1=Lamp and lighting & value2=decor">Lamp and lighting</a>
											</div>
						<!--fream-->									
											<div class="p-2 border-bottom border-dark ">		
												<a class="dropdown-item" href="common.php?value1=photo fream & value2=decor">Photo fream</a>
											</div>
						<!--flower-->					
											<div class="p-2 border-bottom border-dark ">
												<a class="dropdown-item" href="common.php?value1=flower & value2=decor">Flower</a> 
											</div>
						<!--mirror-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=mirror fream & value2=decor">Mirror Fream</a>
											</div>
						<!--Garden-->					
											<div class="p-2 border-bottom border-dark">
													<a class="dropdown-item" href="common.php?value1=garden furniture & value2=decor">Garden furniture</a>
											</div>
						<!--Balcony-->					
											<div class="p-2 border-bottom border-dark ">
													<a class="dropdown-item" href="common.php?value1=balcony furniture & value2=decor">Balcony furniture</a>
											</div>
									</div>
				<!--close-->	</div>
								</div>
							</div>	
								<?php 
									if($Email=='')	
									{		
										echo "<div>";
										echo "<a href='login.php'><font color='white' size='4px' class='mr-3'><i class='fa fa-user fa-lg fa-fw'></i>Login</font></i></a>";
										echo "</div>";	
									}
									else
									{
										 $result=mysqli_query($conn, "select * from  customer1  where Email like '$Email' ");
										$total=mysqli_fetch_assoc($result);
										$Username=$total['Username'];
										echo "<label><font size='4px' color='white'><u>";
										echo "Welcome &nbsp" .$Username;
										echo "</font></u></label>";
									}
									?>
						</nav>
				<br>
	<!--3 slide show-->					
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
							<!--indicator-->			
											<ol class="carousel-indicators">
												<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
												<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
											</ol>
											<?php
										 $result=mysqli_query($conn, "select * from  sliderimage  where id='2' ");
										$total=mysqli_fetch_assoc($result);
									 $p1=$total['photo1'];
									 $p2=$total['photo2'];
									 $p3=$total['photo3'];
								
											?>
										
											
											<div class="carousel-inner">
												<div class="carousel-item active">
													<center><img class="d-block" src=" <?php echo $p1; ?> " height="70%" width="70%"  alt="First slide"></center>
												</div>
											
												<div class="carousel-item">
														<center><img class="d-block" src="<?php echo $p2; ?>" height="70%" width="70%"  alt="First slide"></center>
												</div>
							
												<div class="carousel-item">
														<center><img class="d-block" src="<?php echo $p3; ?>" height="70%" width="70%"  alt="First slide"></center>
												</div>
											</div>
											
												<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
													<h2 class="h2"><i class="fa fa-arrow-circle-left bg-dark" ></i></h2>
														<i class="sr-only">Previous</i>
												</a>
							
												<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
														<h2 class="h2"><i class="fa fa-arrow-circle-right bg-dark" ></i></h2>
														<i class="sr-only">Next</i>
												</a>
								</div>
	<!--4 icon and item-->	
						<br><br>
						<div class="container">
							<div class="jumbotron">
		<!--1 row-->			
							<div class="row">
								<div class="col-12 mb-4 text-center">
									<h4 class="h4"><u>Product Categories</u></h4>
								</div>
							</div>							
		<!--2row-->						
							<div class="row">
					<!--sofa-->		
							<div class="col-3 text-center border-right  border-dark">
								<font size="10px">
									<i class="fa fa-couch" data-toggle="modal" data-target="#exampleModal"></i>
								</font><br>
									<label>Sofas</label>
							</div>
					<!--beds-->		
							<div class="col-3 text-center border-right  border-dark">
								<font size="10px">
									<i class="fa fa-bed" data-toggle="modal" data-target="#exampleModalbed"></i>
								</font><br>
									<label>Beds</label>
							</div>
					<!--Chairs-->		
							<div class="col-3 text-center border-right  border-dark">
								<font size="10px">
									<i class="fa fa-chair" data-toggle="modal" data-target="#exampleModalchair"></i>
								</font><br>
								<label>Chairs</label>
							</div>
					<!--storage-->		
							<div class="col-3 text-center">
								<font size="10px" data-toggle="modal" data-target="#exampleModalstorage">
									<i class="fa fa-archive"></i>
								</font><br>
								<label>Storage</label>
							</div>
							
							</div>
							<hr>
		<!--3 row-->				
							<div class="row">
			<!--decor-->
								<div class="col-3 text-center border-right border-dark">
									<font size="10px">
										<i class="fa fa-smile-wink" data-toggle="modal" data-target="#exampleModaldecor"></i>
									</font><br>
									<label>Decor</label>
								</div>						
			<!--bulk furniture-->						
								<div class="col-3 text-center border-right border-dark">
									<font size="10px">
										<i class="fa fa-door-closed" data-toggle="modal" data-target="#exampleModalbulk"></i>
									</font><br>
									<label>Bulk furniture</label>
								</div>	
			<!--Table-->					
								<div class="col-3 text-center border-right border-dark">
									<font size="10px">
										<i class="fa fa-cube" data-toggle="modal" data-target="#exampleModaltable"></i>
									</font><br>
									<label>Table</label>
								</div>
			<!--other-->
								<div class="col-3 text-center">
									<font size="10px">
										<i class="fa fa-bars" data-toggle="modal" data-target="#exampleModalother"></i>
									</font><br>
									<label>Other</label>
								</div>		
							</div>
							
<!--jumbotron close-->		</div>
		<!--sofas model-->			
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
							<!--header-->			
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Sofas</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
							<!--body-->			
										<div class="modal-body">
							<!--row-->					
										<div class="row">			
											  <div class="col-lg-6">
												<ol>
														<h5><label><u>SOFA SETS</u></label></h5>
													<li><a  class="p-2" href="common.php?value1=fabric sofas & value2=sofas">Fabric Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=wooden sofas & value2=sofas">Wooden Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=3 seater sofas & value2=sofas">3 Seater Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=2 seater sofas & value2=sofas">2 Seater Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=leather sofas & value2=sofas">Leather Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=l shaped corner sofas & value2=sofas">L shaped corner Sofas</a></li>
													<li><a  class="p-2" href="common.php?value1=chesterfield  sofas & value2=sofas">Chesterfield Sofas</a></li>
													<li><a  class="p-2" href=" common.php?value1=futons  sofas & value2=sofas">Futons</a></li>
												</ol>
											  </div>
												
												<div class="col-lg-6">	
													<ol>	
														<h5><label><u>SOFA CUM BED</u></label></h5>
														<li><a  class="p-2" href="common.php?value1=wooden sofas cum beds & value2=sofas">Wooden sofa Cum Beds</a></li>
														<li><a  class="p-2" href="common.php?value1=fabric sofas cum beds & value2=sofas">Fabric sofa Cum Beds</a></li>
														<li><a  class="p-2" href="common.php?value1= sofas cum beds & value2=sofas">Sofa Cum Beds</a></li>
													</ol>
												</div>
										</div>
										</div>
							<!--footer-->			
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
		<!--sofa model close-->
						
			<!--beds model-->			
							<div class="modal fade" id="exampleModalbed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
							<!--header-->			
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel1">BEDS</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
							<!--body-->				
									<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-6">
												<ol>
												<h5><label><u>Beds</u></label></h5>
													<li><a  class="p-2" href="common.php?value1=queen size beds & value2=beds">Queen Size Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=king size beds & value2=beds">King Size Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=single beds & value2=beds">Single Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=hydraulic storage beds & value2=beds">Hydraulic Storage Bed</a></li>
													<li><a  class="p-2" href="common.php?value1=unholstered beds & value2=beds">Upholstered Bed</a></li>
													<li><a  class="p-2" href="common.php?value1=sofa cum beds & value2=beds">Sofa cum Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=trundle beds & value2=beds">Trundle Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=double beds & value2=beds">Double Bed</a></li>
													<li><a  class="p-2" href="common.php?value1=poster beds & value2=beds">Poster Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=divan beds & value2=beds">Divan Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=kids beds & value2=beds">Kids Beds</a></li>
													<li><a  class="p-2" href="common.php?value1=bunk beds & value2=beds">Bunk Beds</a></li>
												</ol>
												</div>
												
												<div class="col-lg-6">	
												
												</div>
										</div>
									</div>
							<!--footer-->			
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
			<!--Bed model close-->
						
			<!--chairs model-->
							<div class="modal fade" id="exampleModalchair" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
							<!--heaader-->			
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel1">Chairs</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
							<!--body-->			
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-12">
												<ol>  <label><u>SEATING</u></label>
													<li><a  class="p-2" href="common.php?value1=kids chair & value2=chair">Kids Chair</a></li>
													<li><a  class="p-2" href="common.php?value1=wingback chair & value2=chair">Wingback chairs</a></li>
													<li><a  class="p-2" href="common.php?value1=wing chair & value2=chair">Wing chairs</a></li>
													<li><a  class="p-2" href="common.php?value1=lounge chairs & value2=chair">Lounge chairs</a></li>
													<li><a  class="p-2" href="common.php?value1=chaise lounge & value2=chair">Chaise Lounge</a></li>
													<li><a  class="p-2" href="common.php?value1=divans & value2=chair">Divans</a></li>
													<li><a  class="p-2" href="common.php?value1=ottomans & value2=chair">Ottomans</a></li>
													<li><a  class="p-2" href="common.php?value1=loveseats & value2=chair">Loveseats</a></li>													
													<li><a  class="p-2" href="common.php?value1=rocking lounge & value2=chair">Rocking Lounge</a></li>
													<li><a  class="p-2" href="common.php?value1=arm chair & value2=chair">Arm chair</a></li>
													<li><a  class="p-2" href="common.php?value1=stools & value2=chair">Stools</a></li>
													<li><a  class="p-2" href="common.php?value1=dining chair & value2=chair">Dining Chairs</a></li>
													
												</ol>	
												</div>
										</div>
										</div>
							<!--footer-->			
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
			<!--chair model close-->
					
			<!--decor-->	<div class="modal fade" id="exampleModaldecor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
								<!--header-->		
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel1">Decor</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
								<!--body-->		
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-12">
												<ol>	
													<label><u>LAMPS & LIGHTING</u></label>
													<li><a  class="p-2" href="common.php?value1=tripod lamps & value2=decor">Tripod Lamps</a></li>
													<li><a  class="p-2" href="common.php?value1=study lamps & value2=decor">study Lamps</a></li>
													<li><a  class="p-2" href="common.php?value1=hanging light & value2=decor">hanging light</a></li>
													<li><a  class="p-2" href="common.php?value1=lamps shades & value2=decor">Lamps shades</a></li>
													<li><a  class="p-2" href="common.php?value1=table lamps & value2=decor">Table LAMPS</a></li>
												</ol>	
												<ol>
														<label><u>Photo FRAMES</u></label>
													<li><a  class="p-2" href="common.php?value1=photo fream & value2=decor">photo frames</a></li>
													<li><a  class="p-2" href="common.php?value1=family photo fream & value2=decor">Family photo frames</a></li>
													<li><a  class="p-2" href="common.php?value1=double photo fream & value2=decor">double photo frame</a></li>
													<li><a  class="p-2" href="common.php?value1=3 photo fream & value2=decor">3 photo frame</a></li>
													<li><a  class="p-2" href="common.php?value1=4 photo fream & value2=decor">4 photo frame</a></li>
													<li><a  class="p-2" href="common.php?value1=mirror fream & value2=decor">Mirror frame</a></li>
													</ol>
												</div>
										</div>
										</div>
							<!--footer-->			
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
		    <!--decor model close-->
			
			<!--Table-->    <div class="modal fade" id="exampleModaltable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
							<!--header-->			
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Table</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
							<!--body-->			
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-6">
												<ol>
													<label><u> Table</u></label>
													<li><a  class="p-2" href="common.php?value1=kids study tables & value2=table1">kids Study Tables</a></li>
													<li><a  class="p-2" href="common.php?value1=coffee tables & value2=table1">Coffee Tables</a></li>
													<li><a  class="p-2" href="common.php?value1=nest of tables & value2=table1">Nest of Tables</a></li>
													<li><a  class="p-2" href="common.php?value1=side and end tables & value2=table1">Side & End Table</a></li>
													<li><a  class="p-2" href="common.php?value1=consol tables & value2=table1">Console Table</a></li>
													<li><a  class="p-2" href="common.php?value1=beside tables & value2=table1">Bedside Table</a></li>
													<li><a  class="p-2" href="common.php?value1=dressing tables & value2=table1">Dressing Table</a></li>
													<li><a  class="p-2" href="common.php?value1= study tables & value2=table1">Study Table</a></li>
													<li><a  class="p-2" href="common.php?value1=laptop tables & value2=table1">Laptop Tables</a></li>
													<li><a  class="p-2" href="common.php?value1=computer tables & value2=table1">Computer Table</a></li>
													<li><a  class="p-2" href="common.php?value1=dining tables & value2=table1">Dining Table</a></li>
												</ol>
												</div>
											   <div class="col-lg-6">	
												
											   </div>
										</div>
									</div>
								<!--footer-->		
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>	
			<!--table close-->
								
			<!--storage-->
							<div class="modal fade" id="exampleModalstorage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
								<!--header-->		
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Storage</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
								<!--body-->		
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-6">
												<ol>
												     <label><u>LIVING STORAGE</u></label>
													<li><a  class="p-2" href="common.php?value1=tv unit & value2=otheritem">TV Units</a></li>
													<li><a  class="p-2" href="common.php?value1=living room bookshelve & value2=bookshelve">Bookshelves</a></li>
													<li><a  class="p-2" href="common.php?value1=display unit & value2=otheritem">Display Unit</a></li>
													<li><a  class="p-2" href="common.php?value1=shoe racks & value2=otheritem">Shoe Racks</a></li>
													<li><a  class="p-2" href="common.php?value1=wall shelves & value2=otheritem">Wall Shelves</a></li>
													<li><a  class="p-2" href="common.php?value1=prayer unit & value2=otheritem">Prayer Units</a></li>
													<li><a  class="p-2" href="common.php?value1=magazine racks & value2=otheritem">Magazine Racks</a></li>
														<li><a  class="p-2" href="common.php?value1=box & value2=storage">Box</a></li>
												</ol>	
												</div>
												<div class="col-lg-6">	
												<ol>
													 <label><u>DINING STORAGE</u></label>
													<li><a  class="p-2" href="common.php?value1=kitchen cabinates & value2=otheritem">Kitchen Cabinates</a></li>
													<li><a  class="p-2" href="common.php?value1=kitchen trollrys & value2=otheritem">Kitchen trolleys</a></li>
													<li><a  class="p-2" href="common.php?value1=kitchen island & value2=otheritem">Kitchen island</a></li>
												</ol>	
												
												</div>
										</div>
										</div>
								<!--footer-->		
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>	
			<!--storage close-->
			
			<!--Bulk furniture-->
							<div class="modal fade" id="exampleModalbulk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
							<!--header-->			
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Bulk furniture</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
														</button>
										</div>
							<!--body-->			
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-6">
												<ol>
													<label><u>Restaurant</u></label>
													<li><a  class="p-2" href="common.php?value1=restaurant chair & value2=chair">Restaurant chairs</a></li>
													<li><a  class="p-2" href="common.php?value1=restaurant table & value2=table">Restaurant table</a></li>
												</ol>
												<ol>		
												</div>
												<div class="col-lg-6">	
													<ol>
												       <label><u>BAR FURNITURE</u></label>
														<li><a  class="p-2" href="common.php?value1=bar cabinats & value2=otheritem">Bar Cabinats</a></li>
														<li><a  class="p-2" href="common.php?value1=bartrolleys & value2=otheritem">Bar Trolleys</a></li>
														<li><a  class="p-2" href="common.php?value1=wine racks & value2=otheritem">wine Racks</a></li>
														<li><a  class="p-2" href="common.php?value1=bar chair & value2=chair">Bar chairs </a></li>
														<li><a  class="p-2" href="common.php?value1=bar table & value2=table1">Bar table </a></li>
													</ol>
												</div>
											</div>
										</div>
							<!--footer-->	
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
			<!--bulk furniture close-->

			<!--other furniture-->
								<div class="modal fade" id="exampleModalother" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<!--header-->	
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Other item</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
									<!--body-->	
										<div class="modal-body">
										  <div class="row">			
											  <div class="col-lg-6">
												<ol>	
													<label><u>OUTDOOR</u></label>
													<li><a  class="p-2" href="common.php?value1=garden furniture & value2=otheritem">Garden Furniture</a></li>
													<li><a  class="p-2" href="common.php?value1=balcony furniture & value2=otheritem">Balcony Furniture</a></li>
													<li><a  class="p-2" href="common.php?value1=wooden swings & value2=otheritem">Wooden Swings</a></li>
													<li><a  class="p-2" href="common.php?value1=pet houses & value2=otheritem">Pet Houses</a></li>
													<li><a  class="p-2" href="common.php?value1=planter & value2=otheritem">Planters</a></li>
												</ol>	
											</div>
											<div class="col-lg-6"></div>
												
											
										</div>
										</div>
								<!--footer-->			
									<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									</div>
									</div>
								</div>
							</div>
					
			<!--container close-->		</div>
							
						<div class="container">
	<!--row-->						
							<div class="row">
									<div class="col-lg-3"></div>
								<div class="col-lg-6 text-center bg-dark">
									<font size="6px" color="white" face="segoe script" >LUXURIOUS LIVING ROOM</font>
								</div>
								<div class="col-lg-3"></div>
							</div>
								<br>
							<div class="row">
								<div class="col-lg-4 text-center">
								
								<?php
								$query9=mysqli_query($conn,"SELECT * FROM beds where name In('king size beds' , 'queen size,beds' , 'single beds' , 'sofa cum beds' , 'double beds') order by id DESC ");
													$roa9 = mysqli_fetch_array($query9);
													 $pid9=$roa9['product_id'];   
													 $tit9=beds;
													 $photo=$roa9['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid9 & value2=$tit9 '><img src='$photo' height='200px' width='300px'><br>";
									echo "<font color='black' size='4px'><b>";
									echo " Beds"; 
									echo "</b></font>";
									echo "</a>";
								?>
								</div><br><br>	
								<div class="col-lg-4 text-center">
							<?php
									$query3=mysqli_query($conn,"SELECT * FROM otheritem where name ='tv unit' order by id DESC ");
													$roa3 = mysqli_fetch_array($query3);
													 $pid3=$roa3['product_id'];   
													 $tit3=otheritem;
													 $photo=$roa3['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid3 & value2=$tit3 '><img src='$photo' height='200px' width='300px'><br>";
									echo "<font color='black' size='4px'><b>";
									echo "Tv unit";
									echo "</b></font>";
									echo "</a>";
													
								?>
								</div><br><br>
								
								<div class="col-lg-4 text-center">
							<?php
									$query5=mysqli_query($conn,"SELECT * FROM sofas where name In ('fabric sofas','wooden sofas','3 seater sofas','2 seater sofas','sofa cum bed' ) order by id DESC ");
													$roa5 = mysqli_fetch_array($query5);
													 $pid5=$roa5['product_id'];   
													 $tit5=sofas;
													 $photo=$roa5['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid5 & value2=$tit5 '><img src='$photo' height='200px' width='300px'><br>";
									echo "<font color='black' size='4px'><b>";
									echo " Sofas";
									echo "</b></font>";			
									echo "</a>";
													
								?>
								</div>
							</div>	<br>
		<!--row-->					
							<div class="row">
								<div class="col-lg-6 text-center">
									<?php
									$query7=mysqli_query($conn,"SELECT * FROM chair where name ='chair' order by id DESC ");
													$roa7 = mysqli_fetch_array($query7);
													 $pid7=$roa7['product_id'];   
													 $tit7=chair;
													 $photo=$roa7['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid7 & value2=$tit7'><img src='$photo' height='200px' width='300px'><br>"; 
									echo "<font color='black' size='4px'><b>";
									echo "Chair"; 
									echo "</b></font>";			
									echo "</a>";
													
								?>
							</div>
							<br><br>	
								<div class="col-lg-6 text-center">
									<?php
									$querya=mysqli_query($conn,"SELECT * FROM table1 where name ='table' order by id DESC ");
													$roaa = mysqli_fetch_array($querya);
													 $pida=$roaa['product_id'];   
													 $tita=table1;
													 $photo=$roaa['photo1'];
						echo "<a href='productcommonpage.php?value1=$pida & value2=$tita'><img src='$photo' height='200px' width='300px'><br>"; 
						echo "<font color='black' size='4px'><b>";
						echo "Table";
						echo "</b></font>";		
						echo "</a>";
																																				
								?>
									
								
								</div>
							</div>
						</div>
						<br>						
		<!--row-->		<div class="container">				
							<div class="row">
							<div class="col-lg-3"></div>
								<div class="col-lg-6  bg-dark text-center">
									<font size="6px" color="white" face="segoe script" >Shop for Home</font>
								</div>
							<div class="col-lg-3"></div>
							</div>
							<br>
							<div class="row">
								<div class="col-lg-4 text-center">
								
								<?php
								$queryq=mysqli_query($conn,"SELECT * FROM bookshelve where name ='bookshelve' order by id DESC ");
													$roaq = mysqli_fetch_array($queryq);
													 $pidq=$roaq['product_id'];   
													 $titq='bookshelve';
													 $photo=$roaq['photo1'];
									echo "<a href='productcommonpage.php?value1=$pidq & value2=$titq '><img src='$photo' height='200px' width='300px'><br>"; 
									echo "<font color='black' size='4px'><b>";
									echo " Book Shelve"; 
									echo "</b></font>";				
									echo "</a>";
								?>
								</div><br><br>	
								<div class="col-lg-4 text-center">
							<?php
									$query3=mysqli_query($conn,"SELECT * FROM storage where name ='box' order by id DESC	");
													$roa3 = mysqli_fetch_array($query3);
													 $pid3=$roa3['product_id'];   
													 $tit3=storage;
													 $photo=$roa3['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid3 & value2=$tit3 '><img src='$photo' height='200px' width='250px'><br>"; 
									echo "<font color='black' size='4px'><b>";
									echo "storage"; 
									echo "</b></font>";				
									echo "</a>";
													
								?>
								</div><br><br>
								
								<div class="col-lg-4 text-center">
							<?php
									$query5=mysqli_query($conn,"SELECT * FROM decor where name ='flower' order by id DESC ");
													$roa5 = mysqli_fetch_array($query5);
													 $pid5=$roa5['product_id'];   
													 $tit5=decor;
													 $photo=$roa5['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid5 & value2=$tit5 '><img src='$photo' height='200px' width='250px'><br>"; 
									echo "<font color='black' size='4px'><b>";
									echo " flower"; 
									echo "</b></font>";		
									echo "</a>";
													
								?>
								</div>
							</div>	<br>
							
			<!--row-->					
							<div class="row">
								<div class="col-lg-6 text-center">
									<?php
									$query7=mysqli_query($conn,"SELECT * FROM sideboard where name ='sideboard' order by id DESC");
													$roa7 = mysqli_fetch_array($query7);
													 $pid7=$roa7['product_id'];   
													 $tit7=sideboard;
													 $photo=$roa7['photo1'];
									echo "<a href='productcommonpage.php?value1=$pid7 & value2=$tit7'><img src='$photo' height='200px' width='250px'><br>";
									echo "<font color='black' size='4px'><b>";
									echo "sideboard"; 
									echo "</b></font>";		
									echo "</a>";
													
								?>
							</div>
							<br><br>	
								<div class="col-lg-6 text-center">
									<?php
									$querya=mysqli_query($conn,"SELECT * FROM otheritem where name ='shoe racks' order by id DESC ");
													$roaa = mysqli_fetch_array($querya);
													 $pida=$roaa['product_id'];   
													 $tita=otheritem;
													 $photo=$roaa['photo1'];
						echo "<a href='productcommonpage.php?value1=$pida & value2=$tita'><img src='$photo' height='200px' width='250px'><br>"; 
						echo "<font color='black' size='4px'><b>";
						echo "Shoe Racks"; 
						echo "</b></font>";	
						echo "</a>";
													
								?>
									
								
								</div>
							</div>
	
								
							</div>
							</div>

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
		<!--api-->						 <font  size="3px">9672277000</font><br>
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