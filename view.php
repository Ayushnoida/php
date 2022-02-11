<?php 

session_start();

include "connn.php";

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

?>


<!DOCTYPE html>

<html>

<head>
    <style>
      .ayu {
  background-color: #4CAF50; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 25px 50px 75px 100px;
}
h1{
    text-align : center;
}
   .table{
       color: black;
   }

    </style>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>
    <a text-align="center" href="http://localhost/CRUD2/create.php"><button class="ayu">Add Data</button></a> <h1>STUDENTS DETAILS</h1>

    <div class="container">

        <h2>users</h2>
        <?php
       // print_r($_SESSION);
        ?>

    <table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Image</th>

        <th>Action</th>

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['firstname']; ?></td>

                    <td><?php echo $row['lastname']; ?></td>

                    <td><?php echo $row['email']; ?></td>

                    <td><?php echo $row['gender']; ?></td>
                   
                    <td><img src="img/<?php echo $row['image']; ?>"  width="50" height="60"></td>
                    

                   

                    <td><a class="btn btn-info" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger"   href="delete.php?id=<?php echo  $row['id'];?>" onclick="return confirm('Are You Sure ?')" >Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>