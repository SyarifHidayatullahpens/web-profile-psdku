@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <a href="/admin"><h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6></a>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pmbs.index') }}">PMBS</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    <!-- Table -->
    <div class="card mb-4">
        <!-- Card header -->
        <div class="card-header">
            <a class="btn-sm btn-primary text-white d-inline" href="{{ route('pmbs.index') }}"><span> <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>back</a>
            <h3 class="mb-0 d-inline">Add Pmb</h3>
        </div>
        <div class="card-body">
           
            <form action="{{ route('pmbs.update', $pmb->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label class="form-control-label">Title</label>
                        <input type="text" class="form-control" name="name" value="{{ $pmb->name }}">

                        @error('name')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Pendaftaran</label>
                        <input type="date" class="form-control" name="date_start" value="{{ $pmb->date_start }}">
                        @error('date_start')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Penutupan</label>
                        <input type="date" class="form-control" name="date_finish" value="{{ $pmb->date_finish }}">
                        @error('date_finish')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label class="form-control-label">Pengumuman</label>
                        <input type="date" class="form-control" name="annoucement" value="{{ $pmb->annoucement }}">
                        @error('annoucement')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Daftar Ulang</label>
                        <input type="date" class="form-control" name="re_registration" value="{{ $pmb->re_registration }}">
                        @error('re_registration')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Description</label>
                    <textarea class="form-control" name="description" rows="5"
                        placeholder="Masukkan Konten Blog" id="description">{{ $pmb->description }}</textarea>
                    @error('description')
                    <span class="text-danger mb-2">
                        {{ $message }}
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
@include('admin.ckeditor')
<script>
    $('#description').ckeditor({
        height: 200,
    });
</script>
@endsection