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
      <button type="button" class="btn btn-soft-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-form-add-report">
        <i class="ri-add-line"></i>
        Add
      </button>
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
        <th scope="col">Created By</th>
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      @forelse ($reports as $report)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td>{{ $report->title }}</td>
        <td>{{ $report->attach }}</td>
        <td>{{ strlen($report->description) > 32 ? substr($report->description, 32) . '...' : $report->description }}</td>
        <td>{{ $report->user->name }}</td>
        <td>
          <div class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-form-edit-report-{{ $report->uuid }}">
                  Edit
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-report-{{ $report->uuid }}').submit()">
                  Delete
                </a>
              </li>
            </ul>

            {{-- @include('report::components.form.modal.report.edit') --}}
            {{-- @include('report::components.form.modal.report.delete') --}}
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th colspan="5" class="text-center">No data to display</th>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="card-footer py-4">
    <nav aria-label="..." class="pagination justify-content-end">
      {{-- {{ $reports->links() }} --}}
    </nav>
  </div>
</div>

{{-- @include('report::components.form.modal.report.add') --}}
@endsection
