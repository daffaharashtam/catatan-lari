@extends('layouts.default')

@section('title', 'Edit Profile')

<style>
    .event-header {
        position: relative;
        height: 250px;
        background: url('https://images.pexels.com/photos/240204/pexels-photo-240204.jpeg?auto=compress&cs=tinysrgb&w=1200') no-repeat center center;
        background-size: cover;
        border-radius: 8px;
    }

    .event-details-overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.4);
        color: #fff;
        padding: 20px;
        border-bottom-left-radius: 8px;
        border-bottom-right-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .event-title-container {
        flex-grow: 1;
    }

    .event-title {
        font-size: 28px;
        font-weight: bold;
        margin: 0;
    }

    .event-location,
    .event-date {
        font-size: 16px;
        margin: 0;
    }

    .event-logo {
        width: 60px;
        height: 60px;
        background: url('https://images.pexels.com/photos/844874/pexels-photo-844874.jpeg?auto=compress&cs=tinysrgb&w=1200') no-repeat center center;
        background-size: cover;
        border-radius: 50%;
        border: 3px solid #fff;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        margin-left: 20px;
    }
</style>

@section('content')

    <div class="container">
        <!-- Header -->
        <div class="row">
            <div class="col-md-8 col-md-push-2">
                <div class="event-header">
                    <div class="event-details-overlay">
                        <!-- Title and Event Details -->
                        <div class="event-title-container">
                            <h1 class="event-title">Boston Marathon 2024</h1>
                            <p class="event-location">Boston, Massachusetts, USA</p>
                            <p class="event-date">21 April 2024</p>
                        </div>
                        <!-- Logo -->
                        <div class="event-logo"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Event Details -->
        <div class="row race-section mt-4">
            <div class="col-md-8 col-md-push-2">
                <h3>Event Details</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Category</th>
                        <td>Marathon</td>
                    </tr>
                    <tr>
                        <th>Distance</th>
                        <td>42.195 KM</td>
                    </tr>
                    <tr>
                        <th>Start Location</th>
                        <td>Hopkinton, Massachusetts</td>
                    </tr>
                    <tr>
                        <th>Finish Location</th>
                        <td>Boylston Street, Boston</td>
                    </tr>
                    <tr>
                        <th>Start Time</th>
                        <td>9:00 AM</td>
                    </tr>
                    <tr>
                        <th>Cut-off Time</th>
                        <td>6 Hours</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Tabs for Additional Information -->
        <div class="row race-section">
            <div class="col-md-8 col-md-push-2">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#details" data-toggle="tab">Race Details</a></li>
                    <li><a href="#route" data-toggle="tab">Route Map</a></li>
                    <li><a href="#results" data-toggle="tab">Race Results</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="details">
                        <h4>About the Event</h4>
                        <p>The Boston Marathon is the oldest annual marathon in the world. Participants will run through
                            historic streets, enjoy breathtaking sceneries, and feel the vibrant support of the Boston
                            community.</p>
                    </div>
                    <div class="tab-pane" id="route">
                        <h4>Route Map</h4>
                        <p>The course starts in Hopkinton, traverses through several towns, and ends at Boylston Street in
                            Boston. Below is the detailed route map:</p>
                        <!-- Google Maps Embed -->
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2949.9159716971746!2d-71.0834045!3d42.3496368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e37080dc1601e5%3A0xc47f4d5a35317dd2!2sBoylston%20St%2C%20Boston%2C%20MA%2002116%2C%20USA!5e0!3m2!1sen!2s!4v1695140807413!5m2!1sen!2s"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>

                    <div class="tab-pane" id="results">
                        <h4>Race Results</h4>
                        <p>Results will be updated here after the event.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
