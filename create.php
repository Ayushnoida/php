
<?php
//session_start();
require 'connn.php';

if(isset($_POST["submit"])){
  $first_name = $_POST['firstname'];

  $last_name = $_POST['lastname'];

  $email = $_POST['email'];

  $password = $_POST['password'];

  $gender = $_POST['gender'];
  if($_FILES['image']['name']){
		move_uploaded_file($_FILES['image']['tmp_name'], "img/".$_FILES['image']['name']);
		$img="".$_FILES['image']['name'];
  }
  
      
  $query = "INSERT INTO users VALUES('', '$first_name','$last_name','$email','$password','$gender', '$img')";
  mysqli_query($conn, $query);
  echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'view.php';
      </script>
      ";
}
?>

<!DOCTYPE html>

<html>
  <head>
  <style>
      .ayu {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 25px 25px 10px;
}
    </style>
  </head>

<body>
  <?php
//$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>

<h2>Signup Form</h2>

<form action=" " method="POST" enctype="multipart/form-data">

  <fieldset>

    <legend>Personal information:</legend>

    First name:<br>

    <input type="text" name="firstname">

    <br>

    Last name:<br>

    <input type="text" name="lastname">

    <br>

    Email:<br>

    <input type="email" name="email">

    <br>

    Password:<br>

    <input type="password" name="password">

    <br>

    Gender:<br>

    <input type="radio" name="gender" value="Male">Male

    <input type="radio" name="gender" value="Female">Female

    <br><br>

    <input type="file" name="image">

    <br><br>

   
    <input type="submit" name="submit" value="submit">

  </fieldset>

</form>
<a href="view.php"><button class="ayu">CLICK HERE TO VIEW DATA</button></a>

</body>

</html>
