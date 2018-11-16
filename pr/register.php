<?php// First we execute our common code to connection to the database and start the session 
 require("common.php"); 

// This if statement checks to determine whether the registration form has been submitted 
// If it has, then the registration code is run, otherwise the form is displayed 
if(!empty($_POST))
{ 
// Ensure that the user has entered a non-empty username 
if(empty($_POST['username']))
{ 
    echo "Please enter a username."; 
}

// Ensure that the user has entered a non-empty password 
if(empty($_POST['password']))
{ 
    die("Please enter a password."); 
} 

// Make sure the user entered a valid E-Mail address 
// filter_var is a useful PHP function for validating form input, see:
if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
{ 
    die("Invalid E-Mail Address"); 
} 

$query = " SELECT 1 FROM users WHERE username = :username "; 

$query_params = array( ':username' => $_POST['username'] ); 

try 
{ 
    // These two statements run the query against your database table. 
    $stmt = $db->prepare($query); 
    $result = $stmt->execute($query_params); 
} 
catch(PDOException $ex) 
{ 
    // Note: On a production website, you should not output $ex->getMessage(). 
    // It may provide an attacker with helpful information about your code.  
    die("Failed to run query: " . $ex->getMessage()); 
} 

$row = $stmt->fetch(); 


if($row) 
{ 
    die("This username is already in use"); 
} 

// Now we perform the same type of check for the email address, in order 
// to ensure that it is unique. 
$query = " SELECT 1 FROM users WHERE email = :email "; 

$query_params = array( ':email' => $_POST['email'] ); 

try 
{ 
    $stmt = $db->prepare($query); 
    $result = $stmt->execute($query_params); 
} 
catch(PDOException $ex) 
{ 
    die("Failed to run query: " . $ex->getMessage()); 
} 

$row = $stmt->fetch(); 

if($row) 
{ 
    die("This email address is already registered"); 
} 

// An INSERT query is used to add new rows to a database table. 
// Again, we are using special tokens (technically called parameters) to 
// protect against SQL injection attacks. 
$query = " INSERT INTO users ( username, password, salt, email ) VALUES ( :username, :password, :salt, :email ) "; 

$to = "email";
$subject = "Your Account Information!";
$body = <<<EMAIL
Hello {'email'}, here is your account information!

Username:{'username'}
Password:{'password'}

Please activate your account by clicking the following activation link:
http://www.mywebsite.com/activate.php?aid={$aid}

EMAIL;

$headers = 'From: noreply@yourdomain.com' . "\r\n" .
'Reply-To: noreply@yourdomain.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $body, $headers)){
echo("<p>Your account information was successfully sent to your email - ('email')! <br><br>Please open your    email and click the activation link to activate your account.</p><br><p>If you do not see your account information in your inbox within 60 seconds please check your spam/junk folder.</p>");
} else {
   echo("<p> Unfortunately, your account information was <u>unsuccessfully</u> sent to  your email - ('email'). </p>");
}

$salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 

$password = hash('sha256', $_POST['password'] . $salt); 

for($round = 0; $round < 65536; $round++) 
{
    $password = hash('sha256', $password . $salt); 
}


$query_params = array( ':username' => $_POST['username'], ':password' => $password, ':salt' => $salt, ':email' => $_POST['email'] ); 

try
{ 
    // Execute the query to create the user 
    $stmt = $db->prepare($query); 
    $result = $stmt->execute($query_params); 
}
catch(PDOException $ex)
{ 

}
header("Location: login.php"); 
die("Redirecting to login.php"); 
}
?> 
<h1>Register</h1> 
<form action="" method="post"> 
Username:<br /> 
<input type="text" name="username"  required value="" /> 
<br /><br /> 
E-Mail:<br /> 
<input type="text" name="email" required value="" /> 
<br /><br /> 
Password:<br /> 
<input type="password" required  name="password" value="" /> 
<br /><br /> 
<input type="submit"  value="Register" /> 
</form>