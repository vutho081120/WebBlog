@extends('Admin.layouts.SampleLayout')

@section('Title')
    <title> Category Create </title>
@endsection

@section('NavBar')
    @include('Admin.Components.PageMenus.NavBar')
@endsection

@section('HorizontalBar')
    @include('Admin.Components.PageMenus.HorizontalBar')
@endsection

@section('PageHeader')
    @include('Admin.Components.PageHeaders.TitleHeader', ['title' => 'Category'])
@endsection

@section('PageBody')
    @include('Admin.Components.PageBodies.CategoryCreateBody')
@endsection

@section('PageJS')
    <!-- Libs JS -->
    <script src="{{ asset('libs/Admin/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/js/jsvectormap.min.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/maps/world.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/jsvectormap/dist/maps/world-merc.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/nouislider/dist/nouislider.min.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/litepicker/dist/litepicker.js') }}" defer></script>
    <script src="{{ asset('libs/Admin/tom-select/dist/js/tom-select.base.min.js') }}" defer></script>
    <!-- Tabler Core -->
    <script src="{{ asset('js/Admin/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/Admin/demo.min.js') }}" defer></script>
@endsection
