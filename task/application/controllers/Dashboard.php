<?php

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
         $this->load->helper('form');
    }


	public function index() {

		$user = $this->session->userdata('user');
		// echo $user['status'];
		if($user['status'] != 1){
			$this->session->set_flashdata('status','Sorry your Status has been disabled!');
			return redirect('login/index');
		}


		$this->load->model('user_model');
		$data['users'] = $this->user_model->getAllUsers();
		$this->load->view('dashboard/home',$data);
	}

	public function userDetailView($user_id) {
		$this->load->model('user_model');
		$detail = $this->user_model->find_detail($user_id);
		$this->load->view('dashboard/user_view',['detail'=>$detail]);
	}

	public function edit_user_details($user_id){
		$this->load->model('user_model');
		$detail = $this->user_model->find_detail($user_id);
		$this->load->view('dashboard/edit_detail',['detail'=>$detail]);
	}

	public function update_user_details($user_id) {

		$config = [
            'upload_path'       =>      './uploads',
            'allowed_types'     =>      'jpg|jpeg|png|gif|JPG',
        ];
        $this->load->library('upload', $config);

		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Name','trim|required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('vstreet','Street');
		$this->form_validation->set_rules('vcity','City');
		$this->form_validation->set_rules('vstate','State');
		$this->form_validation->set_rules('vzip','Zip',);

		if ( $this->form_validation->run() && $this->upload->do_upload('photo')){
			$post = $this->input->post();
			unset($post['submit']);
			$data= $this->upload->data();
			$image_path= base_url("uploads/".$data['raw_name'].$data['file_ext']);
			$post['photo'] = $image_path;
			// print_r($post);
			$this->load->model('user_model');
			$this->user_model->update_detail($post,$user_id);
			$this->user_model->update_address_detail($post, $user_id);

			return redirect('Dashboard/index');
		}
		else{
			$this->load->view('dashboard/edit_detail',['id'=>$user_id]);
		}
	}

	public function delete_user($user_id){
		$this->load->model('user_model');
		$this->user_model->deleteUser($user_id);

		return redirect('Dashboard/index');
	}

	public function change_status($id, $status){

		if(isset($status))
		{
			$this->load->model('user_model');
			$this->user_model->update_status($id,$status);
		}
		redirect('Dashboard/index');
	}
}

?>