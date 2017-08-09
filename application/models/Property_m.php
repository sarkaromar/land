<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Property_m extends CI_Model {

    function __construct() {
        
        parent :: __construct();
        
        $this->package_t = 'package';
        $this->pack_features_t = 'pack_features';
        $this->pack_images_t = 'pack_images';
        
    }

    public function add($m_image) {
        
        $value = array(

            'name'=> $this->input->post('name'),
            'type'=> $this->input->post('type'),
            'area'=> $this->input->post('area'),
            'size'=> $this->input->post('size'),
            'price'=> $this->input->post('price'),
            'add'=> $this->input->post('add'),
            's_desc'=> $this->input->post('s_desc'),
            'l_desc'=> $this->input->post('l_desc'),
            'm_image'=> $m_image,
            
        );
        
        $last_id = $this->data->save($this->package_t, $value);

        if($last_id){
            
            // features data save 
            $feats = $this->input->post('feat');
            
            $this->data->delete($this->pack_features_t, $last_id); // delete exits same parent id
            
            foreach ($feats as $feat) {
                $value = array(
                    'id' => $last_id,
                    'feature' => $feat
                );
                $this->data->save($this->pack_features_t, $value);
            }
            
            return $last_id; 
            
        }  else {
            
            return FALSE; 
            
        }
        
    }
    
    
    public function add_images($id, $f_name) {
        
        $value = array(

            'id'=> $id,
            'image'=> $f_name
                
        );
        
        if($this->data->save($this->pack_images_t, $value)){
                
            return TRUE; 
            
        }  else {
            
            return FALSE; 
            
        }
        
    }
    
  
    
}