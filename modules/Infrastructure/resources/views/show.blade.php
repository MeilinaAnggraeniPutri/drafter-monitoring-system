@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="{{ $infrastructure->title }}" route="{{ route('infrastructure.index') }}" />
@endsection

@section('content')
<div class="card">
  <div class="card-body">

    <h2 class="mt-3 mb-4 text-center">{{ $infrastructure->title }}</h2>

    <!-- figures Images -->
    <figure class="figure center d-flex mx-auto mt-3 mb-2" style="width: 50rem">
      <img src="{{ asset('assets/infrastructures/' . $infrastructure->thumbnail) }}" class="figure-img img-fluid rounded" alt="{{ $infrastructure->title }}">
    </figure>

    <p class="px-5 my-3">{{ $infrastructure->body }}</p>

  </div>
</div>
@endsection
