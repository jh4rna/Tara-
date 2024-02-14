<?php
session_start();

if((isset($_SESSION[' adminLogin']) && $_SESSION['adminLogin']==true)){
  redirect('dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Panel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="myform">
            <form action="" method="post">
                <h2>ADMIN LOGIN</h2>
                <input type="text" placeholder="Admin Name" name="name" required>
                <input type="password" placeholder="Password" name="password" required>
                <div class="remember-forgot" style="margin-top: -14px; margin-bottom: 10px;">
                <p style="text-align: right;"><a href="">Forgot password</a></p>

                </div>
                
                
                <button type="submit" name="submit" style="width: 100%; margin-bottom: 10px; border-radius: 8px;">LOGIN</button>

                <div class="register-link"> 
                <p> Don't have an account? <a href= "signup.php" >Signup</a></p>

                </div>

            </form>
            <?php
            //connecting database
            include 'connection.php';
            //clicking to submit button
            if(isset($_POST['submit']))
            {
                $a=$_POST['name'];
                $c=$_POST['password'];
                if($a=="" || $c=="")
                {
                    echo "<div class='alert alert-warning'>Some fields are empty!</div>";
                }
                else{
                    $query="select * from users where username='$a' and password='$c'";
                    $run=mysqli_query($conn, $query);
                    if(mysqli_num_rows($run)>0)
                    {
                        $_SESSION['name']=$a;
                        echo "<script>window.open('dashboard.php','_self')</script>";

                    }
                    else{
                        echo "<div class='alert alert-danger'>Invalid User!</div>";
                    }
                }
            }
            mysqli_close($conn);
            ?>


        </div>

        <div class="image"> <img src="image/Tara-Guest-House-entrance.jpg" alt="entrance"></div>
    </div>
    
</body>
</html>