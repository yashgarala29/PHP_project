<?php
    session_start();
    //$_SESSION['q_id']=$_GET['q_id'];
    if(!isset($_SESSION['username']))
    {
           header('location:firstpage.php'); 
    }
    
?>
<html>
    <head>
        <title>question</title>
        <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <form action="add_question.php" method="POST">
             <table border="0">
                <tbody>
                    <tr>
                        <td>question</td>
                        <td><textarea name="question" rows="6" cols="20"></textarea><br></td>
                    </tr>
                    <tr>
                       <td colspan="2"> <center> <button style="height:50px;width:200px">submit</button></center> </td>   
                    </tr>
                </tbody>
            </table>
    </form>

</html>

