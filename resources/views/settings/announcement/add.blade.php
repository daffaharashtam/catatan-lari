@extends('layouts.default')

@section('title', 'Announcement')

@section('content')
    <div class="container">
        <h1>Create Announcement</h1>

        <form action="{{ route('announcement_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="desc_info" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="img">Image</label>
                <input type="file" name="img" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="startvalid">Start Valid</label>
                <input type="date" name="startvalid" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="endvalid">End Valid</label>
                <input type="date" name="endvalid" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
