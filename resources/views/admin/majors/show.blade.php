@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('majors.index') }}">Major</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="card col-10 mb-4" style="margin-left: 100px; margin-right: 100px">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">{{ $major->name }}</h3>
        </div>
        <div class="card-body">
            <div class="description">
                <label class="form-control-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="5" readonly>{{ $major->description }}</textarea>
            </div>
            <div class="float-right mt-4">
                <a class="btn btn-md btn-danger" href="{{ route('majors.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>
@include('layouts.pages-admin.footer')
@include('admin.ckeditor')
<script>
    $('#description').ckeditor({
        height: 200,
        readOnly: true,
    });
</script>
@endsection