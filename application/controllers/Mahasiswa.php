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

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/index', $data);
		$this->load->view('templates/footer');
    }
    
    public function add()
    {
        $data['students'] = $this->Mahasiswa_model->getAllMahasiswa();
        $data['title'] = 'Tambah Data Mahasiswa';

		$this->load->view('templates/header', $data);
		$this->load->view('mahasiswa/add', $data);
		$this->load->view('templates/footer');
    }
}