@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>{{ $id->name }}</h2>
            <p>{{ $id->description }}</p>
            <p>
                <address>Endereço: {{ $id->address }}</address>
            </p>
            <hr>
        </div> 
        <div class="col-12">
            Cardápio:
            <ul class="list-group">
                @foreach($id->menus as $menu)
                    <li class="list-group-item">
                        {{ $menu->name }}<br>
                        R$ {{ str_replace('.', ',', number_format($menu->price, 2)) }}
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-12">
            <h2>Fotos</h2>
            <hr>
        </div>
        <div class="row">
            @if($id->photos()->count())
                @foreach($id->photos as $photo)
                    <div class="col-4">
                        <img src="{{ asset('/images/'.$photo->photo) }}" class="img-fluid" width="150px" style="margin-bottom: 5px;">
                    </div>
                @endforeach
            @else
                <span class="alert alert-warning">Sem fotos para este restaurante</span>
            @endif
        </div>
    </div>
</div>
@endsection
