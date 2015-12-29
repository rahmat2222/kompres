<?php

class User_model extends CI_Model
{
	public function get_users($ini_id, $ini_user)
	{
		$this->db->where(['id' => $ini_id,
						  'username' => $ini_user
						 
						 ]);
		$query = $this->db->get('user'); //nama table pake method get
		return $query->result();//masukin ke result
		//$this->db->where('id',$ini_id);
		/*$config['hostname']="localhost";
		$config['username']="root";
		$config['password']="";
		$config['database']="kompres";
		
		$connection = $this->load->database('$config'); */ //untuk beberapa database, sementara pake database yang satu aja di config databse
	}
	public function login_user($username,$password)
	{
		$this->db->where('username',$username);
		//$this->db->where('password',$password); //tanpa encript
		$result=$this->db->get('user');
		$db_password = $result->row(2)->password; //encript (colom password dalam db)

		
		//if($result->num_rows()==1) //tanpa encript
		if(password_verify($password, $db_password)) //decript
		{
			return $result->row(0)->id;
		}
		else
		{
			return false;
		}
		
	}
	
	public function create_user()
	{
		$panjang =['cost'=>10];
		$encript = password_hash($this->input->post('password'),PASSWORD_BCRYPT, $panjang);
		$data = array(
				
			'first_name'	=> $this->input->post('first_name'),
			'last_name' 	=> $this->input->post('last_name'),
			'username' 		=> $this->input->post('username'),
			//'password' 		=> $this->input->post('password'), //kalo tampa encript
			'password' 		=> $encript,
			'email' 		=> $this->input->post('email')
		);
		$insert_data = $this->db->insert('user',$data);
		return $insert_data;
	}
	//public function create_users($data)
	//{
	//	$this->db->insert('user',$data);
	//}
	
	
	public function update_users($data,$id)
	{
		$this->db->where(['id'=> $id]);//kalo ga pake ini semua data ke replace
		$this->db->update('user',$data);
	}

	public function delete_user($id)
	{
		$this->db->where(['id'=>$id]);
		$this->db->delete('user');
	}
}
?>