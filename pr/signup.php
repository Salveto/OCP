
<!doctype HTML>
<HTML>
    <HEAD>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="signup.css">
        <title>signup form</title>
    </HEAD>
    <body>

      
        <section class="top">
            <div class="container">
                 <nav class="top-nav">
     
                       
             
             
                         <ul>
                         <div class="logo">
                                <a href="#"><img src="logo.jpg" width=50 > </a>
                         </div>
             
                             <li>
                                 <a href="index.html" target="_blank" rel="noopener noreferrer">
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
         <form method="POST" action="server.php">

  <div id="login-box">

            <div class="left-box">

                <h1>SignUp</h1>
                <input type="text" id="username" name="username" placeholder="username"/>
                <input type="text" name="email" placeholder="email"/>
                <input type="text" name="phone" placeholder="phone"/>
                <input type="password" name="password" minlength="6" placeholder="password"/>
                
                <input type="password" name="password1" placeholder="retype password"/>
                <a href="san.php" target="_blank" rel="noopener noreferrer">
                <input type="submit" name="signup-button" value="SignUp"/>
                </a>
            </div>
       </form>
            <div class="right-box">

            <span class="signinwith">Sign In With<br/>Social Network</span>
            <a href="#" target="_blank" rel="noopener noreferrer">

            <button class="social facebook">
            log in with facebook</button>
            <button class="social google">log in with google</button>
            <button class="social twitter">log in with twitter</button>
            </div>
            <div class="or">OR</div>
        </div>

    

    </body>
    </HTML>