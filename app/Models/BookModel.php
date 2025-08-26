<?php

namespace App\Models;

use App\Entities\Book;
use CodeIgniter\Model;

class BookModel extends Model {
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $returnType = Book::class;

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