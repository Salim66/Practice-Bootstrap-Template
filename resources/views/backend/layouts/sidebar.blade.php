@php
    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="{{ asset('backend/assets/dist/') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ (Auth::user()->image) ? URL::to('/upload/user_images/'.Auth::user()->image) : URL::to('/upload/no-image-found.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            @if(Auth::user()->userType == 'Admin')
          <li class="nav-item  {{ ($prefix == '/users')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/users')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('users.view') }}" class="nav-link {{ ($route == 'users.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          <li class="nav-item {{ ($prefix == '/profiles')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/profiles')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manage Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.view') }}" class="nav-link {{ ($route == 'profile.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('profile.password.change') }}" class="nav-link {{ ($route == 'profile.password.change')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item  {{ ($prefix == '/logo')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link  {{ ($prefix == '/logo')  ? 'active' : ' ' }}">
              <i class="nav-icon fab fa-pied-piper"></i>
              <p>
                Manage Logo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('logo.view') }}" class="nav-link {{ ($route == 'logo.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/slider')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/slider')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Slider
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('slider.view') }}" class="nav-link {{ ($route == 'slider.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/mission')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link  {{ ($prefix == '/mission')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Mission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('mission.view') }}" class="nav-link  {{ ($route == 'mission.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Mission</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/vission')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/vission')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Vission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('vission.view') }}" class="nav-link  {{ ($route == 'vission.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Vission</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/news_event')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/news_event')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage News & Event
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('news_event.view') }}" class="nav-link  {{ ($route == 'news_event.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News and Event</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/service')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/service')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Service
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('service.view') }}" class="nav-link  {{ ($route == 'service.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Service</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/contacts')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/contacts')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Contacts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contacts.view') }}" class="nav-link  {{ ($route == 'contacts.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('contacts.communicate') }}" class="nav-link  {{ ($route == 'contacts.communicate')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Communicate</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ ($prefix == '/abouts')  ? 'menu-open' : ' ' }}">
            <a href="#" class="nav-link {{ ($prefix == '/abouts')  ? 'active' : ' ' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage About Us
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('abouts.view') }}" class="nav-link {{ ($route == 'abouts.view')  ? 'active' : ' ' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About Us</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
