<?php

// fn to create a random string
function randomString($n){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for($i = 0; $i < $n; $i++){
    $index = rand(0, strlen($characters) - 1);
    $str .= $characters[$index];
    }
    return $str;
}

// fn to check messages on views
function check_message(){
    // if the session error is set and it's not empty
    if(isset($_SESSION['error']) && $_SESSION['error'] != ''){
        // echo the errors
        echo $_SESSION['error'];
        // unset the session
        unset($_SESSION['error']);
    }
}