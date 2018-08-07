<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books_model extends CI_Model {

	function get_books()
	{
		$query = $this->db->get('books');
		return $query->result_array();
	}

	function get_genres()
	{
		$query = $this->db->get('genre');
		return $query->result_array();
	}

	function add_book($add)
	{
		$this->db->insert('books', $add);
	}

	function get_the_book($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('books', $id);
		return $query->result_array();
	}

	function edit_book($id, $edit)
	{
		$this->db->where('id', $id);
		$this->db->update('books', $edit);
	}

	function del_book($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('books');
	}

}