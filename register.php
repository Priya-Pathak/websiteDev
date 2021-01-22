<!DOCTYPE html>
<html lang="en-us">
<head>


<?php
    if(isset($_POST['submit'])){
        $userName = $_POST['uname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        $msg = $_POST['msg'];
        if($userName!='' && $email != '' && $pnumber != '' && $msg != ''){        
            //This is added so that browser does not go to landing page when form is left blank
        }
        else{
            header("location:index.html");
        }
            
        }

    else{
            header("location:index.html");
        } 
?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="register.css">
<title>Landing Page</title>
</head>
<body>


<div class="header">
<hr>
<h1>XYZ</h1>
</div>
        
        
<div class="main">
       

<div class="left">
<h1>Hi, <?php echo "<h4>".$_POST['uname']."</h4>";?></h1>
<h3>It was nice hearing from you</h3>
<h5>Thanks for your valuable feedback</h5>
<button onclick="location.href='index.html'" type="button">Go back to home page</button>
</div>
        
        
<div class="right">
<!-- <img src="https://cdn.pixabay.com/photo/2015/07/06/14/57/speech-833379__340.png"> -->
<img src="https://c.tenor.com/44LDvTiDM8cAAAAj/thanks-a-ton-thanks-a-bunch.gif" alt="Thank you for your message!">
<h3>Every note from you adds value to us</h3>
<h1>Thank You!!<h1>
</div>
        

</div>


<div id="footer">
<h5>© 2021 XYZ Demo Services Inc.</h5>
</div>


</body>
</html>