 <style>
     .avatar {
         width: 30px;
         height: 30px;
         border-radius: 50%;
         object-fit: cover;
         vertical-align: middle;
         margin-right: 10px;
     }
 </style>

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
                                 <div class="header-widget text-white"><i class="fa fa-envelope-o"></i>
                                     info@catatanlari.com </div>
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
                         <div id="menuzord-right" class="menuzord orange no-bg"> <a
                                 class="menuzord-brand stylish-header pull-left flip" href="javascript:void(0)"><img
                                     src="{{ asset('templates/images/logo-wide-white.png') }}" alt=""></a>
                             <ul class="menuzord-menu">
                                 <li class="{{ request()->routeIs('index') ? 'active' : '' }}"><a
                                         href="{{ route('index') }}">Home</a></li>
                                 {{-- <li class="{{ request()->routeIs('profile.show') ? 'active' : '' }}"><a
                                         href="{{ route('profile.show') }}">Profile</a></li> --}}
                                 <li class="{{ request()->routeIs('register.form') ? 'active' : '' }}"><a
                                         href="{{ route('register.form') }}">Register</a></li>
                                 <li class="{{ request()->routeIs('races.search') ? 'active' : '' }}"><a
                                         href="{{ route('races.search') }}">Race</a></li>
                                 <li class="{{ request()->routeIs('runners.search') ? 'active' : '' }}"><a
                                         href="{{ route('runners.search') }}">Runners</a></li>
                                 <li><a href="#">Hi, {Nama Member}</a>
                                     <ul class="dropdown">
                                         <li><a href="{{ route('profile.edit') }}">Account Settings</a></li>
                                         <li><a href="{{ route('profile.show') }}">Profile Overview</a></li>
                                         <li><a href="page-classes-style2.html">Logout</a></li>
                                     </ul>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
