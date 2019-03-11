<?php
session_start();
//error_reporting(0);
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
	//link value take				
					if($Email!='')
						{
						$pid=$_GET['value1'];
						$quan=$_GET['value2'];	
						$email=$_GET['value3'];
						$title=$_GET['value4'];
						$amt=$_GET['value5'];
						}		
					
					if(isset($_POST['Pay']))
						{
//product information						
						$result1=mysqli_query($conn,"select * from $title where product_id='$pid' ");
						$row = mysqli_fetch_array($result1);
							$name=$row['name'];
							$cost=$row['cost'];
							$wood=$row['wood'];
							$data=$row['data'];
							$photo=$row['photo1'];
//user& address info							 
						$result2=mysqli_query($conn,"select * from customera where Email='$Email' ");
						$row1 = mysqli_fetch_array($result2);
							 $hm=$row1['Home_Number'];
							 $co=$row1['Colony'];
							 $city=$row1['City'];
							 $sta=$row1['State'];
							 $phone=$row1['Phone'];
							 $user=$row1['Clientname'];
							 $pin=$row1['Pin_code'];
							 $email=$row1['Email'];
							 $ta=$hm;
							 $ta.='  ,';
							 $ta.=$co;
							 $ta.='  ,';
							 $ta.=$city;
							 $ta.='  ,';
							 $ta.=$sta;
							 $ta.='  ,';
							 $d =date('Y-m-d');
//data insert							
						$query3="INSERT INTO order_table(product_id,name,date1,address,quantity,cost,email,Phone,stage,photo1,uname) 
						VALUES('$pid','$name','$d','$ta','$quan','$amt','$email','$phone', '' ,'$photo','$user')"; 
					if(mysqli_query($conn,$query3))
						{  
						header('location:main_page.php');
						require 'PHPMailerAutoload.php';

						$mail = new PHPMailer;

						$mail->SMTPDebug = 4;                               // Enable verbose debug output

						$mail->isSMTP();                                      // Set mailer to use SMTP
						$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
						$mail->SMTPAuth = true;                               // Enable SMTP authentication
						$mail->Username = 'shreesalasarartandcraft@gmail.com';                 // SMTP username
						$mail->Password = '03032000s';                           // SMTP password
						$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
						$mail->Port = 587;                                    // TCP port to connect to

						$mail->setFrom('shreesalasarartandcraft@gmail.com', 'salasar art and craft');
						$mail->addAddress($email);     // Add a recipient
													// Name is optional
						$mail->addReplyTo('shreesalasarartandcraft@gmail.com');

						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = 'Your Given Order is accepted';
						$mail->Body  = '<center><font size="6px" color="white"><p style="background:red;">Shree salasar art & craft<p></font>
									<font size="5px">Thanks  ,' . $user . ' for Ordering<br>
									' . $name .',</font><br><br><br>
									
									<font size="4px">Payment Summary</font><br><br>
									<table style="border:1px solid black;">
									<tr><td style="border:1px solid black;"> <br><font size="3px">Product Name  </td><td style="border:1px solid black;">'.  $name . '</td></font></tr>
									
									<tr><td style="border:1px solid black;"> <br><font size="3px">Quantity      </td><td style="border:1px solid black;">'.  $quan  .'</td></font></tr>
									<tr><td style="border:1px solid black;"> <br><font size="3px">Total cost    </td><td style="border:1px solid black;">'.  $cost  .'</td></font></tr>
									</table>	
									</center>';							
						$mail->AltBody = '';

						if(!$mail->send()) {
								echo 'Message could not be sent.';
								echo 'Mailer Error: ' . $mail->ErrorInfo;
						} else {
								echo 'Message has been sent';
							 }
			}
					else 
						{
							 mysqli_error($conn);
						}
		}
?>
<html>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
	<head>
            <title>Payment</title>
				<!--linking part-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
<body>
<!--1 navbar-->				
						<nav class="navbar navbar-expend-lg navbar-light bg-dark ">
								<font face="segoe script" size="3px"color="white"><b>Salasar Art & Craft</b></font>
						</nav>
<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Payment </li>
								</ol>
						</div>
	<!--container-->					
						<div class="container">
				<!--1row-->				
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4 text-center">
									<font size="6px" face="segoe script" color='red' ><u>Payment Option </u></font><br>
									<font size="5px"><u>Cash on Delivery</u></font>
								</div>
								<div class="col-lg-4"></div>
								</div>			
				<!--2row-->		<br>
								<div class="row">
								<div class="col-lg-4"></div>
								<div class="col-lg-4 text-center">
								<?php	echo"<form name='payment' method='POST' action='payment.php?value1=$pid & value2=$quan & value3=$email & value4=$title & value5=$amt' enctype='multipart/form-data'>"; ?>
									<font size="5px">
									cost<?php echo $amt ;?></font><br><br>
										
										<input type="submit" class="btn btn-md btn-block btn-primary" name="Pay" value="Submit order">
								     	</form>
								</div>
								<div class="col-lg-4"></div>
								</div>
												
								
								
				
</body>
</html>						