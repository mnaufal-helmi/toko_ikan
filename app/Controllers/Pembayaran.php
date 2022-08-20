<?php

namespace App\Controllers;

class Pembayaran extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \config\Services::validation();
        $this->session = session();
    }
    public function index()
    {
        $pembayaranModel = new \App\Models\PembayaranModel();
        $user_role = session('role');
        if ($user_role != 0) {

            $user_id = session('id');
            $pembayarans = $pembayaranModel->where('created_by', $user_id)->findAll();
        } else {
            $pembayarans = $pembayaranModel->findAll();
        }



        return view('pembayaran/index',  [
            'pembayarans' => $pembayarans,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $pembayaranModel = new \App\Models\PembayaranModel();
        $pembayaran = $pembayaranModel->find($id);

        //cek seperti var dump(cekError)
        // print_r($id);
        // //print_r($barang);
        // exit();

        return view('pembayaran/view.php', [
            'pembayaran' => $pembayaran,
        ]);
    }
    public function create()
    {
        if ($this->request->getPost()) {
            //lamun aya data nu di post
            $data = $this->request->getPost();


            $this->validation->run($data, 'pembayaran');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                //menyimpan data
                $pembayaranModel = new \App\Models\PembayaranModel();
                $pembayaran = new \App\Entities\Pembayaran();

                $pembayaran->fill($data);
                $pembayaran->gambar = $this->request->getFile('gambar');
                $pembayaran->created_by = $this->session->get('id');
                $pembayaran->created_date = date("Y-m-d H:i:s");

                $pembayaranModel->save($pembayaran);

                $id = $pembayaranModel->insertID();
                $segments = ['pembayaran', 'view', $id];
                // barang -> view ->dengan id berapa =
                return redirect()->to(site_url($segments));
            }
        }
        return view('pembayaran/create');
    }
    public function update()
    {
        $id = $this->request->uri->getSegment(3);
        $pembayaranModel = new \App\Models\PembayaranModel();

        $pembayaran = $pembayaranModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pembayaranupdate');
            $errors = $this->validation->getErrors();


            if (!$errors) {
                $b = new \App\Entities\Pembayaran();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $pembayaranModel->save($b);
                $segments = ['Pembayaran', 'view', $id];

                return redirect()->to(site_url($segments));

                // print_r($id);
                // print_r($barang);
                // exit();
            }
        }

        return view('pembayaran/update', [
            'pembayaran' => $pembayaran,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelPembayaran = new \App\Models\PembayaranModel();
        $delete = $modelPembayaran->delete($id);

        return redirect()->to(site_url('pembayaran/index'));
    }
}
