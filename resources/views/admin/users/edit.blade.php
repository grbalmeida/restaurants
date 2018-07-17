@extends('layouts.app')

@section('content')
	<div class="container">
		<h1>Editar Usuário</h1>
		<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
			{{ csrf_field() }}
			<p class="form-group">
				<label for="name">Nome do Usuário</label><br>
				<input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}">
				@if($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</p>
			<input type="submit" value="Atualizar" class="btn btn-success btn-lg">
		</form>
	</div>

@endsection