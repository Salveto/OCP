<?php


$username = $_POST["username"];

$password = $_POST['password'];

$sql = new mysqli('localhost','root','','course');
if(!empty($username)){
    
    if(!empty($password)){
        $query = "SELECT * FROM signup";
$result = $sql->query($query);
if($result){
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $u=$row['NAME'];
        $p=$row['PASSWORD'];
        if($u==$username && $p==$password){
            echo "login successful";
        }
        else {
            $message = "Username and/or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
    }

    }
    else{
        echo "error";
    }
}
}
?>