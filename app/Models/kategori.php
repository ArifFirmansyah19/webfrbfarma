<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\obat;

class kategori extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    // use HasFactory;
    public function kategori()
    {
        return $this->hasOne('App\Models\kategori', 'id', 'id_kategori');
    }


    public function Obat()
    {
        return $this->hasMany('App\Models\obat', 'id_kategori', 'id');
    }
}
