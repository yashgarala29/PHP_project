<!DOCTYPE html>
<html>
<head>


    <link rel="stylesheet" type="text/css" href="css/header.css"> 
        <!--/*<link rel="stylesheet" type="text/css" href="temp1.css">*/--> 

</head>
<body>

<div class="navbar1">
  <a href="#home">Home</a>
  <a href="">News</a>
     <?php session_start();
                    if(isset($_SESSION['username']))
                    {
                          echo "<a href='question.php'>ask question</a>";
                    }
      ?>
  <div class="dropdown1">
      
    <button class="dropbtn1">Dropdown 
    </button>
    <div class="dropdown-content1">
      <?php
     
                    if(!isset($_SESSION['username']))
                          {
                            
                            //$_
                            echo "<form action='check.php'>
                        <table border='0'>
                          
                            <tbody>
                              <tr>
                                  <td>user name</td><td><input type='text' name='username' value='' /></td>

                              </tr>
                              <tr>
                                  <td>password</td><td><input type='password' name='password' value='' /></td>

                              </tr>
                              <tr>
                                  <td><button class='dropbtn1' style='background-color: #4CAF50;'>Dropdown</button></td>
                                  <td><a href='new_user.php'>new user</td>
                              </tr>
                          </tbody>
                      </table>

                      </form>";
                            }
                            else{
                                echo "welcome  ".$_SESSION['username']."<br><br>";
                                echo "<form action='logout.php'><button class='dropbtn1' style='background-color: #4CAF50; width: 100%;'>logout</button></form>";
                            }
                     ?>
    </div>
  </div> 
</div>

</body>
</html>
