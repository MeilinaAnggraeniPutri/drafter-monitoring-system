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

                    @if(auth()->user()->isValidated())
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Report title" name="nama">
                        <x-form.validation.error name="nama" />
                    </div>

                    <div class="mb-3">
                        <label for="tgl" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tgl" placeholder="Report title" name="tgl">
                        <x-form.validation.error name="tgl" />
                    </div>

                    <div class="mb-3">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="number" class="form-control" id="unit" placeholder="Report title" name="unit">
                        <x-form.validation.error name="unit" />
                    </div>

                    <div class="mb-3">
                        <label for="lokasi_barang" class="form-label">Lokasi barang</label>
                        <input type="text" class="form-control" id="lokasi_barang" placeholder="Report title" name="lokasi_barang">
                        <x-form.validation.error name="lokasi_barang" />
                    </div>

                    <div class="mb-3">
                        <label for="equipment" class="form-label">Equipment</label>
                        <textarea class="form-control" name="equipment" id="equipment"></textarea>
                        <x-form.validation.error name="equipment" />
                    </div>

                    <div class="mb-3">
                        <label for="deskripsi_pekerjaan" class="form-label">Deskripsi pekerjaan</label>
                        <textarea class="form-control" name="deskripsi_pekerjaan" id="deskripsi_pekerjaan"></textarea>
                        <x-form.validation.error name="deskripsi_pekerjaan" />
                    </div>

                    <div class="mb-3">
                        <label for="upload_foto" class="form-label">Upload foto</label>
                        <input id="upload_foto" name="upload_foto[]" type="file" class="filepond filepond-input-multiple form-control" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3">
                        <x-form.validation.error name="upload_foto" />
                    </div>
                    @else
                    <p>Validate your account first to do reporting!</p>
                    @endif

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    @if(auth()->user()->isValidated())
                    <button type="submit" class="btn btn-primary ">Save</button>
                    @else
                    <a href="{{ route('user.validation.index') }}" type="button" class="btn btn-primary">Validate</a>
                    @endif
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
