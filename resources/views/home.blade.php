@extends('layouts.apps')

@section('content')


	<div class="container">

		<div class="texto">
			
			
			<p align='center'>
				<a href='{{route('reservas.index')}}'>Reservas</a>
			</p>
			<p align='center'>
				<a href='{{ route('socios.index') }}'>Socios</a>
			</p>
			<p align='center'>
				<a href='{{route('juegos.index')}}'>Juegos</a>
			</p>
		
		
		
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
