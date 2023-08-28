<?php

class Single_Blog extends Controller{
    // default fallback method 
    public function index($url = ''){
        if($url == ''){
            // set page title
            $data['page_title'] = 'Blog not found.';
            // call the view method
            $this->view('webtrybe-template/404', $data);
        }else{
            // load posts model first
            $allBlogs = $this->loadModel('all_blogs');
            // call the get_all method
            $result = $allBlogs->get_one($url);
            $data['blog'] = $result;

            // set page title
            $data['page_title'] = 'Single-Blog';
            // call the view method
            $this->view('webtrybe-template/single_blog', $data);
        }
    }
}