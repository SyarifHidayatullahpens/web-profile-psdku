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
                            <li class="breadcrumb-item"><a href="{{ route('departements.index') }}">Departements</a></li>
                        </ol>
                    </nav>
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
                    <h3 class="mb-0">Departements Data</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table align-items-center table-flush" id="table_departement" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($major as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->name }}</td>
                                <td class="mx-2">
                                    <a href="#"class="btn btn-sm btn-primary rounded-circle" title="edit">
                                        <span><i class="fas fa-edit"></i></span>
                                    </a>
                                    <a href="#"class="btn btn-sm btn-warning rounded-circle" title="add">
                                        <span><i class="fas fa-plus"></i></span>
                                    </a>
                                    <a href="#"
                                        class="btn btn-sm btn-info rounded-circle" data-target="#show-modal"
                                        data-toogle="modal" title="show"><span><i class="far fa-eye"></i></span></a>
                                        @method('DELETE')
                                        <button type="submit" class=" btn btn-sm btn-danger text-white rounded-circle delete" data-id="{{$data->id}}"
                                            title="delete"><span
                                                class="fas fa-trash-alt"></button>
                                </td>
                            </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.pages-admin.footer')
</div>

@push('script')
<script>
    $(document).ready(function () {
        $('#table_departement').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });
    });
    $('.delete').click( function(){
        var id = $(this).attr('data-id');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'error',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
            }).then((result) => {
            if (result.isConfirmed) {
                window.location = "{{url('departement',)}}/"+id
                swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
                )
            }
        });
    });

</script>
@endpush
@endsection