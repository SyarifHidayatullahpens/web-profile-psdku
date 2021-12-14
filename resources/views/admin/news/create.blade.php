@extends('../layouts.pages-admin.main-content')

@section('content')
<head>
    <style>
    #image-preview{
        display:none;
        width : 250px;
        height : 300px;
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
                        <li class="breadcrumb-item"><a href="{{ route('news.index') }}">News</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <h3 class="mb-0">Add News</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('news.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-control-label">Judul</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}">

                        @error('name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-control-label">Tanggal</label>
                        <input type="date" class="form-control" name="date">
                        @error('date')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label class="form-control-label">Gambar</label>
                        <div class="input-group input-group-merge">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-images text-primary"></i></span>
                            </div>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                onchange="previewImage();">
                        </div><br>
                        <img id="image-preview" style="width: 150px;" alt="image preview" />

                        <small class="text-danger" id="error_image"></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col description">
                        <label class="form-control-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="5" placeholder="Masukkan Konten..">{{ old('description') }}</textarea>
    
                        @error('description')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="float-right mt-4">
                    <a class="btn btn-md btn-danger" href="{{ route('news.index') }}">Back</a>
                    <button type="submit" class="btn btn-md btn-primary text-white">Save</button>
                </div>
        </div>
        </form>
    </div>
</div>
</div>
@include('admin.ckeditor')
<script type="application/javascript">
    function previewImage() {
        document.getElementById("image-preview").style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image").files[0]);
    
        oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
        };
    };
<script>
@endsection