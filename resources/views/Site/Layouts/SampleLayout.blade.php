<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/Site/main.css') }}">
    @yield('Title')
    <link href="{{ asset('css/Admin/tabler.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/tabler-flags.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/tabler-payments.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/tabler-vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Admin/demo.min.css') }}" rel="stylesheet">

    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <div class="page">
        <header>
            <div class="header">
                @yield('PageHeader')
            </div>
        </header>

        <div class="body-wrapper">
            <div class="bw-content">
                <div class="w1040">
                    <div class="w720 bwc-left fl">
                        <div class="bwc-left-wrapper">
                            @yield('PageBody')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            @yield('PageFooter')
        </footer>

        @yield('PageJS')
    </div>
</body>

</html>
