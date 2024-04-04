@extends('Admin.layouts.SampleLayout')

@section('Title')
    <title> User </title>
@endsection

@section('NavBar')
    @include('Admin.Components.PageMenus.NavBar')
@endsection

@section('HorizontalBar')
    @include('Admin.Components.PageMenus.HorizontalBar')
@endsection

@section('PageHeader')
    @include('Admin.Components.PageHeaders.SearchHeader', [
        'singular' => 'user',
        'plural' => 'users',
        'routeCreate' => 'admin.user.createShow',
        'routeSearch' => 'admin.user.search',
    ])
@endsection

@section('PageBody')
    <div class="page-body">
        @include('Admin.Components.PageBodies.UserBody')
    </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript">
        $(window).on('hashchange', function() {
            if (window.location.hash) {
                var page = window.location.hash.replace('#', '');
                if (page == Number.NaN || page <= 0) {
                    return false;
                } else {
                    loadPage(page);
                }
            }
        });

        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                loadPage(page);
            });
        });

        function loadPage(page) {
            $.ajax({
                type: "GET",
                url: '?page=' + page,
                success: function(data) {
                    $('.page-body').empty().html(data);
                    location.hash = page;
                }
            });
        }
    </script>
@endsection
