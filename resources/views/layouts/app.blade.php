<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="/js/helpers.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      @if(Auth::check())
                        @if(auth()->user()->type == 'student')
                                <li>
                                    <a href="{{ url('/cheerleader/schools') }}">

                                      <i class="fa fa-university" aria-hidden="true"></i>  Schools
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/programs') }}">
                                      <i class="fa fa-tasks" aria-hidden="true"></i>  Programs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/clinics') }}">
                                      <i class="fa fa-check" aria-hidden="true"></i> Clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/tryouts') }}">
                                      <i class="fa fa-calendar" aria-hidden="true"></i> Try Outs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/scholarships') }}">
                                      <i class="fa fa-graduation-cap" aria-hidden="true"></i>  Scholarships
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/teams') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  Teams
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/privates') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  My Privates
                                    </a>
                                </li>


                        @else
                                <li>
                                    <a href="{{ url('coach/schools') }}">

                                      <i class="fa fa-university" aria-hidden="true"></i>  Manage Schools
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/programs') }}">
                                      <i class="fa fa-tasks" aria-hidden="true"></i>  Manage Programs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/clinics') }}">
                                      <i class="fa fa-check" aria-hidden="true"></i> Manage Clinics
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/tryouts') }}">
                                      <i class="fa fa-calendar" aria-hidden="true"></i> Manage Try Outs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/scholarships') }}">
                                      <i class="fa fa-graduation-cap" aria-hidden="true"></i> Manage Scholarships
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/teams') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i> Manage Teams
                                    </a>
                                </li>
                        @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

</body>
</html>
