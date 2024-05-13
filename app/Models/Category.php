<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['Name', 'type_id'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
