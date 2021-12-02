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
                            <li class="breadcrumb-item"><a href="/dasboards"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pmbs.index') }}">Pmbs</a></li>
                        </ol>
                    </nav>
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
                    <h3 class="mb-0">{{ $pmb->name }} , {{ $pmb->date }}</h3>
                </div>
                <div class="table-responsive py-4">
                    <div class="col description">
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control" type="text" id="description" name="description" rows="5"
                            readonly>{{ $pmb->description}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.ckeditor')
<script>
    $('#description').ckeditor({
        height: 200,
        readOnly: true,
    });
  </script>
@endsection