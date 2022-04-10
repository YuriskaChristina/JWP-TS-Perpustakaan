<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjammodel extends CI_Model
{
    function _construct()
    {
        $this->load->database();
    }

    function get_koleksi(){
        $query = $this->db->query("SELECT * from koleksi");
        return $query->result();
    }

    function get_detailkoleksi($id)
    {
          $query = $this->db->get_where('koleksi', array('ID' => $id));
          return $query->row();
    }

    function pinjam_buku() 
    {
      $this->db->select('*');
      //$this->db->order_by('ID');
      return $this->db->from('pinjam')
            ->join('koleksi', 'pinjam.IDbuku=koleksi.ID')
            ->join('users', 'pinjam.IDuser=users.ID')
          ->get()
          ->result();
    }  


}