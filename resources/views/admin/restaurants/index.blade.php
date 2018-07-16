<table>
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
				<td>{{ $restaurant->created_at }}</td>
				<td>
					<a href="{{ route('restaurant.edit', ['restaurant' => $restaurant->id]) }}">Editar</a>
					<a href="{{ route('restaurant.remove', ['id' => $restaurant->id]) }}">Excluir</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>