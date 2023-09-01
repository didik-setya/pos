<?php
defined('BASEPATH')or exit('No direct script access allowed');
class Ajax extends CI_Controller {
    public function get_csrf_hash(){
        ajax_request();
    }
}