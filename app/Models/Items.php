<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable = ['item_id', 'item_name', 'item_qtt', 'item_desc'];
    protected $table = 'items';
}
