<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /**
     * @var array
     */
    protected $table = 'category';
    /**
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'status',
    ];

}
