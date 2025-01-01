@extends('layouts.default')

@section('title', 'Announcement')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Announcements</h1>
            <a href="{{ route('announcement_add') }}" class="btn btn-primary">Add Announcement</a>
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
                    <th>Description</th>
                    <th>Image</th>
                    <th>Start Valid</th>
                    <th>End Valid</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($announcements as $announcement)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $announcement->desc_info }}</td>
                        <td>
                            @if ($announcement->img)
                                <img src="{{ asset('uploads/Announcement/' . $announcement->img) }}" alt="Image"
                                    width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ date('Y-m-d', strtotime($announcement->startvalid)) }}</td>
                        <td>{{ date('Y-m-d', strtotime($announcement->endvalid)) }}</td>
                        <td>{{ $announcement->status ? 'Active' : 'Inactive' }}</td>
                        <td>
                            <a href="{{ route('announcement_edit', $announcement->id) }}"
                                class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('announcement_destroy', $announcement->id) }}" method="POST"
                                class="d-inline">
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
