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
                    <li><a href="{{ url('/cheerleader/login') }}">Login</a></li>
										<li><a href="{{ url('/coach/login') }}">Coach Login</a></li>
										<li><a href="{{ url('/instructor/login') }}">Instructor Login</a></li>
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
								<p>
									FullOut will be helpful to any cheerleader that has aspirations of cheering in college.
									We match your skills with college cheerleading programs to make your dream a reality.
								</p>
								<p>
									There are all types of college cheerleading programs such as: competitive programs, game day programs, non tumbling programs, non stunting programs ect.
									 With the hundreds of college teams out there, all with different skill sets we will match you your dream school!
								 </p>
								<p>
									And when your skills and grades match with a school, the Head coach will be notified instantly by phone, with your stats and contact information.
									Or you can contact them directly through FullOut.
									By using FullOut you will have direct contact with college coaches, and access to every school’s criteria.
									This is to ensure that you won’t be blindsided at tryouts or clinics. Instead you will be prepared and can focus on performing at your best!
								</p>
								</article>

						<!-- About -->
							<article id="private">
								<h2 class="major">Private Instructors</h2>
								<span class="image main"><img src="themes/dimension/images/coach.jpg" alt="" /></span>
								<p>
									At FullOut we believe that all coaches should make LOTS of private and choreography money. FullOut is a place where coaches can market for privates or choreography work. With our search for privates and choreography page, you will be able to advertise to serious, talented, and committed cheerleaders. And if you link your debit card or bank account you can even have your clients pay on FullOut, bringing your professionalism to another level.
									Have your athletes rate you on FullOut and get even more athletes contacting you for privates. Become the cheerleading guru in your area!
								</p>
							</article>

              <!-- About -->
  							<article id="gym">
  								<h2 class="major">Gyms</h2>
  								<span class="image main"><img src="themes/dimension/images/cheer7.jpg" alt="" /></span>
									<ul>
										<li>With FullOut all-star gyms can scout for talent too. They can find the best talent in the area and create more worlds and summit winning teams.</li>
										<li>They can track their teams’ progress as their skills increase to determine whether that “New” Tumbling Coach is having a significant impact or not.</li>
										<li>On FullOut Gyms can network with college programs to potentially become a feeder program for that one school or multiple schools. Those are priceless connections!</li>

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
