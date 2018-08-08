<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libs extends CI_Controller {

	public function index()
	{

		$data['books'] = $this->books_model->get_books();
		$data['genres'] = $this->books_model->get_genres();

		$this->load->view('books_view', $data);
	}

	function add_book()
	{
		$this->load->library('form_validation');

		$data['genres'] = $this->books_model->get_genres();

		if (isset($_POST['add']))
		{
			$this->load->model('rules_model');
			$this->form_validation->set_rules($this->rules_model->add_rules);
			$check = $this->form_validation->run();
			if ($check == TRUE)
			{
				$add['title'] = $this->input->post('title');
				$add['author'] = $this->input->post('author');
				$add['genre_id'] = $this->input->post('genre_id');
				$add['year'] = $this->input->post('year');


				$this->books_model->add_book($add);

				$this->load->view('info_view');
			}
			else
			{
				$this->load->view('add_book_view', $data);
			}

		}
		else
		{
			$this->load->view('add_book_view', $data);
		}
	}


	function edit_book($id)
	{
		$id_id = $id;
		$this->load->library('form_validation');
		$data['book'] = $this->books_model->get_the_book($id);
		$data['genres'] = $this->books_model->get_genres();
		if (isset($_POST['add']))
		{
			$this->load->model('rules_model');
			$this->form_validation->set_rules($this->rules_model->add_rules);
			$check = $this->form_validation->run();
			if ($check == TRUE)
			{
				$edit['title'] = $this->input->post('title');
				$edit['author'] = $this->input->post('author');
				$edit['genre_id'] = $this->input->post('genre_id');
				$edit['year'] = $this->input->post('year');


				$this->books_model->edit_book($id, $edit);

				$this->load->view('info_view');
			}
			else
			{
				$this->load->view('edit_book_view', $data);
			}

		}
		else
		{
			$this->load->view('edit_book_view', $data);
		}


	}

	function del_book($id)
	{

		$this->books_model->del_book($id);
		$this->load->view('info_view');
	}
}