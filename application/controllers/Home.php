<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller
{



    public function index($page = null)
    {
        $grafiks = $this->home->grafikKelas();
        $grafik2 = $this->home->grafikBuku();
        $jml = $this->home->join('kelas')->orderBy('kelas.id_kelas')->orderBy('nama_anggota')->getAll();
        $jmlAnggota = count($jml);
        $jmlJudul = $this->home->getAllJudulCount()->jmlJudul;
        $jmlBuku = $this->home->getAllBukuCount()->jmlBuku;
        $jmlKembali = $this->home->getAllKembaliCount()->jmlKembali;
        $main_view = 'home/index';
        $this->load->view('template',compact('main_view','grafiks','grafik2','jmlAnggota','jmlJudul','jmlBuku','jmlKembali'));
    }   

}