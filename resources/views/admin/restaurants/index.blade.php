@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1 class="float-left">Restaurantes</h1>
		<a href="{{ route('restaurant.new') }}" class="float-right btn btn-success">Novo restaurante</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Criado em</th>
					<th>Açõess</th>
				</tr>
			</thead>
			<tbody>
				@foreach($restaurants as $restaurant)
					<tr>
						<td>{{ $restaurant->id }}</td>
						<td>{{ $restaurant->name }}</td>
						<td>{{ date('d/m/Y H:i:s', strtotime($restaurant->created_at)) }}</td>
						<td>
							<a href="{{ route('restaurant.edit', ['restaurant' => $restaurant->id]) }}" class="btn btn-primary">Editar</a>
							<a href="{{ route('restaurant.photo', ['id' => $restaurant->id]) }}" class="btn btn-warning">Fotos</a>
							<a href="{{ route('restaurant.remove', ['id' => $restaurant->id]) }}" class="btn btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection