<!-- Modals Add-->
<div class="modal fade" id="create-modal" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-judul"></h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-1x"></i></button>
        </div>
        <div class="modal-body">
          <form id="form-create" name="form-tambah-edit">
            <div class="row">
              <div class="col">
                <label class="form-label" for="address">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name..">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            </div>
                <label class="form-control-label">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
                @error('description')
                  {{ $message }}
                @enderror
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" id="tombol-simpan" value="create" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>