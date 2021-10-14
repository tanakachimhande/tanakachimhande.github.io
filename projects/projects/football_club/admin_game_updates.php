<?php?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>View-Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootsrapstyle.css">
</head>
<body>

	<div class="containe">
		<br>
		<br>
		<hr>

		<h3 class="text-center bg-primary p-3">Amend The Games Updates Here</h3>

	    <table class=" table table-bordered">
	
	        <tr class="bg-danger font-weight-bold">
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
		        <th>Edit</th>
		        <th>Delete</th>
		         
		         
	        </tr>

    
<?php

    require('connection.php');

    $select=mysqli_query($conn,"SELECT* FROM updates");


     while($running=mysqli_fetch_array($select))




     {
     ?>


	        <tr class="font-weight-bold text-primary">
		        <td><?php echo$running['id'];?></td>
		        <td><?php echo$running['games'];?></td>
		        <td><?php echo$running['dates'];?></td>
		        <td><?php echo$running['hoster'];?></td>
		        <td><?php echo$running['ground'];?></td>
		        <td><?php echo$running['scores'];?></td>
		        <td><?php echo$running['scorer'];?></td>
		        <td><?php echo$running['scoretime'];?></td>
		        <td><?php echo$running['points'];?></td>
		        <td><?php echo$running['position'];?></td>
		        <td><?php echo$running['nextgame'];?></td>
		        <td><a class="btn btn-success" href="edit_updates.php?edit=<?php echo$running['id'];?>">Edit</a></td>
		        <td><a class="btn btn-danger" href="delete_updates.php?delete=<?php echo$running['id'];?>">Delete</a></td>

		         
	        </tr>


    
    <?php
     }

    ?>


        </table>


     
    <hr>

		 <div class="container">
		 	<a class="text-center btn btn-warning" href="games_updates.php"><b>| Back</b></a>
		 </div>
		 <hr>
	</div>






     





<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>

 




