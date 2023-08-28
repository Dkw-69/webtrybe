<?php

class All_Blogs{
    // get all blogs method
    function get_all(){

        $query = "select * from tbl_blog order by date desc";
        // get db first
        $DB = new Database();
        $data = $DB->read($query);
            // check if data is true/false
            if($data){
                return $data;
            }
            return false;
    }
    // get 3 blogs method
    function get_three(){
        $limit = 3;
        // set query
        $query = "select * from tbl_blog order by date desc limit $limit";
        // get db first
        $DB = new Database();
        $data = $DB->read($query);
            // check if data is true/false
            if($data){
                return $data;
            }
            return false;
    }
    // get one blog method
    function get_one($url){
        // set query
        $query = "select * from tbl_blog where url_address = :url limit 1";
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