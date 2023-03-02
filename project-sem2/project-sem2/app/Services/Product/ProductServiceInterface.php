<?php

namespace App\Services\Product;

use App\Services\ServiceInterface;

interface ProductServiceInterface extends ServiceInterface
{
    public function getProductOnIndex($request);

    public function getProductsByCategory($categoryName, $request);
}
