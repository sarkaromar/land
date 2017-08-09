<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_controller {

    function __construct() {

        parent :: __construct();

        $this->load->model('data');
        
        $this->load->model('package_m');

        $this->package_t = 'package';

        $this->slider_t = 'slider';
    }
    
    public function index() {
        
        $data['title'] = "Home";
        
        $data['menu'] = "home";

        $data['sliders'] = $this->data->getall($this->slider_t);

        $data['packages'] = $this->data->getall_with_status($this->package_t);
        
        //$data['packages'] = $this->package_m->getall_package_home();
        
        $this->load->view('front/common/head', $data);
        
        $this->load->view('front/common/slider', $data);
        
        $this->load->view('front/common/home', $data);
        
        $this->load->view('front/common/footer', $data);
    }
    
    public function about(){
            
        $data['title'] = "About us";
        
        $data['menu'] = "about";

        $data['page'] = "front/pages/about";

        $this->load->view('front/common/template', $data);
        
    }
    
    public function faq(){

        //$data['list'] = $this->data->getone($this->package_table, $id);

        $data['title'] = "FAQ's";
        
        $data['menu'] = "faq";

        $data['page'] = "front/pages/faq";

        $this->load->view('front/common/template', $data);
        
    }
    
    public function contact(){

        $data['title'] = "Contact Us";
        
        $data['menu'] = "contact";

        $data['page'] = "front/pages/contact";
        
        $this->load->view('front/common/template', $data);
        
    }
    

    public function buyer_login() {

        $data['title'] = "buyer login";
        $data['page'] = "front/pages/buyer_login";
        $this->load->view('front/common/template', $data);
    }

    public function buyer_register() {

        $data['title'] = "buyer register";
        $data['page'] = "front/pages/buyer_register";
        $this->load->view('front/common/template', $data);
    }

}