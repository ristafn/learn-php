<?php
class Pegawai {
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    // tampil data pegawai
    public function tampilData() {
        $sql = "SELECT pegawai.*, divisi.nama as divisi FROM pegawai INNER JOIN divisi on divisi.id = pegawai.iddivisi ORDER BY pegawai.id DESC";
        $gather = $this->koneksi->query($sql);
        return $gather;
    }
}