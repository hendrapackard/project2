<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends Petugas_Controller
{

    public function index($page = null)
    {
        $peminjaman = $this->peminjaman->getAllPeminjaman($page);
        $main_view  = 'peminjaman/index';
        $this->load->view('template',compact( 'main_view', 'peminjaman'));
    }

    public function create()
    {
        if (!$_POST){
            $input = (object) $this->peminjaman->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null,true);
        }

        if (!$this->peminjaman->validate()) {
            $main_view = 'peminjaman/form';
            $form_action = 'peminjaman/create';

            $this->load->view('template',compact( 'main_view', 'form_action', 'input'));
            return;
        }

//        Cek, melebihi jumlah maksimum
        $id_anggota = $this->input->post('id_anggota');
        if (!$this->peminjaman->cekMaxItem($id_anggota)) {
            $this->session->set_flashdata('error','Tidak boleh meminjam lebih dari 2 buku!');
            redirect('peminjaman');
            return;
        }

//        If validate, unset search_anggota and search_buku
//        We dont need these items to save to database
        unset($input->search_anggota);
        unset($input->search_buku);

        if ($this->peminjaman->insert($input)) {
            //Ubah status "is_ada" -> n
            $this->peminjaman->ubahStatusBuku($input->id_buku, 'n');

            $this->session->set_flashdata('success', 'Data peminjaman berhasil disimpan');
        } else {

            $this->session->set_flashdata('error','Data peminjaman gagal disimpan');
        }

        redirect('peminjaman/index');
    }

//    Live search for anggota
    public function anggota_auto_complete()
    {
        $keywords = $this->input->post('keywords');
        $anggotas = $this->peminjaman->liveSearchAnggota($keywords);

        foreach ($anggotas as $anggota) {
            // Put in bold the written text.
            $no_induk    = str_replace($keywords, '<strong>'.$keywords.'</strong>', $anggota->no_induk);
            $nama_anggota = preg_replace("#($keywords)#i", "<strong>$1</strong>", $anggota->nama_anggota);

//        Add new option
            $str = '<li onclick="setItemAnggota(\''.$anggota->nama_anggota.'\'); makeHiddenIdAnggota(\''.$anggota->id_anggota.'\')">';
            $str .= "$no_induk - $nama_anggota";
            $str .= "</li>";

            echo $str;
        }
    }

//Live search for buku
    public function buku_auto_complete()
    {
        $keywords = $this->input->post('keywords');
        $bukus = $this->peminjaman->liveSearchBuku($keywords);

        foreach ($bukus as $buku) {
//        Put in bold the written text
            $judul_buku = preg_replace("#($keywords)#i", "<strong>$1</strong>", $buku->judul_buku);

            // Add new option
            $str = '<li onclick="setItemBuku(\''.$buku->judul_buku.'\'); makeHiddenIdBuku(\''.$buku->id_buku.'\')">';
            $str .= $judul_buku;
            $str .= '</li>';

            echo $str;
        }
    }

    //Callback
    public function is_format_tanggal_valid($str)
    {
        if (!preg_match('/([0-9]{4})-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])/', $str)) {
            $this->form_validation->set_message('is_format_tanggal_valid','Format tanggal tidak valid. (yyyy-mm-dd)');
            return FALSE;
        }

        return TRUE;
    }

}
