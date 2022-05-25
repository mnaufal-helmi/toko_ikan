<?php

namespace App\Controllers;

class Barang extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        $barangModel = new \App\Models\BarangModel();
        $barangs = $barangModel->findAll();

        return view('barang/index', ['barangs' => $barangs,]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($id);

        //cek seperti var dump(cekError)
        // print_r($id);
        // //print_r($barang);
        // exit();

        return view('barang/view.php', [
            'barang' => $barang,
        ]);
    }
    public function create()
    {
        if ($this->request->getPost()) {
            //lamun aya data nu di post
            $data = $this->request->getPost();


            $this->validation->run($data, 'barang');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                //menyimpan data
                $barangModel = new \App\Models\BarangModel();
                $barang = new \App\Entities\Barang();

                $barang->fill($data);
                $barang->gambar = $this->request->getFile('gambar');
                $barang->created_by = $this->session->get('id');
                $barang->created_date = date("Y-m-d H:i:s");

                $barangModel->save($barang);

                $id = $barangModel->insertID();
                $segments = ['barang', 'view', $id];
                // barang -> view ->dengan id berapa =
                return redirect()->to(site_url($segments));
            }
        }
        return view('barang/create');
    }
    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $barangModel = new \App\Models\BarangModel();

        $barang = $barangModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'barangupdate');
            $errors = $this->validation->getErrors();



            if (!$errors) {
                $b = new \App\Entities\Barang();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $barangModel->save($b);
                $segments = ['Barang', 'view', $id];

                return redirect()->to(site_url($segments));

                // print_r($id);
                // print_r($barang);
                // exit();
            }
        }

        return view('barang/update', [
            'barang' => $barang,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelBarang = new \App\Models\BarangModel();
        $delete = $modelBarang->delete($id);

        return redirect()->to(site_url('barang/index'));
    }
}
