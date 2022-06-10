<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $guarded = ['id','created_at', 'updated_at'];
    public function kategori()
    {
        return $this->hasOne('App\Models\kategori', 'id', 'id_kategori');
    }

    // public function kategori()
    // {
    //     return $this->belongsTo('App\Models\kategori', 'id', 'id_kategori');
    // }

   // use HasFactory;
}
