<?php

function processAuth( $user, $pass ) {

    $userList = array();
    $userList["david"] = "test1234";
    $userList["admin"] = "admin1234";
    $userList["user"] = "user1234";

    $auth = array();
    $auth["return"] = false;
    $auth["message"] = "";

    //Check if user exists
    $userArray = array_keys($userList );
    if (in_array( $user, $userArray)) {

        //Check if pasword is valid
        if ( $pass == $userList[$user]) {
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