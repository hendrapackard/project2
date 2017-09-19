<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends MY_Model
{
    protected $maxItem = 2; //Jumlah maksimum buku


    public function getAllPeminjaman($page = null)
    {

        $sql = "  SELECT id_pinjam,
                         tanggal_pinjam,
                         no_induk,
                         nama_anggota,
                         nama_kelas,
                         kode_buku,
                         judul_buku,
                         is_kembali
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
            ORDER BY      peminjaman.tanggal_pinjam DESC, peminjaman.id_pinjam DESC";
            

        return $this->db->query($sql)->result();
    }

    public function getAllPeminjamanCount()
    {
        return $this->db->query('SELECT COUNT(peminjaman.id_pinjam) AS jumlah FROM peminjaman')->row();
    }

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'tanggal_pinjam',
                'label' => 'Tanggal_pinjam',
                'rules' => 'trim|required|callback_is_format_tanggal_valid'
            ],
            [
                'field' => 'search_anggota',
                'label' => 'Anggota',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'id_anggota',
                'label' => 'ID Anggota',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'search_buku',
                'label' => 'Buku',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'id_buku',
                'label' => 'ID Buku',
                'rules' => 'trim|required'
            ],
        ];

        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'tanggal_pinjam' => '',
            'id_anggota' => '',
            'id_buku' => '',
            'search_anggota' => '',
            'search_buku' => '',
        ];
    }

    public function ubahStatusBuku($id_buku, $status)
    {
        $this->db->where('id_buku',$id_buku);
        $this->db->update('buku',['is_ada' => $status]);
    }

    public function liveSearchAnggota($keywords)
    {
        return $this->db->select('id_anggota,no_induk,nama_anggota')
            ->like('no_induk',$keywords)
            ->or_like('nama_anggota', $keywords)
            ->limit(10)
            ->get('anggota')
            ->result();
    }

    public function liveSearchBuku($keywords)
    {
        $sql = "    SELECT id_buku, judul_buku
                    FROM    buku
                    INNER JOIN judul
                    ON      (judul.id_judul = buku.id_judul)
                    WHERE   is_ada = 'y'
                    AND     judul_buku LIKE '%$keywords%'
                    GROUP BY  judul.id_judul #Otomatis pilih satu dari yang is_ada = 'y'
                    LIMIT 10 ";
        return $this->db->query($sql)->result();
    }

    public function cekMaxItem($id_anggota)
    {
        $sql = "SELECT COUNT(id_pinjam) AS jumlah_item
                FROM peminjaman
                WHERE id_anggota = '$id_anggota'
                AND is_kembali = 'n'";
        $item = $this->db->query($sql)->row()->jumlah_item;

        if ($item < $this->maxItem) {
            return true;
        }

        return false;
    }


}