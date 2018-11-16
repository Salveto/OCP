<?php




$password = $_POST['password'];

$sql = new mysqli('localhost','root','','course');

    
    if(!empty($password)){
        $query = "SELECT * FROM admin";
$result = $sql->query($query);
if(!$result){
    // output data of each row
   echo "result is null";

    }
    
        else {
          $true=1;
            while($row = mysqli_fetch_assoc($result)) {
                
                $p=$row['PASSWORD'];
                if($p==$password){
                    $true=0;
                    }  
            }
            if($true==1){
                $message = "password is wrong !!!!";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
            else{
                $message1 = "login successful";
                    echo "<script type='text/javascript'>alert('$message1');</script>";
    echo "<script type='text/javascript'>open('Admin.html');</script>";
                     
            }
          }
    
}

?>