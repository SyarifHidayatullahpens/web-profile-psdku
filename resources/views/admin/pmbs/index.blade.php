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
                            <li class="breadcrumb-item"><a href="/admin"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('pmbs.index') }}">Pmbs</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('pmbs.create') }}" class="btn btn-sm btn-neutral" id="tambah-data">Add PMB</a>
                    <a href="javascript:void(0)" class="btn btn-warning" id="adds-data">Add </a>
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
                    <h3 class="mb-0">PMB Data</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="table_pmbs" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Pendaftaran</th>
                                <th>Penutupan</th>
                                <th>Pengumuman</th>
                                <th>Daftar Ulang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                                <th>No</th>
                                <th>Title</th>
                                <th>Pendaftaran</th>
                                <th>Penutupan</th>
                                <th>Pengumuman</th>
                                <th>Daftar Ulang</th>
                                <th>Action</th>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.pmbs.modal')
    @include('layouts.pages-admin.footer')
</div>

@include('admin.ckeditor')
<script>
    $(document).ready(function () {
        $('#table_pmbs').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{  route('pmbs.index') }}",
                type: 'GET'
            },
            "scrollX": false,
            rowReorder: {
                selector: 'th:nth-child(2)'
            },
            responsive: true,
            columns: [
                {
                
                    data: 'DT_RowIndex',
                
                },
                {
                    data: 'date_start',
                },
                {
                    data: 'date_finish',
                },
                {
                    data: 'annoucement',
                },
                {
                    data: 're_registration'
                },  
            ],
        });

        $('#adds-data').click(function() {
            console.log('haai');
            $('#create-modal').modal('show');
            $('#modal-judul').text('Create Pmb');
            $('#description').ckeditor({
                height: 60,
            });
        });
    });


</script>
@endsection