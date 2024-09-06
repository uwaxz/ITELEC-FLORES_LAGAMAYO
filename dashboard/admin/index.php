<?php

require_once 'authentication/admin-class.php';

$admin = new ADMIN();
if(!$admin->isUserLoggedIn())
{
    $admin->redirect('../../');
}
$stmt = $admin->runQuery("SELECT * FROM user WHERE id = :id");
$stmt->execute(array(":id" =>$_SESSION['adminSession']));
$user_data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="../../src/css/designwc.css">
</head>
<body style="background-image: url('../../src/img/welcome.jpg');">
    <div class="welcome">
    <h1>Welcome Traveler <?php echo $user_data['email']?></h1>
    
    <div class="form-group">
        <button><a href="authentication/admin-class.php?admin_signout">SIGN OUT</a></button>
    </div>

    </div>
</body>
</html>