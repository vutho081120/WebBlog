{{-- @extends('Admin.Layouts.sidebarLayout') --}}
@extends('Admin.Layouts.SampleLayout')

@section('Title')
    <title>Home</title>
@endsection

@section('NavBar')
    @include('Admin.Components.PageMenus.NavBar')
@endsection

@section('HorizontalBar')
    @include('Admin.Components.PageMenus.HorizontalBar')
@endsection

@section('PageHeader')
    @include('Admin.Components.PageHeaders.SimpleHeader', ['link' => 'admin.user.index'])
    {{-- @include('Admin.Components.PageHeaders.SearchHeader') --}}
    {{-- @include('Admin.Components.PageHeaders.AvataHeader') --}}
    {{-- @include('Admin.Components.PageHeaders.BorderedHeader') --}}
    {{-- @include('Admin.Components.PageHeaders.BreadcrumbHeader') --}}
@endsection

@section('PageBody')
    @include('Admin.Components.PageBodies.ChartBody')
@endsection

@section('PageJS')
    <!-- Libs JS -->
    <script src="{{ asset('libs/Admin/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('js/Admin/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/Admin/demo.min.js') }}" defer></script>
@endsection
