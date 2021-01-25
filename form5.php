<?php
session_start();


if (isset($_POST['gender'])){
    if(empty($_POST['gender'])){
        $_SESSION['error'] = "Please fill the field again";
        header("location: form.php");
    }
    else{
        //header("location: form.php");
    }
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

<div class="container">
<h1>Hi, <?php echo "<h4>".$_SESSION['name']."</h4>";?></h1>

<h4>We have received info provided by you</h4>

</div>
</body>


</html>

