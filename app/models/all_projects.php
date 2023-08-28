<?php

class All_Projects{
    // get all projects method
    function get_all(){

        $query = "select * from tbl_projects order by id desc";
        // get db first
        $DB = new Database();
        $data = $DB->read($query);
            // check if data is true/false
            if($data){
                return $data;
            }
            return false;
    }
    // get 3 Project method
    function get_four(){
        $limit = 4;
        // set query
        $query = "select * from tbl_projects order by id desc limit $limit";
        // get db first
        $DB = new Database();
        $data = $DB->read($query);
            // check if data is true/false
            if($data){
                return $data;
            }
            return false;
    }
    // get one Project method
    function get_one($url){
        // set query
        $query = "select * from tbl_projects where url_adress = :url limit 1";
        $arr['url'] = $url;
        // get db first
        $DB = new Database();
        $data = $DB->read($query, $arr);
            // check if data is true/false
            if($data){
                return $data[0];
            }
            return false;
    }
}