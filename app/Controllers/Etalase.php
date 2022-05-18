<?php

namespace App\Controllers;

use Config\App;

class Etalase extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $barang = new \App\Models\BarangModel();
        $model = $barang->findAll();
        return view('etalase/index.php', [
            'model' => $model,
        ]);
    }
    public function beli ()
    {
        $id = $this->request->uri->getSegment(3);
        $modelBarang = new \App\Models\BarangModel();
        $model = $modelBarang->find($id);

        return view('etalase/beli',[
            'model'=>$model,
        ]);
    }
}
