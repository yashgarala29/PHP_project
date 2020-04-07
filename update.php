<?php

    $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $u_name=$_POST["username"];
    $name=$_POST["name"];
    $id=$_POST["id"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $bdate=$_POST["bdate"];
    if(!empty($_FILES["photo"]["name"]))
    {
            unlink("photo/userphoto/".$u_name.".png");
            $path="photo/userphoto/".basename($_FILES["photo"]["name"]);
            move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if($ext == 'png' )
            {
                $new="photo/userphoto/".$u_name.".".$ext;
                rename($path,$new);
            }
            else
            {
                 $image = imagecreatefrompng($path);
                 $new="photo/userphoto/".$u_name.".png";
                 rename($path, $new);
            }
            

   }        
    $sql = "UPDATE `userdetail` SET `NAME` ='$name', `PASSWORD` = '$password', `EMAIL` = '$email', `BDATE` = '$bdate' WHERE `userdetail`.`id` ='$id'";
//    $sql = "UPDATE `userdetail` SET `NAME` = \'ppa\', `PASSWORD` = \'pa\', `EMAIL` = \'qwp@g.c\', `BDATE` = \'0001-01-11\' WHERE `userdetail`.`id` = 49";
    if($query=$dbhandler->query($sql)==TRUE)
      {
//          header('location:firstpage.php'); 
          header("location:firstpage.php?msg=Your profile is Successfully Update.");
      }
    
      
      ?>