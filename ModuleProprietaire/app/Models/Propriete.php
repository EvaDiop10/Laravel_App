<?php

namespace App\Models;

use App\Models\Proprietaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Propriete extends Model
{
    use HasFactory;
    
    protected $casts = [
        'statut' => 'boolean',
    ];
    
    protected $guarded = ['id'];

    public function  type_propriete()
    {
        return $this->belongsTo( TypePropriete::class,'type_proprietes_id');
    }
    public function proprietaire() {
        return $this->belongsTo(Proprietaire::class);
    }
}
