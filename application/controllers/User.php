<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        
        parent::__construct();
        $this->load->library(array('form_validation', 'session'));
        $this->load->helper(array('text', 'url'));
        $this->load->model('Usermodel');
    }
    public function index()
	{
        $data['list']=$this->Usermodel->get_user();
		$this->load->view('user/user',$data);
	}

	public function add()
	{
		$this->load->view('user/add_user');
	}
	
	public function detail($id)
    {
        $data['detail']=$this->Usermodel->get_detail($id);
        $this->load->view('user/userdetail',$data);
    }

	public function insert()
	{
		$profile = $_FILES['profile']['name'];
        $config = [
            'upload_path' => "./assets/images/profile/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('profile');
        if ($this->Usermodel->insert($this->input->post(), $profile)) {
            $this->session->set_flashdata('msg', 'Data berhasil ditambah');
            redirect(base_url('User'));
        }
	}

	public function delete($id)
	{
		if($this->Usermodel->delete($id)){
		  $this->session->set_flashdata('msg','Data berhasil dihapus');
		  redirect(base_url('User'));
		 }
	   }

	public function edit($id)
	   {
		   $data['edit']=$this->Usermodel->edit($id);
		   $this->load->view('user/edit_user',$data);
	   }
	public function update()
	   {
		   $id= $this->input->post('ID');
		   $nama= $this->input->post('nama');
		   $email= $this->input->post('email');
		   $alamat= $this->input->post('alamat');
		   $telepon= $this->input->post('telepon');
		   $profile= $this->input->post('profile');
		   $config = [
			   'upload_path' => "./assets/images/profile/",
			   'allowed_types' => "gif|jpg|png|jpeg",
			   'overwrite' => TRUE,
			   'max_size' => "2048000"
		   ];
		   $this->load->library('upload', $config);
   
		   if (!$this->upload->do_upload('profile')){
			   $data = [
				   'nama'=>$nama,
			   'email'=>$email,
			   'alamat'=>$alamat,
			   'telepon'=>$telepon
		   ];
			   $this->Usermodel->update($data, $id);
			   $this->index();
			   $this->session->set_flashdata('msg', 'Data berhasil diedit');
			   redirect(base_url('User'));
		   }
		   else {
			   $file_info = $this->upload->data();
			   $profile = $file_info['file_name'];
			   $data = [
				'nama'=>$nama,
				'email'=>$email,
				'alamat'=>$alamat,
				'telepon'=>$telepon,
				'profile'=>$profile
		   ];
			   $this->Usermodel->update($data, $id);
			   $this->index();
			   $this->session->set_flashdata('msg', 'Data berhasil diedit');
			   redirect(base_url('User'));
		   }
	   }
}