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

    public function scoreSortable($query, $direction) {

        return $query->leftJoinsub('reviews', 'products.id', '=', 'reviews.user_id')
                            ->withAvg('reviews', 'score')
                            ->orderBy('reviews', $direction)
                            ->select('products.*');
    }
}
