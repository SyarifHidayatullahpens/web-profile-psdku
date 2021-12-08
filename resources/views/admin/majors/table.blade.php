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