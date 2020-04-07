
<?php include 'header.php';?>
<html>
    <head>
        <title>php project</title>
        <link rel="stylesheet" type="text/css" href="css/header.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
   
    <body>
        
         <div style="margin-left: 10px;" class= "data"> 
             <br> <br>
             
         <?php
                $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $sql = "SELECT * FROM `question` WHERE 1 ORDER BY q_id DESC";
               $result = $dbhandler->query($sql);
               while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//                    echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " password" . $row["password"] . "<br>";
                   $data = file_get_contents($row['file']);
                   $phpMobiles = json_decode($data);
                   $q_id=$phpMobiles[1]->id;
                   $id = $row['id'];
                   $text=$phpMobiles[1]->text;
//                   $text=$text.replace("\n","<br>");
                   $text=str_replace('\n', '<br>', $text);
                   $img='photo/userphoto/'.$id.'.png';
                   echo "<div class='panel panel-default' style='width: 75%' id='myData'>";
                   echo " <div class='panel-heading'><img  src =$img class='pho'></in> <a href='http://localhost/PHP_project/userdetail.php?id=$id' class='profile'>".$phpMobiles[1]->name."</a></div>";
                   echo nl2br("<div class='panel-body'>".$text."</div>");
                   if(isset($_SESSION['username'])){
                       echo " <div align='right'><a href='http://localhost/PHP_project/answer.php?q_id=$q_id' class='profile'>write answer</a><br></div>";
                   }
                   
                    echo "<div align='right'><a href='http://localhost/PHP_project/seconpage.php?q_id=$q_id' target='_blank'>read more</a></div>";
                   echo "</div>";
                   
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


