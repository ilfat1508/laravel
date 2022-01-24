@extends('layouts.village')

@section('village-content')
    <div>
        <form action="{{route('village.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" id="content" placeholder="Content"></textarea>
            </div>

            <div class="mb-3">
                <label for="likes" class="form-label">Image</label>
                <input type="text" name="likes" class="form-control" id="likes" placeholder="Likes">
            </div>


            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
