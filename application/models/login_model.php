<?php
class Login_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	function cek_login_masyarakat($username, $password)
	{
		$query = $this->db->query("SELECT id_masyarakat FROM masyarakat WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

	function cek_login_parpol($username, $password)
	{
		$query = $this->db->query("SELECT id_parpol FROM parpol WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

	function cek_login_admin($username, $password)
	{
		$query = $this->db->query("SELECT id_admin FROM admin WHERE username = '{$username}' AND password = '{$password}'");
		return $query->row();
	}

}
