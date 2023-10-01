<?php

namespace App\models;
use CodeIgniter\Model;

class ProductModel extends Model {
    protected $table = 'products';
    protected $returnType = 'object';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id', 'nama_product', 'description'];

    public function insertProductORM($data)
    {
        // Use the CodeIgniter Model's insert method
        return $this->insert($data);
    }
}
?>