<?php

class User_model extends CI_Model 
{
	public function getAllUsers() {
		$query = $this->db->select()
					->from('user_detail')
					->get();
		return $query->result();
	}

	public function addUser($post) {
		return $this->db->insert('user_detail', $post);
	}

	public function getByEmail($email) {
		$user = $this->db->where('email',$email)
					->get('user_detail')->row_array();

		return $user;
	}

	public function login_valid($email,$password) {
		$q = $this->db->where(['email'=>$email, 'password'=>$password])
					->from('user_detail')
					->get();

		if ($q->num_rows() ){
			return $q->row()->id;
		}
		else{
			return FALSE;
		}
	}

	public function find_detail($user_id) {
		$q = $this->db->select()
					->from('user_detail')
					->where('id',$user_id)
					->get();

		return $q->row();
	}

	public function update_detail($post,$user_id){
		$data = array(
			'username' => $post['username'],
			'email' => $post['email'],
			'street' => $post['street'],
			'city' => $post['city'],
			'state' => $post['state'],
			'zip' => $post['zip'],
			'photo' => $post['photo'],
		);

		return $this->db->where('id',$user_id)
						->update('user_detail', $data);
	}

	public function deleteUser($user_id) {
		return $this->db->delete('user_detail',['id'=>$user_id]);
	}

	public function update_status($id,$status){
		
		if($status){
			$status = 0;
		}
		else{
			$status = 1;
		}
		$data = array('status' =>$status);
		return $this->db->where('id',$id)
		 				->update('user_detail', $data);
	}
}

 ?>