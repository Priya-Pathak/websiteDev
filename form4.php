<?php
session_start();


if (isset($_POST['phn'])){
    if(empty($_POST['phn'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form3.php");
    }
    else{
        $_SESSION['phn'] = $_POST['phn'];
    }
}
    else{
        header("location: form.php");
    }

?>
<!DOCTYPE html>
<html lang="en-us">


<head>
<title>
Form
</title>

<link rel="stylesheet" href="form.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body>
<div class = "header"><h1>F &nbsp; O &nbsp; R &nbsp; M </h1></div>

<span id="error">
 <!---- Initializing Session for errors --->
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>

<form action="form5.php" method="POST">
    <div class="field">
    <label style={font-size: 20px;}>Gender:</label>
    <hr>
    <br>
    <input type="radio" id="male" name="gender" value="male">
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    </div>
    <div class="container">
    <input type="submit" value="Submit" name="submit">
    </div>
</form>
<!--<form  action='' method="POST">
<label for="name">Name:</label>
<input type="text" id="name">
<fieldset>
<label>Gender:</label>
<br>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label><br>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label><br>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label>
</fieldset>

<label for="phone">Phone:</label>
<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
<br>
<label for="dob">Date Of Birth:</label>
<input type="date" id="dob">
<br>
<label for="email">Email:</label>
<input type="email" id="email">
<fieldset>
<label for="photo">Select a photo:</label>
<input type="file" id="photo" name="photo">
<br>
<br>
<label for="sign">Select a signature:</label>
<input type="file" id="sign" name="sign">
</fieldset>

<input type="submit" id="submit" value="Submit">
</form>-->
</body>


</html>

