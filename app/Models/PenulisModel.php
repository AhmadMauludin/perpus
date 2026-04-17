<?php

namespace App\Models;

use CodeIgniter\Model;

class PenulisModel extends Model
{
    protected $table = 'penulis';
    protected $primaryKey = 'id_penulis';

    protected $allowedFields = ['nama_penulis'];
}
