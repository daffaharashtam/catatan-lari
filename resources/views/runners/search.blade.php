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

        .btn-orange {
            background-color: white;
            border-color: #FF5722;
            color: #FF5722;
        }

        .btn-orange:hover,
        .btn-orange.active {
            background-color: #e64a19;
            border-color: #e64a19;
            color: white;
        }

        .list-container {
            max-height: 500px;
            overflow-y: auto;
        }

        .pills-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .pill {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 50px;
            background-color: #FF5722;
            color: white;
            margin-right: 10px;
            font-size: 0.9rem;
        }

        .pill.active {
            background-color: #e64a19;
        }

        .head-to-head-btn {
            margin-left: auto;
        }

        .modal-body .card {
            border: 1px solid #FF5722;
            border-radius: 10px;
            margin-bottom: 15px;
        }

        .modal-body .card .card-body {
            padding: 15px;
        }
    </style>

    <div class="main-content">
        <section id="home" class="divider bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <div class="text-center">
                            <h1 class="mb-4" style="font-size: 2rem; font-weight:bold;">Find a Runner</h1>
                            <form class="input-group">
                                <input type="text" class="form-control" placeholder="Enter a name" aria-label="Search">
                                <span class="input-group-btn">
                                    <button class="btn btn-orange px-4" type="submit">Find</button>
                                </span>
                            </form>
                        </div>

                        <!-- Runner Listing -->
                        <div class="mt-4">
                            <p id="result-count" class="text-muted">
                                Showing results for: "<strong>John Doe</strong>" (0 runners)
                            </p>
                            <h1 class="mb-4 mt-2">Runner Listing</h1>

                            <!-- Pills Section -->
                            <div class="pills-container mb-4">
                                <div id="selected-runners-pills"></div>
                                <button id="head-to-head-btn" class="btn btn-orange head-to-head-btn" disabled>Head to
                                    Head</button>
                            </div>

                            <div class="list-container">
                                <div id="runner-list"></div>
                            </div>

                            <!-- Load More Button -->
                            <div class="text-center mt-3">
                                <button id="load-more-btn" class="btn btn-orange btn-lg">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="headToHeadModal" tabindex="-1" role="dialog" aria-labelledby="headToHeadModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="headToHeadModalLabel">Head to Head</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="comparison-details">
                    <!-- Runner details will appear here as cards -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        const runners = [{
                name: 'John Doe',
                location: 'New York',
                bestTime: '3:45:00',
                stars: 5,
                reviews: 876
            },
            {
                name: 'Jane Smith',
                location: 'California',
                bestTime: '3:40:00',
                stars: 4,
                reviews: 450
            },
            {
                name: 'Robert Brown',
                location: 'Texas',
                bestTime: '4:10:00',
                stars: 3,
                reviews: 230
            },
            {
                name: 'Alice Johnson',
                location: 'Florida',
                bestTime: '3:50:00',
                stars: 4.5,
                reviews: 540
            },
            {
                name: 'Charlie Lee',
                location: 'Nevada',
                bestTime: '3:55:00',
                stars: 4,
                reviews: 300
            },
            {
                name: 'Martha White',
                location: 'Washington',
                bestTime: '4:05:00',
                stars: 3.5,
                reviews: 200
            },
            {
                name: 'George King',
                location: 'Oregon',
                bestTime: '4:15:00',
                stars: 3,
                reviews: 150
            },

        ];

        let currentIndex = 0;
        const maxItemsPerLoad = 10;
        let selectedRunners = [];

        function updateResultCount() {
            const resultCount = document.getElementById('result-count');
            resultCount.innerHTML = `Showing results for: "<strong>John Doe</strong>" (${runners.length} runners)`;
        }

        function loadRunners() {
            const listContainer = document.getElementById('runner-list');

            // Load the next batch of runners
            const nextBatch = runners.slice(currentIndex, currentIndex + maxItemsPerLoad);
            nextBatch.forEach(runner => {
                const listItem = document.createElement('div');
                listItem.className = 'list-group-item clearfix';
                listItem.innerHTML = `
                    <img src="https://via.placeholder.com/80" class="pull-left img-circle runner-img" alt="${runner.name}" style="margin-right: 15px;">
                    <div>
                        <h5 class="mb-1">${runner.name}</h5>
                        <p class="mb-1">Runner from ${runner.location}. Best time: ${runner.bestTime}.</p>
                        <div>
                            <span class="rating-stars">${'★'.repeat(Math.floor(runner.stars))}${'☆'.repeat(5 - Math.floor(runner.stars))}</span>
                            <span class="rating-number">(${runner.reviews})</span>
                        </div>
                        <button class="btn btn-orange add-to-compare-btn" data-runner="${runner.name}">Compare Head to Head</button>
                    </div>
                `;
                listContainer.appendChild(listItem);
            });

            // Update index for next load
            currentIndex += nextBatch.length;

            // Disable Load More if all runners are displayed
            if (currentIndex >= runners.length) {
                document.getElementById('load-more-btn').disabled = true;
            }

            setupButtonListeners();
        }

        function setupButtonListeners() {
            document.querySelectorAll('.add-to-compare-btn').forEach(button => {
                button.removeEventListener('click', handleCompareClick); // Prevent duplicate listeners
                button.addEventListener('click', handleCompareClick);
            });
        }

        function handleCompareClick(e) {
            const runner = e.target.getAttribute('data-runner');

            if (selectedRunners.includes(runner)) {
                selectedRunners = selectedRunners.filter(item => item !== runner);
                e.target.textContent = 'Compare Head to Head';
                e.target.classList.remove('active');
            } else if (selectedRunners.length < 2) {
                selectedRunners.push(runner);
                e.target.textContent = 'Remove from Head to Head';
                e.target.classList.add('active');
            } else {
                alert('You can only compare up to 2 runners.');
            }

            document.getElementById('head-to-head-btn').disabled = selectedRunners.length !== 2;

            // Update pills
            updateSelectedRunnersPills();
        }

        function updateSelectedRunnersPills() {
            const pillsContainer = document.getElementById('selected-runners-pills');
            pillsContainer.innerHTML = ''; // Clear existing pills
            selectedRunners.forEach(runner => {
                const pill = document.createElement('div');
                pill.className = 'pill';
                pill.textContent = runner;
                pillsContainer.appendChild(pill);
            });
        }

        function openComparisonModal() {
            const modalBody = document.getElementById('comparison-details');
            modalBody.innerHTML = ''; // Clear existing details

            selectedRunners.forEach(runnerName => {
                const runner = runners.find(r => r.name === runnerName);
                if (runner) {
                    const card = document.createElement('div');
                    card.className = 'card';
                    card.innerHTML = `
                        <div class="card-body">
                            <h5 class="card-title">${runner.name}</h5>
                            <p class="card-text">Location: ${runner.location}</p>
                            <p class="card-text">Best Time: ${runner.bestTime}</p>
                            <p class="card-text">Reviews: ${runner.reviews} (${'★'.repeat(runner.stars)}${'☆'.repeat(5 - runner.stars)})</p>
                        </div>
                    `;
                    modalBody.appendChild(card);
                }
            });

            $('#headToHeadModal').modal('show');
        }

        document.addEventListener('DOMContentLoaded', () => {
            updateResultCount(); // Update total count dynamically
            loadRunners();

            document.getElementById('load-more-btn').addEventListener('click', () => {
                loadRunners();
            });

            document.getElementById('head-to-head-btn').addEventListener('click', () => {
                openComparisonModal();
            });
        });
    </script>

@endsection
