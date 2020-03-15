
<html>
    <head>
        <title>user detail</title>
        <?php include 'header.php';?>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>

    <?php
        $id=$_GET['id'];
        $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `userdetail` WHERE id=$id";
        $result = $dbhandler->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        echo "<div style='font-size: 50;font-weight: 900;' class=profile>name : ".$row['NAME']."</div>";
        echo "<div style='font-size: 25'class=profile>email:".$row['EMAIL']."</div>";
        echo "<div style='font-size: 25'class=profile>birth date:".$row['BDATE']."</div>";
//        echo "<h4>birth date:<div class='profile'> ".$row['BDATE']."</div></h4>";
        $sql = "SELECT * FROM `question` WHERE id=$id";
        $result1 = $dbhandler->query($sql);
         $row1 = $result1->fetch(PDO::FETCH_ASSOC);
        ?>
    
</html>