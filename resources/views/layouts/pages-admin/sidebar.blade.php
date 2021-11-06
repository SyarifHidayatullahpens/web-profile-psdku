<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="/">
          <img src="{{ asset('images/brand/pens.png') }}" class="navbar-brand-img" alt="...">
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
              <a class="nav-link" href="/"  role="button"  aria-controls="navbar-dashboards">
                <i class="fas fa-home text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#navbar-users" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-users">
                <i class="text-blue fas fa-users-cog"></i>
                <span class="nav-link-text">Management Users</span>
              </a>
              <div class="collapse" id="navbar-users">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Users</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Roles</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#navbar-products" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-components">
                <i class="text-red fas fa-box"></i>
                <span class="nav-link-text">Products</span>
              </a>
              <div class="collapse" id="navbar-products">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">List Products</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Add Products</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Categories</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Brands</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Units</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Types</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#navbar-purchases" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-forms">
                <i class="text-warning fas fa-arrow-circle-up"></i>
                <span class="nav-link-text">Purchases</span>
              </a>
              <div class="collapse" id="navbar-purchases">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">List Purchases</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Add Purchases</a>
                  </li>
                  <li class="nav-item">
                    <a href="" class="nav-link">List Purchases Return</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-sell" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-tables">
                <i class="fas fa-arrow-circle-down"></i>
                <span class="nav-link-text">Sell</span>
              </a>
              <div class="collapse" id="navbar-sell">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">All Sales</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Add Sales</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-contacts" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="text-default fas fa-address-book"></i>
                <span class="nav-link-text">Contacs</span>
              </a>
              <div class="collapse" id="navbar-contacts">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Suppliers</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Customers</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-repots" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="text-green fas fa-chart-line"></i>
                <span class="nav-link-text">Repots</span>
              </a>
              <div class="collapse" id="navbar-repots">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Profit/Loss Report</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Product Purchase Report</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Product Sell Report</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Product Stock Report</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#navbar-settings" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-maps">
                <i class="text-red fas fa-cogs"></i>
                <span class="nav-link-text">Settings</span>
              </a>
              <div class="collapse" id="navbar-settings">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">Company</a>
                  </li>
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