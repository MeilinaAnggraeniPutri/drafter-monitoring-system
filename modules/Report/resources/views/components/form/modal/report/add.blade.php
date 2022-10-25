<!-- Modals add menu -->
<div id="modal-form-add-report" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-report-label" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-header">
          <h5 class="modal-title" id="modal-form-add-report-label">Add Report</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body">

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Report title" name="title">
            <x-form.validation.error name="title" />
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <x-form.validation.error name="description" />
          </div>

          <div class="mb-3">
            <label for="attach" class="form-label">Attachment</label>
            <input id="attach" name="attach[]" type="file" class="filepond filepond-input-multiple form-control" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
            <x-form.validation.error name="attach" />
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary ">Save</button>
        </div>
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
