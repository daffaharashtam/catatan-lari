@extends('layouts.default')

@section('title', 'Edit User')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        <form action="{{ route('users_update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <input type="hidden" name="id" value="{{ $user->id }}">

                <label for="name">Name</label>
                <input name="name" class="form-control" required value="{{ $user->name }}">
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" required value="{{ $user->email }}">
            </div>

            <div class="form-group mt-3">
                <label for="password">Password (Leave blank to keep current password)</label>
                <input name="password" type="password" class="form-control">
            </div>

            <div class="form-group mt-3">
                <label for="user_type">User Type</label>
                <select name="user_type" class="form-control" required>
                    <option value="9" {{ $user->user_type == 9 ? 'selected' : '' }}>Super Admin</option>
                    <option value="1" {{ $user->user_type == 1 ? 'selected' : '' }}>Member</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save Changes</button>
        </form>
    </div>
@endsection
