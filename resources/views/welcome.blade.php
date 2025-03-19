@extends('layout.app')
{{--costumize layout sections--}}

@section('subtitle', 'welcome')
@section('content_header_title', 'Home')
@section('content_header_subtitle','Welcome')

@section('content_body')
<p>Welcome to this beatufiul admin panel</p>
@endsection
{{--Push extra CSS--}}

@push('css')
    {{--add extra stylesheets--}}
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@endpush
{{--push extra script--}}

@push('js')
<script>console.log("hi, im using the laravel AdminLTE package!")</script>
@endpush