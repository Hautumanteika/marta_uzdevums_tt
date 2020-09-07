<?php
require_once "db.php"; //database connectioon
$current_page = 'login';
$data = $_POST;
if ( isset($data['Sign_in']) ) {
    $user = R::findOne('users', 'login = ?', array($data['login']));
    if ( $user ){
        if ( password_verify($data['password'], $user->password) ) { //password verification
            $_SESSION['logged_user'] = $user; //Authorize user
            echo '<div style="color:green;">Authorized! Go to <a href="../index.html">home</a> page?</div><hr>'; //Autorization notification
        }
        else{
            $errors[] = 'Wrong password!'; //wrong password notification
        }
 
    }
    else{
        $errors[] = 'User with this login does not exist!'; //User does not exist notification
    }
     
    if ( ! empty($errors) ){
        echo '<div id="errors" style="color: rgb(162, 0, 255); --darkreader-inline-color:#ff1a1a;" data-darkreader-inline-color="">' .array_shift($errors). '</div><hr>';
    }
 
}
?>
<html>
<head>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
<div class="container">
    <?php include 'nav_sign_in_up.php'; ?>
</div>
<form action="login.php" method="POST" style="margin-left: 40%;">
    <p><strong>Login</strong>:</p>
    <input type="text" name="login" value="<?php echo @$data['login']; ?>" class="input"><br>
    <p><strong>Password</strong>:</p>
    <input type="password" name="password" value="<?php echo @$data['password']; ?>" class="input"><br>
    <button type="submit" name="Sign_in" class="button apply" style="margin-left: 11.5%; margin-top: 1%; ">Sign in</button>
</form>
</body>
</html>