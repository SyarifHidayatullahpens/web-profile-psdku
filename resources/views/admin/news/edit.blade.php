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
            <h3 class="mb-0">Edit News</h3>
        </div>
        <div class="card-body">
            <form  enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label class="form-control-label">Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}">

                        @error('name')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="exampleFormControlInput1">Image</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-images"></i></span>
                          </div>
                            <input type="file" value="" name="image" class="form-control" id="image" placeholder="">    
                        </div>
                        <div class="row pt-2 ml-2">
                        @if(is_null($news->image))
                            <img src="{{ asset('img/image/imagePlaceholder.png') }}" style="height: 200px;">
                        @else
                            <img src="{{ asset('storage/images/' .$news->image)  }}" style="height: 200px;">
                        @endif
                        </div>
                       <span class="text-danger" id="image-error"></span>
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
                    <a type="submit" class="btn btn-md btn-primary text-white">Save</a>
                </div>
        </div>
        </form>
    </div>
</div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description' ) )
        .catch( error => {
            console.error( error );
    } );
</script>
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