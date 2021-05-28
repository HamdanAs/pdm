<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "Hamdan",
    //         "nrp" => "00123123",
    //         "email" => "21hamdanas@gmail.com",
    //         "jurusan" => "RPL"
    //     ],

    //     [
    //         "nama" => "Abyadi",
    //         "nrp" => "00123145",
    //         "email" => "avairost@gmail.com",
    //         "jurusan" => "RPL"
    //     ],

    //     [
    //         "nama" => "Suwandi",
    //         "nrp" => "00123789",
    //         "email" => "yuinime21@gmail.com",
    //         "jurusan" => "RPL"
    //     ]
    // ];

    private $table = "mahasiswa";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllMhs(){
        $this->db->query("select * from $this->table");
        return $this->db->resultSet();
    }

    public function getMhsByID($id){
        $this->db->query("select * from $this->table where id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data){
        $query = "insert into mahasiswa 
                    values
                    ('',:nama, :nrp, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id){
        $query = "delete from mahasiswa where id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data){
        $query = "update mahasiswa 
                    set
                    nama = :nama,
                    nrp = :nrp,
                    email = :email,
                    jurusan = :jurusan
                where id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMhs(){
        $keywords = $_POST['keywords'];
        $query = "select * from mahasiswa where nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keywords%");
        return $this->db->resultSet();
    }
}