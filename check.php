<?php
    try {
      $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //if(isset($_POST['username']) && isset($_POST['password']))
    {
//        print_r($_SESSION);
        $password =$_GET['password'];
        $username=$_GET['username'];
        $sql = "SELECT  * FROM `userdetail` WHERE username='$username' and PASSWORD='$password'";
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
        else {
            //header('location:firstpage.php');
            $msg="<div style='color:red'>please enter valid username or password.</div>";
            header("location:firstpage.php?msg=$msg");
//             header("location:firstpage.php?msg=Your profile is Successfully Update.");
      
        }
    }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
?>