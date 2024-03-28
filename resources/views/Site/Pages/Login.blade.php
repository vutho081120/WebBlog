@extends('Site.Layouts.TablerLayout')

@section('Title')
    <title>Login</title>
@endsection

@section('PageBody')
    @include('Site.Components.Login')
@endsection

@section('PageJS')
    <!-- Tabler Core -->
    <script src="{{ asset('js/Admin/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/Admin/demo.min.js') }}" defer></script>
@endsection
