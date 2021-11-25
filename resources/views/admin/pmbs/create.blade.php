@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="{{ url('dashboards') }}"><i class="fas fa-home"></i></a>
                        </li>
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
            <h3 class="mb-0">Add Pmb</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('pmbs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
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
                    <div class="col-md-6">
                        <label class="form-control-label">Date</label>
                        <input type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                            value="{{ old('date') }}">
        
                        @error('date')
                        <span class="text-danger">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                        placeholder="Masukkan Konten Blog">{{ old('description') }}</textarea>
        
                    @error('description')
                    <span class="text-danger">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <a type="submit" class="btn btn-md btn-primary text-white float-right">Save</a>
                <a class="btn btn-md btn-danger float-left" href="{{ route('pmbs.index') }}">Back</a>
        
            </form>
        </div>
    </div>
</div>
@endsection