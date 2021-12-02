<!-- Modals Add-->
<div class="modal fade" id="create-modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-judul"></h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"><i class="fas fa-times fa-1x"></i></button>
        </div>
        <div class="modal-body">
            <div class="row">
            </div>
                <label class="form-control-label">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $about->description }}</textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
    </div>
</div>

@include('admin.ckeditor')
<script>
    $('#description').ckeditor({
        height: 200,
        readOnly: true,
    });
  </script>
<!-- End Modals-->
