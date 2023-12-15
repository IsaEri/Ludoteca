@extends('layouts.apps')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                 <div class="card-header"><b>Socios</b>
                 @if(Auth::user()->is_admin == 1)
                 <a href='{{route('socios.create')}}' class="btn btn-success btn-sm">Crear socio</a>
                     @endif
                 </div>
                <div class="card-body">
                    <table class="table table-bordered" id="tabla">
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>telefono</th>
                            <th>Email</th>
                            <th>Fecha de nacimiento</th>
                            <th>Datos del tutor</th>
                            @if(Auth::user()->is_admin == 1)
                            <th></th>
                            <th></th>
                            @endif
                        </tr>
                        
                    @foreach($socios as $socio)
                        <tr>
                            <td>{{$socio->name}}</td>
                            <td>{{$socio->dni}}</td>
                            <td>{{$socio->tlf}}</td>
                            <td>{{$socio->email}}</td>
                            <td>{{$socio->f_nacimiento}}</td>
                             @if($socio->tutor_name != NULL)
                            <td>{{$socio->tutor_name}} {{$socio->tutor_dni}} {{$socio->tutor_tlf}}</td>
                            @else
                            <td>No tiene</td>
                            @endif
                            @if(Auth::user()->is_admin == 1 || Auth::user()->is_admin == 2)
                            <td><a href='{{route('socios.edit',['id'=>$socio->id])}}' class="btn btn-success btn-sm">Editar</a></td>
                            
                           <td>
                                <form method="post" action="{{route('socios.destroy',['id'=>$socio->id])}}">
                                    @csrf
                                    {!! method_field('delete') !!}
                                    <input class="btn btn-danger btn-sm" type="submit" value="Borrar">
                                </form>
                            </td> 
                            @endif
                        </tr>
                    @endforeach
                    </table>
                    
                     {{ $socios -> links() }}
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