@extends('../layouts.pages-admin.main-content')

@section('content')

<head>
    <style>
        #image-preview {
            display: none;
            width: 250px;
            height: 300px;
        }

        .description {
            max-height: 430px;
        }
    </style>
</head>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ route('majors.index') }}">Majors</a></li>
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
            <h3 class="mb-0">Add News</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('majors.update', $major->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col mb-2">
                    <label class="form-control-label">Prodi</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ $major->name }}">
                    @error('name')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col description">
                    <label class="form-control-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" rows="5" placeholder="Masukkan Konten..">{{ $major->description }}</textarea>

                    @error('description')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="float-right mt-4">
                    <a class="btn btn-md btn-danger" href="{{ route('majors.index') }}">Back</a>
                    <button type="submit" class="btn btn-md btn-primary text-white">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('layouts.pages-admin.footer')
@include('admin.ckeditor')
@endsection