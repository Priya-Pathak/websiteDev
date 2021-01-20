<!DOCTYPE html>
<html>
    <head>
        
        
        <link rel="stylesheet" href="register.css">
        <title>Landing Page</title>
    </head>
    <body>

        <div class="header">
            <hr>
            <h1>XYZ</h1>
            <hr>
        </div>
        <div class = "main">
       
        <div class = "left">
        <h1>Hi, <?php echo "<h4>".$_POST['uname']."</h4>";?></h1>
        <h3>It was nice hearing from you</h3>
        <h5>Thanks for your valuable feedback</h5>

        <button onclick="location.href='index.html'" type="button">
         Go back to home page</button>
        
        </div>
        <div class = "right">
            <img src="https://cdn.pixabay.com/photo/2015/07/06/14/57/speech-833379__340.png">
        </div>
        

    </div>
         <div id="footer">
            <h5>© 2021 Datamatics Global Services Inc.</h5>
        </div>

        <?php
        
        if(isset($_POST['submit'])){
            $userName = $_POST['uname'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $msg = $_POST['msg'];
            echo $userName."<br>";
            echo $email."<br>";
            echo $msg."<br>";
        }

        else{
            echo "<br>form not submitter<br>";
        } 
        
        ?>
    </body>
</html>