<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends MY_Model
{
    protected $table = 'anggota';
    protected $table2 = 'judul';
    protected $table3 = 'buku';
    protected $table4 = 'peminjaman';

    public function grafikKelas()
    {
        $sql = "SELECT  nama_kelas AS kelas ,
                        tanggal_pinjam,
                COUNT(nama_kelas) AS jumlah
                FROM   peminjaman
                INNER JOIN   anggota
                ON            (peminjaman.id_anggota = anggota.id_anggota)
                INNER JOIN    kelas
                ON            (anggota.id_kelas = kelas.id_kelas)
                WHERE year(tanggal_pinjam) = year(curdate())
                GROUP BY nama_kelas
                ";

        return $this->db->query($sql)->result();
    }

    public function grafikBuku()
    {
        $sql = "SELECT judul_buku as judul,
                count(judul_buku) AS jumlah
                FROM   peminjaman
                INNER JOIN   anggota
                ON            (peminjaman.id_anggota = anggota.id_anggota)
                INNER JOIN    kelas
                ON            (anggota.id_kelas = kelas.id_kelas)
                INNER JOIN    buku
                ON            (buku.id_buku = peminjaman.id_buku)
                INNER JOIN    judul
                ON            (buku.id_judul = judul.id_judul)
                AND           (peminjaman.id_buku = buku.id_buku)
                WHERE year(tanggal_pinjam) = year(curdate())
                GROUP BY judul_buku
                ORDER BY jumlah DESC LIMIT 10";

        return $this->db->query($sql)->result();
    }

    public function getAllJudulCount()
    {
        $sql = "SELECT COUNT(judul.id_judul) AS jmlJudul FROM judul";
        return $this->db->query($sql)->row();
    }

    public function getAllBukuCount()
    {
        $sql = "SELECT COUNT(buku.id_judul) AS jmlBuku FROM buku";
        return $this->db->query($sql)->row();
    }

    public function getAllKembaliCount()
    {
        $sql = "SELECT COUNT(peminjaman.id_pinjam) AS jmlKembali FROM peminjaman  WHERE (peminjaman.is_kembali = 'n')";
        return $this->db->query($sql)->row();
    }
}