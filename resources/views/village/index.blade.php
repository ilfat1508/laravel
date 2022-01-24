@extends('layouts.village')

@section('village-content')
    <div><a href="{{route('village.create')}}" class="btn bg-primary mb-3">Add one</a></div>
  @foreach($villages as $village)
      <div><a href="{{route('village.show',$village->id)}}">{{$village->id}}. {{$village->name}}</div>
  @endforeach

@endsection
