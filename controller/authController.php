<?php




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

    case "logout":

        # Delete Session data
        $_SESSION = 0;
        session_destroy();
        session_start();


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

            #setup session
            $_SESSION["username"] = $_POST["username"];

            # Redirect to
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



