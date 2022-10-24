<?php

class Employee_model {
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function get()
    {
        $this->db->query('SELECT * FROM `employees`');

        return $this->db->resultSet();
    }

    public function insertEmployee($data)
    {
        $this->db->query(
            "CALL InsertEmployee(NULL, :nama, :alamat, :jabatan, :jk, :tlp)"
        );
        $this->db->bind('nama', $data['name']);
        $this->db->bind('alamat', $data['address']);
        $this->db->bind('jabatan', $data['role']);
        $this->db->bind('jk', $data['gender']);
        $this->db->bind('tlp', $data['phone']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}