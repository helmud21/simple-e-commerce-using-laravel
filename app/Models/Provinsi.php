<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_provinsi';

    public function kabupaten() {
        return $this->hasMany(Kabupaten::class);
    }

    public function user() {
        return $this->hasMany('App\Models\User', 'id', 'id_provinsi');
    }
}
