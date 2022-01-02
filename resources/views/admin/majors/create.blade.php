@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{ route('majors.index') }}">Majors</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6 d-flex justify-content-center">
    <!-- Table -->
    <div class="card col-12 mb-4">
        <!-- Card header -->
        <div class="card-header">
            <div class="card-header">
                <a class="btn-sm btn-primary text-white d-inline" href="{{ route('majors.index') }}"><span> <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </span>back</a>
                <h3 class="mb-0 d-inline">Add Majors</h3>
            </div>
        <div class="card-body">
            <form method="POST" action="{{ route('majors.store') }}" enctype="multipart/form-data">
                @csrf  
                    <div class="col mb-2">
                        <label class="form-control-label">Prodi</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                        @error('name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col description">
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="5" placeholder="Masukkan Konten.."></textarea>
    
                        @error('description')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                <div class="float-right mt-4">
                    <button type="submit" class="btn btn-md btn-primary text-white">Save</button>
                </div>
        </form>
    </div>
</div>
</div>
@include('layouts.pages-admin.footer')
@include('admin.ckeditor')
@endsection