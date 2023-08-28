<?php

class Project_Upload{
    // upload method
    function upload($POST, $FILES){
        // get db first
        $DB = new Database();
        // reset errors
        $_SESSION['error'] = "";
        // allowed file types
        $allowed[] = "image/jpeg";
        $allowed[] = "image/jpg";
        $allowed[] = "image/png";
        // check if form inputs is set
        if(isset($POST['title']) && isset($FILES['image'])){
            // a few checks
            if($FILES['image']['name'] != "" && $FILES['image']['error'] == 0 && in_array($FILES['image']['type'], $allowed)){
                // all has passed
                // check if directory exists
                $folder = '../uploads/';
                // does folder exist?
                if(!is_dir($folder)){
                    mkdir($folder, 0644, true); //create and give permissions
                }
                // upload the file
                $destination = $folder.$FILES['image']['name'];
                if(!move_uploaded_file($FILES['image']['tmp_name'], $destination)){
                    $_SESSION['error'] = "Could not upload the image due to some errors.";
                }else{
                    move_uploaded_file($FILES['image']['tmp_name'], $destination);
                }
            }else{
                $_SESSION['error'] = "Could not upload the image due to some errors.";
            }
            // prepare to save to db if no errs
            if($_SESSION['error'] == ""){
                $arr['title'] = $POST['title'];
                $arr['image'] = $destination;
                $arr['project_description'] = $POST['project_description'];
                $arr['url_adress'] = randomString(60);
                $arr['link'] = $POST['link'];
                // write to db
                // SET SQL_MODE = ''; before insert to supress default value errors
                $query = "insert into tbl_projects (title,project_description,url_adress,link,image) values (:title,:project_description,:url_adress,:link,:image)";
                $data = $DB->write($query, $arr);
                // check if data is true/false
                if($data){
                    // all is dandy so redirect to home page
                    header("Location:".ROOT."projects");
                    die;
                }
            }
        }else{
            $_SESSION['error'] = "Could not upload the project.";
        }
    }
}