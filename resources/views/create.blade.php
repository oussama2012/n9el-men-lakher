
{{--  
@extends('layouts.layouts')
@section('main')

    @if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif

     <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="file" name="image">
        <button>create</button>

    </form> 

@endsection
--}}
@extends('layouts.layouts')
@section('main')

    @if ($errors->any() )
        @foreach ($errors->all() as $error)
            <p style="color: red">{{ $error }}</p>
        @endforeach
    @endif
<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            <form action="#" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control"  name="name">
                </div>
    
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control"  name="email" >
                </div>
    
                <div class="form-group">
                    <label for="file" >Choose a image:</label>
                    <input type="file" class="form-control-file"  name="image" >
                </div>
    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </form>
    @endsection