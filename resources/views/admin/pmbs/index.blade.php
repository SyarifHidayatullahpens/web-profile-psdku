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
                    <table class="table table-striped" id="table_pmbs">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pmb as $data)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->date }}</td>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
@section('script')
<script>
    $(document).ready(function () {
        $('#table_pmbs').DataTable();
    });
</script>
@endsection
@endsection