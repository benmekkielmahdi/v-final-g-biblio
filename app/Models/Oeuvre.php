<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oeuvre extends Model
{
    use HasFactory;
    protected $table ='oeuvres';
    protected $fillable =[
        'titre',
        'auteur',
        'annee',
        'description',
        'qt',
        'category_id',
        'image',
    ];
}
