<?php

class Home extends Controller {
    public function index()
    {
        $data = [
            'title' => 'Employee',
            'page' => 'Data Karyawan',
            'employee' => $this->model('Employee_model')->get()
        ];

        $this->view('template/head', $data);
        $this->view('employee/index', $data);
        $this->view('template/foot');
    }
    
    public function new()
    {
        $data = [
            'title' => 'Employee | New Data',
            'page' => 'Tambah Data'
        ];
        
        $this->view('template/head', $data);
        $this->view('employee/new');
        $this->view('template/foot');
    }

    public function new_store()
    {
        $data = $this->model('Employee_model')->insertEmployee($_POST);
        var_dump($data);
    }
}