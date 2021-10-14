 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admins</title>
	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
	<style type="text/css">
		
		#cont{

			padding-top:100px;
			 

		}

		form{

			 text-align: center;
			 background-color: maroon;
			 padding-top: 20px;


		}
		.one{

			height: 2px;
			background: green;
		}


	</style>
</head>
<body>

	<br>
	<hr>


	<div class="container jumbotron" id="cont">

		<h2 class="text-center">Please Login to delete and Edit Games-Updates.</h2><br>

		<form method="post">
			<label>username</label>
			<input id="name" type="text" name="name"><br>
			<label>password</label>
			<input  id="pass" type="password" name="pass"><br><br>
			<input class="btn btn-primary" type="submit" name="login" value="Login">
			 
			<br>
			<hr>
			
		</form>
		
	</div>
	<div class="container">
		 <a class="text-center btn btn-danger" href="landingpage.php"><b>| Back</b></a>
	</div>
	<br>
	<hr class="one">

	<?php

	 $conn=mysqli_connect('localhost','root','','login');

	  
	if(isset($_POST['login'])){

		$username=$_POST['name'];
		$username=$_POST['pass'];

		$select=mysqli_query($conn,"SELECT* FROM validate WHERE username='".$_POST['name']."' and password='".$_POST['pass']."'");
		

		if(mysqli_fetch_assoc($select)){

			echo"<script type='text/javascript'>alert('Loged in successfylly as Tanaka')</script>";
			header('location:games_updates.php');
		}
		else{
			echo"<script type='text/javascript'>alert('Invalid username or password')</script>";
			 
		}
	}
	else{
		//header('location:admin_login_updates.php');
	}
	
	
	
	
	?>




	 
		




	 




<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>