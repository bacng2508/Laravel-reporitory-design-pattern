<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    //lấy model tương ứng
    public function getModel()
    {
        return Product::class;
    }

    public function getProducts($limit = 5)
    {
        return $this->model->limit($limit)->get();
    }

    public function getProduct($id) 
    {
        return $this->find($id);
    }
}