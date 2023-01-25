<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\transaction_detail;

class transaction extends Model
{
    use HasFactory;
    protected $fillable = ["id", "user_id", "date", "total", "pay_total"];
    protected $table = 'transaction';

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function detail(){
        return $this->hasMany(transaction_detail::class);
    }
}
