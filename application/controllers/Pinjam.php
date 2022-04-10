<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller {

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
        $this->load->model('Pinjammodel');
    }

    public function index()
    {
        $data['koleksi'] = $this->Pinjammodel->get_koleksi();          
        $this->load->view('pinjam',$data);
    }

	public function peminjaman()
    {       
		$id = $_GET['id'];
		$data['koleksi'] = $this->Pinjammodel->get_detailkoleksi($id);
        $this->load->view('formpinjam',$data);
    }

	public function detail()
    {
        $data['pinjam']=$this->Pinjammodel->pinjam_buku();          
		$this->load->view('detail_pinjam',$data);
    }

	public function add_pinjam()
	{
		$IDuser = $this->input->post('IDuser');
		$IDbuku = $this->input->post('IDbuku');
		$nama = $this->input->post('nama');
		$judul = $this->input->post('judul');
		$tanggal = $this->input->post('tanggal');
		$status = $this->input->post('status');
	
		$data = [
		'IDuser'  => $IDuser,
		'IDbuku'  => $IDbuku,
		'nama'  => $nama,
		'judul' => $judul,
		'tanggal' => $tanggal,
		'status' => $status
		];
		$this->db->insert("pinjam", $data);
	}
}