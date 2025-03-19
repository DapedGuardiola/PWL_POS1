@extends('layout.app')
{{--costumize layout sections--}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle','Kategori')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
        </div>
        <div class="card-body">{{$dataTable->table()}}</div>
        <a href="{{'create'}}" class="btn btn-primary">Add Kategori</a>
        <a href="{{'manage'}}" class="btn btn-primary">Manage Kategori</a>
    </div>
@endsection
{{--Push extra CSS--}}

@push('css')
    {{--add extra stylesheets--}}
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@endpush
@push('scripts')
    {{$dataTable->scripts()}}
@endpush