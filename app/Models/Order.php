<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    // Atur properti fillable untuk memungkinkan mass assignment
    protected $fillable = ['status']; // Atur sesuai dengan kolom yang ada pada tabel orders
}
