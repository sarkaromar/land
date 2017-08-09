<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Add_property extends CI_controller {

    function __construct() {

        parent :: __construct();

        $this->load->model('data');
        $this->area_t = 'area';
        
        $this->load->model('property_m');
        $this->package_p = './assets/img/package/';

    }
    
    public function index() {
        
        $data['title'] = "add Property";
        
        $data['menu'] = "add_prop";
        
        $data['areas'] = $this->data->getall($this->area_t);
        
        $data['page'] = "front/pages/add_property";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function add_client() {
        
        if($_POST && isset($_FILES['m_image']) && isset($_FILES['other_images'])) {
            
            $this->load->library('form_validation');

            $this->form_validation->set_rules('name', 'Property Name', 'required');
            $this->form_validation->set_rules('type', 'Property Type', 'required');
            $this->form_validation->set_rules('area', 'Area', 'required');
            $this->form_validation->set_rules('size', 'Size', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('add', 'Address', 'required');
            $this->form_validation->set_rules('s_desc', 'Short Description', 'required');
            $this->form_validation->set_rules('l_desc', 'Long Description', 'required');
            $this->form_validation->set_rules('feat[]', 'Key Feature', 'required');
            
            if ($this->form_validation->run() == FALSE) {
                
                // redirecting with form error
                $data['title'] = "add Property";

                $data['menu'] = "add_prop";

                $data['areas'] = $this->data->getall($this->area_t);

                $data['page'] = "front/pages/add_property";

                $this->load->view('front/common/template', $data);
                
            } else {
                
                // main image upload
                if ($_FILES['m_image']['name'] != '') {

                    $image_upload = $this->do_upload('m_image', $this->package_p);

                    if ($image_upload == FALSE) {

                        $this->session->set_flashdata('danger', 'Main Image Upload Failed');
                        redirect(site_url('add_property'));

                    } else {

                        $m_image = $image_upload["file_name"];

                    }

                }
                
                // save total info
                $id = $this->property_m->add($m_image);

                if($id){

                    // multiple image upload
                    $this->load->library('upload');

                    $f_count = count($_FILES['other_images']['name']);

                    // Faking upload calls to $_FILE
                    for ($i = 0; $i < $f_count; $i++){

                        $_FILES['ot_image']['name'] = $_FILES['other_images']['name'][$i];
                        $_FILES['ot_image']['type'] = $_FILES['other_images']['type'][$i];
                        $_FILES['ot_image']['tmp_name'] = $_FILES['other_images']['tmp_name'][$i];
                        $_FILES['ot_image']['error'] = $_FILES['other_images']['error'][$i];
                        $_FILES['ot_image']['size'] = $_FILES['other_images']['size'][$i];

                        $config = array(
                            'upload_path' => './assets/img/package/',
                            'allowed_types' => 'gif|jpg|png',
                            'max_size' => '10000',
                            'encrypt_name' => TRUE,
                            'xss_clean' => TRUE
                        );

                        $this->upload->initialize($config);

                        if(!$this->upload->do_upload('ot_image')) {
                            
                            // multe image error ashle ai section a ashe na!
                            $data['danger'] = $this->upload->display_errors();

                            $data['title'] = "add Property";

                            $data['menu'] = "add_prop";

                            $data['areas'] = $this->data->getall($this->area_t);

                            $data['page'] = "front/pages/add_property";

                            $this->load->view('front/common/template', $data);

                        } else {

                            $f_data = $this->upload->data();

                            $f_name = $f_data["file_name"];

                            $this->property_m->add_images($id, $f_name);

                        }

                    }

                }

                // redirecting
                if ($id) {

                    $this->session->set_flashdata('success', 'We recieved your property and we will review it within 24 hours.');
                    redirect(site_url('add_property'));

                } else {

                    $this->session->set_flashdata('danger', 'Not Added Successfully');
                    redirect(site_url('add_property'));

                }
                
            } // validation end

        } else {
            
            // if direct function call
            $this->session->set_flashdata('danger', 'Please! fillup form properly');
            redirect(site_url('add_property'));
            
        }
        
    }
    
    
    // single image upload
    public function do_upload($field_name , $path) {

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'jpg|png';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '2048';
        $config['xss_clean'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return false;
        } else {
            return $this->upload->data();
        }
    }
    
    
}