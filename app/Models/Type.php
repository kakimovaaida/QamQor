<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    protected $fillable=['Name'];


    public function categories()
    {
        return $this ->hasMany(Category::class);
    }

    public function helper()
    {
        return $this->belongsTo(Helper::class);
    }
}
