<?php include 'header.php';?>
<?php
try {
    
    
    $id =$_SESSION["id"];
    $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `userdetail` WHERE id=$id";
    $result = $dbhandler->query($sql);
    $row = $result->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
    
}

    ?>

<html>
    <head>
            <title>PHP project</title>
              <link rel="stylesheet" type="text/css" href="css/header.css"> 
            <link rel="stylesheet" type="text/css" href="temp1.css"> 
            <link rel="stylesheet" type="text/css" href="style.css"> 
     </head>
    
    <body><br><br><br><br>
        <form action="update.php" method="POST" enctype="multipart/form-data">
       <table border="0">                
           <tr><td> <section>
           <nav>
               
               <label for="photo"> 
                <a style="cursor: pointer;">
                    
                    <?php $img= "photo/userphoto/".$row['username'].".png"; ?>
                    <img  src =<?php echo $img;?> style='width: 200px;height:200px;'> </a></label> 
                <input type="file" name="photo" id="photo" style="display: none;">
           </nav></td><td>
           <article>
            <table border="0">
                    <tr>
                        <td>id</td>
                        <td> <input type="text" name="id" value="<?php echo $row['id'];?>" readonly="readonly" /> </td>
                    </tr>
                     <tr>
                        <td>Username</td>
                        <td> <input type="text" name="username" value="<?php echo $row['username'];?>" readonly="readonly" /> </td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td> <input type="text" name="name" value="<?php echo $row['NAME'];?>"  /> </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td> <input type="text" name="password" value="<?php echo $row['PASSWORD'];?>" /> </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> <input type="text" name="email" value="<?php echo $row['EMAIL'];?>" /> </td>
                    </tr>
                    <tr>
                        <td>Bdate</td>
                        <td> <input type="date" name="bdate" value="<?php echo $row['BDATE'];?>" /> </td>
                    </tr>
                    <tr>
                        <td colspan="2"> <button class="dropbtn">Update</button> </td>
                    </tr>
             </table>
           </article></td>
          </section></tr>
       </table>
       </form>
  </body>
</html>
    
    
    
    