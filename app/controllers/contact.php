<?php

class Contact extends Controller{
    // default fallback method 
    public function index(){

        $this->head = array(
            'title' => 'Contact form',
            'description' => 'Contact us with your queries.'
        );

        if (isset($_POST["email"])){
            if ($_POST['antispam'] == date("Y"))
            {
                $emailSender = $this->loadModel('emailsend');
                $emailSender->send("admin@webtrybe.com", $_POST['email'], "Email via contact page", $_POST['message'], );
            }
        }

        // set page title
        $data['page_title'] = 'Contact Us' ;
        // call the view method
        $this->view('webtrybe-template/contact', $data);
    }
    
}