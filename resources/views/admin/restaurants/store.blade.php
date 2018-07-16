<h1>Inserção de Restaurante</h1>
<hr>
<form action="{{ route('restaurant.store') }}" method="post">
	{{ csrf_field() }}
	<p>
		<label for="name">Nome do Restaurante</label><br>
		<input type="text" name="name" id="name" value="{{ old('name') }}"><br>
		@if($errors->has('name'))
			{{ $errors->first('name') }}
		@endif
	</p>
	<p>
		<label for="address">Endereço</label><br>
		<input type="text" name="address" id="address" value="{{ old('address') }}"><br>
		@if($errors->has('address'))
			{{ $errors->first('address') }}
		@endif
	</p>
	<p>
		<label for="description">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="description">{{ old('description') }}</textarea><br>
		@if($errors->has('description'))
			{{ $errors->first('description') }}
		@endif
	</p>
	<input type="submit" value="Cadastrar">
</form>