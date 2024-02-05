
@extends('layouts.layouts')
@section('main')
        <a href="{{ route('create') }}">create</a> 
        <br>  



        <table class="table table-dark" border="1">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">image</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            @foreach ($donner as $donne)
                <tbody>
                    <tr>
                        <td>{{ $donne->id }}</td>
                        <td>{{ $donne->name }}</td>
                        <td>{{ $donne->email }}</td>
                        <td>
                        
                            <img src="{{ asset('image/' . $donne->image) }}" alt="image" width="100px">
                        </td>
                        <td><a href="{{ route('show',$donne->id) }}" >show</a>
                        <a href="{{ route('edit',$donne->id) }}" >edit</a>
                            
                            <form method="POST" action="{{ route('delete',$donne->id) }}">
                                @csrf
                                @method('delete')
                                <button>delete</button>
                            </form>
                            
                        </td>
                    </tr>
            @endforeach
                </tbody>
        </table>
     
@endsection


{{--  
@extends('layouts.layouts')
@section('main')
        <a href="{{ route('create') }}">create</a>
    <table border="1" width='100%'>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>image</th>
            <th>action</th>
        </thead>
        <tbody>
            @foreach ($donner as $donne)
                <tr>
                    <td>{{ $donne->id }}</td>
                    <td>{{ $donne->name }}</td>
                    <td>{{ $donne->email }}</td>
                    <td>
                        <img src="{{ asset('image/' . $donne->image) }}" alt="image" width="100px">
                    </td>
                    <td><a href="{{ route('show',$donne->id) }}" >show</a>
                    <a href="{{ route('edit',$donne->id) }}" >edit</a>
                        
                        <form method="POST" action="{{ route('delete',$donne->id) }}">
                            @csrf
                            @method('delete')
                            <button>delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
--}}