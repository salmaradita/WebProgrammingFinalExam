<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "order";
    protected $primaryKey = "order_id";
    protected $fillable = [
        'account_id','item_id','price'
    ];
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id','item_id');
    }
}
