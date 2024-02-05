@extends('layouts.layouts')
@section('main')
    {{-- <div>
        <p>{{ $element->id }}</p>
        <p>{{ $element->name }}</p>
        <p>{{ $element->email }}</p>
        <img src="{{ asset('image/' .$element->image) }}" alt="image" width="100px">
    </div> --}}
    
    <div class="container mt-5">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('image/' .$element->image) }}" class="card-img-top" alt="Image Alt Text">
            <div class="card-body">
                <h5 class="card-title"> id: {{ $element->id }}</h5>
                <p class="card-text"> name: {{ $element->name }}</p>
                <p class="card-text"> email {{ $element->email }}</p>
            </div>
        </div>
    </div>
@endsection