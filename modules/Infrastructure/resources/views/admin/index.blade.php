@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="Infrastructure" route="{{ route('infrastructure.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Report</h4>
    <div class="flex-shrink-0">
      @if(auth()->user()->hasRole('Super Admin'))
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
        <th scope="col">thumbnail</th>
        <th scope="col">Title</th>
        <th scope="col">Created By</th>
        <th scope="col">Status</th>
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      @forelse($infrastructures as $key => $value)
      @empty
      <tr>
        <th colspan="6" class="text-center">No data to display</th>
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
@endsection
