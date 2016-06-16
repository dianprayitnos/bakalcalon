<?php
class Bakal_calon_model extends CI_Model {

    private $primary_key = 'id_bakal_calon';
    private $table_name = 'bakal_calon';

	function __construct() {
        parent::__construct();
    }    

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_data_all($id) {       
        $query = $this->db->query("SELECT * FROM bakal_calon where id_parpol = '{$id}'");
        return $query->result();
    }

    function jumlah_pemilih($id)
    {
        $query = $this->db->query("SELECT count('id_bakal_calon') as pemilih from penilaian where id_bakal_calon = '{$id}'");        
        return $query->row()->pemilih;
    }

    function count_all() {
        return $this->db->count_all($this->table_name);
    }

    function insert($data) {
        return $this->db->insert($this->table_name, $data);
    }

    function edit($id, $data) {
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id) {
        return $this->db->delete($this->table_name, array($this->primary_key => $id));
    }
}
