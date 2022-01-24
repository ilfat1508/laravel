@extends('layouts.montazhnik')
@section('montazhnik-content')

    <form action="{{route('montazhnik.store')}}" method="post">
        @csrf
        <div><label for="name">Имя</label>
            <input type="text" name="name" id="name"></div>
        <div><label for="surname">Фамилия</label>
            <input type="text" name="surname" id="surname"></div>
        <input type="submit" value="create" >
    </form>

@endsection
