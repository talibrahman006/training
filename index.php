<?php
include("db.php");
//import mysql
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="button.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <li class="active1"><a href="./">ToDo</a></li>
    </div>
    <ul class="nav navbar-nav">
      <li class="active1"><a href="./">Home</a></li>
      <li class="active1"><a href="add.php">Add</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <table class="table table-striped">
    <thead>
    <th>TASK ID</th>
      <th>NAME</th>
      <th>START TIME</th>
      <th>STOP TIME</th>
      <th>LOCATION</th>
      <th>Action</th>
      
    </thead>
    <tbody>
     
    
  <?php

//print_r($conn);
$sql ="SELECT * FROM tasks";
$query =mysqli_query($conn, $sql);
//print_r($query);
if(mysqli_num_rows($query)==0)
{
  echo "no rows in the table";
}
else{
  
  while($row=mysqli_fetch_assoc($query))
    {

      
      echo "<tr>";
      echo "<td>".$row["taskid"]."</td>";

      echo "<td>".$row["name"]."</td>";
      echo "<td>".$row["starttime"]."</td>";
      echo "<td>".$row["stoptime"]."</td>";
      echo "<td>".$row["location"]."</td>";
      echo "<td><a href='delete.php?taskid=".$row["taskid"]."'>Delete</a></td>";
  }

}

 ?> 
  </tbody>
  </table>
</div>

</body>
</html>
