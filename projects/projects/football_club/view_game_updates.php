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
	
	        <tr>
		        <th>Id</th>
		        <th>Name</th>
		        <th>Surname</th>
		        <th>Age</th>
		         
	        </tr>

    
<?php

    require('connection.php');

    $select=mysqli_query($conn,"SELECT* FROM able");


     while($running=mysqli_fetch_array($select))




     {
     ?>


	        <tr>
		        <td><?php echo$running['id'];?></td>
		        <td><?php echo$running['name'];?></td>
		        <td><?php echo$running['surname'];?></td>
		        <td><?php echo$running['age'];?></td>
		         
	        </tr>


    
    <?php
     }

    ?>


        </table>


     
    <hr>

		 <div class="container">
		 	<a class="text-center btn btn-warning" href="insert.php"><b>| Back</b></a>
		 </div>
		 <hr>
	</div>






     





<script src="js/bootsrap.js"></script>
<script src="js/jquery.js"></script>

</body>
</html>

 




 