@extends('layouts.default')

@section('title', 'Race')

@section('content')

    <style>
        .runner-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .rating-stars {
            color: gold;
            font-size: 1.2rem;
        }

        .rating-number {
            font-size: 1rem;
            color: #6c757d;
            margin-left: 5px;
        }

        .banner {
            width: 100%;
            overflow: hidden;
        }

        .banner-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        /* New color theme */
        .btn-success,
        .input-group-btn button,
        .list-group-item {
            background-color: white;
            border-color: #FF5722;
            color: #FF5722
        }

        .btn-success:hover,
        .input-group-btn button:hover,
        .list-group-item:hover {
            background-color: #e64a19;
            border-color: #e64a19;
        }
    </style>

    <div class="main-content">
        <!-- Section: home -->
        <section id="home" class="divider bg-lighter">
            <div class="display-table">
                <div class="display-table-cell">
                    <div class="container">
                        <!-- Search -->
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="row">
                                    <div class="text-center w-100">
                                        <h1 class="mb-4" style="font-size: 2rem; font-weight:bold;">Find a Race</h1>
                                        <form class="input-group">
                                            <input type="text" class="form-control" placeholder="Enter a name"
                                                aria-label="Search">
                                            <span class="input-group-btn">
                                                <button class="btn btn-success" type="submit">Find</button>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Race Listing -->
                        <div class="row mt-4">
                            <div class="col-md-6 col-md-offset-3">
                                <p class="text-muted">Showing 5 results for: "<strong>Marathon</strong>"</p>
                                <h1 class="text-center mb-4">Race Listing</h1>
                                <div class="list-group">
                                    <!-- Race 1 -->
                                    <a href="{{ route('races.show') }}" class="list-group-item clearfix"
                                        style="margin-bottom: 10px; padding: 15px;">
                                        <img src="https://via.placeholder.com/80" class="pull-left img-circle race-img"
                                            alt="Race Image" style="margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1">New York Marathon</h5>
                                            <p class="mb-1">Year: 2024</p>
                                            <p class="mb-1">Category: Marathon</p>
                                        </div>
                                    </a>
                                    <!-- Race 2 -->
                                    <a href="{{ route('races.show') }}" class="list-group-item clearfix"
                                        style="margin-bottom: 10px; padding: 15px;">
                                        <img src="https://via.placeholder.com/80" class="pull-left img-circle race-img"
                                            alt="Race Image" style="margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1">Boston Marathon</h5>
                                            <p class="mb-1">Year: 2024</p>
                                            <p class="mb-1">Category: Marathon</p>
                                        </div>
                                    </a>
                                    <!-- Race 3 -->
                                    <a href="{{ route('races.show') }}" class="list-group-item clearfix"
                                        style="margin-bottom: 10px; padding: 15px;">
                                        <img src="https://via.placeholder.com/80" class="pull-left img-circle race-img"
                                            alt="Race Image" style="margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1">Tokyo 10K Race</h5>
                                            <p class="mb-1">Year: 2024</p>
                                            <p class="mb-1">Category: 10K</p>
                                        </div>
                                    </a>
                                    <!-- Race 4 -->
                                    <a href="{{ route('races.show') }}" class="list-group-item clearfix"
                                        style="margin-bottom: 10px; padding: 15px;">
                                        <img src="https://via.placeholder.com/80" class="pull-left img-circle race-img"
                                            alt="Race Image" style="margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1">London 5K Fun Run</h5>
                                            <p class="mb-1">Year: 2024</p>
                                            <p class="mb-1">Category: 5K</p>
                                        </div>
                                    </a>
                                    <!-- Race 5 -->
                                    <a href="{{ route('races.show') }}" class="list-group-item clearfix"
                                        style="margin-bottom: 10px; padding: 15px;">
                                        <img src="https://via.placeholder.com/80" class="pull-left img-circle race-img"
                                            alt="Race Image" style="margin-right: 15px;">
                                        <div>
                                            <h5 class="mb-1">Berlin Marathon</h5>
                                            <p class="mb-1">Year: 2024</p>
                                            <p class="mb-1">Category: Marathon</p>
                                        </div>
                                    </a>
                                </div>

                                <!-- Load More Button -->
                                <div class="text-center mt-4">
                                    <button class="btn btn-success btn-lg">Load More</button>
                                </div>
                            </div>
                        </div>
                        <!-- Suggest Race Section -->
                        <div class="row mt-8">
                            <div class="col-md-6 col-md-push-3">
                                <div class="card p-4">
                                    <h4 class="text-center mb-4" style="font-size: 2rem; font-weight:bold;">Suggest a Race
                                    </h4>
                                    <form name="suggest-race-form" method="post">
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="suggest_year">Year</label>
                                                <input id="suggest_year" name="year" class="form-control" type="number"
                                                    min="2000" max="2100">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="suggest_race_name">Race Name</label>
                                                <input id="suggest_race_name" name="race_name" class="form-control"
                                                    type="text">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="suggest_race_category">Race Category</label>
                                                <select id="suggest_race_category" name="race_category"
                                                    class="form-control">
                                                    <option value="" disabled selected>Select Category</option>
                                                    <option value="5K">5K</option>
                                                    <option value="10K">10K</option>
                                                    <option value="Half Marathon">Half Marathon</option>
                                                    <option value="Marathon">Marathon</option>
                                                    <option value="Ultra Marathon">Ultra Marathon</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-success btn-lg btn-block" type="submit">Submit
                                                Suggestion</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
