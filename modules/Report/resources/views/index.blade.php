@extends('layouts.dashboard.app')

@section('title', 'Request')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Request" page="Request" active="Request" route="{{ route('report.index') }}" />
@endsection

@section('content')
<div class="card card-height-100 table-responsive">
    <!-- cardheader -->
    <div class="card-header border-bottom-dashed align-items-center d-flex">
        <h4 class="card-title mb-0 flex-grow-1">Request</h4>
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
                <th scope="col">PIC</th>
                <th scope="col">nama</th>
                <th scope="col">tgl</th>
                <th scope="col">unit</th>
                <th scope="col">equipment</th>
                <th scope="col">deskripsi pekerjaan</th>
                <th scope="col">upload foto</th>
                <th scope="col">lokasi barang</th>
                <th scope="col">status</th>
                <th scope="col" class="col-1"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($reports as $report)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <th scope="row">{{ $report->user->name }}</th>
                <th scope="row">{{ $report->nama }}</th>
                <th scope="row">{{ $report->tgl }}</th>
                <th scope="row">{{ $report->unit }}</th>
                <th scope="row">{{ $report->equipment }}</th>
                <th scope="row">{{ $report->deskripsi_pekerjaan }}</th>
                <th scope="row">
                    <div class="">
                        @foreach($report->upload_foto as $file)
                        <div class="mb-1">
                            <img style="height: 8rem;" src="{{ asset('assets/files/' . $file) }}" class="rounded">
                        </div>
                        @endforeach
                    </div>
                </th>
                <th scope="row">{{ $report->lokasi_barang }}</th>
                <th scope="row">{{ $report->status }}</th>
                <td>
                    <div class="dropdown">
                        <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v"></i>
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
                        @include('report::components.form.modal.report.delete')
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <th colspan="10" class="text-center">No data to display</th>
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
