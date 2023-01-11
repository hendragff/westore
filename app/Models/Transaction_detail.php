<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;
    protected $fillable = ["id", "transacation_id", "item_id", "qtt", "subtotal"];
    protected $table = 'transaction_detail';
}
