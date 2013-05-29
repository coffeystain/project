<?php

function processAuth( $user, $pass ) {

    $sql = "SELECT *
            FROM auth_user
            WHERE username = '$user'";

    $res = mysql_query($sql);
    $row = mysql_fetch_array($res);


    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    //Check if user exists

    if ($row) {

        //Check if pasword is valid
        if ( $row["password"] == md5($pass)) {
            $auth["return"] = true;
        }
        else {
           $auth["message"] = "Password is not correct!";
        }
    }
    else {
        $auth["message"] = "user does not exist";
    }



    return($auth);
}