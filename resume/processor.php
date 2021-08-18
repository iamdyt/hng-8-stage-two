<?php 
    session_start();

    $_SESSION['message'] = 'Your Message Sent Successfully !!!';
    header('location:resume-page.php');

?>