@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1 class="float-left">Cardápios</h1>
		<a href="{{ route('menu.new') }}" class="float-right btn btn-success">Novo cardápio</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Nome</th>
					<th>Preço</th>
					<th>Restaurante</th>
					<th>Criado em</th>
					<th>Açõess</th>
				</tr>
			</thead>
			<tbody>
				@foreach($menus as $menu)
					<tr>
						<td>{{ $menu->id }}</td>
						<td>{{ $menu->name }}</td>
						<td>R$ {{ str_replace('.', ',', number_format($menu->price, 2)) }}</td>
						<td>
							<a href="{{ route('restaurant.edit', ['restaurant' => $menu->restaurant->id]) }}">
								{{ $menu->restaurant->name }}
							</a>
						</td>
						<td>{{ date('d/m/Y H:i:s', strtotime($menu->created_at)) }}</td>
						<td>
							<a href="{{ route('menu.edit', ['menu' => $menu->id]) }}" class="btn btn-primary">Editar</a>
							<a href="{{ route('menu.remove', ['id' => $menu->id]) }}" class="btn btn-danger">Excluir</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@endsection