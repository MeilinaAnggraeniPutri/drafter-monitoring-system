@extends('layouts.dashboard.app')

@section('title', 'Infrastructure')

@section('breadcrumb')
<x-dashboard::breadcrumb title="Infrastructure" page="Infrastructure" active="Infrastructure" route="{{ route('infrastructure.index') }}" />
@endsection
