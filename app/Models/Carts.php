<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\item;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = ["id", "item_id", "qtt"];
    protected $table = 'cart';

    public function item(){
        return $this->belongsTo(item::class);
    }
}
