<?php

namespace App\Models;

use App\Models\TypeProprietaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Proprietaire extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function type_prorpietaire()
    {
        return $this->belongsTo(TypeProprietaire::class,'type_proprietaires_id');
    }
}
