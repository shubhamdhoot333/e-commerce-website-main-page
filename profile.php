<?php
session_start();
				$Email=$_SESSION['Email'];
				if($Email!='')
				{	
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
					echo "connect with server";
					echo "<br>";
				}
						$query="select * from customer1 where Email='$Email' ";
						$data=mysqli_query($conn,$query);
						$total=mysqli_fetch_assoc($data);	
					$way=$total['picsource'];
					
					 $way;
					 $Username=$total['Username'] ;
					  $Age=$total['Age'];
					  $Phone=$total['Phone'];
					 $Password=$total['Password'];
				}
		?>		
<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>form</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			
	</head>
	<body>
		<!--1 navbar-->				
						<div class="header bg-secondary"><center>
							<font face="segoe script"size="5px"color="white">jay shree shyam</font></center>
						</div>
						<br>
		<div class="container">
	<!--row-->			
				<div class="row">
						<div class="col-12">
							<center><img src="<?php echo $way ?>" height="100px" width="100px" class="rounded-circle mb-4"></center>	
						</div>
				</div>
	
	<!--1row-->			
				<div class="row">
						<div class="col-3"></div>
						<div class="col-lg-3 bg-dark text-center">
						<font color="white"><h5 class="h5">Username :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">						
						<h5 class="h5"><?php echo $Username ?></font></h5> 
						</div>
						<div class="col-3">
						</div>
				
				</div>
	<!--2row-->	<br>
				
				<div class="row">
						<div class="col-3"></div>
						<div class="col-lg-3 bg-dark text-center">	
						<font color="white"><h5 class="h5">Age :</h5>
						</div>
						<div class="col-lg-3 bg-secondary text-center">
							<h5 class="h5"><?php echo $Age ?></font></h5>
						</div>
						<div class="col-3"></div>
				</div>
	<!--3row-->	<br>
				
				<div class="row">
					<div class="col-3"></div>
					<div class="col-lg-3 bg-dark text-center">
						<font color="white"><h5 class="h5">Phone Number :</h5>
					</div>
					<div class="col-lg-3 bg-secondary text-center">
						<h5 class="h5"><?php echo $Phone ?></font></h5>
					</div>
					<div class="col-3"></div>
				</div>
	<!--4row-->	<br>		
				
				<div class="row">
				<div class="col-3"></div>
					<div class="col-lg-3 bg-dark text-center">
						<font color="white"><h5 class="h5">Password :</h5>
					</div>
					<div class="col-lg-3 bg-secondary text-center">
						<h5 class="h5"><?php echo $Password ?></font>
					</div>
				<div class="col-3"></div>
				</div>
				<br>
	<!--row-->			
				<div class="row">
					<div class="col-3"></div>
					<div class="col-lg-6 bg-dark text-center">
					<font color="white"><h5 class="h5">Email Address :</h5></font>
					</div>
					<div class="col-3"></div>
				</div>
	<!--row-->			
				<div class="row">
					<div class="col-3"></div>
					<div class="col-lg-6 bg-secondary text-center">
						<h5 class="h5"><font color="white"><?php echo $Email ?></font></h5>
					</div>
					<div class="col-3"></div>
				</div>
	<!--5row-->		
		</div>
	</body>
	</html>
	
	