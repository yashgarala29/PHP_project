<?php
    $name=$_POST["name"];
    $password=$_POST["pass"];
    $rpassword=$_POST["rpass"];
    $bdate=$_POST["bdate"];
    $mail=$_POST["email"];
    if(strcmp($password, $rpassword) != 0)
    {
        echo "pleas enter valid password";
         header('location:new_user.php'); 
    }
    else {
       try{
            $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
            $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $sql="insert into userdetail (name,PASSWORD,EMAIL,BDATE) values ($name,$password,$mail,$bdate)";
            $sql = "INSERT INTO `userdetail`(`NAME`, `PASSWORD`, `EMAIL`, `BDATE`) VALUES ('$name','$password','$mail','$bdate')";
            $query=$dbhandler->query($sql);
            header('location:firstpage.php'); 
       }catch (Exception $e)
       {
           echo $e->getMessage();
            die();
       }
    }
//$sql = "INSERT INTO `userdetail`(`NAME`, `PASSWORD`, `EMAIL`, `BDATE`) VALUES (\'yas\',\'asd\',\'asdd\',\'qwe\')";
?>