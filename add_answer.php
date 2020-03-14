<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        $q_id = $_SESSION['q_id'];
        $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `question` WHERE q_id='$q_id'";
        $result = $dbhandler->query($sql);
        $row = $result->fetch(PDO::FETCH_ASSOC);
        $file_name=$row['file'];
        
        $answer = $_POST['answer'];
        
        $arr_data = array();
        $jsondata = file_get_contents($file_name);
        $arr_data = json_decode($jsondata);
        $formdata = array(
            "name"=>$_SESSION['username'],
            "id"=>$_SESSION['id'],
            "text"=>$answer
	   );
    array_push($arr_data,$formdata);
    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
     if(file_put_contents($file_name, $jsondata)) {
	        header('location:firstpage.php'); 
        }
        
        
    }else
    {
        header('location:firstpage.php'); 
    }
    
?>