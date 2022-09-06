<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    @include('layouts.includes.head')
</head>

<!-- body start -->
<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>
    <!-- Begin page -->
    <div id="wrapper">
        <?php $segment=Request::segment(2); ?>
        @if(($segment != "login") && ($segment != "form_email"))

            @include('layouts.includes.nav')

            @include('layouts.includes.side_menu')


        @endif

        <div class="content-page">
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
            @yield('content')
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <!-- Start Footer here -->
            @yield('footer')
        <!-- End Footer -->
        </div>

    </div>

    <!-- END wrapper -->

    <!-- Start Footer Script here -->
    @include('layouts.includes.scripts')
    <!-- End Footer Script -->
    @stack('footer')
    @yield('script')
</body>

</html>
