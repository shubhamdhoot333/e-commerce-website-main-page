<?php
session_start();
error_reporting(0);
//connect to datatbase		
				$Email=$_SESSION['Email'];
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						echo "not connect with server ";
						echo "<br>";
						}
					else 
						{
						 "connect with server";
						}
						
//get product value	
						if($Email!=''){
						$pid=$_GET['value1'];
						$ti=$_GET['value2'];	
						$quan=$_GET['value'];
													
				if($pid!='')
					{
						$result=mysqli_query($conn,"select * from $ti where product_id='$pid' ");
						$row = mysqli_fetch_array($result);
							 $name=$row['name'];
							 $cost=$row['cost'];
							 $wood=$row['wood'];
							 $data=$row['data'];
							 $photo=$row['photo1'];
							 $a=$pid;
					}
						}
				if($Email!='')
					{
						$result=mysqli_query($conn,"select * from customera where Email='$Email' ");
						$row = mysqli_fetch_array($result);
							 $uname=$row['Clientname'];
							 $phone=$row['Phone'];
							 $hnu=$row['Home_Number'];
							 $co=$row['Colony'];
							 $city=$row['City'];
							 $state=$row['State'];
	
					}
						//promo code			
							if(isset($_POST['save']))
								{
							if($_POST['promo']=="")
							{
							$e="enter promo code";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
								
							}
							$promo=$_POST['promo'];
							$result = "select * from offertable where promo='$promo' and stage='active'";
							$ro=mysqli_query($conn,$result);
							$num_row=mysqli_affected_rows($conn);
							$re=mysqli_fetch_array($ro);
							$discount=$re['offersize'];	
						if($num_row>=1)
							{
									$q=1;
									$amount=$quan*$cost;
									$ab=$amount *($discount/100);																			
									$ab;
									$amount=$amount-$ab;
										
							}
						}
?>						


<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Order stage</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
									<li class="breadcrumb-item active" aria-current="page">Order stage </li>
								</ol>
						</div>
						<div class="jumbotron bg-light">
							<div class="container">
				<!--1row-->				
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4 text-center">
								<font size="5px" >See your details </font>
								</div>
								<div class="col-lg-4"></div>
								</div>
				<!--2row-->				
								<div class="row">
									<div class="col-lg-4 text-center">
										<b><font face="segoe script"color="red" size="5px">Product Detail</font></b>
											<br>
										
								<?php  echo "<img src='$photo' height='150px' width='150px'>";?>
									<br><br>
										<table class="table table-striped">
											<tr><td><label>Name:</label></td><td><?php echo $name;  ?></td></tr>
											<tr><td><label>	Wood:</label></td><td><?php echo $wood;?></td></tr>
											<tr><td><label>Quantity</label></td><td><?php echo $quan;?>	
											</td></tr>
											<tr><td><label>Data</label></td><td><?php echo $data; ?></td></tr>
											
										</table>
										</div>

									
									<div class="col-lg-4 text-center">
											<b><font face="segoe script"color="red" size="5px">User Detail</font></b>
											<br>
										
										<table class="table table-striped">
											<tr><td><label>Order Data</label></td><td><?php echo date('Y-m-d');?></td></tr>
											<b><tr><td><label>Username</label></td><td><?php echo $uname; ?></td></tr> 
											<tr><td><label>Email:</label></td><td><?php echo $Email; ?></td></tr>
											<tr><td><label>Phone:</label></td><td><?php echo $phone;  ?></td></tr>
											<tr><td><label>	Address:</label></td><td><?php echo $hnu;echo "<br>";echo $co;echo "<br>"; echo $city; echo"<br>"; echo $state; ?></td></tr>
											</b>
										</table>
										</div>
								
									
									<div class="col-lg-4 text-center">
										<b><font face="segoe script"color="red" size="5px">Order Detail</font></b><br>	
											
											<table class="table table-striped">
											<tr><td><label>Product Id</label></td><td><?php echo $pid; ?></td></tr>											
											<tr><td><label>Title</label></td><td><?php echo $ti;  ?></td></tr> 
											<tr><td><label>Total cost</label></td><td> <?php echo $t=$cost*$quan;?></td></tr>
											<tr><td><label>Offer</label></td>

											<form method="post" action="">
											<td><input type="text" name="promo" placeholder="enter promocode">
											<br><br><input type="submit" name="save" value="save" class="btn btn-primary"></form></td></tr>
											<tr><td><label>Final prise</label></td><td><?php if($q==1){echo $fifo=$amount;} else {echo$fifo=$t;}?></td></tr>
											<tr><td><label>Discount Amount</label></td><td> <?php echo $ab;?></td></tr>	
											</table>
									</div>
								</div>
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4">
									<?php echo"<a href='payment.php?value1=$pid & value2=$quan & value3=$Email & value4=$ti & value5=$fifo' class='btn btn-primary btn-block' >Pay Now</a>"; ?>
								</div>
								<div class="col-lg-4"></div>
							
							</div>
						</div>
</body>
</html>						