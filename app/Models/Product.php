<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFavorite\Traits\Favoriteable;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model
{
    use HasFactory, Favoriteable, Sortable;

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image',
        'recommend_flag',
        'carriage_flag',
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }

    public function scoreSortable($products, $direction) {

        $products_score = \DB::table('reviews')
                            ->selectRaw('product_id, ROUND(AVG(score),1) as score_avg, COUNT(product_id) as score_total')
                            ->groupBy('product_id');

        return  $products->leftJoin(\DB::raw(' ( ' . $products_score->toSql() . ' ) products'), 'products.id', '=', 'products_score.product_id')
                            ->mergeBindings($products_score)
                            ->select()
                            ->orderBy('products', $direction);
    }
}
