<?php 

class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_user($user)
	{
		$this->db->where('netid', $user)
			->from('users');

		$query = $this->db->get();

		if (!$query->num_rows())
			return false;

		return $query->row();
	}

	function add_user($user)
	{
		$data = array(
			'netid' => $user
		);

		$this->db->insert('users', $data);
	}

	function set_major($user, $major)
	{
		$this->db->set('major', $major)
			->where('netid', $user);

		$this->db->update('users');
	}
	
}