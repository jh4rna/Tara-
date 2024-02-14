<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
else

?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Dashboard</title>
</head>


<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0 h-font">Tara Guest House</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>

    </div>
    

    </div>
    <!-- container -->

    <div class="container-fluid" style="margin-top:10px">
        <div class="row">
            <div class="col-md-3 bg-dark text-light">
                <h1>Dashboard</h1>
                <a href="addpost.php" class="btn btn-light btn-sm">Add Post</a>
                <a href="users.php" class="btn btn-success btn-block" >Users</a>
                <a href="reservation.php" class="btn btn-success btn-block" >Reservations</a>
                <a href="upload-image.php" class="btn btn-success btn-block" >Upload Image</a>
                

            </div>
            <div class="col-md-9">
                <h1>Welcome!</h1>
                <h2>Tara Guest House</h2>
            </div>
        </div>
    </div>



    
</body>
</html>
