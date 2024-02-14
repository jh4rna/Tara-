<?php
if(isset($_POST['submit'])) {
    $to = 'info@taraguesthousesauraha.com';
    $email = $_POST['email'];
    $headers ="New Subscribe from: " . $email;

    if (mail($to, $email, $headers)) {
        echo "<script>window.alert('Email Sent Successfully')</script>";
        echo "<script>window.open('index.html','_self')</script>";

    }else {
    echo "<script>window.alert('Error Found')</script>";
    }

}

?>