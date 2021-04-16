<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IsiTabel extends Model
{
    public $table = 'isi_tabel';
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'series', 'isi_tabel', 'tabel_id'
    ];
    
    /**
     * Get the tabel that owns the IsiTabel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tabel(): BelongsTo
    {
        return $this->belongsTo(Tabel::class, 'tabel_id', 'id');
    }
}
