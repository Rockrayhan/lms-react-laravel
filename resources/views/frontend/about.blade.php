@extends('frontend.layouts.app') ;

@section('content')
    

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row about_row row-lg-eq-height">
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title">Our Platform's main goal</div>
						<div class="about_text">
							<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id convallis libero, sed blandit nibh. Nam ultricies tristique nibh, consequat ornare nibh. Quisque vitae odio ligula.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="about_image"><img src="images/about_1.jpg" alt="https://unsplash.com/@jtylernix"></div>
				</div>
			</div>
			<div class="row about_row row-lg-eq-height">
				<div class="col-lg-6 order-lg-1 order-2">
					<div class="about_image"><img src="images/about_1.jpg" alt=""></div>
				</div>
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="about_content">
						<div class="about_title">eLearn's Vision</div>
						<div class="about_text">
							<p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut. Maecenas rutrum viverra sapien sed fermentum. Morbi tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id convallis libero, sed blandit nibh. Nam ultricies tristique nibh.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Milestones -->

	<div class="milestones">
		<!-- Background image artis https://unsplash.com/@thepootphotographer -->
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/milestones.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row milestones_container">
							
				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_1.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="1548">0</div>
						<div class="milestone_text">Online Courses</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_2.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="7286">0</div>
						<div class="milestone_text">Students</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_3.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="257">0</div>
						<div class="milestone_text">Teachers</div>
					</div>
				</div>

				<!-- Milestone -->
				<div class="col-lg-3 milestone_col">
					<div class="milestone text-center">
						<div class="milestone_icon"><img src="images/milestone_4.svg" alt=""></div>
						<div class="milestone_counter" data-end-value="39">0</div>
						<div class="milestone_text">Countries</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Teachers -->

	<div class="teachers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="teachers_title text-center">Meet the Teachers</div>
				</div>
			</div>
			<div class="row teachers_row">
				
				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_1.jpg" alt="https://unsplash.com/@nickkarvounis"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jonathan Smith</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_2.jpg" alt="https://unsplash.com/@rawpixel"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Michelle Williams</a></div>
							<div class="teacher_subtitle">Art & Design</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_3.jpg" alt="https://unsplash.com/@taylor_grote"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jack Gallagan</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_4.jpg" alt="https://unsplash.com/@benjaminrobyn"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Christinne Smith</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="images/teacher_5.jpg" alt="https://unsplash.com/@christinhumephoto"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Michelle Williams</a></div>
							<div class="teacher_subtitle">Art & Design</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Teacher -->
				<div class="col-lg-4 col-md-6">
					<div class="teacher">
						<div class="teacher_image"><img src="frontend/images/teacher_6.jpg" alt="https://unsplash.com/@rawpixel"></div>
						<div class="teacher_body text-center">
							<div class="teacher_title"><a href="#">Jack Gallagan</a></div>
							<div class="teacher_subtitle">Marketing</div>
							<div class="teacher_social">
								<ul>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="row">
				<div class="col text-center">
					<div class="button teachers_button"><a href="#">see all teachers<div class="button_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
				</div>
			</div>
		</div>
	</div>


@endsection