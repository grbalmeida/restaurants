@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurantes</h1>
    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                <h2>{{ $restaurant->name }}</h2>
                <p>
                    {{ $restaurant->description }}
                </p>
            </div>
        @endforeach        
    </div>
    {{ $restaurants->links() }}
</div>
@endsection
