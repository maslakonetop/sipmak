<?php 

class Murid extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ijin_model');
    }
    
    public function index()
    {
        $data['ijin_pemakaman'] = $this->Murid_model->viewIjin();
        $this->load->view('viewijin', $data);
    }

    public function tambah()
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode

        $validation->set_rules('nama_pemohon', 'Nama', 'required');
        $validation->set_rules('alamat_pemohon', 'Alamat', 'required');
        $validation->set_rules('nohp_pemohon', 'No Hamdphone', 'required');
        $validation->set_rules('nama_jenazah', 'Nama Jenazah', 'required');
        $validation->set_rules('tgl_lhr_jmz', 'Tanggal Lahir Jenazah', 'required');
        $validation->set_rules('usia_jenazah', 'Usia Jenazah', 'required');
        $validation->set_rules('lokasi_makam', 'Lokasi Makam', 'required');
        $validation->set_rules('ijin_berlaku', 'Ijin Berlaku', 'required');
        $validation->set_rules('ijin_akhir', 'Ijin Berakhir', 'required');
        $validation->set_rules('biaya', 'Biaya', 'required');
        $validation->set_rules('status_bayar', 'Status Pembayaran', 'required');
        $validation->set_rules('keterangan', 'Keterangan Jenazah', 'required');
        $validation->set_rules('status_ijin', 'Status Ijin', 'required');
        

        if($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('viewtambahijin');
        } else {
          $this->Murid_model->tambahIjin();
          $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data berhasil masuk kedalam database</div>');
          redirect('ijin');
        }  
    }

    public function hapus($id)
    {
        $this->Murid_model->hapus($id);
        redirect('ijin');
    }

    public function ubah($id)
    {
        $validation = $this->form_validation; //untuk menghemat penulisan kode
        $data['ijin_baru'] = $this->Ijin_model->getById($id);

        $validation->set_rules('nama_pemohon', 'Nama', 'required');
        $validation->set_rules('alamat_pemohon', 'Alamat', 'required');
        $validation->set_rules('nohp_pemohon', 'No Hamdphone', 'required');
        $validation->set_rules('nama_jenazah', 'Nama Jenazah', 'required');
        $validation->set_rules('tgl_lhr_jmz', 'Tanggal Lahir Jenazah', 'required');
        $validation->set_rules('usia_jenazah', 'Usia Jenazah', 'required');
        $validation->set_rules('lokasi_makam', 'Lokasi Makam', 'required');
        $validation->set_rules('ijin_berlaku', 'Ijin Berlaku', 'required');
        $validation->set_rules('ijin_akhir', 'Ijin Berakhir', 'required');
        $validation->set_rules('biaya', 'Biaya', 'required');
        $validation->set_rules('status_bayar', 'Status Pembayaran', 'required');
        $validation->set_rules('keterangan', 'Keterangan Jenazah', 'required');
        $validation->set_rules('status_ijin', 'Status Ijin', 'required');

        if ($validation->run() == FALSE) //jika form validation gagal tampilkan kembali form tambahnya
        {
            $this->load->view('ubah', $data);
        } else {
            $this->Murid_model->ubahIjin();
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Data berhasil diubah</div>');
            redirect('ijin');
        }
    }

}