<?php
    $u_name=$_POST["username"];
    $name=$_POST["name"];
    $password=$_POST["pass"];
    $rpassword=$_POST["rpass"];
    $bdate=$_POST["bdate"];
    $mail=$_POST["email"];
    if(strcmp($password, $rpassword) != 0)
    {
        echo "please enter valid password";
         header('location:new_user.php'); 
    }
    else {
       try{
            $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //$sql="insert into userdetail (name,PASSWORD,EMAIL,BDATE) values ($name,$password,$mail,$bdate)";
            try {
                $sql = "INSERT INTO `userdetail`('username',`NAME`, `PASSWORD`, `EMAIL`, `BDATE`) VALUES ('$u_name','$name','$password','$mail','$bdate')";
                $query=$dbhandler->query($sql);
                header('location:firstpage.php');     
            } catch (Exception $ex) {
                echo "<script>alert('Username already exists, please register with new username!!!')</script>"."<script>window.location.href='new_user.php'</script>";
//                 header('location:new_user.php'); 
            }
            
       }catch (Exception $e)
       {
           echo $e->getMessage();
            die();
       }
    }
//$sql = "INSERT INTO `userdetail`(`NAME`, `PASSWORD`, `EMAIL`, `BDATE`) VALUES (\'yas\',\'asd\',\'asdd\',\'qwe\')";
?>