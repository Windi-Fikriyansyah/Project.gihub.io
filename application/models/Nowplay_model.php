<?php
class Nowplay_model extends CI_Model{

    
    
public function tampil_data(){
        return $this->db->get('tb_nowplay')->result_array();
    }
    
    

    public function simpan($pict)
    {
        $data=[
            
            "judulfilm" => $this->input->post('judulfilm'),
            "tahun" => $this->input->post('tahun'),
            "genre" => $this->input->post('genre'),
            "durasi" => $this->input->post('durasi'),
            "sutradara" => $this->input->post('sutradara'),
            
            "foto" => $pict
        ];
        $this->db->insert('tb_nowplay',$data);
    }

    public function ubah($pict)
    {
        

        $data=[
            "judulfilm" => $this->input->post('judulfilm'),
            "tahun" => $this->input->post('tahun'),
            "genre" => $this->input->post('genre'),
            "durasi" => $this->input->post('durasi'),
            "sutradara" => $this->input->post('sutradara'),
            
            "foto" => $pict
        ];

        
        $this->db->where('id_nowplay', $this->input->post('id'));
        $this->db->update('tb_nowplay',$data);
    }

    public function get_id($id = null)
//membuat 1 fungsi untuk menampilkan semua data
//dan menampilkan data per id/satu data
{
   
    $this->db->select('*');
    $this->db->from('tb_nowplay');
    if($id != null)
    {
        $this->db->where('id_nowplay',$id);
    }
    
    return $this->db->get()->row_array();
}

public function hapus($id)
    {
        $this->db->where('id_nowplay',$id);
        $this->db->delete('tb_nowplay');
    }


    
}