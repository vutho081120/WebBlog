@extends('Site.Layouts.SampleLayout')

@section('Title')
    <title>Trang Chủ</title>
@endsection

@section('PageHeader')
    @include('Site.Components.PageHeader')
@endsection

@section('RegionNews')
    @include('Site.Components.RegionNews')
@endsection

@section('StreamNews')
    @include('Site.Components.StreamNews')
@endsection

@section('CategoryNews')
    @include('Site.Components.CategoryNews')
@endsection

@section('PageFooter')
    @include('Site.Components.PageFooter')
@endsection

@section('PageJS')
    <!-- Tabler Core -->
    <script src="{{ asset('js/Admin/tabler.min.js') }}" defer></script>
    <script src="{{ asset('js/Admin/demo.min.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">
        // for sidebar menu entirely but not cover treeview
        $('ul.nav a').filter(function() {
            var path = this.href.replace(top.location.origin, '');
            return path == top.location.pathname;
        }).parent().addClass('active');

        // for treeview
        $('ul.nav a').filter(function() {
            var path = this.href.replace(top.location.origin, '');
            return path == top.location.pathname;
        }).parentsUntil(".nav > .sub-menu").addClass('active');
    </script>
@endsection
