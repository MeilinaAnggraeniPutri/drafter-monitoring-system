<!-- Modals add menu -->
<div id="modal-form-edit-report-{{ $report->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-edit-report-{{ $report->id }}-label" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form action="{{ route('report.update', $report->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="modal-header">
          <h5 class="modal-title" id="modal-form-edit-report-{{ $report->id }}-label">Edit ({{ strlen($report->description) > 32 ? substr($report->title, 0, 16) . '...' : $report->title }})</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
        </div>
        <div class="modal-body">

          @if(auth()->user()->hasRole('User'))
          <input type="hidden" name="_c2VuZGVy" value="VXNlcg==">

          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Report title" name="title" value="{{ $report->title }}">
            <x-form.validation.error name="title" />
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description">{{ $report->description }}</textarea>
            <x-form.validation.error name="description" />
          </div>

          <div class="mb-3">
            <label for="attach" class="form-label">Attachment</label>
            <span class="text-sm text-muted"></span>
            <input id="attach" name="attach[]" type="file" class="filepond filepond-input-multiple form-control" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
            <x-form.validation.error name="attach" />
          </div>

          @elseif(auth()->user()->hasRole('Super Admin'))
          <input type="hidden" name="_c2VuZGVy" value="U3VwZXIgQWRtaW4=">

          <div class="mb-3">
            <label for="select-status" class="form-label">Status</label>
            <select class="form-select" id="select-status" name="status" data-choices>
              <option @selected($report->status->value == 'Pending') value="Pending">Pending</option>
              <option @selected($report->status->value == 'Processed') value="Processed">Processed</option>
              <option @selected($report->status->value == 'Accepted') value="Accepted">Accepted</option>
              <option @selected($report->status->value == 'Rejected') value="Rejected">Rejected</option>
              <option @selected($report->status->value == 'Closed') value="Closed">Closed</option>
            </select>
            <x-form.validation.error name="status" />
          </div>

          <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" name="comment" id="comment"></textarea>
            <x-form.validation.error name="comment" />
          </div>
          @endif

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary ">Update</button>
        </div>
      </form>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->