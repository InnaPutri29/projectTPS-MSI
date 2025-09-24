<?php

namespace App\Models;

use CodeIgniter\Model;

class Info_data extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['produk', 'harga', 'jumlah'];
    protected $returnType    = 'object'; // Pastikan nilainya 'object'
}
