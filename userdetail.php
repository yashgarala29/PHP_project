<?php include 'header.php';?>
<html>
    <head>
        <title>user detail</title>
        
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
    <body>
    <?php
        $id=$_GET['id'];
        $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `userdetail` WHERE id=$id";
        $result = $dbhandler->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $img='photo/userphoto/'.$row['username'].'.png';
        echo "<section><nav><img  src =$img style='width: 200px;height:200px;'></nav><article><h1><div style='font-size: 50;' class=profile>Name : ".$row['NAME']."</div></h1>";
        echo "<h2><div style='font-size: 25'class=profile>Email:".$row['EMAIL']."</div></h2>";
        echo "<h2><div style='font-size: 25'class=profile>Birth Date:".$row['BDATE']."</div></h2></article></section>";
 
        $sql = "SELECT * FROM `question` WHERE id=$id";
        $result1 = $dbhandler->query($sql);
        echo "<br><br><h2>Question</h2>";
        while($row1 = $result1->fetch(PDO::FETCH_ASSOC))
        {
            $arr_data = array();
            $jsondata = file_get_contents($row1['file']);
            $arr_data = json_decode($jsondata);
            $q_id=$row1['q_id'];
            $id=$row1['id'];
            echo "<div class='panel panel-default' style='width: 85%'>";
             echo " <div class='panel-heading'><img  src =$img class='pho'><a href='' class='profile'>".$arr_data[1]->name."</a></div>";
             echo nl2br("<div class='panel-body'>".$arr_data[1]->text."</div>");
             
             if(isset($_SESSION['username'])){
                       echo " <div align='right'><a href='http://localhost/PHP_project/answer.php?q_id=$q_id' class='profile'>write answer</a><br></div>";
                   }
                   
                    echo "<div align='right'><a href='http://localhost/PHP_project/seconpage.php?q_id=$q_id' target='_blank'>read more</a></div>";
                   echo "</div>";
                   
        }
         
        ?>
        <script>
        function myFunction() {
          var input, filter,div, div1;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
           div1 = document.getElementsByClassName("panel panel-default");
          div = document.getElementsByClassName("panel-body");
//          alert(div.length);
          for (i = 0; i < div.length; i++) {
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







