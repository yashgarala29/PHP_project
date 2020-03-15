<?php include 'header.php';?>
<html>
<head>
        <title>PHP project</title>
         <link rel="stylesheet" type="text/css" href="style.css"> 
 </head>

    <center>
        <div class="ali">
            <form action="insert.php"  method="post">
               
            <table border="0">

                <tbody>
                    <tr>
                        <td>username</td>
                        <td> <input type="text" name="username" value="" required="" />   </td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td> <input type="text" name="name" value="" required="" />   </td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td> <input type="password" name="pass" value="" required=""> </td>
                    </tr>
                    <tr>
                        <td>re enter password</td>
                        <td><input type="password" name="rpass" value="" required=""></td>
                    </tr>
                    <tr>
                        <td>email</td>
                        <td> <input type="email" name="email" value="" required=""></td>
                    </tr>
                    <tr>
                        <td>birth date</td>
                        <td> <input type="date" name="bdate" value="" required=""></td>
                    </tr>
                    <tr >
                        <td  colspan="2"> <button class="dropbtn">Submit</button> </td>
                       
                    </tr>
                </tbody>
            </table>

         </form>
      </div>
        </center>
    
    
</html>