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
	<div class="container">
		<h2 class="text-center bg-infor">YoungStar Team</h2>
	</div>
	<hr>

	<div class="container jumbotron">

		<h3 class="text-center bg-primary p-2">Games Updates Panel</h3>
		
		 <form action="insert_updates.php" class="form-group" method="post">
		 
		 	<input class="form-control p-3" type="text" name="games" placeholder="enter games played">
		 	<input class="form-control p-3" type="text" name="dates" placeholder="enter dates">
		 	<input class="form-control p-3" type="text" name="hoster" placeholder="enter hosting team">
		 	<input class="form-control p-3" type="text" name="ground" placeholder="enter the name of the ground the game took place">
		 	<input class="form-control p-3" type="text" name="scores" placeholder="enter scores recorded">
		 	<input class="form-control p-3" type="text" name="scorer" placeholder=" who scored the goals?">
		 	<input class="form-control p-3" type="text" name="scoretime" placeholder="when the goals were scored?">
		 	<input class="form-control p-3" type="number" name="points" placeholder="enter points the team got">
		 	<input class="form-control p-3" type="number" name="position" placeholder="what is the position of the team now in the league?">
		 	<input class="form-control p-3" type="text" name="nextgame" placeholder="enter next game to be played"><br>
		 	<button class="btn btn-success" name="submit">Save</button>
		  

		 </form>
		 <hr>

		 <div class="container">
		 	<a class="text-center btn btn-danger" href="admin_login_updates.php"><b>| Back</b></a>
		 	<a class="text-center btn btn-danger" href="admin_game_updates.php"><b>| Amend-Games-Updates</b></a>
		 </div>
		 <hr>
	</div>

	 








<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>