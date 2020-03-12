<?php
    try {
      $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //if(isset($_POST['username']) && isset($_POST['password']))
    {
//        print_r($_SESSION);
        $password =$_GET['password'];
        $username=$_GET['username'];
        $sql = "SELECT  * FROM `userdetail` WHERE NAME='$username' and PASSWORD='$password'";
        $query=$dbhandler->query($sql);
        $count=$query->rowCount();
        if($count>0)
        {
            $row = $query->fetch(PDO::FETCH_ASSOC);
            session_start();
            $_SESSION['username']=$username;
            $_SESSION['id']=$row['id'];
            //print_r($_SESSION);
            header('location:firstpage.php'); 
        }
    }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
?>