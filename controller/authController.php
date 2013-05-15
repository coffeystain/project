<?php

//include libraries
include(APP_MODEL . "/auth/auth_lib.php");



switch ( $_GET["a"] ) {

    case "login":

            # Include html header
        include(APP_VIEW . "/header.php");
            # Include main navigation
        include(APP_VIEW . "/nav.php");
        include( APP_VIEW ."/auth/loginView.php" );
        # Include html footer
        include(APP_VIEW . "/footer.php");
        break;

    case "process":

       $auth = processAuth( $_POST["username"], $_POST["password"] );

       if (true == $auth["return"]) {
           header("Location: http://localhost" . APP_DOC_ROOT );

       }
        else {
            include(APP_VIEW . "/header.php");
            include(APP_VIEW . "/nav.php");
            include( APP_VIEW ."/auth/loginView.php" );
            include(APP_VIEW . "/footer.php");
        }

        break;
}



