<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand">
         <h1 class="text-primary text-uppercase" style="font-family: 'Roboto', sans-serif;">Pens Psdku</h1>
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/admin"  role="button"  aria-controls="navbar-dashboards">
                <i class="fas fa-home text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/abouts') }}"  role="button"  aria-controls="navbar-about">
                <i class="fas fa-question text-danger"></i>
                <span class="nav-link-text">About Campus</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/news') }}"  role="button"  aria-controls="navbar-news">
                <i class="far fa-newspaper text-warning"></i>
                <span class="nav-link-text">News</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/pmbs') }}"  role="button"  aria-controls="navbar-pmb">
                <i class="fas fa-arrow-alt-circle-up text-black"></i>
                <span class="nav-link-text">PMB</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/departements') }}"  role="button"  aria-controls="navbar-departement">
                <i class="text-default fas fa-building"></i>
                <span class="nav-link-text">Departement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/majors') }}"  role="button"  aria-controls="navbar-diploma">
                <i class="text-success fas fa-building"></i>
                <span class="nav-link-text">Diploma</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>