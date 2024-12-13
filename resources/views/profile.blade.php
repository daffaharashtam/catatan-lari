@extends('layouts.default')

@section('title', 'Profile')

@section('content')

  <!-- Start main-content -->
  <div class="main-content">

    <section>
        <div class="container pb-0">
          <div class="section-title">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <h5 class="sub-title">Sub Title Here</h5>
                <h2 class="title">Title Style One</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo et adipisci, beatae ad sapiente aspernatur accusamus!</p>
              </div>
            </div>
          </div>
        </div>
      </section>


    <section class="bg-white-f7">
      <div class="container">

        <div class="row">
            <div class="col-md-6 col-md-push-3" style="display: flex; justify-content: center;">
                <!-- Foto Profil -->
                <div style="flex-shrink: 0; margin-right: 15px;">
                    <img src="https://via.placeholder.com/150" alt="Profile Picture" class="img-circle" style="width: 150px; height: 150px; background-color: #d9eafd; border: 1px solid #ccc;">
                </div>
                <!-- Informasi Profil -->
                <div>
                    <h3 class="mt-0">Jonathon Alex</h3>
                    <h5 class="text-theme-colored mt-0">ID: RUN001</h5>
                    <h5 class="mt-0">Male, Jakarta</h5>
                    <!-- Rating dan Skor -->
                    <div style="display: flex; align-items: center;">
                        <!-- Bintang Rating -->
                        <span style="color: gold; font-size: 20px; margin-right: 5px;">
                            ★ ★ ★ ★ ★
                        </span>
                        <!-- Skor -->
                        <span style="font-size: 18px; font-weight: bold; color: #8a582b;">876</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-md-6 col-md-push-3">
                <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi modi magni rem hic eum voluptatibus ratione cum, velit deleniti animi, dolor excepturi ex minima unde, rerum exercitationem molestiae cumque asperiores possimus fugit? Totam odit, sed quasi repellat libero blanditiis excepturi nemo voluptas ipsa quam et maxime.</p>
                  <ul class="styled-icons icon-gray text-theme-colored mt-15 mb-15">
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                  </ul>
            </div>
        </div> --}}
      </div>
    </section>

    <!-- Section: Race -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <h3>Race</h3>
                    <h5 class="text-theme-colored">10</h5>
                </div>
                <div class="col-md-2">
                    <h3>Distance</h3>
                    <h5 class="text-theme-colored">200</h5>
                </div>
                <div class="col-md-2">
                    <h3>Time</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Avg Pace</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Longest</h3>
                    <h5 class="text-theme-colored">Marathon</h5>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <img src="http://placehold.it/450x450" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom">
                        <h3 class="heading-title">Personal Best</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <h3>5K</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-3">
                    <h3>10K</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-3">
                    <h3>Half Marathon</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-3">
                    <h3>Marathon</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom">
                        <h3 class="heading-title">2024</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h3>Race</h3>
                    <h5 class="text-theme-colored">Borobudur Race</h5>
                </div>
                <div class="col-md-2">
                    <h3>Category</h3>
                    <h5 class="text-theme-colored">Half Marathon</h5>
                </div>
                <div class="col-md-2">
                    <h3>Time</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Catu Score</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Pace</h3>
                    <h5 class="text-theme-colored">200</h5>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <img src="http://placehold.it/450x450" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-line-bottom">
                        <h3 class="heading-title">2023</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <h3>Race</h3>
                    <h5 class="text-theme-colored">Jakarta Race</h5>
                </div>
                <div class="col-md-2">
                    <h3>Category</h3>
                    <h5 class="text-theme-colored">Half Marathon</h5>
                </div>
                <div class="col-md-2">
                    <h3>Time</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Catu Score</h3>
                    <h5 class="text-theme-colored">hh:mm:ss</h5>
                </div>
                <div class="col-md-2">
                    <h3>Pace</h3>
                    <h5 class="text-theme-colored">200</h5>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <img src="http://placehold.it/450x450" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: Features -->
    {{-- <section id="features" class="bg-lighter">
      <div class="container">
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="icon-box text-center">
                <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-strength text-white"></i> </a>
                <h4 class="Personal trainer text-uppercase"><strong>Weight Loss Specialized</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="icon-box text-center">
                <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-sports-6 text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Golf Fitness Specialized</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="icon-box text-center">
                <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-sport text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Youth Exercise Specialized</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="icon-box text-center">
                <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-sports-1 text-white"></i> </a>
                <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Behavior Specialized</strong></h4>
                <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

  </div>
  <!-- end main-content -->

@endsection
