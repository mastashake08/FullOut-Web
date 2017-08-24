<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>{{config('app.name')}}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="themes/dimension/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="themes/dimension/assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="themes/dimension/assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-users"></span>
						</div>
						<div class="content">
							<div class="inner">
								<h1>{{config('app.name')}}</h1>
								<p>Connecting cheerleaders,gyms, and instructors</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Intro</a></li>
								<li><a href="#cheerleader">Cheerleaders</a></li>
								<li><a href="#gym">Gyms</a></li>
								<li><a href="#private">Instructors</a></li>
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                            <li><a href="{{url('/home')}}">Dashboard</a></li>
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
                @endif
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Intro -->
							<article id="intro">
								<h2 class="major">Intro</h2>
								<span class="image main"><img src="themes/dimension/images/cheer1.jpg" alt="" /></span>
								<p>FullOut is the bridge for  cheerleaders to college coaches, we give customized evaluations of your skills to fit you into your  college program.</p>
                <p> FullOut is where cheerleaders go to get scholarship. Where anyone can become a college cheerleader!</p>
							</article>

						<!-- Work -->
							<article id="cheerleader">
								<h2 class="major">Cheerleaders</h2>
								<span class="image main"><img src="themes/dimension/images/cheer5.jpg" alt="" /></span>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
								<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat tempus.</p>
							</article>

						<!-- About -->
							<article id="private">
								<h2 class="major">Private Instructors</h2>
								<span class="image main"><img src="themes/dimension/images/coach.jpg" alt="" /></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>

              <!-- About -->
  							<article id="gym">
  								<h2 class="major">Gyms</h2>
  								<span class="image main"><img src="themes/dimension/images/cheer7.jpg" alt="" /></span>
  								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
  							</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; {{config('app.name')}}. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="themes/dimension/assets/js/jquery.min.js"></script>
			<script src="themes/dimension/assets/js/skel.min.js"></script>
			<script src="themes/dimension/assets/js/util.js"></script>
			<script src="themes/dimension/assets/js/main.js"></script>

	</body>
</html>
