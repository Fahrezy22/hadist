<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadist extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'arab',
        'latin',
        'translation',
        'desc',
        'type',
        'narator',
        'theme',
    ];

    public function category_rol()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
