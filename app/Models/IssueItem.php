<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueItem extends Model
{
    use HasFactory;

    protected $fillable = ['item_code', 'name', 'issued_by','issued_to','quantity'];


    public function stock()
    {
        return $this->belongsTo(Stock::class, 'item_code', 'item_code');
    }
}