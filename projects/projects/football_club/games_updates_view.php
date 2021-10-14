<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>View-Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
</head>
<body>

	<div class="container">
		<br>
		<br>
		<hr>

		<h3 class="text-center bg-primary p-3">View The Games Updates Here</h3>

	    <table class=" table table-bordered">
	
	        <tr class="bg-danger">
		        <th>Id</th>
		        <th>Games-Played</th>
		        <th>Dates</th>
		        <th>hoster</th>
		        <th>Ground</th>
		        <th>Goals-Recorded</th>
		        <th>Goal-Scoler</th>
		        <th>Time-Goals-Scored</th>
		        <th>Points</th>
		        <th>Position</th>
		        <th>Next-Game</th>
		         
		         
	        </tr>

    
<?php

    require('connection.php');

    $select=mysqli_query($conn,"SELECT* FROM updates");


     while($running=mysqli_fetch_array($select))




     {
     ?>


	        <tr class="font-weight-bold">
		        <td class="text-danger"><?php echo$running['id'];?></td>
		        <td class="text-primary"><?php echo$running['games'];?></td>
		        <td class="text-info"><?php echo$running['dates'];?></td>
		        <td class="text-warning"><?php echo$running['hoster'];?></td>
		        <td class="text-success"><?php echo$running['ground'];?></td>
		        <td><?php echo$running['scores'];?></td>
		        <td class="text-primary"><?php echo$running['scorer'];?></td>
		        <td class="text-danger"><?php echo$running['scoretime'];?></td>
		        <td class="text-warning"><?php echo$running['points'];?></td>
		        <td class="text-info"><?php echo$running['position'];?></td>
		        <td class="text-success"><?php echo$running['nextgame'];?></td>
		     

		         
	        </tr>


    
    <?php
     }

    ?>


        </table>


     
    <hr>

		 <div class="container">
		 	<a class="text-center btn btn-warning" href="landing.php"><b>| Back</b></a>

		 </div>
		 <hr>
	</div>






     





<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>

 




