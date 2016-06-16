<?php
class Masyarakat_model extends CI_Model {

    private $primary_key = 'id_masyarakat';
    private $table_name = 'masyarakat';

	function __construct() {
        parent::__construct();
    }
    
    function get_nama($id)
    {
        $query = $this->db->query("SELECT * FROM '{$table_name}' WHERE '{$primary_key}' = '{$id}'");
        return $query->row();
    }

    function get_all() {
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_jumlah_masyarakat()
    {
        $query = $this->db->query("SELECT count(id_masyarakat) as jumlah_masyarakat FROM masyarakat");
        return $query->row()->jumlah_masyarakat;
    }

    function get_data($id) {
        $this->db->where($this->primary_key, $id);
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
