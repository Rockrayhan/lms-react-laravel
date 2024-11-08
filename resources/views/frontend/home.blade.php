@extends('frontend.layouts.app')

@section('content')
    <div class="home">
        <div class="home_slider_container">

            <!-- Home Slider -->
            <div class="owl-carousel owl-theme home_slider">

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background" style="background-image:url(frontend/images/index.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{ asset('frontend/images/home_logo.png') }}"
                                                alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title" style="color: orange">Ektu Khani Tech</div>
                                            <div class="home_subtitle"> Get all your courses at a resonable price </div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="#">see all courses<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background" style="background-image:url(frontend/images/index.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{ asset('frontend/images/home_logo.png') }}"
                                                alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title" style="color: orange">Ektu Khani Tech</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi
                                                tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida
                                                augue ut, fermentum ipsum.</div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="#">see all courses<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item">
                    <!-- Background image artist https://unsplash.com/@benwhitephotography -->
                    <div class="home_slider_background" style="background-image:url(frontend/images/index.jpg)"></div>
                    <div class="home_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_content text-center">
                                        <div class="home_logo"><img src="{{ asset('frontend/images/home_logo.png') }}"
                                                alt=""></div>
                                        <div class="home_text">
                                            <div class="home_title" style="color: orange">Ektu Khani Tech</div>
                                            <div class="home_subtitle">Maecenas rutrum viverra sapien sed fermentum. Morbi
                                                tempor odio eget lacus tempus pulvinar. Praesent vel nisl fermentum, gravida
                                                augue ut, fermentum ipsum.</div>
                                        </div>
                                        <div class="home_buttons">
                                            <div class="button home_button"><a href="#">learn more<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                            <div class="button home_button"><a href="#">see all courses<div
                                                        class="button_arrow"><i class="fa fa-angle-right"
                                                            aria-hidden="true"></i></div></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Featured Course -->

    <div class="featured">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- Home Slider Nav -->
                    <div class="home_slider_nav_container d-flex flex-row align-items-start justify-content-between">
                        <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></div>
                        <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></div>
                    </div>
                    <div class="featured_container">
                        <div class="row">
                            <div class="col-lg-6 featured_col">
                                <div class="featured_content">
                                    <div class="featured_header d-flex flex-row align-items-center justify-content-start">
                                        <div class="featured_tag"><a href="#">Featured</a></div>
                                        <div class="featured_price ml-auto">Price: <span>$35</span></div>
                                    </div>
                                    <div class="featured_title">
                                        <h3><a href="courses.html">Online Literature Course</a></h3>
                                    </div>
                                    <div class="featured_text">Maecenas rutrum viverra sapien sed fermentum. Morbi tempor
                                        odio eget lacus tempus pulvinar. Donec vehicula efficitur nibh, in pretium nulla
                                        interdum non.</div>
                                    <div class="featured_footer d-flex align-items-center justify-content-start">
                                        <div class="featured_author_image"><img src="images/featured_author.jpg"
                                                alt=""></div>
                                        <div class="featured_author_name">By <a href="#">James S. Morrison</a></div>
                                        <div class="featured_sales ml-auto"><span>352</span> Sales</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 featured_col">
                                <!-- Background image artist https://unsplash.com/@jtylernix -->
                                <div class="featured_background"
                                    style="background-image:url(frontend/images/featured.jpg)"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses -->

    <div class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="section_title text-center">
                        <h2>Choose your course</h2>
                    </div>
                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut euismod
                        pellentesque imperdiet. Cras laoreet gravida lectus, at viverra lorem venenatis in. Aenean id varius
                        quam. Nullam bibendum interdum dui, ac tempor lorem convallis ut</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="course_search">
                        <form action="#"
                            class="course_search_form d-flex flex-md-row flex-column align-items-start justify-content-between">
                            <div><input type="text" class="course_input" placeholder="Course" required="required">
                            </div>
                            <div><input type="text" class="course_input" placeholder="Level" required="required">
                            </div>
                            <button class="course_button"><span>search course</span><span class="button_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
            {{-- cart added alert Message --}}
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">
                <div class="col">

                    <!-- Courses Slider -->
                    <div class="courses_slider_container">
                        <div class="owl-carousel owl-theme courses_slider">
                            <!-- Slider Item -->
                            @foreach ($products as $item)
                                <div class="owl-item">
                                    <div class="course">
                                        <div class="course_image"> <img src="{{ asset('images/' . $item['image']) }}"
                                                height="300px" width="200px" alt=""></div>
                                        <div class="course_body">
                                            <div
                                                class="course_header d-flex flex-row align-items-center justify-content-start">
                                                <div class="course_tag"><a href="#"> {{ $item->category->name }}
                                                    </a></div>
                                                <div class="course_price ml-auto">Price:
                                                    <span>{{ floor($item['price']) }}</span>
                                                </div>
                                            </div>
                                            <div class="course_title">
                                                <h3><a href="/product/details/{{ $item['id'] }}">{{ $item['name'] }}</a>
                                                </h3>
                                            </div>
                                            <div class="course_text">Maecenas rutrum viverra sapien sed ferm entum. Morbi
                                                tempor odio eget lacus tempus pulvinar.</div>
                                            <div class="course_footer d-flex align-items-center justify-content-start">
                                                <div class="course_author_image"><img
                                                        src="{{ asset('frontend/images/featured_author.jpg') }}"
                                                        alt="https://unsplash.com/@anthonytran"></div>
                                                <div class="course_author_name">By <a
                                                        href="#">{{ $item->manufacturer->name }}</a></div>
                                                <div class="course_sales ml-auto"><span>352</span> Sales</div>
                                                <p class="btn-holder"><a href="{{ route('add.to.cart', $item->id) }}"
                                                        class="btn btn-primary btn-block text-center" role="button">Add
                                                        to
                                                        cart</a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Courses Slider Nav -->
                        <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></div>
                        <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></div>
                    </div>

                    <div class="milestones">
                        <!-- Background image artis https://unsplash.com/@thepootphotographer -->
                        <div class="parallax_background parallax-window" data-parallax="scroll"
                            data-speed="0.8"style="background-image:url(frontend/images/milestones.jpg)"></div>
                        <div class="container">
                            <div class="row milestones_container">

                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone text-center">
                                        <div class="milestone_icon"><img src="frontend/images/milestone_1.svg"
                                                alt=""></div>
                                        <div class="milestone_counter" data-end-value="1548">0</div>
                                        <div class="milestone_text">Online Courses</div>
                                    </div>
                                </div>

                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone text-center">
                                        <div class="milestone_icon"><img src="frontend/images/milestone_2.svg"
                                                alt=""></div>
                                        <div class="milestone_counter" data-end-value="7286">0</div>
                                        <div class="milestone_text">Students</div>
                                    </div>
                                </div>

                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone text-center">
                                        <div class="milestone_icon"><img src="frontend/images/milestone_3.svg"
                                                alt=""></div>
                                        <div class="milestone_counter" data-end-value="257">0</div>
                                        <div class="milestone_text">Teachers</div>
                                    </div>
                                </div>

                                <!-- Milestone -->
                                <div class="col-lg-3 milestone_col">
                                    <div class="milestone text-center">
                                        <div class="milestone_icon"><img src="frontend/images/milestone_4.svg"
                                                alt=""></div>
                                        <div class="milestone_counter" data-end-value="39">0</div>
                                        <div class="milestone_text">Countries</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Sections -->

                    <div class="grouped_sections">
                        <div class="container">
                            <div class="row">

                                <!-- Why Choose Us -->

                                <div class="col-lg-4 grouped_col">
                                    <div class="grouped_title">Why Choose Us?</div>
                                    <div class="accordions">

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center active">
                                                <div>Mauris vehicula nisi congue?</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <div>
                                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
                                                        euismod pellentesque imperdiet. Cras laoreet gravida lectus, at
                                                        viverra lorem venenatis in. Aenean id varius quam.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>Vehicula nisi congue, blandit?</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <div>
                                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
                                                        euismod pellentesque imperdiet. Cras laoreet gravida lectus, at
                                                        viverra lorem venenatis in. Aenean id varius quam.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>Mauris vehicula nisi congue?</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <div>
                                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
                                                        euismod pellentesque imperdiet. Cras laoreet gravida lectus, at
                                                        viverra lorem venenatis in. Aenean id varius quam.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion_container">
                                            <div class="accordion d-flex flex-row align-items-center">
                                                <div>Nisi congue, blandit purus sed?</div>
                                            </div>
                                            <div class="accordion_panel">
                                                <div>
                                                    <p>Suspendisse tincidunt magna eget massa hendrerit efficitur. Ut
                                                        euismod pellentesque imperdiet. Cras laoreet gravida lectus, at
                                                        viverra lorem venenatis in. Aenean id varius quam.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- Events -->

                                <div class="col-lg-4 grouped_col">
                                    <div class="grouped_title">Upcoming Events</div>
                                    <div class="events">

                                        <!-- Event -->
                                        <div class="event d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div
                                                    class="event_date d-flex flex-column align-items-center justify-content-center">
                                                    <div class="event_day">20</div>
                                                    <div class="event_month">April</div>
                                                </div>
                                            </div>
                                            <div class="event_body">
                                                <div class="event_title"><a href="#">New Marketing Course
                                                        Release</a></div>
                                                <div class="event_subtitle">Location: Online Platform</div>
                                            </div>
                                        </div>

                                        <!-- Event -->
                                        <div class="event d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div
                                                    class="event_date d-flex flex-column align-items-center justify-content-center">
                                                    <div class="event_day">23</div>
                                                    <div class="event_month">April</div>
                                                </div>
                                            </div>
                                            <div class="event_body">
                                                <div class="event_title"><a href="#">Students Art Workshop</a></div>
                                                <div class="event_subtitle">Location: Online Platform</div>
                                            </div>
                                        </div>

                                        <!-- Event -->
                                        <div class="event d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div
                                                    class="event_date d-flex flex-column align-items-center justify-content-center">
                                                    <div class="event_day">25</div>
                                                    <div class="event_month">April</div>
                                                </div>
                                            </div>
                                            <div class="event_body">
                                                <div class="event_title"><a href="#">Launch Party for a new
                                                        Platform</a></div>
                                                <div class="event_subtitle">Location: Online Platform</div>
                                            </div>
                                        </div>

                                        <!-- Event -->
                                        <div class="event d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div
                                                    class="event_date d-flex flex-column align-items-center justify-content-center">
                                                    <div class="event_day">27</div>
                                                    <div class="event_month">April</div>
                                                </div>
                                            </div>
                                            <div class="event_body">
                                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                                <div class="event_subtitle">Location: Online Platform</div>
                                            </div>
                                        </div>

                                        <!-- Event -->
                                        <div class="event d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div
                                                    class="event_date d-flex flex-column align-items-center justify-content-center">
                                                    <div class="event_day">29</div>
                                                    <div class="event_month">April</div>
                                                </div>
                                            </div>
                                            <div class="event_body">
                                                <div class="event_title"><a href="#">New Marketing Course</a></div>
                                                <div class="event_subtitle">Location: Online Platform</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- News -->

                                <div class="col-lg-4 grouped_col">
                                    <div class="grouped_title">Latest News</div>
                                    <div class="news">

                                        <!-- News Post -->
                                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div class="news_post_image"><img
                                                        src="{{ asset('frontend/images/news_1.jpg') }}"
                                                        alt="https://unsplash.com/@beccatapert"></div>
                                            </div>
                                            <div class="news_post_body">
                                                <div class="news_post_date">April 02, 2018</div>
                                                <div class="news_post_title"><a href="news.html">Why Choose online
                                                        education?</a></div>
                                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                            </div>
                                        </div>

                                        <!-- News Post -->
                                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div class="news_post_image"><img
                                                        src="{{ asset('frontend/images/news_2.jpg') }}"
                                                        alt="https://unsplash.com/@nbb_photos"></div>
                                            </div>
                                            <div class="news_post_body">
                                                <div class="news_post_date">April 02, 2018</div>
                                                <div class="news_post_title"><a href="news.html">Books, Kindle or
                                                        tablet?</a></div>
                                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                            </div>
                                        </div>

                                        <!-- News Post -->
                                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div class="news_post_image"><img
                                                        src="{{ asset('frontend/images/news_3.jpg') }}"
                                                        alt="https://unsplash.com/@rawpixel"></div>
                                            </div>
                                            <div class="news_post_body">
                                                <div class="news_post_date">April 02, 2018</div>
                                                <div class="news_post_title"><a href="news.html">Why Choose online
                                                        education?</a></div>
                                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                            </div>
                                        </div>

                                        <!-- News Post -->
                                        <div class="news_post d-flex flex-row align-items-start justify-content-start">
                                            <div>
                                                <div class="news_post_image"><img
                                                        src="{{ asset('frontend/images/news_4.jpg') }}"
                                                        alt="https://unsplash.com/@jtylernix"></div>
                                            </div>
                                            <div class="news_post_body">
                                                <div class="news_post_date">April 02, 2018</div>
                                                <div class="news_post_title"><a href="news.html">Books, Kindle or
                                                        tablet?</a></div>
                                                <div class="news_post_author">By <a href="#">William Smith</a></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Video -->

                    <div class="video">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="video_container_outer">
                                        <div class="video_container">
                                            <!-- Video poster image artist: https://unsplash.com/@annademy -->
                                            <video id="vid1" class="video-js vjs-default-skin" controls
                                                data-setup='{ "poster": "frontend/images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/5_MRXyYjHDk"}], "youtube": { "iv_load_policy": 1 } }'>
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Join -->

                    <div class="join">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-10 offset-lg-1">
                                    <div class="section_title text-center">
                                        <h2>Join Our Platform Today</h2>
                                    </div>
                                    <div class="section_subtitle">Suspendisse tincidunt magna eget massa hendrerit
                                        efficitur. Ut euismod pellentesque imperdiet. Cras laoreet gravida lectus, at
                                        viverra lorem venenatis in. Aenean id varius quam. Nullam bibendum interdum dui, ac
                                        tempor lorem convallis ut</div>
                                </div>
                            </div>
                        </div>
                        <div class="button join_button"><a href="#">register now<div class="button_arrow"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></div></a></div>
                    </div>


                    {{-- review --}}
                    <div class="courses_slider_container">
                        <div class="owl-carousel owl-theme courses_slider">
                            <!-- Slider Item -->
                            @foreach ($reviews as $item)
                                <div class="owl-item">
                                    <div>
                                        <div class="course_body">
                                            <div
                                                class="course_header d-flex flex-row align-items-center justify-content-start">
                                                <div class="course_tag"><a href="#">
                                                    </a></div>
                                                <div class="course_price ml-auto">Rating:
                                                    {{-- <span>
                                                        {{ $item['rating'] }}

                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="16" fill="currentColor" class="bi bi-star-fill"
                                                            viewBox="0 0 16 16">
                                                            <path
                                                                d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                        </svg>
                                                    </span> --}}

                                                    <span>
                                                        @for ($i = 1; $i <= $item['rating']; $i++)
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                                            </svg>
                                                        @endfor
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="course_title">
                                                <h3><a href="">{{ $item['name'] }}</a>
                                                </h3>
                                            </div>
                                            <div class="course_text">{{ $item['description'] }}</div>
                                            <div class="course_footer d-flex align-items-center justify-content-start">
                                                <div class="course_author_image"><img
                                                        src="{{ asset('frontend/images/featured_author.jpg') }}"
                                                        alt="https://unsplash.com/@anthonytran"></div>
                                                <div class="course_author_name">
                                                    <h4>By {{ $item->student->name }}</h4>
                                                    {{-- <h4>By {{ $item->occupation->name }}</h4> --}}
                                                    <h5> {{ $item['occupation'] }} </h5>
                                                </div>
                                                <div class="course_sales ml-auto"><span>352</span> Sales</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Courses Slider Nav -->
                        <div class="courses_slider_nav courses_slider_prev trans_200"><i class="fa fa-angle-left"
                                aria-hidden="true"></i></div>
                        <div class="courses_slider_nav courses_slider_next trans_200"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
