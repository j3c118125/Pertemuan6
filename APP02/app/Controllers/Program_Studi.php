<?php
namespace App\Controllers;
// artinya ada class base controller di folder app trs masuk folder controller

use App\Models\Program_Studi_Model;

class Program_Studi extends BaseController {

    public function __construct() {
        // parent::__construct();

        // $this->prodi = new Program_Studi_Model();

        $this->session = \Config\Services::session();
        
        $db = \Config\Database::connect();
        
        $this->prodi = new Program_Studi_Model($db);
    }
    
    public function index() {
        // $db = \Config\Database::connect(); //cara untuk connect ke database, dipindahin ke construct atas

        //Tambahkan instantiasi dari model kita
        //$prodi = new Program_Studi_Model($db); // dipindahin ke construct atas

        $data['session'] = $this->session->getFlashdata('response');

        // $data['dataProdi'] = $db->table('tblprodi')->get()->getResult();
        // $data['dataProdi'] = $this->prodi->get($db)->getResult();
        $data['dataProdi'] = $this->prodi->get()->getResult();

        // var_dump($data['dataProdi']);die;

        echo view('header_v');
        echo view('program_studi_v', $data);
        echo view('footer_v');
        // return view ('beranda_v'); //kl mau hanya 1 view menggunakan return, kl mau lebih dr 1 view pake echo
    }
    
    public function add() {
        echo view('header_v');
        echo view('program_studi_form_v');
        echo view('footer_v');
    }

    public function edit($id) {
        $where = ['kode_prodi' => $id];
        
        $data['dataProdi'] = $this->prodi->get($where)->getResult()[0];
        
        // var_dump($data['dataProdi']);die;

        echo view('header_v');
        echo view('program_studi_form_v', $data);
        echo view('footer_v');
    }

    public function save() {
        $data = [ //ngirim data array, bisa array() atau []
            'kode_prodi' => $this->request->getpost('kode'),
            'nama_prodi' => $this->request->getPost('nama'),
            'ketua_prodi' => $this->request->getPost('ketua')
        ];

        $id = $this->request->getPost('id');

        if (empty($id)) { // mode insert
            $response = $this->prodi->insert($data);

            if ($response->resultID) {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil disimpan']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal disimpan. '. $response->connID->error]);
            }

        } else { //mode update
            $where = ['kode_prodi' => $id];

            $response = $this->prodi->update($data, $where);

            // var_dump($response);die;

            if ($response) {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data berhasil disimpan.']);
            } else {
                $this->session->setFlashdata('response', ['status' => $response, 'message' => 'Data gagal disimpan.']);
            }
        }

        /* if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil disimpan']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal disimpan. '. $response->connID->error]);
        }*/

        return redirect()->to(site_url('Program_Studi'));
    }

    public function delete($id) {
        $where = ['kode_prodi' => $id];

        $response = $this->prodi->delete($where);

        if ($response->resultID) {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data berhasil dihapus.']);
        } else {
            $this->session->setFlashdata('response', ['status' => $response->resultID, 'message' => 'Data gagal dihapus. '. $response->connID->error]);
        }

        return redirect()->to(site_url('Program_Studi'));
    }

}