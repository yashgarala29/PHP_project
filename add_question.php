<?php
    $que =$_POST['question'];
    session_start();
    $id=$_SESSION['id'];
    $dbhandler=new PDO('mysql:host=localhost;dbname=php','root','');
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM `question` WHERE 1 ";
    $result = $dbhandler->query($sql);
    $count=$result->rowCount();
    $sql = "SELECT * FROM `question` WHERE 1 ORDER BY q_id DESC";
    $result = $dbhandler->query($sql);
     $row = $result->fetch(PDO::FETCH_ASSOC);
    $q_id=$row['q_id']+1;
    $n_file_name=$row['id'].'_'.substr(str_shuffle(str_repeat("abcdefghijklmnopqrstuvwxyz", 5)), 0, 5).'.json';
//    echo "";
    $file_name=$id.$q_id.'.json';
    $arr_data = array();
    $jsondata = file_get_contents("temp.json");
    $arr_data = json_decode($jsondata);
    $formdata = array(
            "name"=>$_SESSION['username'],
            "id"=>$q_id,
            "text"=>$que
	   );
    array_push($arr_data,$formdata);
    $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
     if(file_put_contents($n_file_name, $jsondata)) {
	        header('location:firstpage.php');
        }
//   date_default_timezone_set("India/New_Delhi");
    $date = date("d-m-Y h:i:sa");
    $id=$_SESSION['id'];
   // $sql = "INSERT INTO `userdetail`(`NAME`, `PASSWORD`, `EMAIL`, `BDATE`) VALUES ('$name','$password','$mail','$bdate')";
    $sql = "INSERT INTO `question` (`q_id`, `id`, `date`, `file`) VALUES ('$q_id','$id', '$date', '$n_file_name')";
    $query=$dbhandler->query($sql);

?>

