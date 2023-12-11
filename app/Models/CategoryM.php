<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryM extends Model
{
    use HasFactory;
    protected $table = 'blog_categories';
    protected $fillable=['name','description'];
}
