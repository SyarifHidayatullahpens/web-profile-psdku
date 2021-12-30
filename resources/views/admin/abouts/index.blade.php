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
                            <li class="breadcrumb-item"><a href="{{ route('abouts.index') }}">Abouts</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('abouts.create') }}" class="btn btn-sm btn-neutral">Add</a>
                    <a href="javascript:void(0)" class="btn btn-warning" id="tambah-data">Add </a>
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
                    <h3 class="mb-0">About Campus Data</h3>
                </div>
                <div class="table-responsive py-4">
                    <table class="table table-flush" id="table_about" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($about as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><a href="{{ route('abouts.show', $data->id) }}" class="btn btn-sm btn-info"
                                        data-target="#show-modal" data-toogle="modal" title="show">Show Here</a></td>
                                <td class="mx-2">
                                    <a href="{{ route('abouts.edit', $data->id) }}"
                                        class="btn btn-sm btn-primary rounded-circle" title="edit"><span><i
                                                class="fas fa-edit"></i></span></a>
                                    <form action="{{ route('abouts.destroy', [$data->id]) }}" method="POST"
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
    @include('admin.abouts.modal')
    @include('layouts.pages-admin.footer')
</div>

<script>
    $(document).ready(function () {
        $('#table_about').DataTable({
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true
        });

    });
        $('#tambah-data').click(function() {
            console.log('ajsh');
            $('#create-modal').modal('show');
        });
</script>
@endsection