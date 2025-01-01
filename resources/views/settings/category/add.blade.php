@extends('layouts.default')

@section('title', 'Category')

@section('content')
    <div class="container">
        <h1>Create Category</h1>

        <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="category_name">Category Detail</label>
                <input name="category_name" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
