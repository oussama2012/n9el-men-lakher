@extends('layouts.layouts')
@section('main')
@if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('update',$element->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="name" placeholder="name" value="{{ $element->name }}" >
        <input type="text" name="email" placeholder="email" value="{{ $element->email }}" > 
        <img src="{{ asset('image/' . $element->image) }}" alt="image" width="100px">
        <button>update</button>

    </form>
@endsection