<?php
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
                <h2>ADMIN SIGN UP</h2>
                <input type="text" placeholder="Username" name="name" required>
                <input type="email" placeholder="Email" name="email"required>
                <input type="password" placeholder="Password" name="password"required>
                <input type="password" placeholder="Confirm Password" name="confirmpassword"required>
                
                
                <button type="submit" name="submit" style="width: 100%; margin-bottom: 10px; border-radius: 8px;">Sign up</button>
                <div class="register-link"> 
                <p> Already have an account? <a href= "index.php" >Login</a></p>

                </div>

            </form>
            <?php
            include 'connection.php';
            if(isset($_POST['submit']))
            {
                 $a=$_POST['name'];
                $b=$_POST['email'];
               $c=$_POST['password'];
                $d=$_POST['confirmpassword'];

                if($c!=$d){
                    echo "<div class='alert alert-warning'>Password not being matched!</div>";
                }
                else
                {
                    //querry start
                    $query="insert into users(username,email,password) values('$a','$b','$c')";
                    $run=mysqli_query($conn,$query);
                    if($run)
                    {
                        echo"<div class='alert alert-success'>Created account successfully!</div>";
                    }
                    else
                    {
                        echo "<div class='alert alert-danger'>Error found!</div>";
                    }
                    //end
                }

            }

            ?>
        </div>
        <div class="image"> <img src="image/Tara-Guest-House-entrance.jpg" alt="entrance"></div>
    </div>
    
</body>
</html>