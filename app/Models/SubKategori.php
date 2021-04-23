<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    public $table = 'sub_kategori';
    
    public $timestamps = false;
    
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'sub_kategori', 'link', 'kategori_id'
    ];
    
    /**
     * Get all of the tabel for the SubKategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tabel(): HasMany
    {
        return $this->hasMany(Tabel::class, 'sub_kategori_id', 'id');
    }

    /**
     * Get the kategori that owns the SubKategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
