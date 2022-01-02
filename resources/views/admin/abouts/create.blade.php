@extends('../layouts.pages-admin.main-content')
@section('pageName', 'Abouts')
@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <a href="/admin"><h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6></a>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a></li>
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
            <a class="btn-sm btn-primary text-white d-inline" href="{{ route('abouts.index') }}"><span> <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>back</a>
            <h3 class="mb-0 d-inline">Add About Campus</h3>
        </div>
        <div class="card-body">
           
            <form action="{{ route('abouts.store') }}" method="POST" id="create_pmbs" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="form-control-label">Description</label>
                    <textarea class="form-control" name="description" rows="5"
                        placeholder="Masukkan Konten Blog" id="description"></textarea>
                    @error('description')
                    <span class="text-danger mb-2">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-md btn-primary text-white float-right">Save</button>
            </form>
        </div>
    </div>
</div>
@include('admin.ckeditor')
@endsection