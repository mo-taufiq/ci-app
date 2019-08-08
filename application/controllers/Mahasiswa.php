<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

	public function index()
	{
        $data['students'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['title'] = 'Daftar Mahasiswa';

        if($this->input->post('keyword')){
            $data['students'] = $this->Mahasiswa_model->findMahasiswa();
        }

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
    }
    
    public function add()
    {
        $data['students'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['jurusan'] = ['Pilih jurusan', 'Teknik Informatika', 'Teknik Komputer Dan Jaringan', 'Teknik Sepeda Motor'];
        $data['title'] = 'Form Tambah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Kolom nama tidak boleh kosong!']);
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric', ['required' => 'Kolom NRP tidak boleh kosong!', 'numeric' => 'Nilai NRP harus berupa angka!']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Kolom email tidak boleh kosong!']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', ['required' => 'Kolom jurusan tidak boleh kosong!']);

        if($this->form_validation->run() === false){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/add', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->addMahasiswa();
            $this->session->set_flashdata('flash', 'di Tambahkan');
            redirect('mahasiswa');
        }

    }

    public function delete($id)
    {
        $this->Mahasiswa_model->deleteMahasiswa($id);
        $this->session->set_flashdata('flash', 'di Hapus');
        redirect('mahasiswa');
    }

    public function detail($id)
    {
        $data['student'] = $this->Mahasiswa_model->detailMahasiswa($id);
        $data['title'] = 'Detail Mahasiswa';

        $this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/detail', $data);
		$this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $data['student'] = $this->Mahasiswa_model->detailMahasiswa($id);
        $data['jurusan'] = ['Pilih jurusan', 'Teknik Informatika', 'Teknik Komputer Dan Jaringan', 'Teknik Sepeda Motor'];
        $data['title'] = 'Form Ubah Data Mahasiswa';

        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Kolom nama tidak boleh kosong!']);
        $this->form_validation->set_rules('nrp', 'NRP', 'required|numeric', ['required' => 'Kolom NRP tidak boleh kosong!', 'numeric' => 'Nilai NRP harus berupa angka!']);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', ['required' => 'Kolom email tidak boleh kosong!']);
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required', ['required' => 'Kolom jurusan tidak boleh kosong!']);

        if($this->form_validation->run() === false){
            $this->load->view('templates/header', $data);
            $this->load->view('mahasiswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Mahasiswa_model->editMahasiswa($id);
            $this->session->set_flashdata('flash', 'di Ubah');
            redirect('mahasiswa');
        }

    }
}