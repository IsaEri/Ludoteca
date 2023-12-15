@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Editar Juego</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('socios.update',['id'=> $c->id]) }}">
                        @csrf

                       <div class="form-group row">
                            <label for="name" class="col-sm-4 col-form-label text-md-right">Nombre:</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="name" value="{{$c->name}}" required autofocus>
                            </div>
                         </div>
                        <div class="form-group row">
                            <label for="dni" class="col-sm-4 col-form-label text-md-right">dni:</label>
                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control" name="dni" value="{{$c->dni}}"  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="tlf" class="col-sm-4 col-form-label text-md-right">telefono:</label>
                            <div class="col-md-6">
                                <input id="tlf" type="text" class="form-control" name="tlf" value="{{$c->tlf}}"  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">email:</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{$c->email}}"  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="f_nacimiento" class="col-sm-4 col-form-label text-md-right">Fecha de nacimiento:</label>
                            <div class="col-md-6">
                                <input id="f_nacimiento" type="date" class="form-control" name="f_nacimiento" value="{{$c->f_nacimiento}}"  autofocus>
                            </div>
                        </div>
                        
                         <b>Si es menor de edad:</b>
                        <div class="form-group row">
                            <label for="tutor_name" class="col-sm-4 col-form-label text-md-right">Nombre del Tutor:</label>
                            <div class="col-md-6">
                                <input id="tutor_name" type="text" class="form-control" name="tutor_name" value="{{$c->tutor_name}}"  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tutor_dni" class="col-sm-4 col-form-label text-md-right">DNI del Tutor:</label>
                            <div class="col-md-6">
                                <input id="tutor_dni" type="text" class="form-control" name="tutor_dni" value="{{$c->tutor_dni}}"  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tutor_tlf" class="col-sm-4 col-form-label text-md-right">Telefono del Tutor:</label>
                            <div class="col-md-6">
                                <input id="tutor_tlf" type="text" class="form-control" name="tutor_tlf" value="{{$c->tutor_tlf}}"  autofocus>
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