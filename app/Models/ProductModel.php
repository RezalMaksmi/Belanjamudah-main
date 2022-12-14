<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
   protected $table = 'admin_nm';
   protected $useTimestamps = true;

   protected $allowedFields = ['nama_barang', 'data_gambar','deskripsi','harga'];
   protected $createdField  = 'created_at';
   protected $updatedField  = 'updated_at';
   protected $deletedField  = 'deleted_at';
   

}