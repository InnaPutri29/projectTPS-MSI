<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Info_data;

class Crud extends BaseController
{
    protected $infoData;

    public function __construct()
    {
        $this->infoData = new Info_data();
    }

    public function index()
    {
        $data['products'] = $this->infoData->findAll();
        return view('info_tampil', $data);
    }

    // CREATE
    public function tambah()
    {
        return view('info_input');
    }

    public function tambah_aksi()
    {
        $data = [
            'produk' => $this->request->getPost('produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        $this->infoData->insert($data);
        return redirect()->to(base_url('crud'));
    }

        public function edit($id = null)
    {
        $data['products'] = [$this->infoData->find($id)]; // Ubah ke array
        return view('info_edit', $data);
    }

    public function update()
    {
        $id = $this->request->getPost('id');
        $data = [
            'produk' => $this->request->getPost('produk'),
            'harga' => $this->request->getPost('harga'),
            'jumlah' => $this->request->getPost('jumlah'),
        ];

        $this->infoData->update($id, $data);
        return redirect()->to(base_url('crud'));
    }

    // DELETE
    public function hapus($id = null)
    {
        $this->infoData->delete($id);
        return redirect()->to(base_url('crud'));
    }
}
