@extends('layouts.dashboard.app')

@section('title', 'Dashboard')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Dashboard" page="Dashboard" active="Dashboard" route="{{ route('dashboard.index') }}" />
@endsection

@section('content')
<div class="row">

  <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <p class="fw-medium text-muted mb-0">Report</p>
            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">{{ $reportCount }}</span></h2>
            <p class="mb-0 text-muted py-1"></p>
          </div>
          <div>
            <div class="avatar-sm flex-shrink-0">
              <span class="avatar-title bg-soft-info rounded-circle fs-2">
                <i class="far fa-file-alt"></i>
              </span>
            </div>
          </div>
        </div>
      </div><!-- end card body -->
    </div> <!-- end card-->
  </div> <!-- end col-->

  <div class="col-xl-3 col-md-6">
    <div class="card card-animate">
      <div class="card-body">
        <div class="d-flex justify-content-between">
          <div>
            <p class="fw-medium text-muted mb-0">Infrastructure</p>
            <h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">{{ $infrastructureCount }}</span></h2>
            <p class="mb-0 text-muted py-1"></p>
          </div>
          <div>
            <div class="avatar-sm flex-shrink-0">
              <span class="avatar-title bg-soft-info rounded-circle fs-2">
                <i class="far fa-list-alt"></i>
              </span>
            </div>
          </div>
        </div>
      </div><!-- end card body -->
    </div> <!-- end card-->
  </div> <!-- end col-->

</div>
@endsection