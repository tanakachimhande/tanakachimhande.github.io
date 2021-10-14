<?php

include('connection.php');


if(isset($_GET['delete'])){

	$id=$_GET['delete'];
	 


	$remove="DELETE FROM able WHERE id=$id";

	if(mysqli_query($conn,$remove)){

		$_SESSION['message']="Data has been deleted";
	    $_SESSION['msg_type']="success";
           
        //echo "<script type='text/javascript'>confirm(' Are sure you want to delete the record !! ?')</script>";
         
		 
	}
	else{

		echo "<script type='text/javascript'>alert('Failed to insert data Tanaka')</script>";
	}



}
 

header('localhost:view.php');
 





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
	<?php
		if(isset($_SESSION['message'])):?>

			<div class=" container alert-danger p-2">

				<?php
				echo$_SESSION['message'];
				 
				unset($_SESSION['message'])
				 

				?>
				
			</div>
		<?php endif ?>

	<hr>

    </div>
	<div class="container">
		<a class="text-center btn btn-success" href="admin.php"><b>| Back</b></a>
		 	 
    </div>
    <hr>
	<br>








<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>