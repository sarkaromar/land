<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Footer_package {

    public function __construct() {

        $CI = & get_instance();

        $result = $CI->db->select('area, name, price, m_image')->from('package')->limit(3)->get();

        if (!$result->num_rows() == 0) {

            $this->lists = $result->result();

        }

    }


}

?>