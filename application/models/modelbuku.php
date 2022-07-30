<?php
defined('BASEPATH') or exit('no direct script access allowed');

class modelbuku extends CI_Model
{
    //manajemen buku
    public function getbuku()
    {
        return $this->db->get('buku');
    }

    public function bukuwhere($where)
    {
        return $this->db->get_where('buku', $where);
    }

    public function simpanbuku($data = null)
    {
        $this->db->insert('buku', $data);
    }

    public function updatebuku($data = null, $where = null)
    {
        $this->db->update('buku', $data, $where);
    }

    public function hapusbuku($where = null)
    {
        $this->db->delete('buku', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('buku');
        return $this->db->get()->row($field);
    }

    //manajemen kategori
    public function getkategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriwhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpankategori($data = null)
    {
        $this->db->insert('kategori', $data);
    }

    public function hapuskategori($where = null)
    {
        $this->db->delete('kategori', $where);
    }

    public function updatekategori($where = null, $data = null)
    {
        $this->db->update('kategori', $data, $where);
    }
    //join

    public function joinkategoribuku($where)
    {
        $this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id = buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}