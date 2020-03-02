<?php
session_start();
session_destroy();
unset($_SESSION['counter']);
header('location:firstpage.php');
?>