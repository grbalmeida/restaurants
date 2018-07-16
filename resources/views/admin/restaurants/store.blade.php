<h1>Inserção de Restaurante</h1>
<hr>
<form action="{{ route('restaurant.store') }}" method="post">
	{{ csrf_field() }}
	<p>
		<label for="name">Nome do Restaurante</label><br>
		<input type="text" name="name" id="name">
	</p>
	<p>
		<label for="address">Endereço</label><br>
		<input type="text" name="address" id="address">
	</p>
	<p>
		<label for="description">Fale sobre o Restaurante</label><br>
		<textarea name="description" id="description"></textarea>
	</p>
	<input type="submit" value="Cadastrar">
</form>