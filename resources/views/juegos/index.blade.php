@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Juegos</b>
                 @if(Auth::user()->is_admin == 1)
                 <a href='{{route('juegos.create')}}' class="btn btn-success btn-sm">Crear juego</a>
                     @endif
                     <!-- Buscador -->
                 {!! Form::open([ 'route' => 'juegos.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
                     <div class="input-group">
                         {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Buscar', 'aria-describedby' => 'search']) !!}
                         <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"  width='40px'></span></span>
                     </div>
                     {!! Form::close() !!}
                     <!-- Fin buscador -->
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <th></th>
                            <th></th>
                            @endif
                        </tr>
                        
                    @foreach($juegos as $juego)
                        <tr>
                            <td>{{$juego->id}}</td>
                            <td>{{$juego->name}}</td>
                            <td>{{$juego->description}}</td>
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <td><a href='{{route('juegos.edit',['id'=>$juego->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                           
                           <td>
                                <form method="post" action="{{route('juegos.destroy',['id'=>$juego->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                             @endif
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $juegos -> links() }}
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