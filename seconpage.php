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
            $text=$arr_data[$i]->text;
             $text=str_replace('\n', '<br>', $text);
             echo "<div class='panel panel-default' style='width: 85%'>";
             echo " <div class='panel-heading'><a href='' class='profile'>".$arr_data[$i]->name."</a></div>";
             echo nl2br("<div class='panel-body'>".$text."</div>");
             echo "</div>";
             if($i==1)
             {
                 $t=sizeof($arr_data)-2;
                 echo "<h1>$t Answer</h1>";
             }
        }
     ?>
</html>