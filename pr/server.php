<?php


$username = $_POST["username"];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password1 = $_POST['password1'];
$crpt = sha1($password);
$crpt1 = sha1($password1);
$sql = new mysqli('localhost','root','','course');
if(!empty($username)){
    if(!empty($email)){
    if(!empty($password)){
        if(!empty($password1)){
            if($password==$password1){
$result = mysqli_query($sql,"INSERT INTO signup(NAME,EMAIL,PASSWORD,RE_ENTER,PHONE) VALUES('$username','$email','$crpt','$crpt1','$phone')");
if($result){
    $message1 = "signup successful";
    echo "<script type='text/javascript'>alert('$message1');</script>";
    echo "<script type='text/javascript'>open('san.php');</script>";


// Please specify your Mail Server - Example: mail.yourdomain.com.
ini_set("SMTP","vinaycta98@gmail.com.com");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'vinaycta98@gmail.com');


$to = "$email";
$subject = "Your Account Information!";
$body = <<<EMAIL
Hello {'$email'}, here is your account information!

Username:{'$username'}
Password:{'$password'}
you are successfully joined to our  online course portal
EMAIL;

$headers = 'From: vinaycta98@gmail.com' . "\r\n" .
'Reply-To: vinaycta98@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();


if(mail($to, $subject, $body, $headers)){
    echo("<p>Your account information was successfully sent to your email - ('$email')! <br><br>.</p><br><p>If you do not see your account information in your inbox within 60 seconds please check your spam/junk folder.</p>");
    echo "<script type='text/javascript'>open('san.php');</script>";
} else {
       echo("<p> Unfortunately, your account information was <u>unsuccessfully</u> sent to  your email - ('$email'). </p>");
       echo "<script type='text/javascript'>open('san.php');</script>";
    }
    

    echo "<script type='text/javascript'>open('san.php');</script>";

}
else{
    echo "your data not stored sorry";
}
}  
else{
    print "password entered is not matching";
}
        }
        else{
            print "reenter the password";
        }
    }
else{
    print "password should not be empty";
}
    
}
    else{
        print "email should not be empty";
    }
}
else{
    print "username should not be empty";
}

?>