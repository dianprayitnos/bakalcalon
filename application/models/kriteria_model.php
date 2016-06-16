<?php
class Kriteria_model extends CI_Model {

    private $primary_key = 'id_kriteria';
    private $table_name = 'kriteria';

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

    function get_last_kriteria()
    {
        $this->load->dbforge();
        $query = $this->db->query("SELECT id_kriteria FROM kriteria ORDER BY id_kriteria DESC LIMIT 1");
        $nama_kolom = "kriteria".$query->row()->id_kriteria;     

        $fields = array(
        $nama_kolom => array('type' => 'float')
        );

        $this->dbforge->add_column('bakal_calon', $fields);
        $this->dbforge->add_column('kuisioner', $fields);

    }

    function get_jumlah_kriteria()
    {
        $query = $this->db->query("SELECT count(id_kriteria) as jumlah_kriteria FROM kriteria");
        return $query->row()->jumlah_kriteria;
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
        $this->load->dbforge();
        $nama_kolom = "kriteria".$id;
        $this->dbforge->drop_column('bakal_calon', $nama_kolom);
        return $this->db->delete($this->table_name, array($this->primary_key => $id));    
    }
}
