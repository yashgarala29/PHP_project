<?php include 'header.php';?>
<html>
    <head>
        <title>PHP project</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
          <link rel="stylesheet" type="text/css" href="css/header.css"> 

    </head>
    <body>
        <div style="margin-left: 10px;" class= "data"> 
    <?php
        echo "<br><br>";
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
             $id = $row['id'];
             $text=str_replace('\n', '<br>', $text);
             $img='photo/userphoto/'.$arr_data[$i]->name.'.png';
             echo "<div class='panel panel-default' style='width: 85%'>";
             echo " <div class='panel-heading'><img  src =$img class='pho'><a href='http://localhost/PHP_project/userdetail.php?id=$id' class='profile'>".$arr_data[$i]->name."</a></div>";
             echo nl2br("<div class='panel-body'>".$text."</div>");
             echo "</div>";
             if($i==1)
             {
                 $t=sizeof($arr_data)-2;
                 echo "<h1>$t Answer</h1>";
             }
        }
     ?>
        </div>
        <script>
        function myFunction() {
          var input, filter,div, div1;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
           div1 = document.getElementsByClassName("panel panel-default");
          div = document.getElementsByClassName("panel-body");
//          alert(div.length);
          for (i = 1; i < div.length; i++) {
              if (div[i]) {
              txtValue = div[i].textContent || [i].innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                div1[i].style.display = "";
              } else {
                div1[i].style.display = "none";
              }
            }       
          }
        }
        </script>
        </body>

</html>