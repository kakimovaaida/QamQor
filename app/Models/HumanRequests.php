<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HumanRequests extends Model
{
    use HasFactory;
    protected $fillable = ['title','name','description','phone'];
}
