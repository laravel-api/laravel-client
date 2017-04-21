<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';
    /**
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'detail', 'price', 'category_id',
    ];
}
