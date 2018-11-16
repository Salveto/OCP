<?php


$username = $_POST["username"];

$password = $_POST['password'];
$crpt = sha1($password);
$sql = new mysqli('localhost','root','','course');
if(!empty($username)){
    
    if(!empty($password)){
        $query = "SELECT * FROM signup";
$result = $sql->query($query);
if(!$result){
    // output data of each row
   echo "result is null";

    }
    
        else {
          $true=1;
            while($row = mysqli_fetch_assoc($result)) {
                $u=$row['NAME'];
                $p=$row['PASSWORD'];
                if($u==$username && $p==$crpt){
                    $true=0;
                    }  
            }
            if($true==1){
                echo "$crpt";
                $message = "username and password is wrong !!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>open('login.php');</script>";

            }
            else{
               $t=1;
$query1 =   "SELECT * FROM user";      
$result1 = $sql->query($query1);
if(!$result1){
    echo "<script type='text/javascript'>open('san.php');</script>";

}
else{
    while($row1 = mysqli_fetch_assoc($result1)) {
        $u1 = $row1['NAME'];
        
        $course= $row1['COURSENAME'];
        if($u1==$username){
           $url="Artificial intelligence";
           $url1="Cloud computing";
    if($course==$url && $course==$url1){
        $t=0;
    echo "<script type='text/javascript'>open('san.php');</script>";
    }
    if($course==$url){
        $t=0;
        echo "<script type='text/javascript'>open('artificial.php');</script>";
        }
        if($course==$url1){
            $t=0;
            echo "<script type='text/javascript'>open('cloudcomputing.php');</script>";
            }
        }
        
}
if($t==1){
    $message1 = "login successful";
    echo "<script type='text/javascript'>alert('$message1');</script>";
    echo "<script type='text/javascript'>open('san.php');</script>";
}  

            }
          }
    
}
}
}
?>