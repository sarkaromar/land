<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_panel extends CI_Controller {

    function __construct() {
        
        parent :: __construct();
        $this->load->model('data');
        
        $this->slider_t = 'slider';
        $this->slider_p = './assets/img/slider/';
        $this->load->model('slider');
        
        $this->package_t = 'package';
        $this->package_p = './assets/img/package/';
        $this->load->model('package_m');
        
        $this->pack_features_t = 'pack_features';
        $this->pack_images_t = 'pack_images';
        
        $this->area_t = 'area';
        $this->area_p = './assets/img/area/';
        $this->load->model('area_m');
        
        $this->com_settings_t = 'common_settings';
        $this->com_settings_p = './assets/img/logo/';
        $this->load->model('common_settings');
        
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        if (!$this->back_user->loggedin) {
            redirect(site_url('login'));
        }

    }
    
    // ##############################################################################################
    //  dashboard section
    // ##############################################################################################

    public function index() {

        $data['title'] = "Dashboard";
        
        $data['menu'] = "dash";

        $data['page'] = "back/dashboard/dashboard";

        $this->load->view('back/common/template', $data);

    }

    // ##############################################################################################
    //  slider section
    // ##############################################################################################

    public function slider() {

        $data['title'] = "Slider";
        
        $data['menu'] = "slider";

        $data['page'] = "back/slider/slider";
        
        $data['lists'] = $this->data->getall($this->slider_t);

        $this->load->view('back/common/template', $data);
    }

    public function add_slider() {

        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->slider_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');

                    redirect(site_url('admin_panel/slider'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }
            $id = $this->slider->add($image);
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');

                redirect(site_url('admin_panel/slider'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');

                redirect(site_url('admin_panel/slider'));

            }

        } else {

            redirect(site_url('admin_panel/slider'));

        }
    }

    public function edit_slider($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/slider'));

        }

        $data['title'] = "Edit Slider";
        
        $data['menu'] = "slider";

        $data['page'] = "back/slider/edit_slider";
        
        $data['list'] = $this->data->getone($this->slider_t, $id);

        $this->load->view('back/common/template', $data);

    }

    public function do_edit_slider() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');
                $filename = $this->slider_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->slider_p);

                if ($image_upload == FALSE) {
                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/slider'));
                } else {
                    $image = $image_upload["file_name"];
                }
            } else {
                $image = $this->input->post('img');
            }

            if ($this->slider->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/slider');

            }

        } else {
            redirect('admin_panel/slider', 'refresh');
        }

    }

    public function delete_slider($id, $image) {

        $result = $this->delete($this->slider_t, $id, $image, $this->slider_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/slider');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/slider');

        }

    }


    // ##############################################################################################
    //  package section
    // ##############################################################################################

    public function package() {
        
        $data['title'] = "Our Package";
        
        $data['menu'] = "package";
        
        $data['page'] = "back/package/package";
        
        $data['lists'] = $this->data->getall($this->package_t);

        $this->load->view('back/common/template', $data);
    }
    
    public function add_package() {

        if(!$_POST){
            
            $data['title'] = "Add Package";
            
            $data['menu'] = "package";
            
            $data['areas'] = $this->data->getall($this->area_t);
            
            $data['page'] = "back/package/add";
            
            $data['footer_bottom'] = "<script src='" . base_url() . "assets/back/js/add_more_btn.js'></script>";
            
            $this->load->view('back/common/template', $data);
            
        } else {
            
            // main image upload
            if ($_FILES['m_image']['name'] != '') {

                $image_upload = $this->do_upload('m_image', $this->package_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Main Image Upload Failed');
                    redirect(site_url('admin_panel/add_package'));

                } else {

                    $m_image = $image_upload["file_name"];

                }

            }
                
            // save total info
            $id = $this->package_m->add($m_image);

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
                        
                        $data['title'] = "Add Package";
            
                        $data['menu'] = "package";

                        $data['areas'] = $this->data->getall($this->area_t);

                        $data['page'] = "back/package/add";

                        $data['footer_bottom'] = "<script src='" . base_url() . "assets/back/js/add_more_btn.js'></script>";

                        $this->load->view('back/common/template', $data);
                        
                    } else {

                        $f_data = $this->upload->data();

                        $f_name = $f_data["file_name"];

                        $this->package_m->add_images($id, $f_name);

                    }

                }

            }

            // redirecting
            if ($id) {

                $this->session->set_flashdata('success', 'Added Successfully');
                redirect(site_url('admin_panel/package'));

            } else {

                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/package'));

            }
        
        }
    }

    public function edit_package($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/package'));

        }

        $data['title'] = "Edit Package";
        
        $data['menu'] = "package";

        $data['page'] = "back/package/edit";
        
        $data['list'] = $this->data->getone($this->package_t, $id);

        $data['areas'] = $this->data->getall($this->area_t);
        
        $data['feats'] = $this->data->getall_by_id($this->pack_features_t, $id);
        
        $data['ot_images'] = $this->data->getall_by_id($this->pack_images_t, $id);
        
        $data['footer_bottom'] = "<script src='" . base_url() . "assets/back/js/add_more_btn.js'></script>";
        
        $this->load->view('back/common/template', $data);

    }

    public function do_edit_package() {
        
        if($_POST){

            $id = $this->input->post('id');

            // main image upload
            if ($_FILES['m_image']['name'] != '') {

                $del_image = $this->input->post('old_m_image');

                $filename = $this->package_p . $del_image;

                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('m_image', $this->package_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');

                    redirect(site_url('admin_panel/package'));

                } else {

                    $m_image = $image_upload["file_name"];

                }

            } else {

                $m_image = $this->input->post('old_m_image');

            }
            
            // save main image with basic info
            $this->package_m->edit($id, $m_image);
            
            // upload other images
            if($_FILES['other_images']['name'][0] != ''){
                
                // get image name from db
                $old_images = $this->data->getall_by_id($this->pack_images_t, $id);
                
                // delete from dir
                foreach ($old_images as $old_image) {
                    
                    $ot_images_filename = $this->package_p . $old_image->image;

                    if (file_exists($ot_images_filename)) {
                        unlink($ot_images_filename);
                    }
                }
                
                // delete image name from db by id
                $this->data->delete($this->pack_images_t, $id);
                
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
                        $other_images = $this->upload->display_errors();
                        print_r($other_images);
                        
                    } else {

                        $f_data = $this->upload->data();

                        $f_name = $f_data["file_name"];

                        $this->package_m->edit_images($id, $f_name);
                        
                    }

                }
                
                // redirecting
                $this->session->set_flashdata('success', 'Update Successfully');
                redirect(site_url('admin_panel/package'));

            } else {
                
                // if no exist ot_images
                $this->session->set_flashdata('success', 'Update Successfully');
                redirect(site_url('admin_panel/package'));
                
            }
            
        } else {
            
            // direct function access
            redirect('admin_panel/package', 'refresh');

        }

    }

    public function delete_package($id, $m_image) {
        
        // package data and image delete form main table
        $result = $this->delete($this->package_t, $id, $m_image, $this->package_p);
        
        // get all images by id from 
        $images = $this->data->getall_by_id($this->pack_images_t, $id);
        
        // package image delete form sub table
        foreach ($images as $image) {
            
            $delete_images_filename = $this->package_p . $image->image;

            if (file_exists($delete_images_filename)) {
                unlink($delete_images_filename);
            }
        }
        
        // delete image info from images table
        $this->data->delete($this->pack_images_t, $id);
        
        // delete feature inof from feature table
        $result = $this->data->delete($this->pack_features_t, $id); 
        
        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/package');

        } else {

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/package');

        }
    }
    
    public function pack_status($id, $status) {
        
        $value = array(

            'status'=> $status
            
        );
        
       $this->data->update($this->package_t, $id, $value);
       redirect('admin_panel/package');
        
    }


    // ##############################################################################################
    //  coverage area section
    // ##############################################################################################

    public function coverage_area() {

        $data['title'] = "Coverage Area";
        
        $data['menu'] = "area";

        $data['page'] = "back/coverage_area/area";
        
        $data['lists'] = $this->data->getall($this->area_t);

        $this->load->view('back/common/template', $data);

    }


    public function add_coverage_area() {

        if($_POST){

            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->area_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');

                    redirect(site_url('admin_panel/coverage_area'));

                } else {

                    $image = $image_upload["file_name"];

                }

            }

            $id = $this->area_m->add($image);

            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');

                redirect(site_url('admin_panel/coverage_area'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');

                redirect(site_url('admin_panel/coverage_area'));

            }

        } else {

            redirect(site_url('admin_panel/coverage_area'));

        }

    }


    public function edit_coverage_area($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/coverage_area'));

        }

        $data['title'] = "Edit Coverage Area";
        
        $data['menu'] = "area";

        $data['page'] = "back/coverage_area/edit_area";
        
        $data['list'] = $this->data->getone($this->area_t, $id);

        $this->load->view('back/common/template', $data);

    }


    public function do_edit_coverage_area() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->area_p . $del_image;

                if (file_exists($filename)) {

                    unlink($filename);

                }

                $image_upload = $this->do_upload('image', $this->area_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');

                    redirect(site_url('admin_panel/coverage_area'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->area_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');

                redirect('admin_panel/coverage_area');

            }

        } else {

            redirect('admin_panel/coverage_area', 'refresh');

        }

    }


    public function delete_area($id, $image) {

        $result = $this->delete($this->area_t, $id, $image, $this->area_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');

            redirect('admin_panel/coverage_area');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');

            redirect('admin_panel/coverage_area');

        }

    }


    // ##############################################################################################
    //  faqs section
    // ##############################################################################################

    public function faqs() {

        $data['title'] = "Faqs";
        
        $data['menu'] = "faqs";

        $data['page'] = "back/faqs/faqs";
        
        $data['lists'] = $this->data->getall($this->faqs_t);

        $this->load->view('back/common/template', $data);
    }

    public function add_faqs() {
        if($_POST){

            $id = $this->faqs->add();
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/faqs'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added Successfully');
                redirect(site_url('admin_panel/faqs'));

            }

        } else {

            redirect(site_url('admin_panel/faqs'));

        }
    }

    public function edit_faqs($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/faqs'));

        }

        $data['title'] = "Edit Faqs";
        
        $data['menu'] = "faqs";

        $data['page'] = "back/faqs/edit_faqs";
        
        $data['list'] = $this->data->getone($this->faqs_t, $id);

        $this->load->view('back/common/template', $data);

    }

    public function do_edit_faqs() {

        if($_POST){

            $id = $this->input->post('id');

            if ($this->faqs->edit($id)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/faqs');

            }

        } else {
            redirect('admin_panel/faqs', 'refresh');
        }

    }

    public function delete_faqs($id) {

        $result = $this->delete($this->faqs_t, $id);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/faqs');

        } else{

            $this->session->set_flashdata('danger', 'Not Delete Successfully.');
            redirect('admin_panel/faqs');

        }

    }


    // ##############################################################################################
    //  Common settings section
    // ##############################################################################################

    public function common_settings() {

        $data['title'] = "Common Settings";
        
        $data['menu'] = "com_set";

        $data['page'] = "back/settings/common_settings";
        
        $data['list'] = $this->data->getall($this->com_settings_t);

        $this->load->view('back/common/template', $data);
    }

    
    public function do_edit_common_settings() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->com_settings_p . $del_image;

                if (file_exists($filename)) {

                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->com_settings_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');

                    redirect(site_url('admin_panel/common_settings'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->common_settings->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');

                redirect('admin_panel/common_settings');

            }

        } else {

            redirect('admin_panel/common_settings', 'refresh');

        }

    }

    public function do_upload($field_name , $path) {

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '5120';
        $config['xss_clean'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return false;
        } else {
            return $this->upload->data();
        }
    }

    public function delete($table, $id, $image = NULL, $path = NULL) {

        if($image != NULL){

            $this->data->delete($table, $id);
            $filename = $path . $image;

            if (file_exists($filename)) {
                unlink($filename);
                return TRUE;
            } else {
                return FALSE;
            }

        } else {

            if ($this->data->delete($table, $id)) {
                return TRUE;
            } else {
                return FALSE;
            }

        }
        
    }

    public function logout($hash) {

        $config = $this->config->item("cookieprefix");

        $this->load->helper("cookie");
        if ($hash != $this->security->get_csrf_hash()) {

            $data['title'] = "Error";

            $data['page'] = "back/error/admin_error";

            $this->session->set_flashdata('danger', 'CSRF and Cookie problem');

            $this->load->view('back/common/template', $data);
        }
        delete_cookie($config . "un");
        delete_cookie($config . "tkn");
        $this->session->sess_destroy();
        redirect('login');
    }

}