<html>
    <head>
        <title>@yield('title')</title>
        @yield('csrf_token')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        @yield('scripts')
        <script src="/js/base.js" type="text/javascript"></script>
        <script src="/js/navBar.js" type="text/javascript"></script>
        <link rel="stylesheet" href="/css/base.css" type="text/css" />
        <link rel="stylesheet" href="/css/navBar.css" type="text/css" />
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css" />
        @yield('formcss')
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
        @yield('stylesheets')
    </head>
    <body>
        <div class="rootContainer">
            @include('includes.navBar_include')
            <div class="body">
                @yield('bodyContent')
            </div>

        </div>
        <footer>
            @yield('footer')
            <p id="copyright"></p>
        </footer>
    </body>
</html>