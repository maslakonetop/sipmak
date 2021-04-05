<?php

class ijin_model extends CI_Model
{
    private $_table = "data_ijin_makam";

    public function viewIjin()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function tambahIjin()
    {
        $data = array(
            'nobuku_plat' => $this->input->post('nobuku_plat', true),
            'nama_pemohon' => $this->input->post('nama_pemohon', true),
            'alamat_pemohon' => $this->input->post('alamat_pemohon', true),
            'nohp_pemohon' => $this->input->post('nohp_pemohon', true),
            'nama_jenazah' => $this->input->post('nama_jenazah', true),
            'tgl_lhr_jnz' => $this->input->post('tgl_lhr_jnz', true),
            'tgl_wft_jnz' => $this->input->post('tgl_wft_jnz', true),
            'usia_jenazah' => $this->input->post('usia_jenazah', true),
            'lokasi_makam' => $this->input->post('lokasi_makam', true),
            'ijin_berlaku' => $this->input->post('ijin_berlaku', true),
            'ijin_akhir' => $this->input->post('ijin_akhir', true),
            'biaya' => $this->input->post('biaya', true),
            'status_bayar' => $this->input->post('status_bayar', true),
            'keterangan' => $this->input->post('keterangan', true),
        );

        //masukan data yang berhasil di input tiap-tiap field
        $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->_table);
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ['id' => $id])->row_array();
    }

    public function ubahIjin()
    {
        $data = array(
            'nobuku_plat' => $this->input->post('nobuku_plat', true),
            'nama_pemohon' => $this->input->post('nama_pemohon', true),
            'alamat_pemohon' => $this->input->post('alamat_pemohon', true),
            'nohp_pemohon' => $this->input->post('nohp_pemohon', true),
            'nama_jenazah' => $this->input->post('nama_jenazah', true),
            'tgl_lhr_jnz' => $this->input->post('tgl_lhr_jnz', true),
            'usia_jnz' => $this->input->post('usia_jnz', true),
            'lokasi_makam' => $this->input->post('lokasi_makam', true),
            'ijin_berlaku' => $this->input->post('ijin_berlaku', true),
            'ijin_akhir' => $this->input->post('ijin_akhir', true),
            'biaya' => $this->input->post('biaya', true),
            'status_bayar' => $this->input->post('status_bayar', true),
            'keterangan' => $this->input->post('keterangan', true),
        );

        //cari id berdasarkan id yang ada dalam inputan
        $this->db->where('id', $this->input->post('id'));
        $this->db->update($this->_table, $data);

    }

}