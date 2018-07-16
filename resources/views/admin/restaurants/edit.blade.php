<h1>Edição de Restaurante</h1>
<hr>
<form action="{{ route('restaurant.update', ['restaurant' => $restaurant->id]) }}" method="post">
	{{ csrf_field() }}
	<p>
		<label for="name">Nome do Restaurante</label><br>
		<input type="text" name="name" id="name" value="{{ $restaurant->name }}"><br>
		@if($errors->has('name'))
			{{ $errors->first('name') }}
		@endif
	</p>
	<p>
		<label for="address">Endereço</label><br>
		<input type="text" name="address" id="address" value="{{ $restaurant->address }}"><br>
		@if($errors->has('address'))
			{{ $errors->first('address') }}
		@endif
	</p>
	<p>
		<label for="description">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="description">
			{{ $restaurant->description }}
		</textarea><br>
		@if($errors->has('description'))
			{{ $errors->first('description') }}
		@endif
	</p>
	<input type="submit" value="Atualizar">
</form>