<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>@yield('title')</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"
        rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    @include('backend.layouts.partails.css')
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">

        @include('backend.layouts.partails.sideber')



        <div class="page-wrapper">

            @include('backend.layouts.partails.header')

            <div class="content-wrapper">

                @yield('content')

            </div>

            @include('backend.layouts.partails.footer')

        </div>
    </div>


    @include('backend.layouts.partails.script')

    @yield('script')


</body>

</html>
