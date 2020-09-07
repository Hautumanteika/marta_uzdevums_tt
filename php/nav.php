<?php
    require_once "db.php"; //database connection
?>
<nav class="main-nav" id="main-nav">
    <ul>
        <?php if($current_page != 'index') { ?> <!--If page arent in main folder-->
            <li class="brand main-menu-logo"><a href="../index.html"><img src="../images/logo.png" style="width: 7.5%; height: 100%;"></img></a></li>
        <?php if(isset($_SESSION['logged_user'])) : echo "authorized as ".$_SESSION['logged_user']->login;?>
            <li class="main-menu-item sign-up"><button class="button logout" onclick="window.location.href='logout.php'">&#9745Logout</button></li>
        <?php else :?>
            <li class="main-menu-item sign-up"><button class="button sign-up" onclick="window.location.href='signup.php'">&#9998 Sign up</button></li>
            <li class="main-manu-item sign-in"><button class="button sign-in" onclick="window.location.href='login.php'">&#9745 Sign in</button></li>
        <?php endif ?>
        <?php } else { ?> <!--If page is in main folder-->
            <li class="brand main-menu-logo"><a href="index.html"><img src="images/logo.png" style="width: 20%; height: 80%;"></img></a></li>
        <?php if(isset($_SESSION['logged_user'])) : echo "authorized as ".$_SESSION['logged_user']->login;?>
            <li class="main-menu-item sign-up"><button class="button logout" onclick="window.location.href='php/logout.php'">&#9745Logout</button></li>
        <?php else :?>
            <li class="main-menu-item sign-up"><button class="button sign-up" onclick="window.location.href='php/signup.php'">&#9998 Sign up</button></li>
            <li class="main-manu-item sign-in"><button class="button sign-in" onclick="window.location.href='php/login.php'">&#9745 Sign in</button></li>
        <?php endif ?>
        <?php } ?>
    </ul>
</nav>
<hr>
<nav>
    <ul class="links">
        <?php
        if($current_page == 'index') { ?> <!--Links used from main folder-->
            <li class="link"><a href="php/add.php">Add</a></li>
            <li class="link"><a href="php/delete.php">Delete</a></li>
            <li class="link"><a href="php/check.php">Check</a></li>
        <?php
        } 
        else { ?> <!--Links used from other folders-->
            <li class="link"><a href="add.php">Add</a></li>
            <li class="link"><a href="delete.php">Delete</a></li>
            <li class="link"><a href="check.php">Check</a></li>
        <?php } ?>
    </ul>
</nav>
<hr>