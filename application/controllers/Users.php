<?php

class Users extends CI_Controller 
{
	public function show($ini_id)
	{
		$dika['inivariabel']="ini isi variabel";
		$dika['result']= $this->user_model->get_users($ini_id, 'andika');
		//$this->load->model('user_model');
		$this->load->view('user_view',$dika);//$dika memasukan variabel ke userview
		
		
		
	}
	public function insert()
	{
		$user = "tambahan";
		$pw = "rahasia";
		$this->user_model->create_users([
			'username' => $user,
			'password' => $pw
		]);
	}
	public function update()
	{
		$id=3;
		$user = "sedih amet";
		$pw = "ke delete";
		$this->user_model->update_users([
			'username' => $user,
			'password' => $pw
		], $id);
	}
	
	public function delete()
	{
		$id=1;
		$this->user_model->delete_user($id);
	}
	
	public function register()
	{
		
		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[6]');
		$this->form_validation->set_rules('last_name','Nama belakang','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('password','Username','trim|required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[6]|matches[password]');
		
		if($this->form_validation->run() == false)
		{
			$data['main_view'] = 'users/register_view';
			$this->load->view('layout/main', $data);
		}
		else
		{
			if($this->user_model->create_user())  //ada di models
			{
				$this->session->set_flashdata('user_registered','Anda telah terdaftar');
				redirect('home/index');
			} else
			{
				
			}
		}

	}
	public function login()
	{
		
		$this->form_validation->set_rules('username','Username','trim|required|min_length[6]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
		//$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[6]|matches[password]');

		if($this->form_validation->run() == false)
		{
			$data=array(
			
			'errors'=>validation_errors()
				
			);
			$this->session->set_flashdata($data);
			$data['main_view'] = 'users/login_view';
			$this->load->view('layout/main', $data);
		} else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$user_id = $this->user_model->login_user($username,$password);
			
			if($user_id)
			{
				$user_data = array(
				'user_id'=>$user_id,
				'username'=>$username,
				'logged_in'=> true
				);
				
			$this->session->set_userdata($user_data);
			$this->session->set_flashdata('login_success','Sudah masuk');
				
			//$data['main_view'] = "admin_view";
			//$this->load->view('layout/main', $data);
			redirect('home');
			}else
			{
				$this->session->set_flashdata('login_failed','Password atau Username tidak cocok');
				redirect('home/index');
			}
		}
		//echo $_POST['password'];
		//echo $this->input->post('username');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home/index');
		
	}

}
?>