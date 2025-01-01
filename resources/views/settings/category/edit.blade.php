@extends('layouts.default')

@section('title', 'Category')

@section('content')
    <div class="container">
        <h1>Edit Category</h1>

        <form action="{{ route('category_update', $categories->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" name="id" value="{{ $categories->id }}" hidden>
                <label for="category_name">Category Detail</label>
                <input name="category_name" class="form-control" required value="{{ $categories->category_name }}">
            </div>


            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection
