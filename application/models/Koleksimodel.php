<?php
class Koleksimodel extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    function get_koleksi(){
        $query = $this->db->query("SELECT * from koleksi");
        return $query->result();
    }

    function get_detail($id){
        $this->db->where('ID', $id);
        return $this->db->get('koleksi')->row_array();
    }

    function insert($a, $cover)
    {
        $data = [
            'judul' => $a['judul'],
            'penulis' => $a['penulis'],
            'penerbit' => $a['penerbit'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi', $data);
    }

    function delete($id){
        $this->db->where('ID',$id);
        return $this->db->delete('koleksi');
    }

    function edit($id){
        $this->db->where('ID', $id);
        return $this->db->get('koleksi')->row_array();
    }

    function update($data,$id){
        $this->db->where('ID',$id);
        return $this->db->update('koleksi',$data);
    }
}