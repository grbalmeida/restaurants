<h1>Edição de Restaurante</h1>
<hr>
<form action="{{ route('restaurant.update', ['restaurant' => $restaurant->id]) }}" method="post">
	{{ csrf_field() }}
	<p>
		<label for="name">Nome do Restaurante</label><br>
		<input type="text" name="name" id="name" value="{{ $restaurant->name }}">
	</p>
	<p>
		<label for="address">Endereço</label><br>
		<input type="text" name="address" id="address" value="{{ $restaurant->address }}">
	</p>
	<p>
		<label for="description">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="description">
			{{ $restaurant->description }}
		</textarea>
	</p>
	<input type="submit" value="Atualizar">
</form>