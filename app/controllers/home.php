<?php

class Home extends Controller{
    // default fallback method 
    public function index(){
        // $image_class = $this->loadModel("image_class");
        // set page title
        $data['page_title'] = 'Home' ;
        // load projects model first
        $projects = $this->loadModel('all_projects');
        // call the get_all method
        $result = $projects->get_four();

        $data['projects'] = $result;
        
        // load blogs model first
        $blogs = $this->loadModel('all_blogs');
        // call the get_all method
        $result = $blogs->get_three();

        $data['blogs'] = $result;
        
        // load image class fn
        $image_class = $this->loadModel('image_class');
        if(is_array($data['blogs'])){
             foreach ($data['blogs'] as $key => $value) {
               $data['blogs'][$key]->image = $image_class->get_thumbnail($data['blogs'][$key]->image);
           }
        }
        // call the view method
        $this->view('webtrybe-template/index', $data);
    }
}