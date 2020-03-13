<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>PHP project</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
    <body>
            <div class="dropdown" style="float:right;">
             <button class="dropbtn">Dropdown</button>
                <div class="dropdown-content">
                    
                    <?php session_start();
                    if(!isset($_SESSION['username']))
                          {
                            
                            //$_
                            echo "<form action='check.php'>
                        <table border='0'>
                          
                            <tbody>
                              <tr>
                                  <td colspan='2'>user name <input type='text' name='username' value='' /></td>

                              </tr>
                              <tr>
                                  <td colspan='2'>password<input type='password' name='password' value='' /></td>

                              </tr>
                              <tr>
                                  <td><button>Dropdown</button></td>
                                  <td><a href='new_user.php'>new user</td>
                              </tr>
                          </tbody>
                      </table>

                      </form>";
                            }
                            else{
                                echo "welcome  ".$_SESSION['username']."id".$_SESSION['id'];
                                echo "<form action='logout.php'><button class='dropbtn'>logout</button></form>";
                            }
                            ?>
                </div>
            </div> <br> <br>
            
         <?php
                $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
                $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
               $sql = "SELECT * FROM `question` WHERE 1";
               $result = $dbhandler->query($sql);
               while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//                    echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " password" . $row["password"] . "<br>";
                   $data = file_get_contents($row['file']);
                   $phpMobiles = json_decode($data);
                   $q_id=$phpMobiles[1]->id;
                   echo "<div class='panel panel-default' style='width: 75%'>";
                   echo " <div class='panel-heading'><a href='' class='profile'>".$phpMobiles[1]->name."</a></div>";
                   echo "<div class='panel-body'>".$phpMobiles[1]->text."</div>";
                    //echo "<div class='blog'>".$row['file']."</div>";
                   
                   echo " <div align='right'><a href='http://localhost/PHP_project/answer.php?q_id=$q_id' class='profile'>write answer</a><br>";
                    echo "<a href='http://localhost/PHP_project/seconpage.php?q_id=$q_id' target='_blank'>read more</a></div>";
                   echo "</div>";
               
               }
            ?>
    </body>
</html>


