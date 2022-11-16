@extends('layouts.dashboard.app')

@section('title', 'Report')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Report" page="Report" active="Report" route="{{ route('report.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Report</h4>
    <div class="flex-shrink-0">
      @if(auth()->user()->hasRole('User'))
      <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-report">
        <i class="ri-add-line"></i>
        Add
      </button>
      @endif
    </div>
  </div>
  <!-- end cardheader -->
  <!-- Hoverable Rows -->
  <table class="table table-hover table-nowrap mb-0">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Attach</th>
        <th scope="col">Description</th>
        <th scope="col">Comment</th>
        <th scope="col">Created By</th>
        <th scope="col">Status</th>
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($reports as $report)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $report->title }}</td>
        <td>
          <span class="badge badge-soft-info">{{ count($report->attach) . ' file' }}</span>
        </td>
        <td>{{ strlen($report->description) > 32 ? substr($report->description, 0, 32) . '...' : $report->description }}</td>
        <td>{{ strlen($report->comment) > 32 ? substr($report->comment, 0, 32) . '...' : $report->comment }}</td>
        <td>{{ $report->user->name }}</td>
        <td>
          <span class="badge badge-soft-{{ $report->getStatusColor() }}">
            {{ $report->status }}
          </span>
        </td>
        <td>
          <div class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-show-report-{{ $report->id }}">
                  Detail
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-report-{{ $report->id }}">
                  Edit
                </a>
              </li>
              @if($report->user->id === auth()->id() || auth()->user()->hasRole('Super Admin'))
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-report-{{ $report->id }}').submit()">
                  Delete
                </a>
              </li>
              @endif
            </ul>

            @include('report::components.form.modal.report.show')
            @include('report::components.form.modal.report.edit')
            {{-- @include('report::components.form.modal.report.delete') --}}
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th colspan="8" class="text-center">No data to display</th>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="card-footer py-4">
    <nav aria-label="..." class="pagination justify-content-end">
      {{ $reports->links() }}
    </nav>
  </div>
</div>

@if(auth()->user()->hasRole('User'))
@include('report::components.form.modal.report.add')
@endif

@endsection

@push('plugin-css')
<!-- dropzone css -->
<link rel="stylesheet" href="{{ asset('assets/libs/dropzone/dropzone.css') }}" type="text/css" />

<!-- Filepond css -->
<link rel="stylesheet" href="{{ asset('assets/libs/filepond/filepond.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}" />
@endpush

@push('plugin-script')
<!-- dropzone min -->
<script src="{{ asset('assets/libs/dropzone/dropzone-min.js') }}"></script>

<!-- filepond js -->
<script src="{{ asset('assets/libs/filepond/filepond.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

<script src="{{ asset('assets/js/pages/form-file-upload.init.js') }}"></script>
@endpush
