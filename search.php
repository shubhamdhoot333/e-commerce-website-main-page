<?php
error_reporting(0);
session_start();
//connect to DBMS			
				$Email=$_SESSION['Email'];
				$server="localhost";
				$user="root";
				$pass="";
				$dbname="subu";
				$conn=mysqli_connect($server,$user,$pass,$dbname);
//server connect					
						if(!$conn)
							{
							$e="not connect with server";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							}
						else 
							{
							"connect with server";
							}
							
//submit search button						
						if(isset($_POST['Search']))
						{
							if($_POST['Search']=="")
							{
								$e="enter some text in textbox";
								echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
 								die;
							}								
							echo $search=$_POST['search'];
		//beds					
							if (strpos($search, 'beds') !== false) 
							{
							$a='beds';
							}
							else if (strpos($search, 'bookshelve') !== false) 
							{
							 $a='bookshelve';
							}
							else if (strpos($search, 'chair') !== false) 
							{
							 $a='chair';
							}
							else if (strpos($search, 'decor') !== false) 
							{
							 $a='decor';
							}
							else if (strpos($search, 'wardrobes') !== false) 
							{
							 $a='wardrobes';
							}
							else if (strpos($search, 'sideboard') !== false) 
							{
							 $a='sideboard';
							}
							else if (strpos($search, 'sofas') !== false) 
							{
							 $a='sofas';
							}
							else if (strpos($search, 'storage') !== false) 
							{
							 $a='storage';
							}				
							else if (strpos($search, 'table') !== false) 
							{
							 $a='table1';
							}
							else	
							{
								 $a='otheritem';
							}
							$searchlen=strlen($search);
							if($searchlen>20)
							{
							$e="text must must be 20 digit ";
							echo '<script type="text/javascript">alert("Error : ' . $e . '")</script>';
							die;
							}
							
							$_SESSION['title']=$a;
							$_SESSION['uname']=$search;
						}


?>
<html>
<head>
			<meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Search Product </title>
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
						<nav class="navbar navbar-expend-lg navbar-light bg-dark">
								<font face="segoe script"size="3px"color="white">Salasar Art & Craft</font>
						</nav>
	<!--breadcrumb-->			
						<div aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="main_page.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">search Page </li>
								</ol>
						</div>		
	<!--container-->				
						<div class="container">
		<!--1row-->				
						<div class="row">
								<div class="col-lg-1"> 
									
								</div>
								<div class="col-lg-10"> 
								<form name="search" method='POST' action="search.php">
									<input class="form-control " type="text" name="search" placeholder="Enter product Name">
								</div>
								<div class="col-lg-1"></div>
							</div>
		<!--2row-->					
							<div class="row">
								<div class="col-lg-4"> 
								</div>
								<div class="col-lg-4"> 
									<input class="btn btn-primary btn-block" type="submit" name="Search" value="Search">
								</form>
								</div>
								<div class="col-lg-4"></div>
							</div>
							
							<?php
								$a=$_SESSION['title'];
								$search=$_SESSION['uname'];

								$result = "select * from $a";
								$query5=mysqli_query($conn,$result);
								$row1 = mysqli_affected_rows($conn);
									for($i=0;$i<$row1;)
										{	
		//dynamic row						
								echo "<div class='row'>";
									 for($j=0;$j<3;$j++)
										{
										if($i==$row1)
										{   break;     }
										$roa = mysqli_fetch_array($query5);
										$title = $roa['title']; 
										$cost = $roa['cost'];   
										$pid = $roa['product_id']; 
										$name = $roa['name'];
										$photo = $roa['photo1'];		
									echo "<div class='col-lg-4 text-center'>";
									echo "<div class='card' >";
										echo "<img src='$photo' class='card-img-top' height='200px' width='150px'>";
									echo "<div class='card-body'>";
										echo "<font size='4px'><b>";
										echo "Product name&nbsp:&nbsp&nbsp&nbsp".$name;
										echo "<br>";
										echo "Cost&nbsp:&nbsp&nbsp&nbsp".$cost;
										echo "<br><br>";										
								echo "<a href='productcommonpage.php?value1=$pid & value2=$title' class='btn btn-primary'>See product</a><br><br>";
											echo "</font>";
											echo "</div>";
											echo "</div><br>";
								echo "</div></b>";
								$i++;
										}
							echo "</div><br>";
										}
						
						?>	
							
						</div>
</body>
</html>