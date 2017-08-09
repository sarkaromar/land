<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Slider extends CI_Model {

    function __construct() {
        $this->table = 'slider';
        parent :: __construct();
    }


    public function add($image, $info_01 = NULL, $info_02 = NULL, $info_03 = NULL, $info_04 = NULL) {
        
        $value = array(

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
            'link'=> $this->input->post('link'),
            'info_01'=> $this->input->post('info_01'),
            'info_02'=> $this->input->post('info_02'),
            'info_03'=> $this->input->post('info_03'),
            'info_04'=> $this->input->post('info_04'),
            'image'=> $image

        );
        
        $result = $this->data->save($this->table, $value);

        if($result){

            return TRUE;

        }  else {

            return FALSE; 

        }
        
    }
    
    public function edit($id, $image= NULL, $info_01 = NULL, $info_02 = NULL, $info_03 = NULL, $info_04 = NULL) {

        $value = array(

            'title'=> $this->input->post('title'),
            'desc'=> $this->input->post('desc'),
            'link'=> $this->input->post('link'),
            'info_01'=> $this->input->post('info_01'),
            'info_02'=> $this->input->post('info_02'),
            'info_03'=> $this->input->post('info_03'),
            'info_04'=> $this->input->post('info_04'),
            'image'=> $image

        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){

            return TRUE;

        }  else {

            return FALSE; 

        }
    }


}
