<?php include 'header.php';?>
<?php
    session_start();
    $_SESSION['q_id']=$_GET['q_id'];
    if(!isset($_GET['q_id'])||!isset($_SESSION['username']))
    {
           header('location:firstpage.php'); 
    }
    
?>
<html>
    <head>
        <title>answer</title>
         <link rel="stylesheet" type="text/css" href="style.css"> 
    </head>
    <form action="add_answer.php" method="POST">
        <table border="0">
            <tbody>
                <tr>
                    <td>write answer</td>
                    <td> <textarea name="answer" rows="4" cols="20">
                        </textarea> </td>
                </tr>
                <tr>
                    <td colspan="2"><center> <button style="height:50px;width:200px">submit</button></center></td>
                   
                </tr>
            </tbody>
        </table>

    </form>
</html>
