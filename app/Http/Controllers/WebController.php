<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\MajorCategory;
use App\Models\Product;
use App\Models\Review;

class WebController extends Controller
{
    public function index(Product $product, Request $request)
    {
        $categories = Category::all();

        $major_categories = MajorCategory::all();

        if ($request->review !== null) {
        $products_score = Review::selectRaw('product_id, ROUND(AVG(score),1) as score_avg, COUNT(product_id) as score_total')->groupBy('product_id');
        $recently_products = Product::leftJoinsub($products_score, 'products_score',function($join){
            $join->on('products.id', '=', 'products_score.product_id');})->orderBy('created_at', 'desc')->take(4)->get();
        $recommend_products = Product::leftJoinsub($products_score, 'products_score',function($join){
            $join->on('products.id', '=', 'products_score.product_id');})->where('recommend_flag', true)->take(3)->get();
        } else {
            $products_score = Review::selectRaw('product_id, ROUND(AVG(score),1) as score_avg, COUNT(product_id) as score_total')->groupBy('product_id');
            $recently_products = Product::leftJoinsub($products_score, 'products_score',function($join){
                $join->on('products.id', '=', 'products_score.product_id');})->orderBy('created_at', 'desc')->take(4)->get();
            $recommend_products = Product::leftJoinsub($products_score, 'products_score',function($join){
                    $join->on('products.id', '=', 'products_score.product_id');})->where('recommend_flag', true)->take(3)->get();
        }

        return view('web.index', compact('major_categories', 'categories', 'recently_products', 'recommend_products', 'products_score'));
    }
}
