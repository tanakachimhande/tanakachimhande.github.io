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

		<h3 class="text-center bg-primary p-2">Registration Form</h3>
		
		 <form action="insert.php" class="form-group" method="post">
		     
		 	<input class="form-control p-3" type="text" name="name" placeholder="enter your name">
		 	<input class="form-control p-3" type="text" name="surname" placeholder="enter your surname">
		 	<input class="form-control p-3" type="number" name="age" placeholder="enter your age"><br>
		 	<button class="btn btn-success" name="submit">Save</button>
		  

		 </form>
		 <hr>

		 <div class="container">
		 	<a class="text-center btn btn-danger" href="landing.php"><b>| Back</b></a>
		 </div>
		 <hr>
	</div>

	 








<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>
</body>
</html>