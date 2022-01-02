@extends('layouts.pages-admin.main-content')
@section('content')
<head>
  <style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    h1 {
      font-family: 'Roboto', sans-serif;
      font-size: 20px;
    }
  </style>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
            </ol>
          </nav>
        </div>
      </div>
      <!-- Card stats -->
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body" style="height: 122px">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Departement</h5>
                  <span class="h2 font-weight-bold mb-0">{{ $departements }}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="text-default fas fa-building text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body" style="height: 122px">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">News</h5>
                  <span class="h2 font-weight-bold mb-0">{{ $news }}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <i class="far fa-newspaper text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body" style="height: 122px">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">PMB</h5>
                  <span class="h2 font-weight-bold mb-0">{{  $pmbs }}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="fas fa-arrow-alt-circle-up text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <!-- Card body -->
            <div class="card-body" style="height: 122px">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Diploma</h5>
                  <span class="h2 font-weight-bold mb-0">{{ $major }}</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="text-success fas fa-building text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-xl-12">
      <div class="card bg-default">
        <div class="card-header bg-white" style="height: auto">
          <div class="row align-items-center">
            <div class="col">
              <div class="profile-campus d-flex justify-content-center">
                <img src="{{ asset('images\pens.png') }}" class="rounded  bg-transparant" style="width: 200px; height: 200px;">
              </div>
              <h1 class="text-center text-dark mt-2 text-uppercase">pens psdku sumenep</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection