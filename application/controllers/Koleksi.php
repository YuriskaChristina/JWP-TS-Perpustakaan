<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends CI_Controller {

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
        $this->load->model('Koleksimodel');
    }
    public function index()
	{
        $data['list']=$this->Koleksimodel->get_koleksi();
		$this->load->view('koleksi/koleksi',$data);
	}
    public function detail($id)
    {
        $data['detail']=$this->Koleksimodel->get_detail($id);
        $this->load->view('koleksi/detail',$data);
    }

	public function add()
	{
		$this->load->view('koleksi/add');
	}

	public function insert()
	{
		$cover = $_FILES['cover']['name'];
        $config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('cover');
        if ($this->Koleksimodel->insert($this->input->post(), $cover)) {
            $this->session->set_flashdata('pesan', 'Data berhasil ditambah');
            redirect(base_url('Koleksi'));
        }
	}

	public function edit($id)
	{
		$data['edit']=$this->Koleksimodel->edit($id);
		$this->load->view('koleksi/edit',$data);
	}
	public function update()
	{
		$id= $this->input->post('ID');
		$judul= $this->input->post('judul');
		$penulis= $this->input->post('penulis');
		$penerbit= $this->input->post('penerbit');
		$cover= $this->input->post('cover');
		$config = [
            'upload_path' => "./assets/images/cover/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000"
        ];
        $this->load->library('upload', $config);
		$this->upload->initialize($config);

        if (!$this->upload->do_upload('cover')){
			$data = [
				'judul'=>$judul,
			'penulis'=>$penulis,
			'penerbit'=>$penerbit
		];
        	$this->Koleksimodel->update($data, $id);
			$this->index();
            $this->session->set_flashdata('pesan', 'Data berhasil diedit');
            redirect(base_url('Koleksi'));
        }
		else {
			$cover = $_FILES['cover']['name'];
			$data = [
				'judul'=>$judul,
			'penulis'=>$penulis,
			'penerbit'=>$penerbit,
			'cover'=>$cover
		];
			$this->Koleksimodel->update($data, $id);
			$this->index();
            $this->session->set_flashdata('pesan', 'Data berhasil diedit');
            redirect(base_url('Koleksi'));
		}
	}

	public function delete($id){
		if($this->Koleksimodel->delete($id)){
		  $this->session->set_flashdata('pesan','Data berhasil dihapus');
		  redirect(base_url('Koleksi'));
		 }
	   }
}