@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1>Inserção de Restaurante</h1>
		<form action="{{ route('restaurant.store') }}" method="post">
			{{ csrf_field() }}
			<p class="form-group">
				<label for="name">Nome do Restaurante</label><br>
				<input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"> 
				@if($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="address">Endereço</label><br>
				<input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}">
				@if($errors->has('address'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('address') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="description">Fale sobre o Restaurante</label>
				<textarea name="description" id="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" style="resize: none;">{{ old('description') }}</textarea>
				@if($errors->has('description'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('description') }}</strong>
					</span>
				@endif
			</p>
			<input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
		</form>
	</div>

@endsection