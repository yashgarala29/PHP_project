<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" type="text/css" href="css/header.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="navbar1">
    <img src="photo/log.png" width="50" height="50" alt="ydn blogs" style="float: left;"/>

    <a href="firstpage.php">Home</a>
  
     <?php session_start();
                    if(isset($_SESSION['username']))
                    {
                        $id=$_SESSION['id'];
                          echo "<a href='question.php'>ask question</a>";
                          echo "<div><a href='http://localhost/PHP_project/userdetail.php?id=$id'>".$_SESSION["username"]."</a></div>";
                          echo "<a href='view_my_profile.php'>edit your profile</a>";
                    }
      ?>
    
    <form class="example" style="margin: initial;max-width:300px;float: left ">
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search.." class="fa">
        <button type="submit"style=" font-size: 15px;" class="fa fa-search"></button>
    </form>
  <div class="dropdown1">
      <?php 
      if(!isset($_SESSION['username'])){
    echo '<button class="dropbtn1">Login here  </button>
    <div class="dropdown-content1">';
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
                                  <td height='50'><a href='new_user.php' style='color: black;'>New User</td>
                              </tr>
                          </tbody>
                      </table>
                      </div>
                      </form>";
                            }
                            else{
                                echo "<form action='logout.php'><button class='dropbtn1' style='background-color: #4CAF50;'>logout</button></form>";
                            }
                     ?>
    </div>
  
</div>
    </div>
    <?php 
    if(isset($_GET['msg']))
            echo "<center><h4>".$_GET['msg']."</h4></center>";
?> 


</body>
</html>
