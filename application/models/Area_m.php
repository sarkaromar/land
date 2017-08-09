<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Area_m extends CI_Model {

    function __construct() {

        $this->table = 'area';

        parent :: __construct();

    }


    public function add($image) {
        
        $value = array(

            'area'=> $this->input->post('area'),
            'image'=> $image

        );
        
        $result = $this->data->save($this->table, $value);

        if($result){

            return TRUE;

        }  else {

            return FALSE; 

        }
        
    }
    
    public function edit($id, $image = NULL) {

        $value = array(

            'area'=> $this->input->post('area'),
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
