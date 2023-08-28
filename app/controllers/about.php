<?php

class About extends Controller{
    // default fallback method 
    public function index(){
        // set page title
        $data['page_title'] = 'About Us' ;
        // load packages model first
        $projects = $this->loadModel('all_projects');
        // call the get_all method
        $result = $projects->get_all();

        $data['projects'] = $result;
        
        // load packages model first
        $blogs = $this->loadModel('all_blogs');
        // call the get_all method
        $result = $blogs->get_all();

        $data['blogs'] = $result;
        
        // load image class fn
        $image_class = $this->loadModel('image_class');
        if(is_array($data['blogs'])){
             foreach ($data['blogs'] as $key => $value) {
               $data['blogs'][$key]->image = $image_class->get_thumbnail($data['blogs'][$key]->image);
           }
        }
        // call the view method
        $this->view('webtrybe-template/about', $data);
    }
}