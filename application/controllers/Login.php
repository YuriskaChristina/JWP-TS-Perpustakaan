<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
        $this->load->model('Usermodel');
    }


    public function index()
    {
        $cookie = get_cookie('tigaserangkai');
        if ($this->session->userdata('nama') != '') {
            redirect(base_url('Dashboard'));
        } else if ($cookie != '') {
            $sesi = $this->Usermodel->get_detail_by_cookie($cookie);
            $this->session->set_userdata($sesi);
            redirect('Dashboard');
        }

        $this->load->view('login');
    }


    public function auth()
    {
        $email = $this->input->post('email');
        $pwd = md5($this->input->post('password'));
        $auth = $this->Usermodel->auth($email, $pwd);
        if ($auth == TRUE) {
            $sesi = $this->Usermodel->getdetail($email);
            if ($this->input->post('remember') != '') {
                $key = random_string('alnum', 64);
                set_cookie('tigaserangkai', $key, 3600 * 24 * 30);
                $this->Usermodel->update_cookie($key, $sesi['ID']);
            }
            $this->session->set_userdata($sesi);
            redirect('Dashboard');
        } else {
            $this->session->set_flashdata('pesan', 'Username atau password salah!');
            $sesi = array('flag' => '1');
            $this->session->set_userdata($sesi);
            redirect('Login');
        }
    }

    public function logout()
    {
        delete_cookie('tigaserangkai');
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
