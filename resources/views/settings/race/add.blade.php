@extends('layouts.default')

@section('title', 'Races')

@section('content')
    <div class="container">
        <h1>Create Race</h1>

        <form action="{{ route('race_store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="race_detail">Race Detail</label>
                <textarea name="race_detail" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="race_date">Race Date</label>
                <input type="date" name="race_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="category">Status</label>
                <select name="category" class="form-control" required>
                    <option value="5 K">5 K</option>
                    <option value="10 K">10 K </option>
                    <option value="Half Marathon">Half Marathon</option>
                    <option value="Marathon">Marathon</option>
                </select>
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
