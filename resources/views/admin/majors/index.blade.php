@extends('../layouts.pages-admin.main-content')

@section('content')

<head>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
</head>
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Admin Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('majors.index') }}">Majors</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button class="btn btn-sm btn-neutral" id="btn-add" onclick="createModal()">Add Majors</button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                ...
                            </div>
                        </div>
                    </div>
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
                    <h3 class="mb-0">Majors Data</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-striped" id="table_majors">
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
                                    <a href="{{ route('majors.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary rounded-circle" title="edit"><span><i
                                                class="fas fa-edit"></i></span></a>
                                    <a href="{{ route('majors.show', $data->id) }}"
                                        class="btn btn-sm btn-info rounded-circle" data-target="#show-modal"
                                        data-toogle="modal" title="show"><span><i class="far fa-eye"></i></span></a>
                                    <form action="{{ route('majors.destroy', [$data->id]) }}" method="POST"
                                        class="d-inline ">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=" btn btn-sm btn-danger text-white rounded-circle"
                                            title="delete" onclick="return confirm('Apakah anda ingin menghapus item.?'); event.preventDefault();
                                            document.getElementById('delete-item').submit();"><span
                                                class="fas fa-trash-alt"></button>
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
@include('admin.majors.modal')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
@section('script')
<script>
    $(document).ready(function () {
        $('#table_majors').DataTable();
    });
</script>
@endsection
@endsection