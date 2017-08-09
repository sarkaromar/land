<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Area{

    public function __construct() {

        $CI = & get_instance();

        $result = $CI->db->select('*')->from('area')->get();

        if (!$result->num_rows() == 0) {

            $abcd = $this->lists = $result->result();

        }

    }

}

?>