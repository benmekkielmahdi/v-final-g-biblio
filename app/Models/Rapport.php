<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rapport extends Model
{
    use HasFactory;
    protected $table ='rapports';
    protected $fillable =[
        'title',
        'filiere',
        'typerapport',
        'etudiant',
        'desc',
        'date',
        'versionpdf',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
