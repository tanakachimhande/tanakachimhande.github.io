 

<?php
include('connection.php');

$Names='';
$Surnames= '';
$Ages='';

$id=$_GET['edit'];


$select=mysqli_query($conn,"SELECT* FROM updates WHERE id=$id");

while($running=mysqli_fetch_array($select)){


	$game=$running['games'];
	$date=$running['dates'];
	$hoster=$running['hoster'];
	$ground=$running['ground'];
	$score=$running['scores'];
	$scolers=$running['scorer'];
	$goaltime=$running['scoretime'];
	$point=$running['points'];
	$position=$running['position'];
	$next=$running['nextgame'];
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

		<h3 class="text-center bg-primary p-2">Update the Games-Updates</h3>
		
		 <form action="update_updates.php" class="form-group" method="post">
		 
		 	<input class="form-control p-3" type="text" name="games" value="<?php echo$game;?>" placeholder="enter games played">
		 	<input class="form-control p-3" type="text" name="dates" value="<?php echo$date;?>" placeholder="enter dates">
		 	<input class="form-control p-3" type="text" name="hoster" value="<?php echo$hoster;?>" placeholder="enter hosting team">
		 	<input class="form-control p-3" type="text" name="ground" value="<?php echo$ground;?>" placeholder="enter the name of the ground the game took place">
		 	<input class="form-control p-3" type="text" name="scores" value="<?php echo$score;?>" placeholder="enter scores recorded">
		 	<input class="form-control p-3" type="text" name="scorer" value="<?php echo$scolers;?>" placeholder=" who scored the goals?">
		 	<input class="form-control p-3" type="text" name="scoretime" value="<?php echo$goaltime;?>" placeholder="when the goals were scored?">
		 	<input class="form-control p-3" type="number" name="points" value="<?php echo$point;?>" placeholder="enter points the team got">
		 	<input class="form-control p-3" type="number" name="position" value="<?php echo$position;?>" placeholder="what is the position of the team now in the league?">
		 	<input class="form-control p-3" type="text" name="nextgame" value="<?php echo$next;?>" placeholder="enter next game to be played"><br>
		 	<a class="btn btn-info" href="update_updates.php?update=<?php echo$running['id'];?>">Update</a>
		  

		 </form>
	</div>
	
	<hr>
	<div class="container">
		<a class="text-center btn btn-danger" href="admin_game_updates.php"><b>| Back</b></a>
		 	 
	</div>
	<hr>
	<br>






<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>