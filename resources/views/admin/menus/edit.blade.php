@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Editar Menu</h1>
		<form action="{{ route('menu.update', ['menu' => $menu->id]) }}" method="post">
			{{ csrf_field() }}
			<p class="form-group">
				<label for="name">Nome</label><br>
				<input type="text" name="name" id="name" value="{{ $menu->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
				@if($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="price">Preço</label><br>
				<input type="number" name="price" id="name" value="{{ number_format($menu->price, 2) }}" class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" min="0" step="0.01">
				@if($errors->has('price'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('price') }}</strong>
					</span>
				@endif
			</p>
			<input type="submit" value="Atualizar" class="btn btn-success btn-lg">
		</form>
	</div>

@endsection