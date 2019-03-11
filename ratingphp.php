<?php
session_start();
error_reporting(0);			
				$Email=$_SESSION['Email'];	
				if($Email!=''){
	//connect to DBMS			
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
	
							if(isset($_POST['Send']))
							{
									if($_FILES['file']=="" or $_POST['username']=="" or $_POST['area']=="" or $_POST['data']=="" )
										{
											die;
										}
										$user=$_REQUEST['username'];					
										$area=$_REQUEST['area'];
										$data=$_REQUEST['data'];
				//3photo data				
										$filename = $_FILES["file"]["name"];
										$tempname = $_FILES["file"]["tmp_name"];
										$filetype = $_FILES["file"]["type"];
									
									if($filetype=="image/jpeg" or $filetype=="image/jpg" or $filetype=="image/png")
							{
								$folder = "../imagefolder/".$filename;
								if(move_uploaded_file($tempname,$folder))
									{
								 "file upload<br>";
									}
								else
								{
								$e="image1 cannot upload";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									
								die;
								}
							}
		//username length					
							$userlength=strlen($user);
								if($userlength>20)
								{
									$e="username must be less then 20 character";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check area length						
								$arealength=strlen($area);
								if($arealength>20)
								{
									$e="area name  must be less then 20 character ";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//check data length						
								$datalength=strlen($data);
								if($datalength>256)
								{
									$e="data must be less then 256 character ";
									echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
									die;
								}
		//sql query				
							$query="INSERT INTO rating(username,area,photo,story,stage) VALUES('$user','$area','$folder','$data','')"; 
					if(mysqli_query($conn,$query))
						{  
							header('location:main_page.php');
							echo "registration succesfull";
						}
					else 
						{
						 mysqli_error($conn);
						}

							}
				}
				else{
					
					$e="Please Login your Account";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
				}
?>