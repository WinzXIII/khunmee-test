<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'old_name',
        'new_name',
        'edited_at',
    ];
}