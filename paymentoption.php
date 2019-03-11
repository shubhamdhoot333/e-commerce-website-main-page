<html>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Payment Option</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
				<!--font awesome-->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
				<!--login css link -->
		   <link rel="stylesheet" href="login.css">
		   <link rel="stylesheet" href="progessbar2.css">
	</head>
	<body>
						<nav class="navbar navbar-expend-lg navbar-light bg-secondary ">
								<font face="segoe script"size="3px"color="white">jay shree shyam</font>
						</nav>
			<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Payment Option</li>
								</ol>
						</div>
			<div class="container">
	<!--amount-->		
				<div class="row bg-light">
					<div class="col-10 "><b><H5 class="h5 ml-5">
						Select options to pay</b></h6>
					</div>
					<div class="col-2">#</div>
				</div>
				<br>
				
				<div class="row ">
				<div class="col-4"></div>
				<div class="col-lg-4 ">
				<form method="POST" action="paymentoption.php" enctype="multipart/form-data">	
					<div class="accordion" id="accordionExample">
	<!--1st card-->			     <div class="card bg-light">
		<!--header-->				<div  class="card-header active" id="headingOne">
											<a class="btn btn-link  active " href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												
												<h5 class="h5 ml-5 mt-1"><font color="black"><u>Paytm</u></h5>	
											<small class="ml-5">Available Balance</small></font>
											</a>
									</div>
		<!--body-->					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<input type="submit" class="btn btn-sm btn-block btn-dark mt-0" name="submit" value="Pay Securely">
										</div>
									</div>
								</div>
								<hr>
	<!--2ed card-->							
								<div class="card bg-light">
		<!--header-->				<div class="card-header" id="headingtwo">
											<a class="btn btn-link collapsed" href="#" data-toggle="collapse" data-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
												<h5 class="h5 ml-5 mt-1"><font color="black"><u>Debit card</u></h5><font>
											</a>
									</div>
		<!--body-->					<div id="collapsetwo" class="collapse"  aria-labelledby="headingtwo" data-parent="#accordionExample">
										<div class="card-body">
										<label>Card Number</label>
											<input type="text" class="form-control" name="card_n">
											<label>Expiry/Validity Date</label>
											<input type="text" class=" form-control" value="MM / YY" name="e/v">
											<label>CVV</label>
											<input type="text" class="form-control" name="cvv">
											<br>								
											<input type="submit" class="btn btn-sm btn-block btn-dark mt-0" name="submit" value="Pay Securely">
										</div>
									</div>
								</div>
								<hr>
	<!--3 card-->				
								<div class="card bg-light">
		<!--header-->				<div  class="card-header" id="headingthree">
											<a class="btn btn-link collapsed " href="#" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
												<h5 class="h5 ml-5 mt-1"><font color="black"><u>Credit card</u></h5><font>
											</a>
									</div>
		<!--body-->					<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#accordionExample">
										<div class="card-body">
											<label>Card Number</label>
											<input type="text" class="form-control" name="card_n">
											<label>Expiry/Validity Date</label>
											<input type="text" class=" form-control" value="MM / YY" name="e/v">
											<label>CVV</label>
											<input type="text" class="form-control" name="cvv">
											<br>
											<input type="submit" class="btn btn-sm btn-block btn-dark mt-0" name="submit" value="Pay Securely">
										</div>
									</div>
								</div>
								<hr>
	
	<!--4 card-->		
								<div class="card bg-light">
		<!--header-->				<div class ="card-header" id="headingfive">
											<a class="btn btn-link collapsed" href="#" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
												<h5 class="h5 ml-5 mt-1"><font color="black"><u>BHIM UPI</u></h5><font>
											</a>
									</div>
		<!--body-->					<div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
										<div class="card-body">
										
											<b><label>Enter UPI VPA</label></b>
											<input type="text" class="form-control" name="VPA">
											<br><input type="submit" class="btn btn-sm btn-block btn-dark mt-0" name="submit" value="Pay Securely">
										</div>
									</div>
								</div>
								<hr>
					
					
					</div>
				</form>
				</div>
				<div class="col-4"></div>
			
			
			
			
			
			
			</div>
			
	</body>
</html>