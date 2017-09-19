<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends MY_Model
{

    public function getValidationRules()
    {
        $validationRules = [
            [
                'field' => 'no_induk',
                'label' => 'No Induk',
                'rules' => 'trim|required|numeric|exact_length[12]|callback_no_induk_unik'
            ],
            [
                'field' => 'nama_anggota',
                'label' => 'Nama Anggota',
                'rules' => 'trim|required|max_length[50]|callback_alpha_coma_dash_dot_space'
            ],
            [
                'field' => 'jenis_kelamin',
                'label' => 'Jenis_Kelamin',
                'rules' => 'trim|required'
            ],
            [
                'field' => 'id_kelas',
                'label' => 'Kelas',
                'rules' => 'trim|required'
            ],
        ];
        return $validationRules;
    }

    public function getDefaultValues()
    {
        return [
            'no_induk' => '',
            'nama_anggota' => '',
            'jenis_kelamin' => '',
            'id_kelas' => '',
        ];
    }
}
