<?php?>
<?php


include('connection.php');


if(isset($_GET['update'])){

    $id=$_GET['update'];
	$game=$_GET['games'];
	$date=$_GET['dates'];
	$hoster=$_GET['hoster'];
	$ground=$_GET['ground'];
	$score=$_GET['scores'];
	$scolers=$_GET['scorer'];
	$goaltime=$_GET['scoretime'];
	$point=$_GET['points'];
	$position=$_GET['position'];
	$next=$_GET['nextgame'];



	$update="UPDATE updates SET games='$game',dates='$date',hoster='$hoster',ground='$ground',scores='$score',scorer='$scolers',scoretime='$goaltime',points='$point',position='$position',nextgame='$next' WHERE id='$id";

	if(mysqli_query($conn,$update)){

		header('location: games_updates_view.php');
	}
	else{

		echo "Failed to update Tanaka".mysqli_error($conn);
	}



}
else{

	header('location:games_updates_view.php');
}







?>