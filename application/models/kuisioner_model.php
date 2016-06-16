<?php
class Kuisioner_model extends CI_Model {

    private $primary_key = 'id_kuisioner';
    private $table_name = 'kuisioner';

	function __construct() {
        parent::__construct();
    }    

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_jumlah_kuisioner()
    {
        $query = $this->db->query("SELECT count(id_kuisioner) as jumlah_kuisioner FROM kuisioner");
        return $query->row()->jumlah_kuisioner;
    }

    function get_data_by_idmasyarakat($id) {
        $this->db->where('id_masyarakat', $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_data($id) {
        $this->db->where('id_masyarakat', $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
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
