<div class="modal fade" id="create-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-judul"></h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-1x"></i></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('pmbs.store') }}" method="POST" id="create_pmbs" enctype="multipart/form-data">
                @csrf
                <div class="row mb-2">
                    <div class="col-md-4">
                        <label class="form-control-label">Title</label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @error('name')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Pendaftaran</label>
                        <input type="date" class="form-control" name="date_start">
                        @error('date_start')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Penutupan</label>
                        <input type="date" class="form-control" name="date_finish">
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
                        <input type="date" class="form-control" name="annoucement">
                        @error('annoucement')
                        <span class="text-danger mb-2">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label">Daftar Ulang</label>
                        <input type="date" class="form-control" name="re_registration">
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
                        placeholder="Masukkan Konten Blog" id="description"></textarea>
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
  </div>