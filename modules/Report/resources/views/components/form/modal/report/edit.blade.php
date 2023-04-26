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

                    <input type="hidden" name="_c2VuZGVy" value="VXNlcg==">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $report->nama }}">
                        <x-form.validation.error name="nama" />
                    </div>

                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tgl" name="tgl" value="{{ $report->tgl }}">
                        <x-form.validation.error name="tgl" />
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="number" class="form-control" id="unit" name="unit" value="{{ $report->unit }}">
                        <x-form.validation.error name="unit" />
                    </div>

                    <div class="mb-3">
                        <label for="lokasi_barang" class="form-label">Lokasi barang</label>
                        <input type="text" class="form-control" id="lokasi_barang" name="lokasi_barang" value="{{ $report->lokasi_barang }}">
                        <x-form.validation.error name="lokasi_barang" />
                    </div>

                    <div class="mb-3">
                        <label for="equipment" class="form-label">Equipment</label>
                        <textarea class="form-control" name="equipment" id="equipment">{{ $report->equipment }}</textarea>
                        <x-form.validation.error name="equipment" />
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi_pekerjaan" class="form-label">Deskripsi pekerjaan</label>
                        <textarea class="form-control" name="deskripsi_pekerjaan" id="deskripsi_pekerjaan">{{ $report->deskripsi_pekerjaan }}</textarea>
                        <x-form.validation.error name="deskripsi_pekerjaan" />
                    </div>

                    <div class="mb-3">
                        <label for="upload_foto" class="form-label">Upload foto</label>
                        <input id="upload_foto" name="upload_foto[]" type="file" class="filepond filepond-input-multiple form-control" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                        <x-form.validation.error name="upload_foto" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
