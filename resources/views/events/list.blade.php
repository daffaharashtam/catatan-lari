@extends('layouts.default')

@section('title', 'Event Management')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <h2 class="text-center" style="font-size: 2rem; font-weight:bold;">Event Management</h2>
                <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#addModal">
                    Add Event
                </button>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->id }}</td>
                                <td>{{ $event->event_name }}</td>
                                <td>{{ $event->event_date }}</td>
                                <td>{{ $event->event_category }}</td>
                                <td>
                                    @if ($event->event_image)
                                        <img src="{{ asset('storage/' . $event->event_image) }}" alt="Event Image"
                                            width="100">
                                    @else
                                        No Image
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('events.edit', $event->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST"
                                        style="display:inline-block;" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="addModalLabel">Add Event</h4>
                </div>
                <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="event_name">Event Name</label>
                        <input type="text" name="event_name" id="event_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="event_date">Event Date</label>
                        <input type="date" name="event_date" id="event_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="event_category">Category</label>
                        <select name="event_category" id="event_category" class="form-control" required>
                            <option value="Marathon">Marathon</option>
                            <option value="10K">10K</option>
                            <option value="5K">5K</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="event_image">Event Image</label>
                        <input type="file" name="event_image" id="event_image" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>



            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
