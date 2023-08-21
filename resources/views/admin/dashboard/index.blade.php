@extends('layouts.admin')
@section('module', 'Dashboard')
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

@endsection
