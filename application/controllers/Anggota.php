<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends Petugas_Controller
{

    public function index($page = null)
    {
        $anggotas = $this->anggota->join('kelas')->orderBy('kelas.id_kelas')->orderBy('nama_anggota')->getAll();
        $jml = $this->anggota->join('kelas')->orderBy('kelas.id_kelas')->orderBy('nama_anggota')->getAll();
        $jumlah = count($jml);
        $main_view = 'anggota/index';

        $this->load->view('template',compact('main_view','anggotas','pagination','jumlah'));
    }

    public function create()
    {
        if (!$_POST) {
            $input = (object) $this->anggota->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->anggota->validate()) {
            $main_view  = 'anggota/form';
            $form_action = 'anggota/create';

            $this->load->view('template',compact('main_view','form_action','input'));
            return;
        }

        if ($this->anggota->insert($input)) {
            $this->session->set_flashdata('success','Data anggota berhasil disimpan');
        } else {
            $this->session->set_flashdata('error','Data anggota gagal disimpan');
        }

        redirect('anggota');
    }

    public function alpha_coma_dash_dot_space($str)
    {
        if (!preg_match('/^[a-zA-Z ., \-]+$/i',$str) )
        {
            $this->form_validation->set_message('alpha_coma_dash_dot_space', 'Hanya boleh berisi huruf, spasi, tanda hubung(-), titik(.) dan koma(,)');
            return false;
        }
    }

    public function no_induk_unik()
    {
        $no_induk = $this->input->post('no_induk');
        $id_anggota = $this->input->post('id_anggota');

        $this->anggota->where('no_induk',$no_induk);
        !$id_anggota || $this->anggota->where('id_anggota!=',$id_anggota);
        $anggota = $this->anggota->get();

        if (count($anggota)) {
            $this->form_validation->set_message('no_induk_unik','%s sudah digunakan');
            return false;
        }
        return true;
    }

    public function edit($id = null)
    {
        $anggota = $this->anggota->where('id_anggota', $id)->get();
        if (!$anggota) {
            $this->session->set_flashdata('warning','Data anggota tidak ada');
            redirect('anggota');
        }

        if (!$_POST) {
            $input= (object) $anggota;
        } else {
            $input = (object) $this->input->post(null,true);
        }

        if (!$this->anggota->validate()) {
            $main_view = 'anggota/form';
            $form_action = "anggota/edit/$id";

            $this->load->view('template',compact('main_view','form_action','input'));
            return;
        }

        if ($this->anggota->where('id_anggota',$id)->update($input)) {
            $this->session->set_flashdata('success','Data anggota berhasil diupdate');
        }else {
            $this->session->set_flashdata('error','Data anggota gagal diupdate');
        }
        redirect('anggota');
    }

    public function delete($id = null)
    {
        $anggota = $this->anggota->where('id_anggota',$id)->get();
        if (!$anggota) {
            $this->session->set_flashdata('warning','Data anggota tidak ada');
            redirect('anggota');
        }

        if ($this->anggota->where('id_anggota',$id)->delete()) {
            $this->session->set_flashdata('success','Data anggota berhasil dihapus');
        } else {
            $this->session->set_flashdata('error','Data anggota gagal dihapus');
        }
        redirect('anggota');
    }

}
