<?php

function ajax_request(){
    $t = get_instance();
    if(!$t->input->is_ajax_request()){
        exit('No direct script access allowed');
    }
}