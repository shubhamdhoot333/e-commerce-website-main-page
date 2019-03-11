<?php
error_reporting(0);
	//1 connect to datatbase		
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
					if(!$conn)
						{
						$e="not connect with server "; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
					else 
						{
						"connect with server";
						echo  "<br>";
						}
	
	
	//2data code		
					if(isset($_POST['Submit']))
						{
	
	//check value not empty		
							if($_POST['Username']=="" or $_POST['Age']=="" or $_POST['Email']=="" or $_POST['Phone']=="" or $_POST['c_password']=="" or $_POST['Password']=="" )
							{
							die;
							}
	
							$Username=$_POST['Username'];
							$Age=$_POST['Age'];
							$Phone_Number=$_POST['Phone'];
							$Email=$_POST['Email'];					
							$Password=$_POST['Password'];
							$c_password=$_POST['c_password'];
						
	//find length of all variable	
					$username_length=strlen($Username);
					$Age_length=strlen($Age);
					$Phone_Number_length=strlen($Phone_Number);
					$Password_length=strlen($Password);
					$c_password_length=strlen($c_password);
	
	// check age in number formate or not
					if (!filter_var($Age, FILTER_VALIDATE_INT) === false) {
						 "Age is valid";
						}
						else 
						{
							$e="Please Enter Valied Age"; 
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						}
	//check age length						
					if($Age_length>2)
						{
						$e="please enter a valied age";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	// check phone number formate or not
						
						if(preg_match('/^[0-9]{10}+$/' , $Phone_Number))
							{
								 "valid Phone number" ;
							}
							else
							{
								$e="invalied phone number";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
	//check phone number length						
					if($Phone_Number_length>10 or $Phone_Number_length<10 )
						{
						$e="phone number incorrect";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
							
	//check username length						
					if($username_length>20)
						{
						$e="username must be 20 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check password length						
					if($Password_length>8)
						{
						$e="password must be 8 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	//check confirm password length						
					if($c_password_length>8 AND $c_password_length<8 )
						{
						$e="confirm password must be 8 digit ";
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
						die;
						}
	// check email validation					
					if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false)
							{
							"email address is valid <br>";
							}
						else 
							{
								$e="email not valid<br>";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;	
							}
	//check email exist or not
					if($Email!==" ")
					  {
						$result = "select * from customer1 where Email='$Email'";
						mysqli_query($conn,$result);
						$num_row=mysqli_affected_rows($conn);
				
						if($num_row>=1)
							{
							$e=" your email address is exist";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;															
							}
					  }	
	//check equalof password and comform password				  
					 if($Password==$c_password)
						{
						 "password correct";
						}
					else
						{
						$e="password not match to comfirm password"; 
						echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
						}
	//run sql query					
						$query="INSERT INTO customer1(Username,Age,Email,Phone,Password) 
													VALUES('$Username','$Age','$Email','$Phone_Number','$Password')"; 
					if(mysqli_query($conn,$query))
						{  
						header('location:login.php');
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
						$mail->addAddress($_POST['Email']);     // Add a recipient
													// Name is optional
						$mail->addReplyTo('shreesalasarartandcraft@gmail.com');

						$mail->isHTML(true);                                  // Set email format to HTML

						$mail->Subject = ' Registration  Successful';
						$mail->Body   = '<center><font size="10px">Registration</font><br>
									<font size="5px">in</font><br>
									<font color="red" size="6px"><u>Shree Salasar art and craft</u><br></font>
									<font size="5px">is Successfully Done</font><br></p><br>
									<font size="5px">Thankyou for Registration</font><center><br>';
									
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
					mysqli_close($conn);
					?>