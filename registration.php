<?php
include 'registrationphp.php';
?>
<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Registration page</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script 
					src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js">
			</script>
				<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
			<style>
				input.ng-invalid {
									border-color: red;
								}
				
				input.ng-valid {
									border-color: green;
								}
				.inputwithicon input[type=text]
						{
						padding-left:40px;
						}
				.inputwithicon input[type=number]
						{
						padding-left:40px;
						}	
				
				.inputwithicon input[type=email]
						{
						padding-left:40px;
						}
				.inputwithicon input[type=password]
						{
						padding-left:40px;
						}
				.inputwithicon
						{
						position:relative;
						}
			
				.inputwithicon i
						{
						position:absolute;
						left:3px;
						top:2px;
						padding:9px 8px;
						color:blue;
						transition:3s;
						}				
			</style>
	</head>
	<body ng-app="">
		<div class="container">
				<br>
				<form name="registration" method="POST" action="registration.php" enctype="multipart/form-data">
					<fieldset>
							<legend align="center"><font face="segoe script">Registration Page</font></legend>
								<center><i class="fa fa-user-circle" style="font-size:90px "></i></center>
		<!--1 row--><br>				
					<div class="row">
							<div class="col-lg-1"></div>
							<div class="col-lg-5 text-center">
				<!--username-->				
								<label><font face="segoe script"size="4px"><b>Username</b></font></label>
									<div class="inputwithicon">
										<input type="text" class="form-control" name="Username"  ng-model="Username" placeholder="Enter your username" required autofocus>
										<i class="fa fa-user fa-lg fa-fw"></i>
									</div>
							</div>
				<!--age-->			
							<div class="col-lg-5 text-center">
								<label><font face="segoe script" size="4px"><b>Age</b></font></label>
									<div class="inputwithicon">
										<input type="number" class="form-control" name="Age" ng-model="Age" ng-maxlength="2" ng-minlength="2" placeholder="Enter your Age" required>
										<i class="fa fa-anchor fa-lg fa-fw"></i>
									</div>
							</div>
							<div class="col-lg-1"></div>
					</div>
						<br>
		<!--2row-->				
						<div class="row">
							<div class="col-lg-1"></div>
					<!--phone-->		
							<div class="col-lg-5 text-center">
									<label><font face="segoe script" size="4px"><b>Phone Number</b></font></label>
								<div class="inputwithicon">
									<input type="number" class="form-control" name="Phone" placeholder="Enter your P-number" ng-maxlength="10" ng-model="Phone" required>
									<i class="fa fa-phone fa-lg fa-fw"></i>
								</div>
							</div>
					<!--email-->				
							<div class="col-lg-5 text-center">
								<label><font face="segoe script" size="4px"><b>Email</b></font></label>
									<div class="inputwithicon">
										<input type="email" class="form-control" name="Email" placeholder="Enter your email" ng-model="Email" required>
										<i class="fa fa-envelope fa-lg fa-fw"></i>
									</div>
							</div>
							<div class="col-lg-1"></div>
						</div>
						<br>
		<!--3 row-->				
						<div class="row">
							<div class="col-lg-1"></div>
					<!--password-->		
							<div class="col-lg-5 text-center">
								<label><font face="segoe script" size="4px"><b>Password</b></font></label>
									<div class="inputwithicon">
										<input type="password" class="form-control" name="Password" placeholder="Enter your Password" ng-model="Password" ng-maxlength=8 ng-minlength=8 required >
										<i class="fa fa-key fa-lg fa-fw"></i>
										<small class="form-text text-muted"><font color="red">*Your password must be 8 digit</font> </small>
									</div>
							</div>
					<!--confirm password-->		
							<div class="col-lg-5 text-center">
								<label><font face="segoe script" size="4px"><b>Confirm password</b></font></label>
								<div class="inputwithicon">
									<input type="password" class="form-control" name="c_password" ng-model="c_password" placeholder="Enter again password" ng-maxlength=8 ng-minlength=8 required >
									<i class="fa fa-key fa-lg fa-fw"></i>
									<small class="form-text text-muted"><font color="red">*Your password must be 8 digit</font> </small>
								</div>	
							</div>
							<div class="col-lg-1"></div>
						</div>
						<br>
	<!--6 row-->				
						<div class="row">
							<div class="col-lg-4">
							</div>
							<div class="col-lg-4"><font size="4px"><b>
								<input type="submit" class="btn btn-md btn-block btn-primary" name="Submit" value="Submit"></b></font>
							</div>
							<div class="col-lg-4">
							</div>
						</div>
					
				</fieldset>
				</form>
		</div>
		
		
		
		
		
	</body>
</html>
		