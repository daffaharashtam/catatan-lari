@extends('layouts.default')

@section('title', 'Catatan Lari - Home')


@section('content')

    <style>
        .welcome-banner {
            margin-top: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .text-orange {
            color: #FF5722;
        }

        .welcome-banner h2 {
            margin-bottom: 10px;
            font-size: 1.8rem;
        }

        .welcome-banner p {
            margin: 0;
            font-size: 1rem;
            line-height: 1.5;
        }

        /* General Styles */
        .section-title {
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #FF5722;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            /* Sama untuk semua header */
        }

        /* Announcement Section */
        .announcement-banner {
            margin-top: 20px;
            margin-bottom: 30px;
            /* Tambahkan gap antara News dan Race Calendar */
        }

        /* Announcement Section */
        .announcement-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .announcement-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            filter: brightness(70%);
            /* Membuat gambar lebih gelap untuk menonjolkan teks */
        }

        .announcement-text {
            position: absolute;
            bottom: 20px;
            left: 20px;

        }

        .announcement-text h4 {
            color: white !important;
            /* Warna putih dengan prioritas tinggi */
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
            /* Bayangan untuk meningkatkan kontras */
        }


        /* Race Calendar Section */
        .race-calendar {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .race-item {
            display: flex;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .race-item:last-child {
            border-bottom: none;
        }

        .race-date {
            width: 60px;
            background-color: #FF5722;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            flex-shrink: 0;
        }

        .race-date h4 {
            margin: 0;
            font-size: 1.25rem;
            font-weight: bold;
        }

        .race-date span {
            font-size: 0.75rem;
        }

        .race-detail {
            margin-left: 15px;
        }

        .race-detail h5 {
            margin: 0;
            font-size: 1rem;
            color: #333;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .race-item {
                flex-direction: column;
                align-items: flex-start;
            }

            .race-date {
                width: 100%;
                text-align: left;
                margin-bottom: 10px;
            }

            .race-detail {
                margin-left: 0;
            }

            .announcement-text h4 {
                font-size: 1.25rem;
                /* Ukuran lebih kecil untuk layar kecil */
            }

            .section-title {
                font-size: 1.25rem;
                /* Header lebih kecil di layar kecil */
            }
        }
    </style>






    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Start main-content -->
    <div class="main-content">

        @auth
        @else
            <div class="section">
                <div class="container mb-20">
                    <div class="col-md-6">
                        <div class="heading-line-bottom">
                            <h4 class="heading-title">Login</h4>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password">
                                </div>
                            </div>
                            {{-- <div class="row">
                            <div class="form-group col-md-12">
                                <p>
                                    Forgot Password? <a href="{{ route('register.form') }}">Click Here!</a> </p>
                            </div>
                        </div> --}}
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-lg btn-block mt-15">Sign in</button>
                            </div>
                            <div class="text-center">
                                <p>OR</p>
                            </div>
                            <button type="submit" class="btn btn-dark btn-lg btn-block mt-15">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
        @endauth


        <div class="section">
            <div class="container mb-4">
                <div class="welcome-banner p-4 rounded" style="background-color: #f7f7f7; border: 1px solid #FF5722;">
                    <h2 class="text-orange" style="font-weight: bold;">Welcome, {{ Auth::user()->name ?? 'Runner' }}!</h2>
                    <p style="font-size: 1rem; color: #444;">We're excited to have you here! Explore races, track your
                        progress, and keep moving towards your goals.</p>
                </div>
            </div>
        </div>


        <!-- Section: home -->
        <section id="home" class="bg-lighter">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <!-- News/Announcement/Info -->
                        <div class="col-md-6">
                            <h3 class="section-title">News/Announcement/Info</h3>
                            <div class="announcement-banner">
                                @foreach ($announcements as $announcement)
                                    <div class="announcement-item">
                                        <img src="{{ asset('uploads/announcement/' . ($announcement->img ?? 'default-announcement.jpg')) }}"
                                            alt="Announcement Image" class="announcement-img">
                                        <div class="announcement-text">
                                            <h4>{{ $announcement->desc_info }}</h4>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Race Calendar -->
                        <div class="col-md-6">
                            <h3 class="section-title">Race Calendar</h3>
                            <div class="race-calendar">
                                @foreach ($races as $race)
                                    <div class="race-item">
                                        <div class="race-date text-center">
                                            <h4>{{ date('d', strtotime($race->race_date)) }}</h4>
                                            <span>{{ date('M Y', strtotime($race->race_date)) }}</span>
                                        </div>
                                        <div class="race-detail">
                                            <h5>{{ $race->race_detail }}</h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>
    <!-- end main-content -->
@endsection
