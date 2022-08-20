<?php

namespace App\Models;

use CodeIgniter\Model;

class PembayaranModel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'nama', 'gambar', 'created_by', 'created_date', 'updated_by',
        'updated_date'
    ];
    protected  $returnType = 'App\Entities\Pembayaran';
    protected  $userTimetamps = false;
}
