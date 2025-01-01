@extends('layouts.default')

@section('title', 'Create User')

@section('content')
    <div class="container">
        <h1>Create User</h1>

        <form action="{{ route('users_store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input name="name" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="user_type">User Type</label>
                <select name="user_type" class="form-control" required>
                    <option value="9">Super Admin</option>
                    <option value="1">Member</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
@endsection
