@extends('layouts.montazhnik')
@section('montazhnik-content')
    <div><a href="{{route('montazhnik.create')}}" class="btn btn-success">Create</a></div>
    @foreach($montazhniks as $montazhnik)
    <div><a href="{{route('montazhnik.show', $montazhnik->id)}}">{{$montazhnik->id}}. {{$montazhnik->name}}</a></div>

    @endforeach
@endsection
