<!DOCTYPE html>
<html>
    <head>
        <title>Landing Page</title>
    </head>
    <body>
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