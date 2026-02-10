<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat extends Model
{
    use HasFactory;

    protected $table = 'surat';

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function penduduk()
    {
        return $this->belongsTo("App\Models\penduduk");
    }
}
