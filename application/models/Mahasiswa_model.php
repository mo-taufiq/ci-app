<?php
class Mahasiswa_model extends CI_Model
{
    public function getAllMahasiswa()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function addMahasiswa()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nrp' => $this->input->post('nrp', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];

        $this->db->insert('mahasiswa', $data);
    }

    public function deleteMahasiswa($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('mahasiswa');
    }

    public function detailMahasiswa($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function editMahasiswa($id)
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nrp' => $this->input->post('nrp', true),
            'email' => $this->input->post('email', true),
            'jurusan' => $this->input->post('jurusan', true),
        ];
        
        $this->db->where('id', $id);
        $this->db->update('mahasiswa', $data);
    }

    public function findMahasiswa()
    {
        $keyword = $this->input->post('keyword', true);

        $this->db->like('nama', $keyword);
        $this->db->or_like('nrp', $keyword);
        $this->db->or_like('email', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('mahasiswa')->result_array();
    }
}