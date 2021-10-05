<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    use Searchable;

    protected $guarded = [];


    const SEARCHABLE_FIELDS = ['id', 'nom'];

    public function toSearchableArray()
    {
        return $this->only(self::SEARCHABLE_FIELDS);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



}
