@extends('layouts.default')

@section('title', 'Races')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-4 mt-4 mb-4" style="background-color: #FF5722;">
                <h2 class="text-white" style="font-weight: bold; font-size: 1.2rem;">Category</h2>
            </div>
            <a href="{{ route('category_add') }}" class="btn btn-primary">+ Add Category</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>
                            <a href="{{ route('category_edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('category_destroy', $category->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this announcement?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
