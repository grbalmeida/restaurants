@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1>Inserção de Cardápio</h1>
		<form action="{{ route('menu.store') }}" method="post">
			{{ csrf_field() }}
			<p class="form-group">
				<label for="name">Item</label><br>
				<input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"> 
				@if($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="price">Preço</label><br>
				<input type="number" name="price" id="price" value="{{ old('price') }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" min="0" step="0.01">
				@if($errors->has('price'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('price') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="price">Restaurante</label><br>
				<select class="form-control" name="restaurant_id">
					@foreach($restaurants as $restaurant)
						<option value="{{ $restaurant->id }}">{{ $restaurant->name }}</option>
					@endforeach
				</select>
			</p>
			<input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
		</form>
	</div>

@endsection