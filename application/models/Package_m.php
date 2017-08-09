<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Package_m extends CI_Model {

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
    
    
    // save main image with basic info
    public function edit($id, $m_image= NULL) {

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

        $result = $this->data->update($this->package_t, $id, $value);
        
        if(@$this->input->post('feat')){
            
            // features data save 
            $feats = $this->input->post('feat');
            
            $this->data->delete($this->pack_features_t, $id); // delete exits same parent id
            
            foreach ($feats as $feat) {
                $value = array(
                    'id' => $id,
                    'feature' => $feat
                );
                $this->data->save($this->pack_features_t, $value);
            }
            
            return TRUE; 
            
        }  else {
            
            return TRUE; 
            
        }
        
    }
    
    
    public function edit_images($id, $f_name) {
        
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
 
    // frontend purpose
    public function getall_package_home(){
        
        $this->db->select('package.area,
                            package.name,
                            package.size,
                            package.add,
                            package.s_desc,
                            package.l_desc,
                            package.type,
                            package.m_image,
                            package.status,
                            package.created,
                            
                            pack_images.image,
                            pack_features.feature'
                        );

        $this->db->from('package');
        $this->db->join('pack_images', 'pack_images.id = package.id', 'left');
        $this->db->join('pack_features', 'pack_features.id = package.id', 'left');
        $this->db->where('package.status','1');
        
        $query = $this->db->get();
        $results = $query->result();
        return $results;
        
    }
  
}