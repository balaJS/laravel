<header>
  <div class="container">
    <!-- Row start -->
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-sm bg-light">
          <div class="col-md-8">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL('/admin/users/index') }}">User details</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
          <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ URL('/admin/profile') }}">Admin profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Site statics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ URL('/admin/logout') }}">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
    <!-- Row close -->
  </div>
</header>
