<?php


class Login extends CI_Controller{
	public function index() {
		$this->load->helper('form');
		$this->load->view('loginsignup/login');
	}

	public function user_signin() {
		$this->load->helper('form');
		$this->load->view('loginsignup/signup');

	}

	public function signinAuthentication() {


		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Name','trim|required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('passwordConfirm','Password Confirmed','required');	
		$this->form_validation->set_error_delimiters('<small class="text-danger"> ','</small>');


		if ($this->form_validation->run()) {
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$passwordConfirm = $this->input->post('passwordConfirm');
			$post = $this->input->post();

			if($password == $passwordConfirm){
				$post['password'] = password_hash($password, PASSWORD_DEFAULT);
				unset($post['passwordConfirm']);
            	unset($post['submit']);

            	$this->load->model('user_model','user');
            	if($this->user->addUser($post)) {
            		$this->session->set_flashdata('signup_success','You added Successfully!');
            		return redirect('login/index');
            	}
            	else {
            		// Unsuccessful
            		echo"User ".$username." is not registered.";
            	}

			}else{
				$this->session->set_flashdata('msg','Password do not match!');
				return redirect('login/user_signin');
			}

		} else {
			$this->load->view('loginsignup/signup');
		}
	}


	public function user_login() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email','Email','required|valid_email');		
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_error_delimiters('<small class="text-danger"> ','</small>');

		if ($this->form_validation->run() ) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('user_model');
			$user = $this->user_model->getByEmail($email);
			// print_r($user);
			if(!empty($user) ){
				if(password_verify($password, $user['password']) == true) {

					$userArray['user_id'] = $user['id'];
					$userArray['username'] = $user['username'];
					$userArray['status'] = $user['status'];
					$this->session->set_userdata('user',$userArray);
					// print_r($userArray);
					return redirect('dashboard/index');

				} else {
					$this->session->set_flashdata('msg','Either Email or Password is incorrect');
					redirect('login/index');
				}
				
			} else{
				$this->session->set_flashdata('msg','Either Email or Password is incorrect');
				redirect('login/index');
			}
		} else{
			$this->load->view('loginsignup/login');
		}
	}

	public function logout() {
		$this->session->unset_userdata('user');
		redirect('login/index'); 
	}
	
}

?>



