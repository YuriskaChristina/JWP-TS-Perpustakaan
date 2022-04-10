<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

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
        $this->load->library(array('form_validation', 'email', 'session'));
        $this->load->helper(array('text', 'url', 'cookie', 'string'));
        if ($this->session->userdata('nama') == '') {
            redirect(base_url('login'));
        }
    }

	public function index()
	{
        $data['nama']='Yuriska Christina';
        $data['alamat']='Surakarta';
        $data['email']='yc@gmail.com';
        $data['hobi']=['Membaca', 'Menulis', 'Memasak'];
		$this->load->view('dashboard',$data);
	}
    public function about()
    {
        echo "Hai, ini adalah halaman about";
    }


}
