<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;

    protected $fillable = ['item_code', 'name', 'category', 'quantity'];

    public function issueItems()
    {
        return $this->hasMany(IssueItem::class, 'item_code', 'item_code');
    }

    public function receiveItems()
    {
        return $this->hasMany(ReceiveItem::class, 'item_code', 'item_code');
    }
}