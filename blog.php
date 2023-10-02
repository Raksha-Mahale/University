<?php
        include 'database.php';
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $ccomment=$_POST['ccomment'];
        }
        $sql="insert into comment(name,email,ccomment) values('$name','$email','$ccomment')";
        if(mysqli_query($con,$sql))
        {
            echo "<script> alert ('new record inserted')</script>";
            echo "<script> window.open('blog.html','_self')</script>";
        }
        else
        {
            echo "error:".mysqli_error($con);
        }
        mysqli_close($con);
        ?>
