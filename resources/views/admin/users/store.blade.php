@extends('layouts.app')

@section('content')
	
	<div class="container">
		<h1>Inserção de Usuário</h1>
		<form action="{{ route('user.store') }}" method="post">
			{{ csrf_field() }}
			<p class="form-group">
				<label for="name">Nome do Usuário</label><br>
				<input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"> 
				@if($errors->has('name'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="email">E-mail</label><br>
				<input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}">
				@if($errors->has('email'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="password">Senha</label><br>
				<input type="password" name="password" id="password" value="{{ old('password') }}" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}">
				@if($errors->has('password'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</p>
			<p class="form-group">
				<label for="password-confirm">Confirmar Senha</label>
				<input type="password" name="password_confirmation" id="password-confirm" value="{{ old('password_confirmation') }}" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
				@if($errors->has('password_confirmation'))
					<span class="invalid-feedback">
						<strong>{{ $errors->first('password_confirmation') }}</strong>
					</span>
				@endif
			</p>
			<input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
		</form>
	</div>

@endsection