<?php
$sql = new mysqli('localhost','root','','course');
$search = $_POST['remove'];
$display = $_POST['show'];

$search1 = $_POST['remove1'];
$display1 = $_POST['show1'];

if($search!=null){
$result = mysqli_query($sql,"SELECT * FROM signup WHERE name LIKE '%$search%'");

$n = mysqli_query($sql,"SELECT COUNT(*) FROM signup");
$count =mysqli_num_rows($result);
if($count!=0){
    while($row = mysqli_fetch_assoc($result)){
        $u=$row['NAME'];
        $email = $row['EMAIL'];
        if($u==$search){
            
            $result = mysqli_query($sql,"DELETE FROM signup WHERE name LIKE '%$search%'");
            
            $message2 = "$search removed !!!!";
    echo "<script type='text/javascript'>alert('$message2');</script>";
    echo "<script type='text/javascript'>open('Admin.html');</script>";


    
$to = "$email";
$subject = "Your Account REmoved!";
$body = <<<EMAIL
Hello {'$email'}, here is your account information!

Username:{'$u'}

you are account deleted from online course portal.
EMAIL;

$headers = 'From: vinaycta98@gmail.com' . "\r\n" .
'Reply-To: vinaycta98@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


if(mail($to, $subject, $body, $headers)){
    echo("<p>Your account information was successfully sent to your email - ('$email')! <br><br>Please open your    email and click the activation link to activate your account.</p><br><p>If you do not see your account information in your inbox within 60 seconds please check your spam/junk folder.</p>");
    } else {
       echo("<p> Unfortunately, your account information was <u>unsuccessfully</u> sent to  your email - ('$email'). </p>");
    }


        }
    }
    $message = "Can't find the $search !!!!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>open('Admin.html');</script>";
}

else{
$message1 = "Can't find the $search";
    echo "<script type='text/javascript'>alert('$message1');</script>";
    echo "Can't find the $search";
    echo "<script type='text/javascript'>open('Admin.html');</script>";
}
}
if($display!=null){
    
$result1 = mysqli_query($sql,"SELECT * FROM signup");
$count =mysqli_num_rows($result1);
if($count!=0){
    echo "NAME &nbsp &nbsp &nbsp EMAIL";
    echo "<br/>";
    while($row1 = mysqli_fetch_assoc($result1)){
       
        
      
        
            $n1=$row1['NAME'];

            $e1=$row1['EMAIL'];
            
            echo "$n1  &nbsp &nbsp &nbsp$e1";
        echo "<br>";
       
        
              
        }
        
    }
    else{
        echo "empty database";
    }
}
  



if($search1!=null){
    $result3 = mysqli_query($sql,"SELECT * FROM courses WHERE coursename LIKE '%$search1%'");
    
    $n3 = mysqli_query($sql,"SELECT COUNT(*) FROM courses");
    $count3 =mysqli_num_rows($result3);
    if($count3!=0){
        while($row3 = mysqli_fetch_assoc($result3)){
            $u3=$row3['coursename'];
            
            if($u3==$search1){
                
                $result3 = mysqli_query($sql,"DELETE FROM courses WHERE coursename LIKE '%$search1%'");
                
                $message4 = "$search1 removed !!!!";
        echo "<script type='text/javascript'>alert('$message4');</script>";
        echo "<script type='text/javascript'>open('Admin.html');</script>";
    
    
            }
        }
        $message = "Can't find the $search1 !!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>open('Admin.html');</script>";
    }
    
    else{
    $message5 = "Can't find the $search1";
        echo "<script type='text/javascript'>alert('$message5');</script>";
        echo "Can't find the $search1";
        echo "<script type='text/javascript'>alert('erorr no such course found');</script>";

        echo "<script type='text/javascript'>open('Admin.html');</script>";
    }
    }

    
if($display1!=null){
    
    $result11 = mysqli_query($sql,"SELECT * FROM courses");
    $count1 =mysqli_num_rows($result11);
    if($count1!=0){
        echo "ID &nbsp &nbsp &nbsp COURSE";
        echo "<br/>";
        while($row11 = mysqli_fetch_assoc($result11)){
           
            
          
            
                $n11=$row11['id'];
    
                $e11=$row11['coursename'];
                
                echo "$n11  &nbsp &nbsp &nbsp$e11";
            echo "<br>";
           
            
                  
            }
            
        }
        else{
            echo "empty database";
        }
    }
      
?>