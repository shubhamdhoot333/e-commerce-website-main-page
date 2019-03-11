<?php 
error_reporting(0);
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
						echo " not connect with server ";
						echo "<br>";
						}
					else 
						{
						echo "connect with server";
						echo  "<br>";
						}
						$id=$_GET['value'];

//take data from dbms			
					$query="select * from Order_table where invoice_no='$id' ";
						$data=mysqli_query($conn,$query);
						$total=mysqli_fetch_assoc($data);	
						 $id;
						 $address=$total['address'] ;	
						 $name=$total['name'] ;
						 $date=$total['date1'] ;	
						$quantity=$total['quantity'];	
						$cost=$total['cost'];	
						$phone=$total['Phone'];	
						$email=$total['email'];	
				}		
?>

<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Invoice Page </title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
			<script 
					src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.7/angular.min.js">
			</script>
</head>
<body>
	<!--container-->
			<div class="container">
	<!--1 row-->						
				<div class="row">
								<div class="col-lg-6">
									<font size="5px">
									<b>Tax invoice/Bill of Supply/Cash memo</b></font><br>
									<small><b>Number<?php echo $id;?></b>&nbsp&nbsp&nbsp&nbsp
									<b>Date:&nbsp<?php echo $date;?></b></small>	
								</div>
								
								<div class="col-lg-6">
							</div>
				</div>
	<!--2 row--><br>						
				<div class="row">
								<div class="col-lg-6">			
								<small> <b>Sold By:Jay Shree Shyam</b></small><br>
								<small>H-178 bhoranada,jodhpur,	Rajasthan
								<br>Pin: 342012
								<br>PAN: 
								<br>GSTIN
								</div>
								<div class="col-lg-6">			
								</div>
				</div>
	<!--3 row--><br>						
				<div class="row">
								<div class="col-lg-6">	
								<h6><b>Billing Address:</b></h6>
								<b><?php echo $address; ?>
								<br>Phone Number:<?php echo $phone; ?>
								<br>Email:<?php echo $email; ?>
								</b>
								</div>
								<div class="col-lg-6">	
								</div>
				</div>
	<!--4 row--><br>				<br>		
				<div class="row">
								<div class="col-lg-12">	
									<table class="table table-striped">
										<tr> <td><b>Product Name</b></td>  <td><?php echo $name;?></td>          </tr>
										<tr> <td><b>Quantity</b></td>  <td><?php echo $quantity; ?></td>          </tr>
										<tr> <td><b>Prise</b></td>  <td><?php echo $cost; ?></td>          </tr>
									</table>
								</div>
				</div>
		<!--5 row--><br>						
				<div class="row">
					<div class="col-lg-6 text-left">	
						<font size="4px"><b>Declaration:</b></font><br>
						<b>We declare that this invoice shows the actual price of the <br>goods
						described above and that all particulars are true and correct.<br> The
						goods sold are intended for end user consumption and not for resale.</b>
					</div>
					<div class="col-lg-6 text-left">	<b>
						<br>* This is a computer generated invoice <br> and does not
							require a physical signature</b>
	
					</div>
		
				</div>
	<!--6 row--><br><br>						
				<div class="row">
					<div class="col-lg-12 text-left">	
					<font size="3px"><b>Customer Acknowledgement:</b></font><br>
					<b>It confirm that the said products are being purchased for my internal/personal consumption and not for re-sale.
					</b></div>
				</div>
			</div>
</body>
</html>
			