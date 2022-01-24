@extends('layouts.bur')
@section('bur-content')
    <form action="{{route('bur.update',$bur->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{$bur->position}}">
        </div>
        <div class="mb-3">
            <label for="responsibilities" class="form-label">Responsibilities</label>
            <input type="text" class="form-control" id="responsibilities" name="responsibilities" value="{{$bur->responsibilities}}">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" id="category" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{$category->id===$bur->category->id ? 'selected' : ''}}
                        value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
