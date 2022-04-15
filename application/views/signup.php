<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<html lang="en">

<head>
  <title>TITLU</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="../css/login-signup.css">
</head>


<body>
    <!-- partial:index.partial.html -->
    <div class="login-form">
        <form action="<?php base_url();?>login/login_engine" method="POST">
            <h1>Login</h1>
            <div class="content">
                <div class="input-field">
                    
                    <input type="email" placeholder="Email" autocomplete="nope">

                </div>
                
                <div class="input-field">
                
                
                    <input type="password" placeholder="Password" autocomplete="new-password">
                
            
                </div>
                <a href="#" class="link">Forgot Your Password?</a>
            </div>
            <div class="action">
                <button>Register</button>
                <button>NU AICI</button>
            </div>
        </form>
    </div>
    <!-- partial -->
    <script src="./script.js"></script>

</body>