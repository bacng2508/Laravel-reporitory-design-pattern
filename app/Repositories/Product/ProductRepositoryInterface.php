<?php

namespace App\Repositories\Product;
use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface{
    public function getProducts();
    public function getProduct($id);

}