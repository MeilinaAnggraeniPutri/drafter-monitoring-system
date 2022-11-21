@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="Create" route="{{ route('infrastructure.index') }}" />
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4 class="card-title mb-0">Infrastructure Create</h4>
  </div><!-- end card header -->

  <form action="{{ route('infrastructure.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">

      <div class="mb-3">
        <p class="text-muted">Thumbnail</p>
        <input type="file" name="thumbnail" id="thumbnail" class="form-control">
        <x-form.validation.error name="thumbnail" />
      </div>

      <div class="mb-3">
        <p class="text-muted">Title</p>
        <input type="text" name="title" id="title" class="form-control">
        <x-form.validation.error name="title" />
      </div>

      <div class="mb-3">
        <p class="text-muted">Content</p>
        <textarea name="body" id="body" class="form-control" rows="10"></textarea>
        <x-form.validation.error name="body" />
      </div>

    </div><!-- end card-body -->

    <div class="modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary ">Save</button>
    </div>

  </form>

</div><!-- end card -->
@endsection
