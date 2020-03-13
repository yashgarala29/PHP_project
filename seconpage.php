<html>
    <head>
        <title>PHP project</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 

    </head>
    <?php
        echo "<br><br><br>";
        $q_id = $_GET['q_id'];
        $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `question` WHERE q_id='$q_id'";
        $result = $dbhandler->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $file_name=$row['file'];

        $arr_data = array();
        $jsondata = file_get_contents($file_name);
        $arr_data = json_decode($jsondata);
        for($i=1;$i<sizeof($arr_data);$i++)
        {
             echo "<div class='panel panel-default' style='width: 85%'>";
             echo " <div class='panel-heading'><a href='' class='profile'>".$arr_data[$i]->name."</a></div>";
             echo "<div class='panel-body'>".$arr_data[$i]->text."</div>";
             echo "</div>";
        }
     ?>
</html>