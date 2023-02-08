<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>e-takalo</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" >
</head>
<body>
    <div class="container">
        <div class="login form">
            <header>Login</header>
            <form action="<?php echo base_url('login/login'); ?>" method="post">
                <input type="text" name="email" placeholder="Enter your email">
                <input type="password" name="mdp" placeholder="Enter your password">
                <a href="#">Forgot password?</a>
                <input type="submit" class="button" value="Login">
            </form>
            <div class="signup">
                <span class="signup">Don't have an account?
                <a href="<?php echo base_url('login/signup'); ?>"><label for="check">Signup</label></a>
                </span>
            </div>
        </div>
    </div>
</body>
</html>
