@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar reserva</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('reservas.update',['id'=> $c->id]) }}">
                        @csrf

                       
                         <div class="form-group row">
                       <label for="id_socio" class="col-sm-4 col-form-label text-md-right">Socio:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="id_socio" name="id_socio">
                         @foreach($socios as $socio)
                         @if($socio->id == $c->id_socio)
                        <option value="{{$socio->id}}" selected>{{$socio->name}} ({{$socio->dni}})</option>
                        @else
                        <option value="{{$socio->id}}">{{$socio->name}} ({{$socio->dni}})</option>
                        @endif 
                                @endforeach
                            </select>
                            </div>
                        </div>
                        
                        
                         <div class="form-group row">
                       <label for="id_juego" class="col-sm-4 col-form-label text-md-right">Juego:</label>
                       <div class="col-md-6">
                            <select class="form-control" id="id_juego" name="id_juego">
                         @foreach($juegos as $juego)
                         @if($juego->id == $c->id_juego)
                        <option value="{{$juego->id}}" selected>{{$juego->name}} ({{$juego->id}})</option>
                        @else
                        <option value="{{$juego->id}}">{{$juego->name}} ({{$juego->id}})</option>
                        @endif
                                @endforeach
                            </select>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="f_uso" class="col-sm-4 col-form-label text-md-right">Fecha de uso:</label>
                            <div class="col-md-6">
                                <input id="f_uso" type="date" class="form-control" name="f_uso" value="{{$c->f_uso}}"  autofocus>
                            </div>
                        </div>

                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar reserva</button>

                    </form>                
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