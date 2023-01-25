<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\item;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ["id", "name"];
    protected $table = 'categories';
    public function item(){
        return $this->hasMany(item::class, 'category_id');
    }
}
