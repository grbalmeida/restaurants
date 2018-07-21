@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Restaurantes</h1>
    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="col-4">
                @if($restaurant->photos()->count())
                    <img src="{{ asset('/images/'.$restaurant->photos()->first()->photo) }}" class="img-fluid">
                @endif
                <h2>
                    <a href="{{ route('home.single', ['id' => $restaurant->id]) }}">{{ $restaurant->name }}</a>
                </h2>
                <p>
                    {{ str_limit($restaurant->description, 200) }}
                </p>
            </div>
        @endforeach        
    </div>
    {{ $restaurants->links() }}
</div>
@endsection
