@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
      <div class="header-body">
        <div class="row align-items-center py-4">
          <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
              <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6 col-5 text-right">
            <a href="{{ route('news.create') }}" class="btn btn-sm btn-neutral" id="add-button">Add News</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid mt--6">
    <!-- Table -->
    <div class="row">
      <div class="col">
        <div class="card">
          <!-- Card header -->
          <div class="card-header">
          <h3 class="mb-0">About Data</h3>
          </div>
          <div class="table-responsive py-4">
            <table class="table align-items-center table-flush" id="table_news" style="width: 100%">
              <thead class="thead-light">
                <tr>
                  <th>No</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th class="rounded-circle h-30 w-30"><img src="{{ asset('brand/pens3.png') }}"></th>
                  <th>Action</th>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.pages-admin.footer')
  </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
@push('script')
<script>
    $(document).ready(function () {
        $('#table_news').DataTable({
          rowReorder: {
            selector: 'td:nth-child(2)'
          },
          responsive: true
        });
    });
</script>
@endpush
@endsection