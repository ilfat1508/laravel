@extends('layouts.bur')
@section('bur-content')
    <div>
        <form action="{{route('bur.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" name="position" class="form-control" id="position" placeholder="position">
            </div>

            <div class="mb-3">
                <label for="responsibilities" class="form-label">Responsibilities</label>
                <textarea name="responsibilities" class="form-control" id="responsibilities"
                          placeholder="Responsibilities"></textarea>
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="invs">Инвентарь</label>
                <select multiple class="form-control" id="invs" name="inv_id[]">
                    @foreach($invs as $inv)
                    <option value="{{$inv->id}}">{{$inv->title}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-2">Create</button>
        </form>
    </div>
@endsection
