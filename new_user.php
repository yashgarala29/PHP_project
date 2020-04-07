
<?php include 'header.php';?>
<html>
<head>
        <title>PHP project</title>
          <link rel="stylesheet" type="text/css" href="css/header.css"> 
        <link rel="stylesheet" type="text/css" href="temp1.css"> 
        <link rel="stylesheet" type="text/css" href="style.css"> 
 </head>
 <body>
    <center>
        <div class="ali">
            <form action="insert.php"  method="post" enctype="multipart/form-data">
               
            <table border="0">

                <tbody>
                    
                    <tr >
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
                    <tr>
                        <td>photo</td>
                        <td> <input type="file" name="photo" id="photo">   </td>
                    </tr>
                    <tr >
                        <td  colspan="2"> <button class="dropbtn">Submit</button> </td>
                       
                    </tr>
                    
                </tbody>
            </table>

         </form>
      </div>
        </center>
    </body>
    
</html>