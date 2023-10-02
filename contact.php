<?php
        include 'database.php';
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];

        }
        $sql="insert into contact(name,email,subject,message) values('$name','$email','$subject','$message')";
        if(mysqli_query($con,$sql))
        {
            echo "<script> alert ('new record inserted')</script>";
            echo "<script> window.open('contact.html','_self')</script>";
        }
        else
        {
            echo "error:".mysqli_error($con);
        }
        mysqli_close($con);
        ?>




