 <!-- Header -->
 <header id="header" class="header">
    <div class="header-top sm-text-center bg-theme-colored">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <nav>
              {{-- <ul class="list-inline sm-text-center text-left flip mt-5">
                <li> <a class="text-white" href="#">FAQ</a> </li>
                <li class="text-white">|</li>
                <li> <a class="text-white" href="#">Help Desk</a> </li>
                <li class="text-white">|</li>
                <li> <a class="text-white" href="#">Support</a> </li>
              </ul> --}}
            </nav>
          </div>
          <div class="col-md-6">
            <div class="widget m-0 mt-5 no-border">
              <ul class="list-inline text-right sm-text-center">
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-phone"></i> 0812-1212-2121 </div>
                </li>
                <li class="pl-10 pr-10 mb-0 pb-0">
                  <div class="header-widget text-white"><i class="fa fa-envelope-o"></i> info@catatanlari.com </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 text-right flip sm-text-center">
            <div class="widget m-0">
              <ul class="styled-icons icon-dark icon-circled icon-theme-colored icon-sm">
                {{-- <li class="mb-0 pb-0"><a href="#"><i class="fa fa-facebook"></i></a></li> --}}
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="mb-0 pb-0"><a href="#"><i class="fa fa-instagram"></i></a></li>
                {{-- <li class="mb-0 pb-0"><a href="#"><i class="fa fa-linkedin text-white"></i></a></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper bg-light navbar-scrolltofixed">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="menuzord-right" class="menuzord orange no-bg"> <a class="menuzord-brand stylish-header pull-left flip" href="javascript:void(0)"><img src="{{ asset('templates/images/logo-wide-white.png' )}}" alt=""></a>
                <ul class="menuzord-menu">
                  <li class="active"><a href="{{ route('index') }}">Home</a>

                  </li>
                  <li><a href="{{ route('profile') }}">Profile</a>

                  </li>
                  <li><a href="{{ route('submit') }}">Submit</a>

                  </li>
                  <li><a href="#">Runners</a>

                  </li>
                  <li><a href="#">About</a>

                  </li>
                  <!-- <li><a href="javascript:void(0)">Shortcodes</a>
                    <div class="megamenu">
                      <div class="megamenu-row">
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li><a href="shortcode-accordion.html"><i class="fa fa-list-ul"></i> Accordion</a></li>
                            <li><a href="shortcode-alerts.html"><i class="fa fa-exclamation-circle"></i> Alerts</a></li>
                            <li><a href="shortcode-animations.html"><i class="fa fa-magic"></i> Animations</a></li>
                            <li><a href="shortcode-background-html5-video.html"><i class="fa fa-video-camera"></i> HTML5 Background Video</a></li>
                            <li><a href="shortcode-blockquotes.html"><i class="fa fa-quote-right"></i> Blockquotes</a></li>
                            <li><a href="shortcode-button-groups-and-dropdowns.html"><i class="fa fa-link"></i> Button Groups</a></li>
                            <li><a href="shortcode-button-hover-effect.html"><i class="fa fa-flag-o"></i> Button Hover Effect</a></li>
                            <li><a href="shortcode-buttons.html"><i class="fa fa-external-link"></i> Buttons</a></li>
                            <li><a href="shortcode-call-to-actions.html"><i class="fa fa-plus-square"></i> Call To Actions</a></li>
                            <li><a href="shortcode-charts.html"><i class="fa fa-pie-chart"></i> Charts</a></li>
                            <li><a href="shortcode-columns-grids.html"><i class="fa fa-columns"></i> Columns Grids</a></li>
                            <li><a href="shortcode-divider.html"><i class="fa fa-indent"></i> Divider</a></li>
                            <li><a href="shortcode-dropcaps.html"><i class="fa fa-bold"></i> Dropcaps</a></li>
                            <li><a href="shortcode-datetime-datepicker.html"><i class="fa fa-calendar"></i> Date Picker</a></li>
                            <li><a href="shortcode-datetime-timepicker.html"><i class="fa fa-calendar"></i> Time Picker</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li><a href="shortcode-datetime-datetimepicker.html"><i class="fa fa-calendar"></i> Bootstrap Date-Time Picker</a></li>
                            <li><a href="shortcode-datetime-datepair.html"><i class="fa fa-calendar"></i> Date Pair</a></li>
                            <li><a href="shortcode-flickr-feed.html"><i class="fa fa-flickr"></i> Flickr Feed</a></li>
                            <li><a href="shortcode-flipbox.html"><i class="fa fa-square"></i> Flipbox</a></li>
                            <li><a href="shortcode-forms.html"><i class="fa fa-align-justify"></i> Forms</a></li>
                            <li><a href="shortcode-iconbox.html"><i class="fa fa-unsorted"></i> Icon Box</a></li>
                            <li><a href="shortcode-icon-7stroke.html"><i class="fa fa-circle-o"></i> Icons 7stroke</a></li>
                            <li><a href="shortcode-icon-elegant-icons.html"><i class="fa fa-eye-slash"></i> Icons Elegant</a></li>
                            <li><a href="shortcode-icon-flat-color-icons.html"><i class="fa fa-i-cursor"></i> Icons Flat Color</a></li>
                            <li><a href="shortcode-icon-fontawesome.html"><i class="fa fa-fort-awesome"></i> Icons FontAwesome</a></li>
                            <li><a href="shortcode-icon-fontawesome-tutorial.html"><i class="fa fa-fonticons"></i> Icons FontAwesome Tutorial</a></li>
                            <li><a href="shortcode-icon-strokegap.html"><span class="strokegap-icon strokegap-icon-WorldWide"></span> Icons Strokegap</a></li>
                            <li><a href="shortcode-image-box.html"><i class="fa fa-file-image-o"></i> Image Box</a></li>
                            <li><a href="shortcode-instagram.html"><i class="fa fa-instagram"></i> Instagram Feed</a></li>
                            <li><a href="shortcode-labels-badges.html"><i class="fa fa-check-square-o"></i> Labels Badges</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li><a href="shortcode-listgroup-panels.html"><i class="fa fa-th-list"></i> Listgroup Panels</a></li>
                            <li><a href="shortcode-lists.html"><i class="fa fa-list"></i> Lists</a></li>
                            <li><a href="shortcode-maps.html"><i class="fa fa-map-o"></i> Maps</a></li>
                            <li><a href="shortcode-media-embed.html"><i class="fa fa-play-circle-o"></i> Media Embed</a></li>
                            <li><a href="shortcode-modal-bootstrap.html"><i class="fa fa-search-plus"></i> Modal</a></li>
                            <li><a href="shortcode-modal-lightbox.html"><i class="fa fa-expand"></i> Lightbox</a></li>
                            <li><a href="shortcode-navigation.html"><i class="fa fa-navicon"></i> Navigation</a></li>
                            <li><a href="shortcode-owl-carousel.html"><i class="fa fa-sliders"></i> Owl Carousel</a></li>
                            <li><a href="shortcode-pagination.html"><i class="fa fa-arrow-circle-o-right"></i> Pagination</a></li>
                            <li><a href="shortcode-progressbar.html"><i class="fa fa-tasks"></i> Progress Bars</a></li>
                            <li><a href="shortcode-responsive.html"><i class="fa fa-tablet"></i> Responsive</a></li>
                            <li><a href="shortcode-separator.html"><i class="fa fa-minus-square-o"></i> Separator</a></li>
                            <li><a href="shortcode-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
                            <li><a href="shortcode-sliders.html"><i class="fa fa-sliders"></i> Sliders</a></li>
                            <li><a href="shortcode-smoothscrolling.html"><i class="fa fa-binoculars"></i> Smoothscrolling</a></li>
                          </ul>
                        </div>
                        <div class="col3">
                          <ul class="list-unstyled list-dashed">
                            <li><a href="shortcode-styled-icons.html"><i class="fa fa-facebook-square"></i> Styled Icons</a></li>
                            <li><a href="shortcode-subscribe.html"><i class="fa fa-user-plus"></i> Subscribe</a></li>
                            <li><a href="shortcode-tables.html"><i class="fa fa-table"></i> Tables</a></li>
                            <li><a href="shortcode-tabs.html"><i class="fa fa-indent"></i> Tabs</a></li>
                            <li><a href="shortcode-textblock.html"><i class="fa fa-bold"></i> Textblock</a></li>
                            <li><a href="shortcode-thumbnails-carousels.html"><i class="fa fa-sliders"></i> Thumbnails/carousels</a></li>
                            <li><a href="shortcode-title.html"><i class="fa fa-text-height"></i> Title</a></li>
                            <li><a href="shortcode-timer-final-countdown.html"><i class="fa fa-text-height"></i> Timer Final Countdown</a></li>
                            <li><a href="shortcode-timer-flipclock.html"><i class="fa fa-text-height"></i> Timer Flipclock</a></li>
                            <li><a href="shortcode-timer-slick-circular.html"><i class="fa fa-text-height"></i> Timer Slick Circular</a></li>
                            <li><a href="shortcode-twitter.html"><i class="fa fa-twitter-square"></i> Twitter Feed</a></li>
                            <li><a href="shortcode-typography.html"><i class="fa fa-font"></i> Typography</a></li>
                            <li><a href="shortcode-vertical-timeline.html"><i class="fa fa-arrows-v"></i> Vertical Timeline</a></li>
                            <li><a href="shortcode-widgets.html"><i class="fa fa-gift"></i> Widgets</a></li>
                            <li><a href="shortcode-working-process.html"><i class="fa fa-exchange"></i> Working Process</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>