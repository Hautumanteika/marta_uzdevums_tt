<?php
    require_once "db.php"; //add database connection
    $current_page = 'signup';
    $data = $_POST;
    if ( isset($data['Sign_up']) ) {
        $errors = array();
        if ( trim($data['login']) == '' ) { //login check
            $errors[] = 'Input login please';
        }
    
        if ( $data['password'] == '' ) { //password check
            $errors[] = 'Input password please';
        }
    
        if ( $data['password_2'] != $data['password'] || $data['password_2'] == '') { //password 2 check
            $errors[] = 'The repeated password was entered incorrectly!';
        }
    
        if ( R::count('users', "login = ?", array($data['login'])) > 0) { //user existing check
            $errors[] = 'This user login is allready exists!';
        }
    
        if ( empty($errors) ) { //Adding to database
            $user = R::dispense('users'); //table creating
            $user->login = $data['login']; //table column "login" creating
            $user->password = password_hash($data['password'], PASSWORD_DEFAULT); //table column "password" creating with password hash          
            R::store($user); //adding to table
            echo '<div style="color:green;">Registration completed!</div><hr>'; //work completed successfully notification
        }

        else{
            echo '<div id="errors" style="color: rgb(162, 0, 255); --darkreader-inline-color:#ff1a1a;" data-darkreader-inline-color="">' .array_shift($errors). '</div><hr>'; //error notification
        }
    }
?>
<html>
    <head>
        <link rel="stylesheet" href="../css/style.css"> <!--Add style-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        <div class="container">
            <?php include 'nav_sign_in_up.php'; ?>
        </div>
        <form action="signup.php" method="POST" style="margin-left: 40%;"> <!--User creation form-->
            <p>
                <p>
                    <strong>Login</strong>:
                </p>
                <input type="text" name="login" class="input"> <!--Login input-->
            </p>
            <p>
                <p>
                    <strong>Password</strong>:
                </p>
                <input type="text" name="password" class="input"> <!--Password input-->
            </p>
            <p>
                <p>
                    <strong>Password 1 more time</strong>:
                </p>
                <input type="text" name="password_2" class="input"> <!--One more password input-->
            </p>
            <p>
                <button type="submit" name="Sign_up" class="button apply" style="margin-left: 11.5%; margin-top: 1%;">Register</button> <!--Submit button-->
            </p>
        </form>
    </body>
</html>