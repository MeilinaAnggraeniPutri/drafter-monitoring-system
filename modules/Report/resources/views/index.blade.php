@extends('layouts.dashboard.app')

@section('title', 'Report')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Report" page="Report" active="Report" route="{{ route('report.index') }}" />
@endsection
