<!DOCTYPE html>
<html>
<head>


    <link rel="stylesheet" type="text/css" href="css/header.css"> 
        <!--/*<link rel="stylesheet" type="text/css" href="temp1.css">*/--> 

</head>
<body>

<div class="navbar1">
    <img src="photo/log.png" width="50" height="50" alt="ydn blogs" style="float: left;"/>

    <a href="firstpage.php">Home</a>
  <!--<a href="">News</a>-->
     <?php session_start();
                    if(isset($_SESSION['username']))
                    {
                          echo "<a href='question.php'>ask question</a>";
                          echo '<div><a href="" >'.$_SESSION["username"].'</div></a>';
                    }
      ?>
  <div class="dropdown1">
      <?php 
      if(!isset($_SESSION['username'])){
    echo '<button class="dropbtn1">Login here  </button>
    <div class="dropdown-content1">';
//      <?php
//     
//                    if(!isset($_SESSION['username']))
//                          {
                            
                            //$_
                            echo "<form action='check.php'><br>
                                <div style='padding bottom: 10px;;'>
                             <table border='0'>
                          
                            <tbody>
                              <tr>
                                  <td height='50'>username</td><td height='50'><input type='text' name='username' value='' /></td>
                                  
                              </tr>
                              <tr>
                                  <td height='50'>password</td><td height='50'><input type='password' name='password' value='' /></td>

                              </tr>
                              <tr>
                                  <td height='50'><button class='dropbtn1' style='background-color: #4CAF50;'>Login</button></td>
                                  <td height='50'><a href='new_user.php' style='color: black;'>new user</td>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                      </form>";
                            }
                            else{
                               
                                
  
                                echo "<form action='logout.php'><button class='dropbtn1' style='background-color: #4CAF50; width: 100%;'>logout</button></form>";
//                                echo '<form action="logout.php"><button class="dropbtn1">Logout</button>';
//                                echo "welcome  ".$_SESSION['username']."<br><br>";
//                                echo "<form action='logout.php'><button class='dropbtn1' style='background-color: #4CAF50; width: 100%;'>logout</button></form>";
                            }
                     ?>
    </div>
  </div> 
</div>

</body>
</html>
