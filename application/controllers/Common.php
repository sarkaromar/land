<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common extends CI_Controller {

    public function __construct() {
        
        parent :: __construct();
        $this->load->model('data');
    }
    
    public function delete($table, $id) {

        if ($this->data->delete($table, $id)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    
}