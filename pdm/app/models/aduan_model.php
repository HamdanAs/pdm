<?php

class Aduan_model{
    private $table = "pengaduan";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getAllAduan(){
        $this->db->query("select * from $this->table");
        return $this->db->resultSet();
    }

    public function getAduanByID($id){
        $this->db->query("select * from $this->table where id_pengaduan=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function tambahDataAduan($data){
        $id = rand();
        $query = "insert into $this->table 
                    values
                    (:id, :date, :nik, :isi, :foto, :status)";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('date', date("Y/m/d"));
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('foto', $data['foto']);
        $this->db->bind('status', '0');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tanggapiAduan($data){
        $id = rand();
        $query = "insert into tanggapan 
                    values
                    (:id_tanggapan, :id_pengaduan, :tgl_tanggapan, :tanggapan, :id_petugas)";
        $this->db->query($query);
        $this->db->bind('id_tanggapan', $id);
        $this->db->bind('id_pengaduan', $data['id_pengaduan']);
        $this->db->bind('tgl_tanggapan', date("Y/m/d"));
        $this->db->bind('tanggapan', $data['tanggapan']);
        $this->db->bind('id_petugas', '1');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahStatusAduan($data){
        $query = "update $this->table 
                    set
                    status = :status
                where id_pengaduan = :id";
        $this->db->query($query);
        $this->db->bind('status', 'selesai');
        $this->db->bind('id', $data['id_pengaduan']);

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