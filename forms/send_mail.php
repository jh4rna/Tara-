<?php
if (isset($_POST['submit']))
{
    $to='info@taraguesthousesauraha.com';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message']."\n"."Contact: ".$phone;
    $subject=$_POST['subject'] . $name;
    $headers="From: ". $email;
    
    if(mail($to, $subject, $message, $headers))
    {
        echo "<script>window.alert('Email Sent Successfully')</script>";
        echo "<script>window.open('contact.html','_self')</script>";

    }
    else {
        echo "<script> window.alert('Error Found') </script>";

    }
    

   
}
?>
