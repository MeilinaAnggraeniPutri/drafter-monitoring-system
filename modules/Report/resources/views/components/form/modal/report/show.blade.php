<!-- Modals add menu -->
<div id="modal-form-show-report-{{ $report->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-show-report-{{ $report->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modal-form-show-report-{{ $report->id }}-label">Detail ({{ strlen($report->description) > 32 ? substr($report->title, 0, 16) . '...' : $report->title }})</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>

            <div class="modal-body">

                <div class="mb-3">
                    <h6>Description:</h6>
                    <textarea class="form-control" cols="30" rows="10" disabled>{{ $report->description }}</textarea>
                </div>

                <div class="mb-3">
                    <h6>Comment:</h6>
                    <textarea class="form-control" cols="30" rows="10" disabled>{{ $report->comment }}</textarea>
                </div>

                <div class="">
                    <h6>Attached:</h6>
                    @foreach($report->upload_foto as $file)
                    <div class="mb-1">
                        <a href="{{ asset('assets/files/' . $file) }}" download>{{ $file }}</a>
                    </div>
                    @endforeach
                </div>

            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
