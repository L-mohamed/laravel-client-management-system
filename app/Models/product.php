<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_prix',
        'client_id'
    ];
    public function client()
    {
        return $this->belongsTo(client::class);
    }
}