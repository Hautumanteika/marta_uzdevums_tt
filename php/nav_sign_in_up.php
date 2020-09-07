<nav class="main-nav" id="main-nav"> <!--Nav bar used in sign in and sign up files-->
    <ul style="padding-top:1%;">
        <li class="brand main-menu-logo"><a href="../index.html"><img src="../images/logo.png" style="width: 8%; height: 100%;"></a></img></li>
        <?php   if ( $current_page == 'login' ) { ?>
            <li class="main-menu-item sign-up"><button class="button sign-up" onclick="window.location.href='signup.php'">&#9998 Sign up</button></li> <!--Sign up transistion-->
        <?php } 
        elseif( $current_page == 'signup' ) { ?>
            <li class="main-manu-item sign-in"><button class="button sign-in" onclick="window.location.href='login.php'">&#9745 Sign in</button></li> <!--Sign in transistion-->
        <?php } ?>
    </ul>
</nav>