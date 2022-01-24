@extends('layouts.montazhnik')
@section('montazhnik-content')

    <h1>{{$id->id}}. {{$id->name}}</h1>
    <h1>{{$id->surname}}</h1>

    <h1><a href="{{route('montazhnik.edit', $id->id)}}" class="btn-success">Edit</a></h1>

    <form action="{{route('montazhnik.destroy', $id->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn-danger" value="Удалить"></form>
    <h1><a href="{{route('montazhnik.index')}}">Back</a></h1>

@endsection
