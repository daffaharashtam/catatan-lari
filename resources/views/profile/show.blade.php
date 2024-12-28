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
                <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-img">
                <!-- Profile Details -->
                <h3>Jonathon Alex</h3>
                <p class="text-muted">ID: RUN001 | Male, Jakarta</p>
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
                        <div class="stat-value">10</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-road icon"></i>
                        <div class="stat-title">Distance</div>
                        <div class="stat-value">200 km</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-clock-o icon"></i>
                        <div class="stat-title">Time</div>
                        <div class="stat-value">10:15:00</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-tachometer icon"></i>
                        <div class="stat-title">Avg Pace</div>
                        <div class="stat-value">05:15/km</div>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="stat-box">
                        <i class="fa fa-arrows-h icon"></i>
                        <div class="stat-title">Longest</div>
                        <div class="stat-value">Marathon</div>
                    </div>
                </div>
            </div>

            <!-- Personal Best Section -->
            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-bolt icon"></i>
                        <div class="stat-title">5K</div>
                        <div class="stat-value">20:10</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-male icon"></i>
                        <div class="stat-title">10K</div>
                        <div class="stat-value">42:00</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-heartbeat icon"></i>
                        <div class="stat-title">Half Marathon</div>
                        <div class="stat-value">1:45:00</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-box">
                        <i class="fa fa-trophy icon"></i>
                        <div class="stat-title">Marathon</div>
                        <div class="stat-value">4:10:00</div>
                    </div>
                </div>
            </div>

            <!-- Section Title -->
            <div class="section-title">Race History</div>

            <!-- Race History Section -->
            <div class="table-wrapper">
                <div class="race-header">2024</div>
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
                    <tbody>
                        <tr>
                            <td>2024-03-15</td>
                            <td>Borobudur Race</td>
                            <td>Half Marathon</td>
                            <td>1:45:30</td>
                            <td>87</td>
                            <td>05:10/km</td>
                        </tr>
                        <tr>
                            <td>2024-09-10</td>
                            <td>Bandung Marathon</td>
                            <td>Marathon</td>
                            <td>4:20:15</td>
                            <td>78</td>
                            <td>06:15/km</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-wrapper">
                <div class="race-header">2023</div>
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
                    <tbody>
                        <tr>
                            <td>2023-04-05</td>
                            <td>Jakarta Race</td>
                            <td>Half Marathon</td>
                            <td>1:50:15</td>
                            <td>84</td>
                            <td>05:15/km</td>
                        </tr>
                        <tr>
                            <td>2023-11-20</td>
                            <td>Bali 10K</td>
                            <td>10K</td>
                            <td>42:00</td>
                            <td>89</td>
                            <td>04:12/km</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
