<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('images/brand/pens.png') }}" style ="width:65px; height:100px"class="navbar-brand-img" alt="...">
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
              <a class="nav-link" href="/dashboards"  role="button"  aria-controls="navbar-dashboards">
                <i class="fas fa-home text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('abouts.index') }}"  role="button"  aria-controls="navbar-about">
                <i class="fas fa-question text-danger"></i>
                <span class="nav-link-text">About Campus</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('news.index') }}"  role="button"  aria-controls="navbar-news">
                <i class="far fa-newspaper text-warning"></i>
                <span class="nav-link-text">News</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pmbs.index') }}"  role="button"  aria-controls="navbar-pmb">
                <i class="fas fa-arrow-alt-circle-up text-black"></i>
                <span class="nav-link-text">PMB</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('departements.index') }}"  role="button"  aria-controls="navbar-departement">
                <i class="text-default fas fa-building"></i>
                <span class="nav-link-text">Departement</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('majors.index') }}"  role="button"  aria-controls="navbar-diploma">
                <i class="text-success fas fa-building"></i>
                <span class="nav-link-text">Diploma</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-settings" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="text-red fas fa-cogs"></i>
                <span class="nav-link-text">Settings</span>
              </a>
              <div class="collapse" id="navbar-settings">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Clear Cache</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>