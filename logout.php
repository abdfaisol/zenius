<?php
include 'koneksi.php'; 
session_start();
    $_SESSION['email'] = '';
    unset($_SESSION['email']);
    session_unset();
    session_destroy();
    header("Location: http://localhost/zenius/")
 ?>