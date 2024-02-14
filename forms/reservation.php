<?php
if(isset($_POST['submit'])) {
    $to = 'info@taraguesthousesauraha.com';
    $Fname = $_POST['Fname'];
    $Lname = $_POST['Lname'];
    $email = $_POST['email'];
    $Pnumber = $_POST['Pnumber'];
    $Guest = $_POST['Guest'];
    $cGuest=$_POST['cGuest'];
    $Roomtype = $_POST['Roomtype'];
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    //for mail
    $subject = "You have new Reservation" . $Fname ." ". $Lname;
    $message = "Customer details: " . "\nFirst Name: " . $Fname. "\nLast Name: " . $Lname . "\nPhone Number: " . $Pnumber . "\nNo. of Adult: " . $Guest . "\nNo. of Child: " . $cGuest . "\nArrival Date: " . $arrival . "\nDeparture: " . $departure .  "\nRoom: " . $Roomtype;
    $headers ="From: " . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>window.alert('Email Sent Successfully')</script>";
        echo "<script>window.open('reservation.html','_self')</script>";

    }else {
    echo "<script>window.alert('Error Found')</script>";
    }

}

?>