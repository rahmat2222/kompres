<?php

class Projects extends CI_Controller {
	
	
	public function __construct()
	{
		parent:: __construct();
		
		if(!$this->session->userdata('logged_in')) //users.php -- login function
		{
			$this->session->set_flashdata('no_access','Maaf, anda tidak dapat melihat konten ini');
			redirect('home/index');
		}
	}
	
	public function	index()
	{
		
		$data['projects'] = $this->project_model->get_projects(); //projects variabel juga di index.php (projects)
		$data['main_view'] = "projects/index";
		
		$this->load->view('layout/main', $data);
	}
	
	public function display($project_id)
	{
		$data['project_data'] = $this->project_model->get_project($project_id);
		$data['main_view'] = "projects/display";
		$this->load->view('layout/main', $data);
	}
	
	public function create()
	{
		


		$this->form_validation->set_rules('project_name','Project Name','trim|required');
		$this->form_validation->set_rules('project_body','Deskripsi','trim|required');
		
		if($this->form_validation->run()==false)
		{
			$data['main_view'] = 'projects/create_project';
			$this->load->view('layout/main', $data);
			
		}
		else
		{
			$data = array
				(
					'project_user_id' => $this->session->userdata('user_id'),
					'project_name' => $this->input->post('project_name'),
					'project_body' => $this->input->post('project_body')
			
				);
			if($this->project_model->create_project($data))
			{
				$this->session->set_flashdata('project_created','Artikel berhasil di buat');
				redirect("projects/index");
			}
		}

	}
	
	public function edit($project_id)
	{
		$this->form_validation->set_rules('project_name','Project Name','trim|required');
		$this->form_validation->set_rules('project_body','Deskripsi','trim|required');
		
		if($this->form_validation->run()==false)
		{
			$data['project_data'] = $this->project_model->get_projects_info($project_id);
			$data['main_view'] = 'projects/edit_project';
			$this->load->view('layout/main', $data);
			
		}
		else
		{
			$data = array
				(
					'project_user_id' => $this->session->userdata('user_id'),
					'project_name' => $this->input->post('project_name'),
					'project_body' => $this->input->post('project_body')
			
				);
			if($this->project_model->edit_project($project_id, $data))
			{
				$this->session->set_flashdata('project_update','Artikel berhasil di perbaharui');
				redirect("projects/index");
			}
		}

	}
	
	public function delete($project_id)
	{
		$this->project_model->delete_project($project_id);
		$this->session->set_flashdata('project_delete', 'Artikel anda berhasil di hapus');
		
		redirect("projects/index");
	}
	
	
	
}



?>