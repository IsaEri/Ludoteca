@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Juego</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('juegos.update',['id'=> $c->id]) }}">
                        @csrf

                       
                        <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="name" value="{{$c->name}}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">Descripción:</label>
                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" value="{{$c->description}}"  autofocus>
                            </div>
                        </div>

                        {!! method_field('put') !!}
                        <button type="submit" class="btn btn-primary">Guardar alumnos</button>

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