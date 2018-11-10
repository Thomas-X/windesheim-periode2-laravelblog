<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    static public $validations = [
        'title' => [
            'required',
            'min:3',
            'max:255'
        ],
        'description' => [
            'required',
            'min:3',
            'max:1024'
        ]
    ];

    protected $fillable = [
        'title',
        'description'
    ];
}
