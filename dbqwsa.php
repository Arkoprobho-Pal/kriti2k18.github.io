<?php
require "login_reg/dbcon/common.php";

if (!isset($_SESSION['superuser'])) 
{ 
    header('location: netflix.php'); 
}
?>
<html>
<head>
	<title>
	Kriti Database
	</title>
        <link rel="icon" href="img/icon.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100&effect=neon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>
<body style="background-color:#212F3C;">

<?php

    
    $sql="SELECT * FROM kriti_users_2 WHERE 1";
    $result =mysqli_query($con,$sql);
    $row    =mysqli_num_rows($result);

    if($row>0)
    {
      echo  "<table class=\"table table-bordered\" style=\"color:#FBFCFC;\" ><tbody>
      <tr>
      <th>#</th> 
      <th>ID</th>
      <th>Name</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Gender</th>
      <th>College</th>
      <th>Verified</th>
      </tr>";
    }
	$counter=0;
    while ($fetch  =mysqli_fetch_array($result))
    {  	$counter++;	
       echo "<tr><td>".$counter."</td><td>".$fetch[0]."</td><td>".$fetch[3]."</td></td><td>".$fetch[5]."</td><td>".$fetch[1]."</td><td>".$fetch[4]."</td><td>".$fetch[6]."</td><td>".$fetch[8]."</td></tr>";
    }

    if($row>0)
    {
      echo  "</tbody></table>";
    }
    else
    	echo "<center>You didnt participate in any events yet.</center>"; 


?>


</body>

</html>
