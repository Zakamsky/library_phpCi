<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model {

public $add_rules = array(
	array(
		'field' => 'title',
		'label' => 'Название',
		'rules' => 'required|min_length[3]|max_length[100]|trim'
	),
	array(
		'field' => 'author',
		'label' => 'Автор',
		'rules' => 'required|min_length[5]|max_length[100]|trim'
	),
	array(
		'field' => 'year',
		'label' => 'Год выпуска',
		'rules' => 'required|integer|exact_length[4]|trim'
	)
);
}