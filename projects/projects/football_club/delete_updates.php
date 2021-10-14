<?php?>
<?php

include('connection.php');


if(isset($_GET['delete'])){

	$id=$_GET['delete'];

	$remove="DELETE FROM updates WHERE id=$id";

	if(mysqli_query($conn,$remove)){
           
        echo "<script type='text/javascript'>confirm(' Are sure you want to delete the record !! ?')</script>";
         
		 
	}
	else{

		echo "<script type='text/javascript'>alert('Failed to insert data Tanaka')</script>".mysqli_error($conn);
	}



}
 

header('localhost:admin_game_updates.php');
 





mysqli_close($conn);

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
		<h2 class="text-center bg-primary p-2">Make Games-Updates Amendments.</h2>
	</div>
	<hr>


	<div class="container">
		<a class="text-center btn btn-success" href="admin_game_updates.php"><b>| Back</b></a>
		 	 
    </div>
    <hr>
	<br>








<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>