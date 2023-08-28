<?php

class Single_Project extends Controller{
    // default fallback method 
    public function index($url = ''){
        if($url == ''){
            // set page title
            $data['page_title'] = 'Project not found.';
            // call the view method
            $this->view('webtrybe-template/404', $data);
        }else{
            // load posts model first
            $allProjects = $this->loadModel('all_projects');
            // call the get_all method
            $result = $allProjects->get_one($url);
            $data['project'] = $result;

            // set page title
            $data['page_title'] = 'Single-Project';
            // call the view method
            $this->view('webtrybe-template/single_project', $data);
        }
    }
}