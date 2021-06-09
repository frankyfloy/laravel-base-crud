<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
