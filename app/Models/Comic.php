<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model {
    use HasFactory;

    //To fix the error "Add [title] to fillable property to allow mass assignment on [App\Models\Comic]",
    // specify the title field in the $fillable property of your Comic model. Mass assignment
    // protection is a security feature in Laravel that prevents unintended mass assignment of attributes.

    protected $fillable = ['title', // Add other fillable fields here
        'description', 'thumb', 'price', 'series', 'sale_date', 'type',];
}
