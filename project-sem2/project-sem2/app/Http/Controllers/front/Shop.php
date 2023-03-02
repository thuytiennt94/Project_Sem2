<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use App\Services\Product\ProductServiceInterface;
use Illuminate\Http\Request;

class Shop extends Controller
{
    private $productService;
    private $productCommentService;
    private $productCategoryService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
    }

    public function show($id){
        $product = $this->productService->find($id);
        $categories = $this->productCategoryService->all();

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0){
            $avgRating = $sumRating/$countRating;
        }

        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('tag', $product->tag)
            ->limit(4)
            ->get();

        return view( 'front.shop.show', compact('product', 'avgRating', 'relatedProducts','categories'));
    }

    public function postComment(Request $request){
        $this->productCommentService->create($request->all());

        return redirect()->back();
    }

    public function index(Request $request){
        $categories = $this->productCategoryService->all();
        $products = $this->productService->getProductOnIndex($request);

        return view('front.shop.index', compact('products','categories'));
    }

    public function category($categoryName, Request $request){
        $categories = $this->productCategoryService->all();
        $products = $this->productService->getProductsByCategory($categoryName, $request);

        return view('front.shop.index', compact('products','categories'));
    }
}
