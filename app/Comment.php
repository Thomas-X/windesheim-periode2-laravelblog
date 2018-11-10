<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    static public $validations = [
        'comment' => [
            'required',
            'min:5',
            'max:1024'
        ],
        'blog_id' => [
            'nullable',
            'integer'
        ]
    ];

    protected $fillable = [
        'comment',
        'blog_id'
    ];
}
