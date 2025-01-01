@extends('layouts.default')

@section('title', 'Profile')

@section('content')

    <style>
        .profile-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #FF5722;
            margin-bottom: 15px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .stat-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 10px;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-box:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .icon {
            font-size: 30px;
            margin-bottom: 10px;
            color: #FF5722;
        }

        .stat-title {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 20px;
            font-weight: bold;
            color: #FF5722;
        }

        .table-wrapper {
            margin-top: 30px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .race-header {
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            color: #333;
            margin-bottom: 10px;
        }

        .race-table {
            width: 100%;
            border-collapse: collapse;
        }

        .race-table th {
            background-color: #f9f9f9;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .race-table td {
            text-align: center;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .race-table tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .section-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 30px 0 20px;
            color: #333;
        }
    </style>

    <div class="main-content">
        <div class="container">
            <!-- Profile Section -->
            <div class="profile-section">
                <!-- Profile Image -->
                <img src="{{ asset('uploads/profiles/' . $infoRun->pic_profile) }}" alt="Profile Picture" class="profile-img">
                <!-- Profile Details -->
                <h3>{{ $infoRun->name }}</h3>
                <p class="text-muted">ID: {{ $infoRun->runner_no }} | @if ($infoRun->gender == 1)
                        Male
                    @elseif($infoRun->gender == 0)
                        Female
                    @endif, {{ $infoRun->city }}</p>
                <!-- Rating -->
                <div>
                    <span class="text-warning" style="font-size: 20px;">★★★★★</span>
                    <span class="fw-bold" style="color: #8a582b;">876</span>
                </div>
            </div>

            <!-- Statistics Section -->
            <div class="row text-center mt-4">
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-flag-checkered icon"></i>
                        <div class="stat-title">Race</div>
                        <div class="stat-value">{{ $Dataprofile['count_race'] }}</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-road icon"></i>
                        <div class="stat-title">Distance</div>
                        <div class="stat-value">{{ $Dataprofile['sum_distance'] }} km</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-clock-o icon"></i>
                        <div class="stat-title">Time</div>
                        <div class="stat-value">{{ $Dataprofile['sum_time'] }}</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-tachometer icon"></i>
                        <div class="stat-title">Avg Pace</div>
                        <div class="stat-value">{{ $Dataprofile['sum_pace'] }} / km</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-arrows-h icon"></i>
                        <div class="stat-title">Longest</div>
                        <div class="stat-value">{{ $Dataprofile['Longest'] }}</div>
                    </div>
                </div>
            </div>

            <!-- Personal Best Section -->
            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-bolt icon"></i>
                        <div class="stat-title">5K</div>
                        <div class="stat-value">
                            @forelse ($pbest as $best)
                                @if ($best->category == '5 K')
                                    {{ $best->fastest_time }}
                                @endif
                            @empty
                                -
                            @endforelse
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-male icon"></i>
                        <div class="stat-title">10K</div>
                        <div class="stat-value">
                            @forelse ($pbest as $best)
                                @if ($best->category == '10 K')
                                    {{ $best->fastest_time }}
                                @endif
                            @empty
                                -
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <i class="fa fa-heartbeat icon"></i>
                    <div class="stat-title">Half Marathon</div>
                    <div class="stat-value">
                        @forelse ($pbest as $best)
                            @if ($best->category == 'Half Marathon')
                                {{ $best->fastest_time }}
                            @endif
                        @empty
                            -
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-box">
                    <i class="fa fa-trophy icon"></i>
                    <div class="stat-title">Marathon</div>
                    <div class="stat-value">
                        @forelse ($pbest as $best)
                            @if ($best->category == 'Marathon')
                                {{ $best->fastest_time }}
                            @endif
                        @empty
                            -
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Title -->
        <div class="section-title">Race History</div>

        <!-- Race History Section -->
        @foreach ($groupedRaces as $year => $races)
            <div class="table-wrapper">
                <div class="race-header">{{ $year }}</div>
                <table class="race-table">
                    <thead>
                        <tr>
                            <th><i class="fa fa-calendar"></i> Date</th>
                            <th><i class="fa fa-flag"></i> Race</th>
                            <th><i class="fa fa-list-alt"></i> Category</th>
                            <th><i class="fa fa-clock-o"></i> Time</th>
                            <th><i class="fa fa-star"></i> Score</th>
                            <th><i class="fa fa-tachometer"></i> Pace</th>
                        </tr>
                    </thead>
                    @foreach ($races as $race)
                        <tbody>
                            <tr>
                                <td>{{ $race->race_date }}</td>
                                <td>{{ $race->race }}</td>
                                <td>{{ $race->category }}</td>
                                <td>{{ $race->time }}</td>
                                <td>87</td>
                                <td>{{ $race->pace }} / km</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
        @endforeach

    </div>
    </div>
    </div>

@endsection
