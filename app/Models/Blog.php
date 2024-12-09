<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        "author",
        "idCategory",
        "title",
        "description",
        "image",
    ];
    public function getRouteKeyName()
    {
        return 'id';
    }
}