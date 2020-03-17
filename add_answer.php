<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        $q_id = $_SESSION['q_id'];
        $id=$_SESSION['id'];
        $date= date("Y-m-d");
//        y-m-d
        $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
        $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM `question` WHERE q_id='$q_id'";
//        $sql1 = "SELECT * FROM `question` WHERE q_id='$q_id'";

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
    $a_id= sizeof($arr_data)+1;
     array_push($arr_data,$formdata);
    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
    $sql1 = "INSERT INTO `answer` (`id`, `q_id`, `date`, `a_id`) VALUES ('$id', '$q_id', '$date', '$a_id')";
//   $sql1 = "INSERT INTO `question`('id',`q_id`, `date`, `a_id`) VALUES ('$id','$q_id','$date','$a_id')";
   $result1 = $dbhandler->query($sql1);  
   if(file_put_contents($file_name, $jsondata)) {
	        header('location:firstpage.php'); 
        }
        
        
    }else
    {
        header('location:firstpage.php'); 
    }
    
?>