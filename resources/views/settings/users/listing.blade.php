@extends('layouts.default')

@section('title', 'Users')

@section('content')
    <div class="container">



        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="p-4 mt-4 mb-4" style="background-color: #FF5722;">
                <h2 class="text-white" style="font-weight: bold; font-size: 1.2rem;">User Management</h2>
            </div>
            <!-- Button Add User -->
            <a href="{{ route('users_add') }}" class="btn btn-primary">+ Add User</a>
        </div>

        <!-- Success Message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Users Table -->
        <table id="users-table" class="table table-bordered mb-5">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @if ($user->user_type == 9)
                                Super Admin
                            @else
                                Member
                            @endif
                        </td>
                        <td class="text-center">
                            <!-- Button Group for Edit and Delete -->
                            <div class="btn-group">
                                <a href="{{ route('users_edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('users_destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- DataTables Initialization -->
    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                paging: true, // Activate Pagination
                searching: true, // Enable Search
                info: true, // Display Table Info
                order: [
                    [1, 'asc']
                ], // Default Sorting by Name
                lengthMenu: [5, 10, 25, 50], // Rows per Page
                language: {
                    paginate: {
                        previous: "Prev",
                        next: "Next"
                    }
                }
            });
        });
    </script>
@endsection
