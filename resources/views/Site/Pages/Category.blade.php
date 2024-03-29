@extends('Site.Layouts.SampleLayout')

@section('Title')
    <title>Danh mục</title>
@endsection

@section('PageHeader')
    @include('Site.Components.PageHeader')
@endsection

@section('PageBody')
    @include('Site.Components.RegionNews')

    @include('Site.Components.CategoryPageBody')
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
