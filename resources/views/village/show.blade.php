@extends('layouts.village')
@section('village-content')
    <div>
        <div>{{$village->id}}. {{$village->name}}</div>
        <div>{{$village->likes}}</div>
    </div>
    <div><a href="{{route('village.edit', $village->id)}}">Edit</a></div>

    <div>
        <form action="{{route('village.destroy', $village->id)}}" method="post">
            @csrf
            @method('delete')
            <input type="submit"  value="delete" class="btn btn-danger">
        </form>
    </div>
    <div><a href="{{route('village.index')}}">Back</a></div>
@endsection
