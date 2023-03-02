<?php

namespace App\Services\ProductCategory;

use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Services\BaseService;

class ProductCategoryService extends BaseService implements ProductCategoryServiceInterface
{
    public $repository;

    public function __construct(ProductCategoryRepositoryInterface $productCategoryRepository)
    {
        $this->repository = $productCategoryRepository;
    }
}
