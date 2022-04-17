<?php


class Nowplay extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Nowplay_model');
    }
	
	public function index()
	{
        $data['judul']="halaman Admin input Now Playing";
        $data['nowplay']=$this->Nowplay_model->tampil_data();
        

        $this->load->view('templates/header', $data);
		$this->load->view('nowplay/index');
        $this->load->view('templates/footer');
	}

    public function tambah(){
        $data['judul']="Halaman Tambah";
        
        $this->form_validation->set_rules('judulfilm','judulfilm','required|trim');
        $this->form_validation->set_rules('tahun','tahun','required|trim');
        $this->form_validation->set_rules('genre','genre','required|trim');
        $this->form_validation->set_rules('durasi','durasi','required|trim');
        $this->form_validation->set_rules('sutradara','sutradara','required|trim');
        
     
        if ($this->form_validation->run() == FALSE){
            
        $this->load->view('templates/header',$data);
        $this->load->view('nowplay/tambah');
        $this->load->view('templates/footer');

        }else{
            $upload_foto = $_FILES['foto']['name'];
        if($upload_foto != null){
            $config['upload_path'] ='./assets/foto/'; //tempat ubah file foto
            $config['allowed_types'] = 'jpg|png|jpeg'; //mengatur type foto
            $config['max_size'] = '5048'; //besar kecil ukrn file(5mb)
            $config['remove_space'] = TRUE;
            $config['overwrite'] = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload('foto')){
                $pict = $this->upload->data('file_name');
                $this->Nowplay_model->simpan($pict);
                $pesan="Data berhasil Disimpan";
                $url = base_url('nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            } else{
                $pesan="Gagal ubah. file yang anda upload salah!!!";
                $url = base_url('Nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            }
        } else{
            $pict = 'default.jpg';
            $this->Nowplay_model->simpan($pict);
            $pesan="Data berhasil Disimpan";
            $url = base_url('Nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
            </script>";
        }
        
        }
    }

    public function _deletefile($id){
        $nowplay = $this->Nowplay_model->get_id($id);
        if ($nowplay['foto'] != "default.jpeg") {
            $filename = explode(".", $nowplay['foto'])[0];
            return array_map('unlink', glob(FCPATH . "project/assets/foto/$filename.*"));
        }
    }

    public function ubah($id = '')
        {
            $data['judul']="Halaman Edit";
            $data['ubah_nowplay'] = $this->Nowplay_model->get_id($id);

            $this->form_validation->set_rules('judulfilm','judulfilm','required|trim');
            $this->form_validation->set_rules('tahun','tahun','required|trim');
            $this->form_validation->set_rules('genre','genre','required|trim');
            $this->form_validation->set_rules('durasi','durasi','required|trim');
            $this->form_validation->set_rules('sutradara','sutradara','required|trim');
            
            

        if ($this->form_validation->run() == FALSE)
        {   
            $this->load->view('templates/header',$data);
            $this->load->view('nowplay/ubah',$data);
            $this->load->view('templates/footer');
        }else{
            $upload_foto = $_FILES['foto']['name'];
            if($upload_foto != null){
                $config['upload_path'] ='./assets/foto/'; //tempat ubah file foto
                $config['allowed_types'] = 'jpg|png|jpeg'; //mengatur type foto
                $config['max_size'] = '5048'; //besar kecil ukrn file(5mb)
                $config['remove_space'] = TRUE;
                $config['overwrite'] = TRUE;

            $this->upload->initialize($config);

            if($this->upload->do_upload('foto')){

                $id = $this->input->post('id'); //menghapus gambar didalam folder foto
                $this->_deletefile($id);

                $pict = $this->upload->data('file_name');
                $this->Nowplay_model->ubah($pict);
                $pesan="Data berhasil Diupdate";
                $url = base_url('nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            } else{
                $pesan="Gagal update. file yang anda upload salah!!!";
                $url = base_url('nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
                </script>";
            }
        } else{
            $pict = $this->input->post('image');
            $this->Nowplay_model->ubah($pict);
            $pesan="Data berhasil Diupdate";
            $url = base_url('nowplay');
                echo "<script> 
                    alert('$pesan');
                    location='$url';
            </script>";
        } 
    } 
    }

    public function hapus($id){
           
        $this->_deletefile($id);
        $this->Nowplay_model->hapus($id);

        $pesan="Data berhasil Hapus";
        $url = base_url('nowplay');
        echo "<script> 
            alert('$pesan');
            location='$url';
        </script>";
    }

    
}

