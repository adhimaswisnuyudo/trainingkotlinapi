<?php

function jsonoutput($statusheader,$responsedata){
    $ci =& get_instance();
    $ci->output->set_content_type('application/json');
    $ci->output->set_status_header($statusheader);
    $ci->output->set_output(json_encode($responsedata));
}

function successresponse($message){
    jsonoutput(200,array('status'=>'success','message'=>$message));
}

function failedresponse($message){
    jsonoutput(200,array('status'=>'failed','message'=>$message));
}

function dataresponse($object,$data){
    jsonoutput(200,array('status'=>'success',"$object"=>$data));
}