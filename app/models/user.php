<?php

class User{
    // login method
    function login($POST){
        // get db first
        $DB = new Database();
        // reset errors
        $_SESSION['error'] = "";
        // check if prepared statement arr is set
        if(isset($POST['username']) && isset($POST['password'])){
            $arr['username'] = $POST['username'];
            $arr['password'] = md5($POST['password']);
            // read from db
            $query = "select * from tbl_admin where username = :username && password = :password";
            $data = $DB->read($query, $arr);
            // check if returned data is arr
            if(is_array($data)){
                // set session after being logged in
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                // success redirect
                header("Location:".ROOT."admin");
                die;
            }else{
                $_SESSION['error'] = "Wrong username or password.";
            }
        }else{
            $_SESSION['error'] = "Please enter valid credentials.";
        }
    }
    
    // check if user is logged in method
    function check_logged_in(){
        // get db first
        $DB = new Database();
        // check if user is logged in
        if(isset($_SESSION['user_url'])){
            // prepare
            $arr['user_url'] = $_SESSION['user_url'];
            // read from db
            $query = "select * from tbl_admin where url_address = :user_url limit 1";
            $data = $DB->read($query, $arr);
            // check if returned data is arr
            if(is_array($data)){
                // set session after being logged in
                $_SESSION['user_name'] = $data[0]->username;
                $_SESSION['user_url'] = $data[0]->url_address;
                return true;
            }
        }
        return false;
    }
    // logout method
    function logout(){
        // unset sessions to logout
        unset($_SESSION['user_name']);
        unset($_SESSION['user_url']);
        // redirect to login
        header("Location:".ROOT."login");
        die;
    }
}
