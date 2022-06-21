<?php

namespace App\Controllers;

use TCPDF;
use CodeIgniter\CLI\Console;
use CodeIgniter\HTTP\Response;
use Config\App;

class Transaksi extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->select('*, transaksi.id AS id_trans')->join('barang', 'barang.id=transaksi.id_barang')
            ->join('user', 'user.id=transaksi.id_pembeli')
            ->where('transaksi.id', $id)
            ->first();

        return view('transaksi/view', [
            'transaksi' => $transaksi,
        ]);
    }

    public function index()
    {
        $transaksiModel = new \App\Models\TransaksiModel();
        $model = $transaksiModel->findAll();
        return view('transaksi/index.php', [
            'model' => $model,
        ]);
    }

    public function invoice()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksiModel = new \App\Models\TransaksiModel();
        $transaksi = $transaksiModel->find($id);

        $userModel = new \App\Models\UserModel();
        $pembeli = $userModel->find($transaksi->id_pembeli);

        $barangModel = new \App\Models\BarangModel();
        $barang = $barangModel->find($transaksi->id_barang);

        $html = view('transaksi/invoice', [
            'transaksi' => $transaksi,
            'pembeli' => $pembeli,
            'barang' => $barang,
        ]);

        $pdf = new TCPDF('L', PDF_UNIT, 'A5', true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Naufal helmi');
        $pdf->SetTitle('Invoice');
        $pdf->SetSubject('Invoice');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->addPage();

        //output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        //point of view
        $this->response->setContentType('application/pdf');
        //close and output PDF document

        ob_end_clean();
        $pdf->Output('Invoice.pdf', 'I');
    }
}
