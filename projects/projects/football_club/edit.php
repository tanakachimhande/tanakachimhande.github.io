<?php
include('connection.php');
 
$Names='';
$Surnames= '';
$Ages='';

if(isset($_POST['edit'])){

    $id=$_GET['edit'];
	$Names=$_POST['name'];
	$Surnames=$_POST['surname'];
	$Ages=$_POST['age'];


}

 

$id=$_GET['edit'];
$select=mysqli_query($conn,"SELECT* FROM able WHERE id=$id");

while($running=mysqli_fetch_array($select)){


	$Names=$running['name'];
	$Surnames=$running['surname'];
	$Ages=$running['age'];
}




?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">

	</style>
</head>
<body>
	<br>
	<br>

	<hr>

	<div class="container jumbotron">

		<?php
		if(isset($_SESSION['message'])):?>

			<div class="alert-success p-2">

				<?php
				echo$_SESSION['message'];
				unset($_SESSION['message'])
				 

				?>
				
			</div>
		<?php endif ?>



		

		<h3 class="text-center bg-primary p-2">Update the Form In Php</h3>
		
		 <form action="update.php" class="form-group" method="post">
		    <input type="hidden" name="id" value="<?php echo$id;?>">
		 	<input class="form-control p-3" type="text" name="name" value="<?php echo$Names;?>" placeholder="enter your name">
		 	<input class="form-control p-3" type="text" name="surname"value="<?php echo$Surnames;?>"  placeholder="enter your surname">
		 	<input class="form-control p-3" type="number" name="age"value="<?php echo$Ages;?>"  placeholder="enter your age"><br>
		 	 
		 	<button class="btn btn-info" type="submit" name="update">Update</button>
		  
		  

		 </form>
	</div>
	
	<hr>
	<div class="container">
		<a class="text-center btn btn-danger" href="admin.php"><b>| Back</b></a>
		 	 
	</div>
	<hr>
	<br>






<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>