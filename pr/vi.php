<?php
$sql = new mysqli('localhost','root','','course');
$enrollc = $_POST['enrollc'];
if($enrollc){
    $query2="SELECT * FROM login";
    $result1 = $sql->query($query2);
    if($result1){
        while($row1 = mysqli_fetch_assoc($result1)){
            $n = $row1['NAME'];
            $p = $row1['PASSWORD'];
        } 
    $query = "SELECT * FROM signup WHERE 'NAME' LIKE '%"$n"%';
    $result = $sql->query($query);
    if($result){
        while($row = mysqli_fetch_assoc($result)) {
           $email = $row['EMAIL'];
           $phone = $row['PHONE'];
           $teacher = "ABCD";
           $course = "Cloud computing";
           $query1 = "INSERT INTO USER('EMAIL','PHONE','TEACHER','COURSENAME') VALUES('$email','$phone','$teacher','$course')";
    echo "hi";
        }
}

?>