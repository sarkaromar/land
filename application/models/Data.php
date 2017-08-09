<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Data extends CI_Model {

    public function getall($table) {
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function getall_with_status($table) {
        $this->db->where('status', 1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function getone($table, $id) {
        $this->db->where('id', $id);
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function getall_by_id($table, $id) {
        $this->db->where('id', $id);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function getcat($table, $id) {
        $this->db->where('id', $id);
        $this->db->where('type', 'clipart');
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    // =========================================================================
    public function get_total_package($table, $type) {
        $r = $this->db->select('id')->where('type', $type)->from("$table")->get();
        return $result = count($r->result_array());
    }

    public function getall_by_type_pagi($table, $type, $per_page, $uri_segment) {

        if ($uri_segment == NULL) {
            $uri_segment = 0;
        }

        $r = $this->db->select('*')
                ->where('type', $type)
                ->from("$table")
                ->limit($per_page, $uri_segment)
                ->get();

        return $list = $r->result();
    }

    // =========================================================================
    // =========================================================================
    public function get_total_package_by_area($table, $type, $area) {

        $r = $this->db->select('id')->where('type', $type)->where('area', $area)->from("$table")->get();
        return $result = count($r->result_array());
    }

    public function getall_by_area_pagi($table, $type, $area, $per_page, $uri_segment) {

        if ($uri_segment == NULL) {
            $uri_segment = 0;
        }

        $r = $this->db->select('*')
                ->where('type', $type)
                ->where('area', $area)
                ->from("$table")
                ->limit($per_page, $uri_segment)
                ->get();

        return $list = $r->result();
    }

    // =========================================================================


    public function getone_with_status($table, $id) {
        $this->db->where('id', $id);
        $this->db->where('status', 1);
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

    public function delete($table, $id) {
        $this->db->where('id', $id);
        $resul = $this->db->delete($table);
        if ($resul) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function save($table, $data) {

        $result = $this->db->insert($table, $data);
        if ($result) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }

    public function update($table, $id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update($table, $data);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function updateall($table, $data) {
//        $this->db->where('id', $id);
        $result = $this->db->update($table, $data);
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function get_last_one($table) {
        $this->db->limit(1);
        $this->db->from("$table");
        return $this->db->get()->result();
    }

}
