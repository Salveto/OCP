
<!doctype HTML>
<HTML>




    <HEAD>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login.css">
        <title>Login form</title>
    </HEAD>
    <body>
        <div class="box">
            <h2>LOGIN</h2>
            <form method="post" action="lg1.php">
                <div class="inputbox">
                    <input type="text" id="name" name="username" required="">
                    <label>UserName</label>
                </div>
                <div class="inputbox">
                     <input type="password" id="pass" name="password" required="">
                        <label>PassWord</label>
                    </div>
                    <a href="san.php" target="_blank" rel="noopener noreferrer">
                    <input type="submit" name="signup-button" value="signup">
                    
                    </a>
                
            </form>
            <br><div  class="forgot" name="forgot">
                    <p color=white><b>forgot password?</b><a href="#">check email</a></p></div>
        </div>

        <section class="top">
            <div class="container">
                 <nav class="top-nav">
     
                       
             
             
                         <ul>
                         <div class="logo">
                                <a href="#"><img  src="logo.jpg" width=50 > </a>
                         </div>
             
                             <li>
                                 <a href="index.php" target="_blank" rel="noopener noreferrer">
                                     Home
                                 </a>
                             </li>
             
                            
             
             
                             <!-- some gap here -->
                             <li>
                                 <a href="./login.php" target="_blank" rel="noopener noreferrer">
                                     Login
                                 </a>
                             </li>
             
                             <li>
                                 <a href="./signup.php" target="_blank" rel="noopener noreferrer">
                                     Sign Up
                                 </a>
                             </li>
                         </ul>
                 </nav>
             
             
                     
     
     
         </section>

    </body>
</HTML>