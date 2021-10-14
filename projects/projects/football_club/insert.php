<?php

include('connection.php');


if(isset($_POST['submit'])){


	$Names=$_POST['name'];
	$Surnames=$_POST['surname'];
	$Ages=$_POST['age'];


	$insert="INSERT INTO able (name,surname,age)VALUES('$Names','$Surnames','$Ages')";

	if(mysqli_query($conn,$insert)){

		$_SESSION['message']="Have been Successfully Registered.|";
	    $_SESSION['msg_type']="success";

		//header('location:view.php');

		 
	}
	else{

		echo"<script type='text/javascript'>alert('Failed to insert data Tanaka')</script>";
	}
}
else{

	header('location:index.php');
}








?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Delete</title>
	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">

</head>
<body>

	<hr>
	 
    <div class="container jumbotron"> 
	<?php
		if(isset($_SESSION['message'])):?>

			<div class=" container alert-success p-2">

				<?php
				echo$_SESSION['message'];
				echo"<b>$Names</b>--";
				echo"<b>$Surnames</b>";
				unset($_SESSION['message'])
				 

				?>
				
			</div>
		<?php endif ?>

	<hr>

    </div>
	<div class="container">
		<a class="text-center btn btn-success" href="view.php"><b>| See</b></a>
		 	 
    </div>
    <hr>
	<br>








<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>