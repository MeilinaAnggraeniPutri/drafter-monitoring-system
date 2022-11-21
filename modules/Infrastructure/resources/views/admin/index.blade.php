@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="Infrastructure" route="{{ route('infrastructure.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
  <!-- cardheader -->
  <div class="card-header border-bottom-dashed align-items-center d-flex">
    <h4 class="card-title mb-0 flex-grow-1">Infrastructure</h4>
    <div class="flex-shrink-0">
      <a href="{{ route('infrastructure.create') }}" type="button" class="btn btn-soft-primary btn-sm">
        <i class="ri-add-line"></i>
        Add
      </a>
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
        <th scope="col" class="col-1"></th>
      </tr>
    </thead>
    <tbody>
      @forelse($infrastructures as $infrastructure)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>
          <img class="img-thumbnail" alt="200x200" width="200" src="{{ asset('assets/infrastructures/' . $infrastructure->thumbnail) }}">
        </td>
        <td>{{ $infrastructure->title }}</td>
        <td>{{ $infrastructure->user->name }}</td>
        <td>
          <div class="dropdown">
            <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="ri-more-2-fill"></i>
            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              <li>
                <a class="dropdown-item" href="{{ $infrastructure->slug }}">
                  Show
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="{{ route('infrastructure.edit', $infrastructure->id) }}">
                  Edit
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-user-{{ $infrastructure->id }}').submit()">
                  Delete
                </a>
              </li>
            </ul>

            {{-- @include('usermanagement::components.form.modal.user.edit') --}}
            {{-- @include('usermanagement::components.form.modal.user.delete') --}}
          </div>
        </td>
      </tr>
      @empty
      <tr>
        <th colspan="6" class="text-center">No data to display</th>
      </tr>
      @endforelse
    </tbody>
  </table>
  <div class="card-footer py-4">
    <nav aria-label="..." class="pagination justify-content-end">
      {{ $infrastructures->links() }}
    </nav>
  </div>
</div>
@endsection
