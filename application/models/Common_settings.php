<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Common_settings extends CI_Model {

    function __construct() {
        $this->table = 'common_settings';
        parent :: __construct();
    }

    public function edit($id, $image = NULL) {

        $value = array(

            'logo' => $image,
            'add' => $this->input->post('add'),
            'mail1' => $this->input->post('mail1'),
            'mail2' => $this->input->post('mail2'),
            'phn1' => $this->input->post('phn1'),
            'phn2' => $this->input->post('phn2'),
            'hot_phn' => $this->input->post('hot_phn'),
            
            'fb' => $this->input->post('fb'),
            'twt' => $this->input->post('twt'),
            'link' => $this->input->post('link'),
            'g_plus' => $this->input->post('g_plus'),
            'copyright' => $this->input->post('copyright')
        
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){

            return TRUE;

        }  else {

            return FALSE; 

        }

    }


}
