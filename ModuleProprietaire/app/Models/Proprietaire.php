<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'civilite',
        'date_naissance',
        'cni',
        'telephone',
        'adresse',
        'photo',
        'nationalite',
        'code_proprietaire',
        'type_proprietaires_id',
        'users_id',
    ];
    protected $guarded = ['id'];
}
