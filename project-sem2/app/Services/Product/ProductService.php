<?php

namespace App\Services\Product;

use App\Repositories\Product\ProductRepositoryInterface;
use App\Services\BaseService;

class ProductService extends BaseService implements ProductServiceInterface
{
    public $repository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function getProductOnIndex($request){
        return $this->repository->getProductOnIndex($request);
    }

    public function getProductsByCategory($categoryName, $request){
        return $this->repository->getProductsByCategory($categoryName, $request);
    }
}
