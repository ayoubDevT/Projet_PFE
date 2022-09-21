<!DOCTYPE html>
<!--
Template Name: NobleUI - Admin & Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: You must have a valid license purchased only from above link or https://themeforest.net/user/nobleui/portfolio/ in order to legally use the theme for your project.
-->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Atlas Outdoor Admin</title>
  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <!-- core:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/owl.carousel/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/dropify/dist/dropify.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/prismjs/themes/prism.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/select2/select2.min.css') }}">
  
  <!-- end plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" id="csss" href="{{ asset('assets/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="icon" href="{{ asset('assets/images/favicon-32x32.jpg') }}" />
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  <link rel="stylesheet" id="csss" href="{{ asset('assets/css/css.css') }}">

</head>

<body>
  <div class="main-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar">
      <div class="sidebar-header">
        <a href="#" class="sidebar-brand">
          <img src=" {{ asset('assets/images/logo-atlas-outdoor.png') }} " alt="logo-atlas-outdoor" style="width: 70%">
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Home</span>
            </a>
          </li>
          <li class="nav-item mw-100">
            <a class="nav-link" data-toggle="collapse" href="#cultural" role="button" aria-expanded="false" aria-controls="cultural">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Cultural Encounters</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="cultural">
              <ul class="nav sub-menu">
                @foreach ($categoriesPage as $categoryPage)
                @if ($categoryPage->category->name == 'Cultural Encounters')
                  <li class="nav-item">
                  <a href="{{ route('tripsCat', ['slug' => $categoryPage->slug]) }}" class="nav-link text-lowercase">{{ $categoryPage->name }}</a>
                </li>
                @endif
                  
                @endforeach
                
              </ul>
            </div>
          </li>
          
          <li class="nav-item mw-100">
            <a class="nav-link" data-toggle="collapse" href="#Treks" role="button" aria-expanded="false" aria-controls="Treks">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Treks & Adventures</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="Treks">
              <ul class="nav sub-menu">
                @foreach ($categoriesPage as $categoryPage)
                @if ($categoryPage->category->name == 'Treks & Adventures')
                  <li class="nav-item">
                  <a href="{{ route('tripsCat', ['slug' => $categoryPage->slug]) }}" class="nav-link text-lowercase">{{ $categoryPage->name }}</a>
                </li>
                @endif
                  
                @endforeach
              </ul>
            </div>
          </li>
          
          <li class="nav-item mw-100">
            <a class="nav-link" data-toggle="collapse" href="#Luxury" role="button" aria-expanded="false" aria-controls="Luxury">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Luxury & MICE</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="Luxury">
              <ul class="nav sub-menu">
                @foreach ($categoriesPage as $categoryPage)
                @if ($categoryPage->category->name == 'Luxury & MICE')
                  <li class="nav-item">
                  <a href="{{ route('tripsCat', ['slug' => $categoryPage->slug]) }}" class="nav-link text-lowercase">{{ $categoryPage->name }}</a>
                </li>
                @endif
                  
                @endforeach
              </ul>
            </div>
          </li>
          
          <li class="nav-item mw-100">
            <a class="nav-link" data-toggle="collapse" href="#Wellness" role="button" aria-expanded="false" aria-controls="Wellness">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Wellness</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="Wellness">
              <ul class="nav sub-menu">
                @foreach ($categoriesPage as $categoryPage)
                @if ($categoryPage->category->name == 'Wellness')
                  <li class="nav-item ">
                  <a href="{{ route('tripsCat', ['slug' => $categoryPage->slug]) }}" class="nav-link mw-100 text-lowercase">{{ $categoryPage->name }}</a>
                </li>
                @endif
                  
                @endforeach
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('osp') }}" class="nav-link">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Our social projects</span>
            </a>
          </li>
          
          <li class="nav-item mw-100">
            <a class="nav-link" data-toggle="collapse" href="#More" role="button" aria-expanded="false" aria-controls="More">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">More</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="More">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('ptm') }}" class="nav-link">Prepare your travel to morocco</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('general_advices') }}" class="nav-link">General advices</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('faqs') }}" class="nav-link">Faqs</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('videos') }}" class="nav-link">Videos</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('about') }}" class="nav-link">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">About us</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('contact') }}" class="nav-link">
              <i class="link-icon" data-feather="layout"></i>
              <span class="link-title">Contact us</span>
            </a>
          </li>
          <li class="nav-item nav-category">Modification</li>
          <li class="nav-item">
            <a href="{{ route('trips.index') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Trips Modification</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Categories Modification</span>
            </a>
          </li>
          <li class="nav-item nav-category">Messages</li>
          <li class="nav-item">
            <a href="{{ route('message.index') }}" class="nav-link">
              <i class="link-icon" data-feather="mail"></i>
              <span class="link-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('booking.index') }}" class="nav-link">
              <i class="link-icon" data-feather="plus-circle"></i>
              <span class="link-title">Bookings</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted">Sidebar:</h6>
        <div class="form-group border-bottom">
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                value="sidebar-light" onclick="light()" checked>
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                value="sidebar-dark" onclick="dark()">
              Dark
            </label>
          </div>
        </div>

      </div>
    </nav>
    <!-- partial -->

    <div class="page-wrapper">

      <!-- partial:partials/_navbar.html -->
      <nav class="navbar">
        <a href="#" class="sidebar-toggler">
          <i data-feather="menu"></i>
        </a>
        <div class="navbar-content">
          <form class="search-form">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i data-feather="search"></i>
                </div>
              </div>
              <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
          </form>
          <ul class="navbar-nav">
            <!--<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="font-weight-medium ml-1 mr-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ml-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ml-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ml-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ml-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ml-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown nav-apps">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="appsDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
								<div class="dropdown-body">
									<div class="d-flex align-items-center apps">
										<a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
										<a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
										<a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
										<a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
									</div>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown nav-messages">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="messageDropdown">
								<div class="dropdown-header d-flex align-items-center justify-content-between">
									<p class="mb-0 font-weight-medium">9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
								<div class="dropdown-body">
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Leonardo Payne</p>
												<p class="sub-text text-muted">2 min ago</p>
											</div>	
											<p class="sub-text text-muted">Project status</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Carl Henson</p>
												<p class="sub-text text-muted">30 min ago</p>
											</div>	
											<p class="sub-text text-muted">Client meeting</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Jensen Combs</p>												
												<p class="sub-text text-muted">1 hrs ago</p>
											</div>	
											<p class="sub-text text-muted">Project updates</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Amiah Burton</p>
												<p class="sub-text text-muted">2 hrs ago</p>
											</div>
											<p class="sub-text text-muted">Project deadline</p>
										</div>
									</a>
									<a href="javascript:;" class="dropdown-item">
										<div class="figure">
											<img src="https://via.placeholder.com/30x30" alt="userr">
										</div>
										<div class="content">
											<div class="d-flex justify-content-between align-items-center">
												<p>Yaretzi Mayo</p>
												<p class="sub-text text-muted">5 hr ago</p>
											</div>
											<p class="sub-text text-muted">New record</p>
										</div>
									</a>
								</div>
								<div class="dropdown-footer d-flex align-items-center justify-content-center">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>-->
            <!--<li class="nav-item dropdown nav-notifications">
              <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i data-feather="bell"></i>
                <div class="indicator">
                  <div class="circle"></div>
                </div>
              </a>
              <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                <div class="dropdown-header d-flex align-items-center justify-content-between">
                  <p class="mb-0 font-weight-medium">6 New Notifications</p>
                  <a href="javascript:;" class="text-muted">Clear all</a>
                </div>
                <div class="dropdown-body">
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="user-plus"></i>
                    </div>
                    <div class="content">
                      <p>New customer registered</p>
                      <p class="sub-text text-muted">2 sec ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="gift"></i>
                    </div>
                    <div class="content">
                      <p>New Order Recieved</p>
                      <p class="sub-text text-muted">30 min ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="alert-circle"></i>
                    </div>
                    <div class="content">
                      <p>Server Limit Reached!</p>
                      <p class="sub-text text-muted">1 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="layers"></i>
                    </div>
                    <div class="content">
                      <p>Apps are ready for update</p>
                      <p class="sub-text text-muted">5 hrs ago</p>
                    </div>
                  </a>
                  <a href="javascript:;" class="dropdown-item">
                    <div class="icon">
                      <i data-feather="download"></i>
                    </div>
                    <div class="content">
                      <p>Download completed</p>
                      <p class="sub-text text-muted">6 hrs ago</p>
                    </div>
                  </a>
                </div>
                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                  <a href="javascript:;">View all</a>
                </div>
              </div>
            </li>-->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
              <!-- Teams Dropdown -->
              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
              <div class="ml-3 relative">
                <x-jet-dropdown align="right" width="60">
                  <x-slot name="trigger">
                    <span class="inline-flex rounded-md">
                      <button type="button"
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                        {{ Auth::user()->currentTeam->name }}

                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                          fill="currentColor">
                          <path fill-rule="evenodd"
                            d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                        </svg>
                      </button>
                    </span>
                  </x-slot>

                  <x-slot name="content">
                    <div class="w-60">
                      <!-- Team Management -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                      </div>

                      <!-- Team Settings -->
                      <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                        {{ __('Team Settings') }}
                      </x-jet-dropdown-link>

                      @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                      <x-jet-dropdown-link href="{{ route('teams.create') }}">
                        {{ __('Create New Team') }}
                      </x-jet-dropdown-link>
                      @endcan

                      <div class="border-t border-gray-100"></div>

                      <!-- Team Switcher -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                      </div>

                      @foreach (Auth::user()->allTeams() as $team)
                      <x-jet-switchable-team :team="$team" />
                      @endforeach
                    </div>
                  </x-slot>
                </x-jet-dropdown>
              </div>
              @endif

              <!-- Settings Dropdown -->
              <li class="nav-item dropdown nav-profile">
                <div class="ml-3 relative">
                  <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                      @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                      <button
                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                          alt="{{ Auth::user()->name }}" />
                      </button>
                      @else
                      <span class="inline-flex rounded-md">
                        <button type="button"
                          class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                          {{ Auth::user()->name }}

                          <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                          </svg>
                        </button>
                      </span>
                      @endif
                    </x-slot>

                    <x-slot name="content">
                      <!-- Account Management -->
                      <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                      </div>

                      <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                      </x-jet-dropdown-link>

                      @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                      <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                        {{ __('API Tokens') }}
                      </x-jet-dropdown-link>
                      @endif

                      <div class="border-t border-gray-100"></div>

                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                          {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                      </form>
                    </x-slot>
                  </x-jet-dropdown>
                </div>
              </li>
            </div>

            <!--<li class="nav-item dropdown nav-profile">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu" aria-labelledby="profileDropdown">
								<div class="dropdown-header d-flex flex-column align-items-center">
									<div class="figure mb-3">
										<img src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="info text-center">
										<p class="name font-weight-bold mb-0">Amiah Burton</p>
										<p class="email text-muted mb-3">amiahburton@gmail.com</p>
									</div>
								</div>
								<div class="dropdown-body">
									<ul class="profile-nav p-0 pt-3">
										<li class="nav-item">
											<a href="pages/general/profile.html" class="nav-link">
												<i data-feather="user"></i>
												<span>Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="edit"></i>
												<span>Edit Profile</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="repeat"></i>
												<span>Switch User</span>
											</a>
										</li>
										<li class="nav-item">
											<a href="javascript:;" class="nav-link">
												<i data-feather="log-out"></i>
												<span>Log Out</span>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</li>-->
          </ul>
        </div>
      </nav>
      <!-- partial -->
      {{ $slot }}
      <!-- partial:partials/_footer.html -->
      <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
        <p class="text-muted text-center text-md-left">Copyright © 2022 <a href="https://www.atlas-outdoor.com/"
            target="_blank">Atlas Outdoor</a>. All rights reserved</p>
        <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Designed by <a
            href="https://www.itlabspro.com/" target="_blank">IT LABS PRO</a></p>
      </footer>
      <!-- partial -->

    </div>
  </div>
  <!-- core:js -->
  <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->

  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/vendors/dropify/dist/dropify.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/prismjs/prism.js') }}"></script>
	<script src="{{ asset('assets/vendors/clipboard/clipboard.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/select2/select2.min.js') }}"></script>
  <!-- end plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{ asset('assets/js/sweet-alert.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
  <script src="{{ asset('assets/js/carousel.js') }}"></script>
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
  <script src="{{ asset('assets/js/tags-input.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
  <!-- end custom js for this page -->
  <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
  <script>
    CKEDITOR.replace( 'editor' , {
      filebrowserUploadUrl:"{{ route('ck.upload', ['_token'=>csrf_token()]) }}",
      filebrowserUploadMethod:"form"
    });
    
  </script>
  <script>
    var id = document.getElementById("csss");
    
    function dark()
      { 
        id.href = "assets/css/demo_2/style.css"; 
      }
      function light()
      { 
        id.href = "assets/css/demo_1/style.css"; 
      }
  </script>
  <script>
    $('#varyingModal').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var recipient = button.data('whatever') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-title').text('New message to ' + recipient)
      modal.find('.modal-body input').val(recipient)
    })
  </script>
</body>

</html>