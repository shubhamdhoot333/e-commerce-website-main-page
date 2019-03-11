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
	//check connection					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							"connect with server";
							}
	//check submit 		
				
							if(isset($_REQUEST['Submit']))
						{
							if($_REQUEST['email']=="" or $_REQUEST['phone']=="")
							{
								$e="Please enter some value"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
	
							die;
							}
						$name=$_REQUEST['name'];
						 $phone=$_REQUEST['phone'];
						$email=$_REQUEST['email'];
						 $data=$_REQUEST['data'];
			
	//check email is validate or not			
							if(!filter_var($email,FILTER_VALIDATE_EMAIL)===false)
								{
								 "email is valid <br>";
								}
							else 
								{
								$e="email not valid"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
								}
	//phone number
							if(preg_match('/^[0-9]{10}+$/' , $phone))
							{
								 "valid" ;
							}
							else
							{
								$e="Phone number not valid"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
	//check username length						

							if($name>30)
							{
							$e="Username length is very big"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
	//message	
							if($data>150)
							{
							$e=" message content is very big"; 
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
								die;
							}
//query						
							
							$query="INSERT INTO message(name,mobile,email,message,company_review) VALUES('$name','$phone','$email','$data','')";
							
							if(mysqli_query($conn,$query))
								{  
							header('location:main_page.php');
							" succesfull";
					
								}
							else 
								{
								echo mysqli_error($conn);
								}
					}

				}
?>				