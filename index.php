<?php
include_once 'config/settings-configuration.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="src/css/design.css">
</head>
<body style="background-image: url('src/img/wallpaper.jpg');">
    <div class="container">     
    <div class="sign"> 
    <h1>SIGN IN</h1>
    </div>    
     <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <div class="form-group">
            <input type="hidden" class="form-control" name="csrf_token" value="<?php  echo  $csrf_token?>">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary" name="btn-signin">SIGN IN</button>
        </div>
    </form>
     
    <div class="reg"> 
    <h1>REGISTRATION</h1>
    </div> 
    <form action="dashboard/admin/authentication/admin-class.php" method="POST">
        <div class="form-group">
            <input type="hidden" class="form-control" name="csrf_token" value="<?php  echo  $csrf_token?>">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Enter Username"required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn-primary" name="btn-signup">SIGN UP</button>
        <div class="form-group">
    </form>
    </div>
</body>
</html>