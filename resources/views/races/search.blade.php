@extends('layouts.default')

@section('title', 'Race')

@section('content')

    <style>
        .race-img {
            width: 80px;
            height: 80px;
            object-fit: cover;
        }

        .list-container {
            max-height: 500px;
            overflow-y: auto;
        }

        .list-group-item {
            padding: 15px;
            /* border: 1px solid #FF5722; */
            border-left: none;
            border-right: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .list-group-item:hover {
            background-color: #ffece6;
        }

        .list-group-item:last-child {
            border-bottom: 1px solid #FF5722;
        }

        .btn-orange {
            background-color: white;
            border-color: #FF5722;
            color: #FF5722;
        }

        .btn-orange:hover {
            background-color: #e64a19;
            border-color: #e64a19;
            color: white;
        }
    </style>

    <div class="main-content">
        <section id="home" class="divider bg-lighter">
            <div class="container">
                <!-- Search -->
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 2rem; font-weight:bold;">Find a Race</h1>
                            <form class="input-group">
                                <input type="text" class="form-control" placeholder="Enter a name" aria-label="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-orange px-4" type="submit">Find</button>
                                </span>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Race Listing -->
                <div class="row mt-4">
                    <div class="col-md-6 col-md-offset-3">
                        <p id="result-count" class="text-muted">Showing results for: "<strong>Marathon</strong>" (0 races)
                        </p>
                        <div class="list-container" id="race-list"></div>

                        <!-- Load More Button -->
                        <div class="text-center mt-3">
                            <button id="load-more-btn" class="btn btn-orange btn-lg">Load More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        const races = [{
                name: 'New York Marathon',
                year: '2024',
                category: 'Marathon',
                url: '/races/1'
            },
            {
                name: 'Boston Marathon',
                year: '2024',
                category: 'Marathon',
                url: '/races/2'
            },
            {
                name: 'Tokyo 10K Race',
                year: '2024',
                category: '10K',
                url: '/races/3'
            },
            {
                name: 'London 5K Fun Run',
                year: '2024',
                category: '5K',
                url: '/races/4'
            },
            {
                name: 'Berlin Marathon',
                year: '2024',
                category: 'Marathon',
                url: '/races/5'
            },
            {
                name: 'Paris Half Marathon',
                year: '2024',
                category: 'Half Marathon',
                url: '/races/6'
            },
            {
                name: 'Chicago Marathon',
                year: '2024',
                category: 'Marathon',
                url: '/races/7'
            },
            {
                name: 'Los Angeles 10K',
                year: '2024',
                category: '10K',
                url: '/races/8'
            },
            {
                name: 'Sydney Ultra Marathon',
                year: '2024',
                category: 'Ultra Marathon',
                url: '/races/9'
            },
            {
                name: 'Melbourne Marathon',
                year: '2024',
                category: 'Marathon',
                url: '/races/10'
            },
        ];

        let currentIndex = 0;
        const maxItemsPerLoad = 5;

        function updateResultCount() {
            const resultCount = document.getElementById('result-count');
            resultCount.innerHTML = `Showing results for: "<strong>Marathon</strong>" (${races.length} races)`;
        }

        function loadRaces() {
            const listContainer = document.getElementById('race-list');
            const nextBatch = races.slice(currentIndex, currentIndex + maxItemsPerLoad);

            nextBatch.forEach(race => {
                const listItem = document.createElement('a');
                listItem.className = 'list-group-item clearfix';
                listItem.href = race.url; // Navigates to the race detail page
                listItem.innerHTML = `
                    <img src="https://via.placeholder.com/80" class="pull-left race-img" alt="${race.name}" style="margin-right: 15px;">
                    <div>
                        <h5 class="mb-1">${race.name}</h5>
                        <p class="mb-1">Year: ${race.year}</p>
                        <p class="mb-1">Category: ${race.category}</p>
                    </div>
                `;
                listContainer.appendChild(listItem);
            });

            currentIndex += nextBatch.length;

            if (currentIndex >= races.length) {
                document.getElementById('load-more-btn').disabled = true;
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateResultCount();
            loadRaces();

            document.getElementById('load-more-btn').addEventListener('click', () => {
                loadRaces();
            });
        });
    </script>

@endsection
