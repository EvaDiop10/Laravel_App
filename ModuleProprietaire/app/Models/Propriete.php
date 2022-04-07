<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
  protected $fillable = [
    "nom_propriete",
    "superficie",
    "nombre_etage",
    "montant",
    "adresse_propriete",
    "statut",
    "typeproprietes_id",
  ];
    
    protected $casts = [
        'statut' => 'boolean',
    ];
    
    protected $guarded = ['id'];

    public function  TypePropriete()
    {
        return $this->belongsTo( TypePropriete::class);
    }
}
