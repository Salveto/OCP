<?php


$search = $_POST['search'];
$sql = new mysqli('localhost','root','','course');
$a= 'ARTIFICIAL INTELLIGENCE';
$a1='artificial intelligence';
$a2 ='Artificial intelligence';
$b ='CLOUD COMPUTING';
$b1 ='Cloud computing';
$b2 ='cloud computing';
$t=0;
$message1 = "course found !!!!";
if($search==$a || $search==$a1 || $search==$a2){$t=1;
echo "<script type='text/javascript'>alert('$message1');</script>";

    echo "<script type='text/javascript'>open('vi.html');</script>";

}

if($search==$b || $search==$b1 || $search==$b2){$t=1;
echo "<script type='text/javascript'>alert('$message1');</script>";

    echo "<script type='text/javascript'>open('vi.html');</script>";

}

if($t==0){
    $message = "no such course found !!!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>open('index.php');</script>";
}

?>
<body>
<a href=$url></a>
</body>