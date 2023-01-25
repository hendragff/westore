<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\item;
use App\Models\transaction;

class transaction_detail extends Model
{
    use HasFactory;
    protected $fillable = ["id", "transacation_id", "item_id", "qtt", "subtotal"];
    protected $table = 'transaction_detail';
    
    public function transaction(){
        return $this->belongsTo(transaction::class);
    }
    public function item(){
        return $this->belongsTo(item::class);
    }
}
