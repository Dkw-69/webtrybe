<?php

class Projects extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        // $data['page_title'] = 'Add images' ;
        // call the view method
        header("Location:".ROOT."projects/project");
        die;

    }
    public function project(){
        
        // load user model first
        $admin = $this->loadModel('user');
        // check if the admin is logged in first
        if(!$result = $admin->check_logged_in()){

            //all is not good so redirect to login page
            header("Location:".ROOT."login");
            die;
        }
        // check form inputs are set
        if(isset($_POST['title']) && isset($_FILES['image'])){
            // instanciate the upload_file class
            $uploader = $this->loadModel('project_upload');
            // call upload fn
            $uploader->upload($_POST, $_FILES);
        }
        // set page title
        $data['page_title'] = ' '.'|'.' '.'Upload Project';
        // call the view method
        $this->view('admin-template/projects', $data);
    }
}