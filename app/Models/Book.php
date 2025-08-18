<?php

namespace App\Models;

use CodeIgniter\Model;

class Book extends Model {
    protected $table = 'books';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title',
        'subtitle',
        'author',
        'year',
        'pages',
        'price',
        'series',
        'part'
    ];

    protected array $casts = [
        'id' => 'integer',
        'title' => 'string',
        'subtitle' => '?string',
        'author' => 'string',
        'year' => 'integer',
        'pages' => 'integer',
        'price' => '?float',
        'series' => '?string',
        'part' => '?integer'
    ];
}