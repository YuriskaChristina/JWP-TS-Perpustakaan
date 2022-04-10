<?php
class Usermodel extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    function get_user(){
        $query = $this->db->query("SELECT * from users");
        return $query->result();
    }

    function get_detail($id){
        $this->db->where('ID', $id);
        return $this->db->get('users')->row_array();
    }

    function insert($a, $profile)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'password' => $a['password'],
            'alamat' => $a['alamat'],
            'telepon' => $a['telepon'],
            'profile' => $profile
        ];
        return $this->db->insert('users', $data);
    }

    function delete($id){
        $this->db->where('ID',$id);
        return $this->db->delete('users');
    }

    function edit($id){
        $this->db->where('ID', $id);
        return $this->db->get('users')->row_array();
    }

    function update($data,$id){
        $this->db->where('ID',$id);
        return $this->db->update('users',$data);
    }

    function auth($email, $pwd)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $pwd);
        if ($this->db->get('users')->num_rows() == 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function getdetail($email)
    {
        $this->db->where('email',$email);
        return $this->db->get('users')->row_array();
    }

    function get_detail_by_cookie($cookie)
    {
        $this->db->where('cookie', $cookie);
        return $this->db->get('users')->row_array();
    }

    function update_cookie($cookie, $id)
    {
        $data = [
            'cookie' => $cookie
        ];
        $this->db->where('ID', $id);
        return $this->db->update('users', $data);
    }
}