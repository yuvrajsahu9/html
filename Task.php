<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Task extends CI_Controller {

	
	public function index()
	{
		$this->load->view('register');
	}
	public function login()
	{
		$this->load->view('login');
	}

	public function reg_insert()
	{
		//$data = array('name' => $this->input->post('name'),'email' => $this->input->post('email'),'mobile' => $this->input->post('mobile'),'password' => $this->input->post('password'));
		$data = $this->input->post();
		$this->load->model('My_model');
		if($this->My_model->reg_insert($data))
		{
			echo "Registered";

			redirect ('http://localhost/task/task/login/');
		}
		else
		{
			echo "Failed";
		}
	}
	public function chk_login()
 	{
 		$query = $this->db->get_where('task',array('name'=> $this->input->post('name'),'password' => $this->input->post('password')));
 		//$data=$this->input->post();
 		//$query = $this->db->get_where('task',$data);
 		$res = $query->result();
 		$num = $query->num_rows();
 		if($num == 1)
 		{
 			$this->session->set_userdata('name',$res->name);

 			//$this->session->set_userdata('id',$res->id);
 			redirect ('http://localhost/task/task/display');
 		}
 		else
 		{
 			echo "Login Failed";
 		}
 	}

 	public function display()
 	{
 		$query = $this->db->get('task');
 		$data['records'] = $query->result();
 		$data['num'] = $query->num_rows();
 		$this->load->view('display',$data);
 	}
 	public function delete()
 	{

 		//$data =	$this->session->userdata('id');
 		$id = $this->input->get('id');
 		
 		$this->load->model('My_model');
 		if($this->My_model->delete($id))
		{
			redirect ('http://localhost/task/task/display');
		}
 		
 	}
}
