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
                    <a href="{{ route('pmbs.create') }}" class="btn btn-sm btn-neutral" id="tombol-add">Add PMB</a>
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
                        <tbody>
                            @forelse ($pmb as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->date_start }}</td>
                                <td>{{ $data->date_finish }}</td>
                                <td>{{ $data->annoucement }}</td>
                                <td>{{ $data->re_registration }}</td>
                                <td class="mx-2">
                                    <a href="{{ route('pmbs.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary rounded-circle" title="edit"><span><i
                                                class="fas fa-edit"></i></span></a>
                                    <a href="{{ route('pmbs.show', $data->id) }}"
                                        class="btn btn-sm btn-info rounded-circle" data-target="#show-modal"
                                        data-toogle="modal" title="show"><span><i class="far fa-eye"></i></span></a>
                                    <form action="{{ route('pmbs.destroy', [$data->id]) }}" method="POST"
                                        class="d-inline ">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=" btn btn-sm btn-danger text-white rounded-circle"
                                            title="delete" onclick="deleteItems()" data-id="{{ $data->id }}"
                                            data-name="{{ $data->name }}"><span class="fas fa-trash-alt"></button>
                                    </form>
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.0/dist/sweetalert2.all.min.js"></script>
@push('script')
<script>
    $(document).ready(function () {
        $('#table_pmbs').DataTable({
            "scrollX": false,
            rowReorder: {
                selector: 'th:nth-child(2)'
            },
            responsive: true
        });
    });

    function deleteItems(e) {
        let name = e.getAttribute('data-name');

        let id = e.getAttribute('data-id');

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
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                if (result.isConfirmed) {

                    $.ajax({
                        type: 'DELETE',
                        url: '{{url("/user/delete")}}/' + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (data) {
                            if (data.success) {
                                swalWithBootstrapButtons.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    "success"
                                );
                                $("#" + id + "").remove();
                            }

                        }
                    });

                }

            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                );
            }
        });

    };
</script>
@endpush
@endsection