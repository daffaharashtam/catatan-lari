@extends('layouts.default')

@section('title', 'Races')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-4 mt-4 mb-4" style="background-color: #FF5722;">
                <h2 class="text-white" style="font-weight: bold; font-size: 1.2rem;">Race</h2>
            </div>
            <a href="{{ route('race_add') }}" class="btn btn-primary">+ Add Race</a>
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
                    <th>Race Detail</th>
                    <th>Race Date</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($races as $race)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $race->race_detail }}</td>
                        <td>{{ date('Y-m-d', strtotime($race->race_date)) }}</td>
                        <td>{{ $race->category }}</td>
                        <td>{{ $race->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('race_edit', $race->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('race_destroy', $race->id) }}" method="POST" class="d-inline">
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
