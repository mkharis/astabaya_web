<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beranda extends Model
{
    public $table = 'data_beranda';
    
    public $timestamps = false;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'ikon','judul','isi','satuan','deskripsi'
    ];
}
