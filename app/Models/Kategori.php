<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $table = 'kategori';
    
    public $timestamps = false;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'kategori'
    ];
    
    /**
     * Get all of the sub_kategori for the KategoriModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sub_kategori(): HasMany
    {
        return $this->hasMany(SubKategori::class, 'kategori_id', 'id');
    }
}
