@extends('layouts.village')
@section('village-content')
      <form action="{{route('village.update',$village->id)}}" method="post">
          @csrf
          @method('patch')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$village->name}}">
            </div>

          <div class="mb-3">
              <label for="content" class="form-label">Content</label>
              <input type="text" class="form-control"  name="content" id="content" placeholder="Content" value="{{$village->content}}">
          </div>

          <div class="mb-3">
              <label for="likes" class="form-label">Likes</label>
              <input type="text" class="form-control"  name="likes" id="likes" placeholder="Likes" value="{{$village->likes}}">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>


@endsection
