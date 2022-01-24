@extends('layouts.bur')
@section('bur-content')

    <div>{{$bur->id}}. {{$bur->position}}</div>
    <div>{{$bur->responsibilities}}</div>
   <div> <a href="{{route('bur.edit',$bur->id)}}" class="btn btn-warning mb-2">Edit</a> </div>

    <form action="{{route('bur.destroy',$bur->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger mb-2" value="Delete">
    </form>

    <div><a href="{{route('bur.index')}}" class="btn btn-success">Back</a></div>

@endsection
