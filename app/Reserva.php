<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    public $timestamps = false;
    protected $fillable = ['id','id_socio','id_juego','f_uso'];

    
    public function socio()
    {
        
        return $this->belongsTo('App\Socio','id_socio');
    }
    
     public function juego()
    {
        return $this->belongsTo('App\Juego', 'id_juego');
    }
    
}
