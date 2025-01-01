@extends('layouts.default')

@section('title', 'Announcement')

@section('content')
    <div class="container">
        <h1>Edit Announcement</h1>

        <form action="{{ route('announcement_update', $announcement->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" name="id" value="{{ $announcement->id }}" hidden>
                <label for="description">Description</label>
                <textarea name="desc_info" class="form-control" required>{{ $announcement->desc_info }}</textarea>
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" class="form-control">
                <img src="{{ asset('uploads/Announcement/' . $announcement->img) }}" name="img" width="100"
                    alt="image">
            </div>

            <div class="form-group">
                <label for="startvalid">Start Valid </label>
                <input type="date" name="startvalid" class="form-control" value="{{ $announcement->startvalid }}"
                    required>
            </div>

            <div class="form-group">
                <label for="endvalid">End Valid</label>
                <input type="date" name="endvalid" class="form-control" value="{{ $announcement->endvalid }}" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="1" {{ $announcement->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $announcement->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection
