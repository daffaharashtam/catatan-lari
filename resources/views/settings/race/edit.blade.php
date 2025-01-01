@extends('layouts.default')

@section('title', 'Races')

@section('content')
    <div class="container">
        <h1>Edit Race</h1>

        <form action="{{ route('race_update', $races->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="text" name="id" value="{{ $races->id }}" hidden>
                <label for="race_detail">Race Detail</label>
                <textarea name="race_detail" class="form-control" required>{{ $races->race_detail }}</textarea>
            </div>

            <div class="form-group">
                <label for="race_date">Race date </label>
                <input type="date" name="race_date" class="form-control" value="{{ $races->race_date }}" required>
            </div>

            <div class="form-group">
                <label for="category">category</label>
                <select name="category" class="form-control" required>
                    <option value="5 K" {{ $races->category == '5 K' ? 'selected' : '' }}>5 K</option>
                    <option value="10 K" {{ $races->category == '10 K' ? 'selected' : '' }}>10 K</option>
                    <option value="Half Marathon" {{ $races->category == 'Half Marathon' ? 'selected' : '' }}>Half Marathon
                    <option value="Marathon" {{ $races->category == 'Marathon' ? 'selected' : '' }}>Marathon</option>
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control" required>
                    <option value="1" {{ $races->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $races->status == 0 ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection
