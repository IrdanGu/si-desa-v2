<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda_karangtaruna extends Model
{
    use HasFactory;
    protected $table = 'agenda_karangtaruna';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo("App\Models\User");
    }
}
