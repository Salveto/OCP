<?php
$username = $_POST["reg"];
$sql = new mysqli('localhost','root','','course');
if(!empty($username)){
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
                    $email = $row['EMAIL'];
                    $phone = $row['PHONE'];
                    $password = $row['PASSWORD'];
                    if($u==$username){
                        $true=0;
$teacher = 'Akshatha M';
$course = 'Artificial intelligence';
$result1 = mysqli_query($sql,"INSERT INTO user(NAME,PASSWORD,PHONE,TEACHER,COURSENAME) VALUES('$username','$password','$phone','$teacher','$course')");

// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","vinaycta98@gmail.com.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");
// Please specify the return address to use
ini_set('sendmail_from', 'vinaycta98@gmail.com');
$to = "$email";
$subject = "Your course Information!";
$body = <<<EMAIL
Hello {'$email'}, here is your course information!
Username:{'$username'}
Teacher:{'$teacher'}
you are successfully joined to our {'$course'} course
EMAIL;
$headers = 'From: vinaycta98@gmail.com' . "\r\n" .
'Reply-To: vinaycta98@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $body, $headers)){
    echo("<p>Your account information was successfully sent to your email - ('$email')! <br><br>Please open your    email and click the activation link to activate your account.</p><br><p>If you do not see your account information in your inbox within 60 seconds please check your spam/junk folder.</p>");
    
} else {
       echo("<p> Unfortunately, your account information was <u>unsuccessfully</u> sent to  your email - ('$email'). </p>");
    }
    echo "<script type='text/javascript'>open('artificial.php');</script>";

                        }                  
                        }
                }      
                if($true==1){
                    echo "hi";
                            $message = "you are not enrolled for the course !!!! signup to continue";   
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo "<script type='text/javascript'>open('san.php');</script>";
                }
                else{
                    $message1 = "welcome again";
                        echo "<script type='text/javascript'>alert('$message1');</script>";          
                }
            
            }
        
              


            
$username1 = $_POST["reg1"];
if(!empty($username1)){
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
                    $email = $row['EMAIL'];
                    $phone = $row['PHONE'];
                    $password = $row['PASSWORD'];
                    if($u==$username){
                        $true=0;
$teacher = 'Suman';
$course = 'Cloud commputing';
$result1 = mysqli_query($sql,"INSERT INTO user(NAME,PASSWORD,PHONE,TEACHER,COURSENAME) VALUES('$username','$password','$phone','$teacher','$course')");

// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","vinaycta98@gmail.com.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");
// Please specify the return address to use
ini_set('sendmail_from', 'vinaycta98@gmail.com');
$to = "$email";
$subject = "Your course Information!";
$body = <<<EMAIL
Hello {'$email'}, here is your course information!
Username:{'$username'}
Teacher:{'$teacher'}
you are successfully joined to our {'$course'} course
EMAIL;
$headers = 'From: vinaycta98@gmail.com' . "\r\n" .
'Reply-To: vinaycta98@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $body, $headers)){
    echo("<p>Your account information was successfully sent to your email - ('$email')! <br><br>Please open your    email and click the activation link to activate your account.</p><br><p>If you do not see your account information in your inbox within 60 seconds please check your spam/junk folder.</p>");
    
} else {
       echo("<p> Unfortunately, your account information was <u>unsuccessfully</u> sent to  your email - ('$email'). </p>");
    }
    echo "<script type='text/javascript'>open('cloudcomputing.php');</script>";

                        }                  
                        }
                }      
                if($true==1){
                            $message = "you are not enrolled for the course !!!! signup to continue";   
                    echo "<script type='text/javascript'>alert('$message');</script>";
                    echo "<script type='text/javascript'>open('san.php');</script>";
                }
                else{
                    $message1 = "welcome again";
                        echo "<script type='text/javascript'>alert('$message1');</script>";          
                }
            
            }
        
?>