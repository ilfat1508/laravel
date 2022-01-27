@extends('layouts.bur')
@section('bur-content')
    <a href="{{route('bur.create')}}" class="btn-success">ADD</a>
    @foreach($burs as $bur)
        <div><a href="{{route('bur.show', $bur->id)}}">{{$bur->id}}. {{$bur->position}}  задачи: {{$bur->responsibilities}}</a></div>
    @endforeach
    <div class="mt-2">
        {{$burs->links()}}
    </div>
@endsection
