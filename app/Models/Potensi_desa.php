<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potensi_desa extends Model
{
    use HasFactory;

    protected $table = 'potensi_desa';

    protected $guarded = [];

    public $timestamps = false;
}
