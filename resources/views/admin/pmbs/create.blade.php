@extends('../layouts.pages-admin.main-content')

@section('content')
<div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('pmbs.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NAME</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                            
                                <!-- error message untuk title -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">DATE</label>
                                <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}">
                            
                                <!-- error message untuk title -->
                                @error('date')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <label class="font-weight-bold">DESCRIPTION</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5" placeholder="Masukkan Konten Blog">{{ old('description') }}</textarea>
                            
                                <!-- error message untuk content -->
                                @error('description')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>


  <script type="text/javascript">
    $('document').ready(function() {
      $('#table_pmbs').DataTable({
        processing: true,
        serverside: true,
        ajax: {
          url: "{{ route('pmbs.index') }}",
          type: 'GET'
        },
        "responsive": true,
        "languange": {
          "sNext": "<i class='fas fa-angle-right'>",
          "sPrevious": "<i class='fas fa-angle-left'>",
        },
        processing: '<img src="{{ asset('images/loader/loader.gif') }}">',
      },
      columns: [
                {
                    data: 'DT_RowIndex',
                },
                {
                    data: 'name',
                },
                {
                    data: 'date',
                },
                {
                    data: 'description',
                },
                {
                    data: 'action',
                },
              ],
      });
    });

    CKEDITOR.replace( 'description' );
  </script>
@endsection