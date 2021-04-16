<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tabel extends Model
{
    public $table = 'tabel';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'tabel', 'link', 'sub_kategori_id'
    ];
    
    /**
     * Get all of the isi_tabel for the Tabel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function isi_tabel(): HasMany
    {
        return $this->hasMany(IsiTabel::class, 'tabel_id', 'id');
    }

    /**
     * Get the sub_Kategori that owns the Tabel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sub_kategori(): BelongsTo
    {
        return $this->belongsTo(SubKategori::class, 'sub_kategori_id', 'id');
    }
}
