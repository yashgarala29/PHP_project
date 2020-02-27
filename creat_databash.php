<?php
        try{
          // print_r( PDO::getAvailableDrivers());
           $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
           $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
           $sql="create table userdetail(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(30) NOT NULL,PASSWORD VARCHAR(30) NOT NULL,EMAIL VARCHAR(30) NOT NULL,BDATE VARCHAR(10) NOT NULL )";
        $query=$dbhandler->query($sql);
        } catch (PDOException $e)
        {
            echo $e->getMessage();
            die();
        }

        
                
                
?>