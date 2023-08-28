<?php

class Portfolio extends Controller{
    // default fallback method 
    public function index(){
        // $image_class = $this->loadModel("image_class");
        // set page title
        $data['page_title'] = 'Portfolio' ;
        // load projects model first
        $projects = $this->loadModel('all_projects');
        // call the get_all method
        $result = $projects->get_all();

        $data['projects'] = $result;
        
        // load image class fn
        $image_class = $this->loadModel('image_class');
        if(is_array($data['projects'])){
            foreach ($data['projects'] as $key => $value) {
                $data['projects'][$key]->image = $image_class->get_thumbnail($data['projects'][$key]->image);
            }
        }
        // call the view method
        $this->view('webtrybe-template/portfolio', $data);
    }
}