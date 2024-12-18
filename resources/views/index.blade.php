@extends('layouts.default')

@section('title', 'Home Page')

@section('content')

    <!-- Start main-content -->
    <div class="main-content">

        <div class="section">
            <div class="container mb-20">
                <div class="col-md-6">
                    <div class="heading-line-bottom">
                        <h4 class="heading-title">Login</h4>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Email</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label>Password</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <p>
                                    Forgot Password? <a href="{{ route('register') }}">Click Here!</a> </p>
                            </div>
                        </div>
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

        <!-- Section: home -->
        <section id="home" class="bg-lighter">
            <div class="container">
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-uppercase letter-space-1 text-center text-theme-colored bg-lighter mb-20">
                                News/Announcement/Info</h3>
                            <p>CONTENT</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-uppercase letter-space-1 text-center text-theme-colored bg-lighter mb-20">Race
                                Calendar</h3>
                            <ul class="list theme-colored angle-double-right">
                                <li>Lorem ipsum dolor sit elit</li>
                                <li>Lorem ipsum dolor sit elit</li>
                                <li>Lorem ipsum dolor sit elit</li>
                                <li>Lorem ipsum dolor sit elit</li>
                                <li>Lorem ipsum dolor sit elit</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: About -->
        <!-- <section id="about">
          <div class="container pt-70 pb-70">
            <div class="section-content">
              <div class="row">
                <div class="col-sm-4">
                  <h3 class="text-uppercase letter-space-1 mt-0">Welcome to <span class="text-theme-colored text-uppercase">Sports Club</span>, Your Personal Training Partner to achieve your training goals.</h3>
                </div>
                <div class="col-sm-4">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae sed omnis quo sequi enim, quibusdam nesciunt, dignissimos minima repudiandae, hic quidem a officia animi laboriosam.</p>
                  <p>sed voluptas officiis assumenda nesciunt consectetur quod? Ullam aspernatur a magnam porro quaerat tempora minima quis illo aliquam!</p>
                </div>
                <div class="col-sm-4">
                  <div class="row">
                    <div class="col-xs-6 pr-0 pl-xs-15">
                      <div class="thumb">
                      <a class="image-popup-no-margins" title="Title Here 1" href="http://placehold.it/450x250"><img class="img-responsive" src="http://placehold.it/450x250" alt=""></a>
                      </div>
                    </div>
                    <div class="col-xs-6 pl-0 pr-xs-15">
                      <div class="thumb">
                         <a class="image-popup-no-margins" title="Title Here 1" href="http://placehold.it/450x250"><img class="img-responsive" src="http://placehold.it/450x250" alt=""></a>
                      </div>
                    </div>
                    <div class="col-xs-6 pr-0 pl-xs-15">
                      <div class="thumb">
                         <a class="image-popup-no-margins" title="Title Here 1" href="http://placehold.it/450x250"><img class="img-responsive" src="http://placehold.it/450x250" alt=""></a>
                      </div>
                    </div>
                    <div class="col-xs-6 pl-0 pr-xs-15">
                      <div class="thumb">
                         <a class="image-popup-no-margins" title="Title Here 1" href="http://placehold.it/450x250"><img class="img-responsive" src="http://placehold.it/450x250" alt=""></a>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <a class="btn btn-theme-colored mt-30 btn-md text-uppercase" href="#"> Become a Member</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Cources -->
        <!-- <section id="courses" class="bg-lighter">
          <div class="container pb-40">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="text-uppercase title">Our <span class="text-black font-weight-300">Courses</span></h2>
                  <p class="text-uppercase letter-space-1">Join our Training Club and Rise to a New Challenge</p>
                </div>
              </div>
            </div>
            <div class="section-content">
              <div class="row">
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">Cycling</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">Cycling</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored mt-10"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">mount hunter</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">mount hunter</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">swimming</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">swimming</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored mt-10"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">mountain cycle</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">mountain cycle</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored mt-10"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">canoeing</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">canoeing</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored mt-10"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-30">
                  <div class="card effect__hover">
                    <div class="card__front bg-theme-colored">
                      <div class="card__text">
                        <div class="icon-box mb-0 mt-0 p-0"> <img class="img-responsive img-fullwidth" src="http://placehold.it/450x250" alt="">
                          <h3 class="icon-box-title text-uppercase text-white letter-space-1">hang gliding</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card__back bg-black">
                      <div class="card__text">
                        <div class="display-table-parent p-30">
                          <div class="display-table">
                            <div class="display-table-cell">
                              <h4 class="text-uppercase text-white">hang gliding</h4>
                              <div class="text-gray-lightgray">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam laborum deserunt debitis fuga aliquid dolor ullam sed.</p>
                              </div>
                              <a href="#" class="btn btn-sm btn-flat btn-theme-colored mt-10"> Read More </a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Divider  -->
        <!-- <section class="divider parallax layer-overlay overlay-black" data-bg-img="http://placehold.it/1920x1280">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="section-content text-center">
                  <h3 class="text-white letter-space-1 font-32 text-uppercase">Over <span class="text-theme-colored">12 years</span> providing the best service</h3>
                  <h4 class="text-white font-24 font-weight-400">I will customize your workouts so that you can achieve your training goals. Our personal training sessions are truly personal!</h4>
                  <a href="#" class="btn btn-theme-colored mt-10 btn-md text-uppercase btn-flat"> Contact Us</a> </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Team -->
        <!-- <section id="trainer">
          <div class="container pb-50">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="title text-uppercase">Our Sports<span class="text-black font-weight-300"> Trainers</span></h2>
                  <p class="text-uppercase letter-space-1">Join our Training Club and Rise to a New Challenge</p>
                </div>
              </div>
            </div>
            <div class="section-content pb-10">
              <div class="row">
                <div class="col-md-12">
                  <div class="training-classes-carousel owl-carousel-3col" data-dots="true">
                    <div class="item">
                      <div class="trainer-item style2">
                        <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                        <div class="trainer-info pb-30">
                          <div class="trainer-biography">
                            <h3 class="text-white text-uppercase">Sara Lee</h3>
                            <h5 class="text-gray-light font-400">Boxing Expart</h5>
                          </div>
                          <div class="social-network pt-10">
                            <ul class="list-inline">
                              <li class="rotate"><a href="#"><i class="fa fa-facebook no-rotate"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="trainer-item style2">
                        <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                        <div class="trainer-info pb-30">
                          <div class="trainer-biography">
                            <h3 class="text-white text-uppercase">Kettie Doe</h3>
                            <h5 class="text-gray-light">Race Expart</h5>
                          </div>
                          <div class="social-network pt-10">
                            <ul class="list-inline">
                              <li class="rotate"><a href="#"><i class="fa fa-facebook no-rotate"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="trainer-item style2">
                        <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                        <div class="trainer-info pb-30">
                          <div class="trainer-biography">
                            <h3 class="text-white text-uppercase">Maggie Jones</h3>
                            <h5 class=" text-gray-light">Weight Loss Expart</h5>
                          </div>
                          <div class="social-network pt-10">
                            <ul class="list-inline">
                              <li class="rotate"><a href="#"><i class="fa fa-facebook no-rotate"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="trainer-item style2">
                        <div class="trainer-thumb"> <img src="http://placehold.it/450x450" alt="" class="img-fullwidth img-responsive"> </div>
                        <div class="trainer-info pb-20">
                          <div class="trainer-biography">
                            <h3 class="text-white">Tina Wang</h3>
                            <h5 class="text-white">Golf Expart</h5>
                          </div>
                          <div class="social-network pt-10">
                            <ul class="list-inline">
                              <li class="rotate"><a href="#"><i class="fa fa-facebook no-rotate"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Features -->
        <!-- <section id="features" class="bg-lighter">
          <div class="container pb-40">
            <div class="section-title text-center">
              <div class="row">
                <div class="col-md-8 col-md-offset-2">
                  <h2 class="text-uppercase title">Our <span class="text-black font-weight-300"> Features</span></h2>
                  <p class="text-uppercase letter-space-1">Join our Training Club and Rise to a New Challenge</p>
                </div>
              </div>
            </div>
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
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="icon-box text-center">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-symbol text-white"></i> </a>
                    <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Life Time Academy</strong></h4>
                    <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="icon-box text-center">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-player text-white"></i> </a>
                    <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Truly Personal</strong></h4>
                    <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="icon-box text-center">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-signs text-white"></i> </a>
                    <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Certifications</strong></h4>
                    <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="icon-box text-center">
                    <a class="icon bg-theme-colored icon-circled icon-border-effect effect-circle icon-xl" href="#"> <i class="flaticon-sports-gym-2 text-white"></i> </a>
                    <h4 class="icon-box-title mt-15 mb-10 text-uppercase"><strong>Insurance</strong></h4>
                    <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Clients -->
        <!-- <section class="divider parallax layer-overlay overlay-dark"  data-bg-img="http://placehold.it/1920x1280" >
          <div class="container">
            <div class="section-content">
              <div class="row">
                <div class="clients-logo carousel owl-carousel-6col">
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                  <div class="item"> <a href="#"><img src="http://placehold.it/200x120" alt=""></a> </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Pricing Table -->
        <!-- <section id="pricing" class="bg-light">
          <div class="container pb-40">
            <div class="section-title">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <h2 class="text-uppercase title">Membership <span class="text-black font-weight-300"> Packages</span></h2>
                  <p class="text-uppercase letter-space-1">Join our Training Club and Rise to a New Challenge</p>
                </div>
              </div>
            </div>
            <div class="section-content">
              <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 hvr-float-shadow mb-sm-30">
                  <div class="pricing-table style2 pb-0 mt-sm-0 maxwidth400 bg-lightest">
                    <div class="thumb text-center p-0 mb-0"> <a href="#"> <img class="img-fullwidth" src="http://placehold.it/356x200" alt=""></a> </div>
                    <div class="pl-40">
                      <h3 class="package-type text-uppercase letter-space-1 m-0 pt-20">Beginner</h3>
                      <h5 class="text-uppercase font-weight-400 text-gray letter-space-1 mt-0">Training with Jon ismail</h5>
                      <div class="price-amount">
                      <div class="font-weight-700 text-theme-colored">$35*<sup></sup> / <span class="font-14 text-uppercase">monthly</span></div>
                    </div>
                    <ul class="table-list list mt-0 no-bg no-border check">
                      <li>Free Consultation</li>
                      <li>Fitness Assessment</li>
                      <li>24 Hour Gym</li>
                      <li>Nutrional Plan: No</li>
                    </ul>
                    </div>
                    <a href="#" class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat">Signup</a>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 hvr-float-shadow mb-sm-30">
                  <div class="pricing-table style2 pb-0 mt-sm-0 maxwidth400 bg-lightest">
                    <div class="thumb text-center p-0 mb-0"> <a href="#"> <img class="img-fullwidth" src="http://placehold.it/356x200" alt=""></a> </div>
                    <div class="pl-40">
                      <h3 class="package-type text-uppercase letter-space-1 m-0 pt-20">Advanced</h3>
                      <h5 class="text-uppercase font-weight-400 text-gray letter-space-1 mt-0">Training with Jona Thon</h5>
                      <div class="price-amount">
                      <div class="font-weight-700 text-theme-colored">$75* / <span class="font-14 text-uppercase">monthly</span></div>
                    </div>
                    <ul class="table-list list mt-0 no-bg no-border check">
                      <li>Free Consultation</li>
                      <li>Fitness Assessment</li>
                      <li>24 Hour Gym</li>
                      <li>Nutrional Plan: No</li>
                    </ul>
                    </div>
                    <a href="#" class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat">Signup</a>
                  </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-4 hvr-float-shadow mb-sm-30">
                  <div class="pricing-table style2 pb-0 mt-sm-0 maxwidth400 bg-lightest">
                    <div class="thumb text-center p-0 mb-0"> <a href="#"> <img class="img-fullwidth" src="http://placehold.it/356x200" alt=""></a> </div>
                    <div class="pl-40">
                      <h3 class="package-type text-uppercase letter-space-1 m-0 pt-20">professional</h3>
                      <h5 class="text-uppercase font-weight-400 text-gray letter-space-1 mt-0">Training with Jack Marchal</h5>
                      <div class="price-amount">
                      <div class="font-weight-700 text-theme-colored">$99* / <span class="font-14 text-uppercase">monthly</span></div>
                    </div>
                    <ul class="table-list list mt-0 no-bg no-border check">
                      <li>Free Consultation</li>
                      <li>Fitness Assessment</li>
                      <li>24 Hour Gym</li>
                      <li>Nutrional Plan: No</li>
                    </ul>
                    </div>
                    <a href="#" class="btn btn-lg btn-theme-colored text-uppercase btn-block pt-20 pb-20 btn-flat">Signup</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Video -->
        <!-- <section class="divider parallax layer-overlay overlay-dark"  data-bg-img="http://placehold.it/1920x1280" >
          <div class="display-table">
            <div class="display-table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 text-center">
                    <h1 class="text-white text-uppercase"> Explore our best  <span class="text-theme-colored text-uppercase">practice sessions!</span></h1>
                    <h4 class="text-white font-weight-400">Your Personal Training Partner to achieve your training goals</h4>
                    <a href="#" class="btn btn-theme-colored btn-flat mt-10 btn-sm" role="button">Find Out More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->

        <!-- Section: Blog -->
        <!-- <section id="blog">
          <div class="container">
            <div class="section-title">
              <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                  <h2 class="text-uppercase title">Latest <span class="text-black font-weight-300"> News</span></h2>
                  <p class="text-uppercase letter-space-1">Join our Training Club and Rise to a New Challenge</p>
                </div>
              </div>
            </div>
            <div class="section-content">
              <div class="row">
              <div class="col-md-12">
     <div class="news-carousel-3col owl-carousel-3col">
     <div class="item pl-sm-15">
     <article class="post clearfix mb-30">
     <div class="entry-header">
     <div class="post-thumb thumb">
     <img alt="" src="http://placehold.it/350x233" class="img-fullwidth">
     </div>
     <div class="entry-content">
     <div class="entry-date mt-20 text-gray-silver font-12">
     <i class="fa fa-calendar mr-5"></i> 9/9/2015
     <i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments
     </div>
     <h4 class="title text-uppercase"><a href="#">Trainer Resources</a></h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eaque reprehenderit laboriosam, nam cupiditate velit mollitia sit nulla aspernatur odit, hic debitis. Aliquid quibusdam ullam porro temporibus quidem est molestias totam, vitae tempora officiis enim.</p>
     <a class="btn btn-theme-colored btn-sm mt-10 btn-flat" href="#">Read More</a>
     </div>
     </div>
     </article>
     </div>
     <div class="item pl-sm-15">
     <article class="post clearfix mb-30">
     <div class="entry-header">
     <div class="post-thumb thumb">
     <img alt="" src="http://placehold.it/350x233" class="img-fullwidth">
     </div>
     <div class="entry-content">
     <div class="entry-date mt-20 text-gray-silver font-12">
     <i class="fa fa-calendar mr-5"></i> 9/9/2015
     <i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments
     </div>
     <h4 class="title text-uppercase"><a href="#">Success Stories</a></h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eaque reprehenderit laboriosam, nam cupiditate velit mollitia sit nulla aspernatur odit, hic debitis. Aliquid quibusdam ullam porro temporibus quidem est molestias totam, vitae tempora officiis enim.</p>
     <a class="btn btn-theme-colored btn-sm mt-10 btn-flat" href="#">Read More</a>
     </div>
     </div>
     </article>
     </div>
     <div class="item pl-sm-15">
     <article class="post clearfix mb-30">
     <div class="entry-header">
     <div class="post-thumb thumb">
     <img alt="" src="http://placehold.it/350x233" class="img-fullwidth">
     </div>
     <div class="entry-content">
     <div class="entry-date mt-20 text-gray-silver font-12">
     <i class="fa fa-calendar mr-5"></i> 9/9/2015
     <i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments
     </div>
     <h4 class="title text-uppercase"><a href="#">Mountain bike trainer</a></h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eaque reprehenderit laboriosam, nam cupiditate velit mollitia sit nulla aspernatur odit, hic debitis. Aliquid quibusdam ullam porro temporibus quidem est molestias totam, vitae tempora officiis enim.</p>
     <a class="btn btn-theme-colored btn-sm mt-10 btn-flat" href="#">Read More</a>
     </div>
     </div>
     </article>
     </div>
     <div class="item pl-sm-15">
     <article class="post clearfix mb-30">
     <div class="entry-header">
     <div class="post-thumb thumb">
     <img alt="" src="http://placehold.it/350x233" class="img-fullwidth">
     </div>
     <div class="entry-content">
     <div class="entry-date mt-20 text-gray-silver font-12">
     <i class="fa fa-calendar mr-5"></i> 9/9/2015
     <i class="fa fa-comments-o ml-5 mr-5"></i> 5 comments
     </div>
     <h4 class="title text-uppercase"><a href="#">Most Triathletes need a stronger.</a></h4>
     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio eaque reprehenderit laboriosam, nam cupiditate velit mollitia sit nulla aspernatur odit, hic debitis. Aliquid quibusdam ullam porro temporibus quidem est molestias totam, vitae tempora officiis enim.</p>
     <a class="btn btn-theme-colored btn-sm mt-10 btn-flat" href="#">Read More</a>
     </div>
     </div>
     </article>
     </div>
     </div>
              </div>
              </div>
            </div>
          </div>
        </section> -->
    </div>
    <!-- end main-content -->
@endsection
