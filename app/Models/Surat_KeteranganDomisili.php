<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_KeteranganDomisili extends Model
{
    use HasFactory;
    protected $table = 'surat_domisili';
    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function penduduk()
    {
        return $this->belongsTo("App\Models\penduduk");
    }

    public function kepaladesa()
    {
        return $this->belongsTo(KepalaDesa::class, 'id_kades'); // Gantilah dengan foreign key yang sesuai
    }
}
