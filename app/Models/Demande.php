<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $table ='demandes';
    protected $fillable =[
        'user_id',
        'oeuvre_id',
        'dateRes',
       
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function oeuvre()
    {
        return $this->belongsTo(Oeuvre::class,'oeuvre_id');
    }
    

}
