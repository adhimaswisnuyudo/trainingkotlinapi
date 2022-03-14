<?php

class Training extends CI_Controller{

    function login(){
        $postdata = json_decode(file_get_contents('php://input'));
        $login = $this->Auth->login($postdata->username,$postdata->password);
        // print_r($postdata->username);
    }

    function registration(){

    }
}