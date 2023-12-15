<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','name','description'];
    
    public function reserva()
    {
        return $this->hasMany('App\Socio', 'id_juego');
    }
    public function scopeSearch($query, $name){
        return $query->where('name', 'LIKE', "%$name%");
    }
}
