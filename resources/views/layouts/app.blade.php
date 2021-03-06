<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/bootstrap-select.min.css" rel="stylesheet">

    {{--<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>--}}
    <link rel="stylesheet" href="{{ asset('css/fullcalendar.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


</head>
<body>
    <div >
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
                    @if(Auth::check())
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    @endif

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
                                    <a href="{{ url('/cheerleader/teams') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  My Teams
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/cheerleader/privates') }}">
                                      <i class="fa fa-users" aria-hidden="true"></i>  My Privates
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/message') }}">
                                      <i class="fa fa-envelope" aria-hidden="true"></i>  My Messages
                                    </a>
                                </li>



                        @else
                                <li>
                                    <a href="{{ url('coach/cheerleaders') }}">

                                        <i class="fa fa-users" aria-hidden="true"></i> Search Cheerleaders
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/clinics-tryouts') }}">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> Clinics and Try Outs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('coach/teams') }}">
                                        <i class="fa fa-users" aria-hidden="true"></i> Teams and Skills
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/message') }}">
                                        <i class="fa fa-envelope" aria-hidden="true"></i> My Messages
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('/coach/sos')}}">
                                        <i class="fa fa-rss" aria-hidden="true"></i> Manage SOS Alerts
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
        <div class="container">
        @if(Session::has('success'))
            <div class="alert-success text-center">
                <h2>{{ Session::get('success') }}</h2>
            </div>
        @endif
      </div>
      <div id="fullout">
        @yield('content')
    </div>
  </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @if(isset($calendar) && !empty($calendar))
        {!! $calendar->script() !!}
    @endif


</body>
</html>
