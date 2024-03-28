@extends('Admin.layouts.SampleLayout')

@section('Title')
    <title> Category </title>
@endsection

@section('NavBar')
    @include('Admin.Components.PageMenus.NavBar')
@endsection

@section('HorizontalBar')
    @include('Admin.Components.PageMenus.HorizontalBar')
@endsection

@section('PageHeader')
    @include('Admin.Components.PageHeaders.SearchHeader', [
        'singular' => 'category',
        'plural' => 'categories',
        'routeCreate' => 'admin.category.createShow',
        'routeSearch' => 'admin.category.search',
    ]);
@endsection

@section('PageBody')
    @include('Admin.Components.PageBodies.CategoryBody')
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
