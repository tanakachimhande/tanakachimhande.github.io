 
<?php

include('connection.php');


if(isset($_POST['submit'])){


	$game=$_POST['games'];
	$date=$_POST['dates'];
	$hoster=$_POST['hoster'];
	$ground=$_POST['ground'];
	$score=$_POST['scores'];
	$scolers=$_POST['scorer'];
	$goaltime=$_POST['scoretime'];
	$point=$_POST['points'];
	$position=$_POST['position'];
	$next=$_POST['nextgame'];




	$insert="INSERT INTO updates (games,dates,hoster,ground,scores,scorer,scoretime,points,position,nextgame)VALUES('$game','$date','$hoster','$ground','$score','$scolers','$goaltime','$point','$position','$next')";

	if(mysqli_query($conn,$insert)){

		header('location:games_updates_view.php');

		 
	}
	else{

		echo"<script type='text/javascript'>alert('Failed to insert data Tanaka')</script>".mysqli_error($conn);
	}
}
else{

	header('location:games_updates.php');
}








?>