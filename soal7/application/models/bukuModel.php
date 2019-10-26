<?php
class bukuModel extends CI_Model{
    function getAllBook(){
        $this->db->flush_cache();
        $this->db->select('books.id as id,books.name, books.stok, books.deskripsi, categories.name as category');
        $this->db->from('books');
        $this->db->join('categories', 'categories.id = books.category');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getBook($id){
        $this->db->flush_cache();
        $this->db->where('id', $id);
        $query = $this->db->get('books');
        return $query->row_array();
    }
    function addBook($array){
        $this->db->flush_cache();
        $this->db->insert('books',$array);
    }
    function delBook($id){
        $this->db->flush_cache();
        $this->db->where('id', $id);
        $this->db->delete('books');
    }
    function editBook($id,$array){
        $this->db->flush_cache();
        $this->db->where('id', $id);
        $this->db->update('books', $array);
    }
}