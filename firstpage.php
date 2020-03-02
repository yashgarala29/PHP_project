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
                                  <td><button class='dropbtn'>Dropdown</button></td>
                                  <td><a href='new_user.php'>new user</td>
                              </tr>
                          </tbody>
                      </table>

                      </form>";
                            }
                            else{
                                echo "welcome  ".$_SESSION['username'];
                                echo "<form action='logout.php'><button class='dropbtn'>logout</button></form>";
                            }
                            ?>
                        
                    
                 
                </div>
              </div>   
            
    </body>
</html>
