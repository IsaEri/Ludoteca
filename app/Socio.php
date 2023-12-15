<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','dni','tlf','email','f_nacimiento','tutor_dni','tutor_tlf','tutor_name'];

    public function scopeSearch($query, $name){
        return $query->where('name', 'LIKE', "%$name%");
    }
    
    public function reserva()
    {
        return $this->hasMany('App\Socio', 'id_socio');
    }
}

