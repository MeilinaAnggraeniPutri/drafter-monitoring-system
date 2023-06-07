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
        @if(auth()->user()->hasRole('Super Admin'))
        <div class="flex-shrink-0">
            <a href="{{ route('infrastructure.create') }}" type="button" class="btn btn-soft-primary btn-sm">
                <i class="ri-add-line"></i>
                Add
            </a>
        </div>
        @endif
    </div>
    <!-- end cardheader -->
    <!-- Hoverable Rows -->
    <table class="table table-hover table-nowrap mb-0">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama Draw</th>
                <th scope="col">No Draw</th>
                <th scope="col">Unit</th>
                <th scope="col">File Lampiran</th>
                <th scope="col">Drafter</th>
                <th scope="col">PIC</th>
                <th scope="col">Progress</th>
                <th scope="col">Revisi</th>
                <th scope="col">Keterangan</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse($infrastructures as $infrastructure)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $infrastructure->created_at }}</td>
                <td>{{ $infrastructure->nama_draw }}</td>
                <td>{{ $infrastructure->no_draw }}</td>
                <td>{{ $infrastructure->unit }}</td>
                <td>
                    <a href="{{ url('assets/infrastructures/' . $infrastructure->file_pdf) }}" download>{{ $infrastructure->file_pdf }}</a>
                </td>
                <td>{{ $infrastructure->drafter }}</td>
                <td>{{ $infrastructure->user->name }}</td>
                <td>{{ $infrastructure->progress }}</td>
                <td>
                    <ul>
                        @foreach($infrastructure->revisions as $revision)
                        <li>{{ $revision->name }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>{{ $infrastructure->keterangan }}</td>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="{{ route('infrastructure.show', $infrastructure->id) }}">
                                    Show
                                </a>
                            </li>
                            @if(auth()->user()->id == $infrastructure->user_create)
                            <li>
                                <a class="dropdown-item" href="{{ route('infrastructure.edit', $infrastructure->id) }}">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('modal-form-delete-admin-{{ $infrastructure->id }}').submit()">
                                    Delete
                                </a>
                            </li>
                            @endif
                            @if(auth()->user()->id == $infrastructure->user_id)
                            <li>
                                <a class="dropdown-item" href="{{ route('infrastructure.revisi.create', $infrastructure->id) }}">
                                    Revisi
                                </a>
                            </li>
                            @endif
                        </ul>

                        @include('infrastructure::components.form.modal.admin.delete')
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="12" class="text-center">No data to display</th>
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
