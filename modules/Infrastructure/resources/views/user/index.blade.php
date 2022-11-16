@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="Infrastructure" route="{{ route('infrastructure.index') }}" />
@endsection

@section('content')
<div class="row">

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <img class="card-img-top img-fluid" src="assets/images/small/img-2.jpg" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title mb-2">How apps is changing the IT world</h4>
        <p class="card-text mb-0">Whether article spirits new her covered hastily sitting her. Money witty books nor son add. Chicken age had evening believe but proceed pretend mrs.</p>
      </div>
      <div class="card-footer">
        <a href="javascript:void(0);" class="card-link link-secondary">Read More <i class="ri-arrow-right-s-line ms-1 align-middle lh-1"></i></a>
      </div>
    </div><!-- end card -->
  </div><!-- end col -->

</div>
@endsection
