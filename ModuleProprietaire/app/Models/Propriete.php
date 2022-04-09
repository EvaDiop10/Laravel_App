<?php

namespace App\Models;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    "type_proprietes_id",
  ];
    
    protected $casts = [
        'statut' => 'boolean',
    ];
    
    protected $guarded = ['id'];

    public function  TypePropriete()
    {
        return $this->belongsTo( TypePropriete::class);
    }
    public function proprietaire() {
        return $this->belongsTo(Proprietaire::class);
    }
}
