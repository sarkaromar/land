<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class Land_for_development extends CI_controller {
	
	function __construct(){

        parent::__construct();

        $this->load->model('data');

        $this->area_t = 'area';

        $this->package_t = 'package';
        
        $this->pack_features_t = 'pack_features';

    }

    public function index(){

        redirect(site_url('land_for_dev/all'));

    }


    public function all(){

        $data['title'] = "Land for Development";
        
        $data['menu'] = "dev";
        
        $data['areas'] = $this->data->getall($this->area_t);

        $type = "Development";
        
        $total = $this->data->get_total_package($this->package_t, $type);

        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'land_for_dev/all';

        $config['total_rows'] = $total;

        $config['per_page'] = 3;

        include (APPPATH . "/config/front_pegi.php"); 

        $this->pagination->initialize($config);

        $data['lists'] = $this->data->getall_by_type_pagi($this->package_t, $type, $config['per_page'], $this->uri->segment(2));

        $data['page'] = "front/pages/land_for_dev";

        $this->load->view('front/common/template', $data);
        
    }

    public function details($id){

        $data['list'] = $this->data->getone($this->package_t, $id);
        
        $data['feats'] = $this->data->getall_by_id($this->pack_features_t, $id);
        
        $data['title'] = "Land Details";
        
        $data['menu'] = "dev";

        $data['page'] = "front/pages/package_details";
        
        $this->load->view('front/common/template', $data);

    }

    
}