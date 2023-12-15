@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Reservas</b> <a href='{{route('reservas.create')}}' class="btn btn-success btn-sm">Crear reserva</a>
                     
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Socio</th>
                            <th>Juego</th>
                            <th>Día de uso</th>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <th></th>
                            @endif
                        </tr>
                        
                    @foreach($reservas as $reserva)
                        <tr>
                            <td>{{$reserva->socio->name}} ({{$reserva->socio->dni}})</td>
                            <td>{{$reserva->juego->name}} ({{$reserva->juego->id}})</td>                            
                            <td>{{$reserva->f_uso}}</td>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <td><a href='{{route('reservas.edit',['id'=>$reserva->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                             @endif
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $reservas -> links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="page-footer font-small cyan darken-3 mt-4">

  <div class="footer-copyright text-center py-3"><a href="https://www.safecreative.org/work/1903290449735-gestion-de-ludoteca" target="_blank"> 
<span>Gestión de ludoteca</span> - 
<span>CC by-nc 4.0</span> - 
<span>Isabel Rodríguez Perez</span> 
</a>
  
  </div>


</footer>

@endsection