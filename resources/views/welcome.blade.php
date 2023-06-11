@extends('layouts.app')

@section('content')
    <div id="slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slides as $index => $slide)
                <li data-target="#slider" data-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($slides as $index => $slide)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slide['image']) }}" alt="{{ $slide['title'] }}">
                    <div class="carousel-caption">
                        <h3>{{ $slide['title'] }}</h3>
                        <p>{{ $slide['content'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>

    <div class="jumbotron">
        <h1>Bienvenido a The Store</h1>
        <p>Podras encontrar la mejor tecnología a tu alcance</p>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h2>Apple</h2>
            <p>Computadores, tablets y celulares</p>
        </div>
        <div class="col-md-6">
            <h2>Asus</h2>
            <p>Computadores y tablets</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h2>Samsung</h2>
            <p>Computadores y celulares</p>
        </div>
        <div class="col-md-6">
            <h2>LG</h2>
            <p>Televisores</p>
        </div>
    </div>
    
@endsection
