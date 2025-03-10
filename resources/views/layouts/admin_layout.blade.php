<!DOCTYPE html>
<html lang="en-gb">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="author" content="" />


    <title>SKT International School Admin Portal</title>
    <link rel="icon" href="{{ asset('assets/images/icon/icon.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:900|Anonymous+Pro:400,700|Arimo:400,700"
        rel="stylesheet" />
    <style>
        .app-footer {
            margin-top: auto;
            /* Pushes the footer to the bottom */
            width: 100%;
            /* Ensures it spans the full width */
        }
    </style>
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <style>
        table td {
            vertical-align: middle !important;
        }
    </style>
    <script src="{{ asset('admin/vendor/Chart.min.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <svg width="24" height="24" viewBox="0 0 24 24" style="display:none">
        <g id="logo-icon" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
            fill="none" fill-rule="evenodd">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
        </g>
    </svg>

    <div class="page page-sticky-sidebar">
        {{-- <div class="app-header" style="display: none; visibility: hidden;">
        <nav class="bg-white navbar">
          <ul class="navbar-nav">
            <a href="/" class="navbar-brand">
    
              <span class="ml-2">SKT</span>
            </a>
          </ul>

          <div class="search input-group d-none d-sm-flex">
            <div class="input-group-prepend">
              <span class="input-group-text">
                <span class="animated-icon">
                  <div
                    style="width:20px;height:20px"
                    data-animation-path="{{asset('admin/vendor/animated-icons/search-cancel/search-cancel.json')}}"
                  ></div>
                </span>
              </span>
            </div>

          </div>
          <ul class="ml-auto menu-right navbar-nav">
            <li class="nav-item">
              <a class="nav-link toggle-fullscreen" href="javascript:;">
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="{{asset('admin/vendor/animated-icons/fullscreen/fullscreen.json')}}"
                  ></div>
                </span>
              </a>
            </li>
            <li class="dropdown nav-item">
              <a
                data-toggle="dropdown"
                aria-haspopup="true"
                href="#"
                class="nav-link"
                aria-expanded="false"
              >
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="{{asset('admin/vendor/animated-icons/toggle/toggle.json')}}"
                  ></div>
                </span>
              </a>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="app-settings dropdown-menu dropdown-menu-right"
              >
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Settings
                </button>
                <div tabindex="-1" class="m-0 dropdown-divider"></div>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="darkModeOption" class="m-0">Dark mode</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="darkModeOption"
                      name="darkModeOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="darkModeOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="boxedOption" class="m-0">Boxed layout</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="boxedOption"
                      name="boxedOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="boxedOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="stickyHeaderOption" class="m-0"
                    >Sticky header</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="stickyHeaderOption"
                      name="stickyHeaderOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="stickyHeaderOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="stickySidebarOption" class="m-0"
                    >Sticky sidebar</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="stickySidebarOption"
                      name="stickySidebarOption"
                      class="custom-control-input"
                      checked=""
                    />
                    <label
                      class="custom-control-label"
                      for="stickySidebarOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="collapsedSidebarOption" class="m-0"
                    >Collapsed sidebar</label
                  >
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="collapsedSidebarOption"
                      name="collapsedSidebarOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="collapsedSidebarOption"
                    ></label>
                  </div>
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="d-flex align-items-center justify-content-between dropdown-item"
                >
                  <label for="topHeaderOption" class="m-0">Top header</label>
                  <div class="custom-switch custom-control">
                    <input
                      type="checkbox"
                      id="topHeaderOption"
                      name="topHeaderOption"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      for="topHeaderOption"
                    ></label>
                  </div>
                </button>
              </div>
            </li>
            <li class="dropdown nav-item">
              <a
                data-toggle="dropdown"
                aria-haspopup="true"
                href="#"
                class="nav-link"
                aria-expanded="false"
              >
                <span class="animated-icon">
                  <div
                    style="width:18px;height:18px"
                    data-animation-path="vendor/animated-icons/globe/globe.json"
                  ></div>
                </span>
                <span class="badge-top badge badge-danger badge-pill">6</span>
              </a>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="app-notifications dropdown-menu dropdown-menu-right"
              >
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Notifications
                </button>
                <div tabindex="-1" class="m-0 dropdown-divider"></div>
                <div class="app-notifications-inner">
                  <ul class="list-group">
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face2.jpg"
                            alt="Amber McCoy"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Amber McCoy has joined your mailing list</span>
                    </a>
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face2.jpg"
                            alt="Danielle Perkins"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Danielle Perkins created a new task list</span>
                    </a>
                    <a
                      href="#"
                      class="w-100 d-flex flex-row align-items-center list-group-item-action list-group-item"
                    >
                      <span class="mr-3">
                        <span
                          class="position-relative d-flex rounded-circle"
                          style="width: 40px; height: 40px;"
                        >
                          <img
                            src="images/face4.jpg"
                            alt="Megan Hanson"
                            width="40px"
                            height="40px"
                            class="rounded-circle"
                          />
                        </span>
                      </span>
                      <span>Megan Hanson created a new task list</span>
                    </a>
                  </ul>
                </div>
                <div
                  class="d-flex align-items-center justify-content-between py-2 px-3"
                >
                  <span>
                    <span class="badge badge-danger badge-pill">4</span>
                    <small class="mr-auto ml-1">Notifications</small>
                  </span>
                  <button
                    type="button"
                    class="button-shadow btn btn-outline-secondary btn-sm"
                  >
                    load more
                  </button>
                </div>
              </div>
            </li>
            <li class="dropdown nav-item">
              <a
                data-toggle="dropdown"
                aria-haspopup="true"
                href="#"
                class="nav-link"
                aria-expanded="false"
              >
                <span
                  class="position-relative d-flex rounded-circle"
                  style="width:32px;height:32px"
                >
                  <img
                    src="images/avatar.jpg"
                    alt="avatar"
                    width="32px"
                    height="32px"
                    class="rounded-circle"
                  />
                </span>
              </a>
              <div
                tabindex="-1"
                role="menu"
                aria-hidden="true"
                class="dropdown-menu dropdown-menu-right"
              >
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Settings
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Profile
                </button>
                <button
                  type="button"
                  tabindex="0"
                  role="menuitem"
                  class="dropdown-item"
                >
                  Notifications
                </button>
                <div tabindex="-1" class="dropdown-divider"></div>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button
                    type="submit"
                    tabindex="0"
                    role="menuitem"
                    class="dropdown-item"
                    >
                    Logout
                </button>
            </form>
              </div>
            </li>
          </ul>
        </nav>
      </div> --}}
        <div class="position-relative d-flex flex-row flex-fill page-wrapper">
            <div class="sidebar bg-dark page-sidebar" style="transform:translateX(0);min-width:280px;max-width:280px">
                <div class="h-100 d-flex flex-column flex-1">
                    <nav class="navbar navbar-expand-md  d-none d-lg-flex d-xl-flex bg-dark">
                        <a href="#" class="navbar-brand">
                            <img src="{{ asset('/img/skt-bnw-logo.png') }}" width="170px" alt="">
                            {{-- <svg width="24" height="24">
                  <use xlink:href="#logo-icon"></use>
                </svg> --}}
                            {{-- <span class="ml-3">SKT</span> --}}
                        </a>
                        <a href="javascript:;" class="nav-toggle">
                            <span class="animated-icon">
                                <div style="width:24px;height:24px"
                                    data-animation-path="{{ asset('admin/vendor/animated-icons/menu-back/menu-back.json') }}"
                                    data-anim-loop="false"></div>
                            </span>
                        </a>
                    </nav>
                    <ul class="d-block scroll-y flex-1 py-3 nav flex-column">
                        <div class="sidebar-item">
                            <li class="nav-item  {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                                <a class="nav-link d-flex align-items-center nav-link"
                                    href="{{ route('admin.dashboard') }}">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/activity/activity.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Home</span>
                                </a>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item ">
                                <a class="nav-link d-flex align-items-center nav-link" href="javascript:;">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/settings/settings.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Settings</span>
                                    <span class="caret">
                                        <span class="animated-icon">
                                            <div style="width:12px;height:12px"
                                                data-animation-path="{{ asset('admin/vendor/animated-icons/expand/expand.json') }}">
                                            </div>
                                        </span>
                                    </span>
                                </a>
                                <div class="sub-menu collapse {{ request()->routeIs('admin-users.index', 'admin-branches.index', 'admin-categories.index') ? 'show' : '' }}"
                                    aria-expanded="{{ request()->routeIs('admin-users.index', 'admin-branches.index', 'admin-categories.index') ? 'true' : 'false' }}">
                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-users.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-users.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/wink/wink.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Users</span>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-branches.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-branches.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/pin/pin.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Branches</span>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-categories.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-categories.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/icon-list-view/icon-list-view.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Categories</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item {{ request()->routeIs('admin-events.index') ? 'active' : '' }}">
                                <a class="nav-link d-flex align-items-center nav-link"
                                    href="{{ route('admin-events.index') }}">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/calendar/calendar.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Events</span>
                                </a>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item {{ request()->routeIs('admin-posts.index') ? 'active' : '' }}">
                                <a class="nav-link d-flex align-items-center nav-link"
                                    href="{{ route('admin-posts.index') }}">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/document/document.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Posts</span>
                                </a>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item ">
                                <a class="nav-link d-flex align-items-center nav-link" href="javascript:;">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/paint-roller/paint-roller.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Appearance</span>
                                    <span class="caret">
                                        <span class="animated-icon">
                                            <div style="width:12px;height:12px"
                                                data-animation-path="{{ asset('admin/vendor/animated-icons/expand/expand.json') }}">
                                            </div>
                                        </span>
                                    </span>
                                </a>
                                <div class="sub-menu collapse " aria-expanded="false">
                                    <ul class="nav flex-column">
                                        <li class="nav-item ">
                                            <a href="{{ route('admin-users.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/menu-forward/menu-forward.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Nav Bar</span>
                                            </a>
                                        </li>
                                        <li class="nav-item ">
                                            <a href="{{ route('admin-branches.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/bookmark-in-book/bookmark-in-book.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Pages</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item ">
                                <a class="nav-link d-flex align-items-center nav-link" href="calendar.html">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/calendar/calendar.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Calendar</span>
                                </a>
                            </li>
                        </div>

                        <div class="sidebar-item">
                            <li class="nav-item ">

                                <a class="nav-link d-flex align-items-center nav-link" href="javascript:;">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/double-tap/double-tap.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">About Us</span>
                                    <span class="caret">
                                        <span class="animated-icon">
                                            <div style="width:12px;height:12px"
                                                data-animation-path="{{ asset('admin/vendor/animated-icons/expand/expand.json') }}">
                                            </div>
                                        </span>
                                    </span>
                                </a>
                                <div class="sub-menu collapse {{ request()->routeIs('admin-principal-messages.index', 'admin-histories.index', 'admin-statements.index', 'admin-teachers.index') ? 'show' : '' }}"
                                    aria-expanded="{{ request()->routeIs('admin-principal-messages.index', 'admin-histories.index', 'admin-statements.index', 'admin-teachers.index') ? 'true' : 'false' }}">

                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-principal-messages.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-principal-messages.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/typing/typing.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Principal Message</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-histories.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-histories.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/bookmark/bookmark.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Our History</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-statements.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-statements.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/bell/bell.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Our Statements</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-teachers.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-teachers.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/open-letter/open-letter.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Our Teachers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item ">

                                <a class="nav-link d-flex align-items-center nav-link" href="javascript:;">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/in-love/in-love.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Student Life</span>
                                    <span class="caret">
                                        <span class="animated-icon">
                                            <div style="width:12px;height:12px"
                                                data-animation-path="{{ asset('admin/vendor/animated-icons/expand/expand.json') }}">
                                            </div>
                                        </span>
                                    </span>
                                </a>
                                <div class="sub-menu collapse {{ request()->routeIs('admin-galleries.index', 'admin-calendars.index', 'admin-statements.index', 'admin-teachers.index') ? 'show' : '' }}"
                                    aria-expanded="{{ request()->routeIs('admin-galleries.index', 'admin-calendars.index', 'admin-statements.index', 'admin-teachers.index') ? 'true' : 'false' }}">

                                    <ul class="nav flex-column">
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-galleries.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-galleries.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/play-button-circled-click/play-button-circled-click.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Gallery</span>
                                            </a>
                                        </li>
                                        <li
                                            class="nav-item {{ request()->routeIs('admin-calendars.index') ? 'active' : '' }}">
                                            <a href="{{ route('admin-calendars.index') }}" class="nav-link">
                                                <span class="animated-icon">
                                                    <div style="width:18px;height:18px"
                                                        data-animation-path="{{ asset('admin/vendor/animated-icons/calendar-tear/calendar-tear.json') }}"
                                                        data-anim-loop="false"></div>
                                                </span>
                                                <span class="mr-auto menu-name">Calendar</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </div>
                        <div class="sidebar-item">
                            <li class="nav-item {{ request()->routeIs('admin-contacts.index') ? 'active' : '' }}">
                                <a class="nav-link d-flex align-items-center nav-link"
                                    href="{{ route('admin-contacts.index') }}">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/document/document.json') }}"
                                            data-anim-loop="false"></div>
                                    </span>
                                    <span class="mr-auto menu-name">Contact Form</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
            {{-- End Side Bar --}}
            <div class="page-overlay" style="visibility:hidden;opacity:0"></div>

            <div class="position-relative d-flex flex-column flex-fill page-content" style="min-width:0">
                <div class="app-header">
                    <nav class="bg-white navbar">
                        <ul class="navbar-nav d-lg-none d-sm-flex d-md-flex">
                            <a class="nav-toggle mobile-toggle">
                                <span class="animated-icon">
                                    <div style="width:24px;height:24px"
                                        data-animation-path="{{ asset('admin/vendor/animated-icons/menu-back/menu-back.json') }}">
                                    </div>
                                </span>
                            </a>
                            <a href="/" class="navbar-brand">
                                <img src="{{ asset('/img/skt-bnw-logo.png') }}" width="100px" alt="">
                                {{-- <svg width="24" height="24">
                    <use xlink:href="#logo-icon"></use>
                  </svg> --}}

                            </a>
                        </ul>
                        <ul class="ml-auto menu-right navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link toggle-fullscreen" href="javascript:;">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/fullscreen/fullscreen.json') }}">
                                        </div>
                                    </span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a data-toggle="dropdown" aria-haspopup="true" href="#" class="nav-link"
                                    aria-expanded="false">
                                    <span class="animated-icon">
                                        <div style="width:18px;height:18px"
                                            data-animation-path="{{ asset('admin/vendor/animated-icons/toggle/toggle.json') }}">
                                        </div>
                                    </span>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="app-settings dropdown-menu dropdown-menu-right">
                                    <span class="dropdown-item-text">Settings</span>
                                    <div tabindex="-1" class="m-0 dropdown-divider"></div>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="darkModeOption" class="m-0">Dark mode</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="darkModeOption" name="darkModeOption"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="darkModeOption"></label>
                                        </div>
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="boxedOption" class="m-0">Boxed layout</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="boxedOption" name="boxedOption"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="boxedOption"></label>
                                        </div>
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="stickyHeaderOption" class="m-0">Sticky header</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="stickyHeaderOption" name="stickyHeaderOption"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="stickyHeaderOption"></label>
                                        </div>
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="stickySidebarOption" class="m-0">Sticky sidebar</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="stickySidebarOption"
                                                name="stickySidebarOption" class="custom-control-input" />
                                            <label class="custom-control-label" for="stickySidebarOption"></label>
                                        </div>
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="collapsedSidebarOption" class="m-0">Collapsed sidebar</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="collapsedSidebarOption"
                                                name="collapsedSidebarOption" class="custom-control-input" />
                                            <label class="custom-control-label" for="collapsedSidebarOption"></label>
                                        </div>
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem"
                                        class="d-flex align-items-center justify-content-between dropdown-item">
                                        <label for="topHeaderOption" class="m-0">Top header</label>
                                        <div class="custom-switch custom-control">
                                            <input type="checkbox" id="topHeaderOption" name="topHeaderOption"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="topHeaderOption"></label>
                                        </div>
                                    </button>
                                </div>
                            </li>
                            <li class="dropdown nav-item">
                                <a data-toggle="dropdown" aria-haspopup="true" href="#" class="nav-link"
                                    aria-expanded="false">
                                    <span class="position-relative d-flex rounded-circle"
                                        style="width:32px;height:32px">
                                        <img src="{{ asset('admin/images/avatar.jpg') }}" alt="avatar"
                                            width="32px" height="32px" class="rounded-circle" />
                                    </span>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="dropdown-menu dropdown-menu-right">
                                    <button type="button" tabindex="0" role="menuitem" class="dropdown-item">
                                        Settings
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem" class="dropdown-item">
                                        Profile
                                    </button>
                                    <button type="button" tabindex="0" role="menuitem" class="dropdown-item">
                                        Notifications
                                    </button>
                                    <div tabindex="-1" class="dropdown-divider"></div>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit" tabindex="0" role="menuitem" class="dropdown-item">
                                            Logout
                                        </button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="m-4">
                    @yield('content')
                </div>

                <div class="app-footer bg-light">
                    <nav class="navbar navbar-expand">
                        <div class="collapse show navbar-collapse" aria-expanded="true">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    {{-- <a class="nav-link"
                      >© Copyright FusePX Premium Templates 2020</a
                    > --}}
                                </li>
                            </ul>
                        </div>
                        <ul class="ml-auto menu-right navbar-nav">
                            <li class="nav-item"><a class="nav-link">About</a></li>
                            <li class="nav-item"><a class="nav-link">Team</a></li>
                            <li class="nav-item"><a class="nav-link">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/vendor/jquery-3.4.1.slim.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/lottie.js') }}"></script>

    <script src="{{ asset('admin/js/app.js') }}"></script>

    <script src="{{ asset('admin/js/dashboard.js') }}"></script>

</body>

</html>
