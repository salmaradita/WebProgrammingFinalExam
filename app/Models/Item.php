<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "item";
    protected $primaryKey = "item_id";
    protected $fillable = [
        'item_desc','item_name','price'
    ];
}
