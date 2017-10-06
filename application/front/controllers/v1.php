<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class V1 extends CI_Controller {

    //define global variables
    public function __construct() {
        parent::__construct();
        $this->load->model('common');
        $GLOBALS['error_code'] = 0;
        $GLOBALS['api_debug_mode'] = false;
        error_reporting(0);
        date_default_timezone_set('Asia/Kolkata');
    }

    // Category @Ankit
    function category_list() {
        $condition_array = array();
        $setting_list = $this->common->select_data_by_condition('industry_type', $condition_array, '*');

        echo json_encode(array('RESULT' => $setting_list, 'MESSAGE' => 'Success', 'STATUS' => 1));
        exit();
    }

}
